<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Project
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.projects')}}"
                                    class="btn btn-sm btn-primary text-white float-end">All
                                    Projects</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='addproject' enctype="multipart/form-data">
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Name :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='name'
                                        wire:keyup='generateSlug'>
                                    @error('name') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Slug :</label>
                                <div class="col-md-4 align-self-center">
                                    <input type="text" class="form-control" wire:model='slug'>
                                    @error('slug') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Project Title :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='project_title' class="form-control">
                                        <option value="">Select</option>
                                        <option value="Prestige">Prestige</option>
                                        <option value="Total-Environment">Total Environment</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    @error('project_title') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <label for="" class="col-md-4 control-lable text-right">Select Project</label>
                                <div class="col-md-4">
                                    <select id="" class="form-control" wire:model='project_title'>
                                        <option value="">Select Project</option>
                                        @foreach ($project_title as $project)
                                            <option value="{{ $project->id }}">{{ $project_title->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('project_title') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>  
                            </div> --}}
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Project Type :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='type' class="form-control">
                                        <option value="">Select</option>
                                        <option value="House">House</option>
                                        <option value="Flat">Flat</option>
                                        <option value="Appartment">Appartment</option>
                                        <option value="Villa">Villa</option>
                                    </select>
                                    @error('type') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Price :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='price'>
                                    @error('price') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Size :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='size'>
                                    @error('size') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Location :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='location'>
                                    @error('location') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Rera Number :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='rera_number'>
                                    @error('rera_number') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Project Image :</label>
                                <div class="col-md-4">
                                    <input type="file" class="form-control align-self-center" wire:model='image'>
                                    @if($image)
                                    <img src="{{$image->temporaryUrl()}}" width="60" alt="" class="mt-2">
                                    @endif
                                    @error('image') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Project Images:</label>
                                <div class="col-md-4 align-self-center">
                                    <input type="file" class="form-control" wire:model='images' multiple>
                                    @if($images)
                                    @foreach($images as $image)
                                    <img src="{{$image->temporaryUrl()}}" width="60" alt="" class="mt-2">
                                    @endforeach
                                    @endif
                                    @error('images') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Specificartion :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center"
                                        wire:model='specification'>
                                    @error('specification') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Number of Units :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center"
                                        wire:model='number_of_units'>
                                    @error('number_of_units') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Possession :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='possession'>
                                    @error('possession') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">About the Project :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center"
                                        wire:model='about_the_project'>
                                    @error('about_the_project') <small class="text-primary">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Master Plan :</label>
                                <div class="col-md-4">
                                    <input type="file" class="form-control align-self-center" wire:model='master_plan'>
                                    @if($master_plan)
                                    <img src="{{$master_plan->temporaryUrl()}}" width="60" alt="" class="mt-2">
                                    @endif
                                    @error('master_plan') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Floor Plans :</label>
                                <div class="col-md-4 align-self-center">
                                    <input type="file" class="form-control" wire:model='floor_plan' multiple>
                                    @if($floor_plan)
                                    @foreach($floor_plan as $image)
                                    <img src="{{$image->temporaryUrl()}}" width="60" alt="" class="mt-2">
                                    @endforeach
                                    @endif
                                    @error('floor_plan') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Units :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='unit'>
                                    @error('unit') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Amenities :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='amenities'>
                                    @error('amenities') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Description :</label>
                                <div class="col-md-4">
                                    <textarea id="description" type="text" class="form-control align-self-center"
                                        wire:model='description' rows="5"></textarea>
                                    @error('description') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center"></label>
                                <div class="col-md-4">
                                    @if (Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center"></label>
                                <div class="col-md-4">
                                    <button class="btn-sm text-uppercase btn-dark rounded" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>