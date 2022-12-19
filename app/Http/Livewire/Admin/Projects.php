<?php

namespace App\Http\Livewire\Admin;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class Projects extends Component
{
    use WithPagination;

    public $searchTerm;

    public function deleteProject($id)
    {
        $project = Project::find($id);

        if($project->image)
        {
            unlink('assets/images/projects'.'/'.$project->image);
        }
        if($project->images){
            $images = explode(",",$project->images);
                foreach($images as $image)
               {
                        if($image)
                          {
                        unlink('assets/images/projects'.'/'.$image);
                         }
               }
        }

        $project->delete();
        session()->flash('success', 'Project deleted successfully');
    }


    public function render()
    {
        $aprojects = Project::paginate(10);
        // dd($aprojects);
        return view('livewire.admin.projects', compact('aprojects'))->layout('layouts.base');
    }
}
