<?php

namespace App\Http\Livewire\Admin;

use App\Models\Project;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AddProject extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $project_title;
    public $type;
    public $location;
    public $price;
    public $size;
    public $rera_number;
    public $specification;
    public $number_of_units;
    public $possession;
    public $image;
    public $images;
    public $about_the_project;
    public $master_plan;
    public $floor_plan;
    public $unit;
    public $amenities;
    public $description;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:projects',
            'project_title' => 'required',
            'type' => 'required',
            'price' => 'required',
            'size' => 'required',
            'location' => 'required',
            'rera_number' => 'required',
            'specification' => 'required',
            'number_of_units' => 'required',
            'possession' => 'required',
            'image' => 'required',
            'images' => 'required',
            'about_the_project' => 'required',
            'master_plan' => 'required',
            'floor_plan' => 'required',
            'unit' => 'required',
            'amenities' => 'required',
            'description' => 'required',
        ]);
    }

    public function addproject(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:projects',
            'project_title' => 'required',
            'type' => 'required',
            'price' => 'required',
            'size' => 'required',
            'location' => 'required',
            'rera_number' => 'required',
            'specification' => 'required',
            'number_of_units' => 'required',
            'possession' => 'required',
            'image' => 'required',
            'images' => 'required',
            'about_the_project' => 'required',
            'master_plan' => 'required',
            'floor_plan' => 'required',
            'unit' => 'required',
            'amenities' => 'required',
            'description' => 'required',
        ]);
            $project = new Project();
            $project->name = $this->name;
            $project->slug = $this->slug;
            $project->project_title = $this->project_title;
            $project->type = $this->type;
            $project->price = $this->price;
            $project->size = $this->size;
            $project->location = $this->location;
            $project->rera_number = $this->rera_number;
            $project->specification = $this->specification;
            $project->number_of_units = $this->number_of_units;
            $project->possession = $this->possession;
            $imagename = Carbon::now()->timestamp.'.'.$this->image->extension();
            $this->image->storeAs('projects', $imagename);
            $project->image = $imagename;

            if ($this->images)
            {
                $imagename = '';
                foreach($this->images as $key =>$image){
                    $imgName = Carbon::now()->timestamp. $key.'.' . $image->extension();
                    $image->storeAs('projects',$imgName);
                    $imagename = $imagename.','.$imgName;
                }
                $project->images = $imagename;
            }
            $project->about_the_project = $this->about_the_project;
            $imagename1 = Carbon::now()->timestamp.'.'.$this->master_plan->extension();
            $this->master_plan->storeAs('masterplans', $imagename1);
            $project->master_plan = $imagename1;

            if ($this->floor_plan)
            {
                $imagename2 = '';
                foreach($this->floor_plan as $key =>$image){
                    $imgName2 = Carbon::now()->timestamp. $key.'.' . $image->extension();
                    $image->storeAs('floorplans',$imgName2);
                    $imagename2 = $imagename2.','.$imgName2;
                }
                $project->floor_plan = $imagename2;
            }
            $project->unit = $this->unit;
            $project->amenities = $this->amenities;
            $project->description = $this->description;
            $project->save();

            session()->flash('success', 'Project has been added successfully');
    }
     
    public function render()
    {
        return view('livewire.admin.add-project')->layout('layouts.base');
    }
}
