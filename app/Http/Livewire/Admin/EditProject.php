<?php

namespace App\Http\Livewire\Admin;

use App\Models\Project;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use illuminate\Support\Str;

class EditProject extends Component
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
    public $newimage;
    public $newimages;
    public $project_id;

    public $new_floorplan;
    public $new_masterplan;

    public function mount($project_id)
    {
        $project = Project::where('id', $project_id)->first();
        $this->name = $project->name;
        $this->slug = $project->slug;
        $this->project_title = $project->project_title;
        $this->type = $project->type;
        $this->price = $project->price;
        $this->size = $project->size;
        $this->location = $project->location;
        $this->image = $project->image;
        $this->images = explode(',', $project->images);
        $this->rera_number = $project->rera_number;
        $this->specification = $project->specification;
        $this->number_of_units = $project->number_of_units;
        $this->possession = $project->possession;
        $this->about_the_project = $project->about_the_project;
        $this->master_plan = $project->master_plan;
        $this->floor_plan = explode(',', $project->floor_plan);
        $this->unit = $project->unit;
        $this->amenities = $project->amenities;
        $this->description = $project->description;
        $this->project_id = $project->id;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required',
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
        if ($this->newimage) {
            $this->validateOnly($fields, [
                'newimage' => 'required|mimes:jpeg,jpg,png',
            ]);
        }

        if ($this->new_masterplan) {
            $this->validateOnly($fields, [
                'new_masterplan' => 'required|mimes:jpeg,jpg,png',
            ]);
        }
    }

    public function updateProject()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
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
        if ($this->newimage) {
            $this->validate([
                'newimage' => 'required|mimes:jpeg,jpg,png',
            ]);
        }

        if ($this->new_masterplan) {
            $this->validate([
                'new_masterplan' => 'required|mimes:jpeg,jpg,png',
            ]);
        }
        $project = Project::find($this->project_id);
        // dd($project);
        $project->name = $this->name;
        $project->project_title = $this->project_title;
        $project->type = $this->type;
        $project->price = $this->price;
        $project->size = $this->size;
        $project->location = $this->location;

        if ($this->newimage) {
            unlink('assets/images/projects'.'/'.$project->image);
            $imagename = "project-".Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('projects', $imagename);
            $project->image = $imagename;
        }

        if ($this->newimages) {
            if ($project->images) {
                $images = explode(',', $project->images);
                foreach ($images as $image) {
                    if ($image) {
                        unlink('assets/images/projects'.'/'.$image);
                    }
                }
            }

            $imagesname = '';
            foreach ($this->newimages as $key => $image) {
                $imgName = Carbon::now()->timestamp . $key . '.' . $image->extension();
                $image->storeAs('projects', $imgName);
                $imagesname = $imagesname . ',' . $imgName;
            }
            // $project->images = $imagesname;
        }
        $project->rera_number = $this->rera_number;
        $project->specification = $this->specification;
        

        if ($this->new_masterplan) {
            unlink('assets/images/projects'.'/' .$project->master_plan);
            $imagename1 = Carbon::now()->timestamp . '.' . $this->image->extension();
            $this->master_plan->storeAs('projects', $imagename1);
            $project->master_plan = $imagename1;
        }

        if ($this->new_floorplan) {
            if ($project->floor_plan) {
                $floor_plan = explode(',', $project->floor_plan);
                foreach ($floor_plan as $image) {
                    if ($image) {
                        unlink('assets/images/projects'.'/'.$project->floor_plan);
                    }
                }
            }
            $imagesname2 = '';
            foreach ($this->new_floorplan as $key => $image) {
                $imgname2 = Carbon::now()->timestamp . $key . '.' . $image->extension();
                $image->storeAs('projects', $imgname2);
                $imagesname2 = $imagesname2 . ',' . $imgname2;
            }
            // $project->floor_plan = $imagesname2;
        }
        $project->number_of_units = $this->number_of_units;
        $project->possession = $this->possession;
        $project->about_the_project = $this->about_the_project;
        $project->unit = $this->unit;
        $project->amenities = $this->amenities;
        $project->description = $this->description;
        $project->save();

        session()->flash('success', 'Project has been Updated successfully');
    }

    public function render()
    {
        return view('livewire.admin.edit-project')->layout('layouts.base');
    }
}
