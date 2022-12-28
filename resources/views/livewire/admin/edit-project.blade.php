<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Project
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.projects')}}" class="btn btn-sm btn-primary text-white float-end">All
                                    Projects</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='updateProject' enctype="multipart/form-data">
                             <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Name :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='name' wire:keyup='generateSlug'>
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
                                <label for="" class="col-md-4 control-lable text-right">Project Title</label>
                                <div class="col-md-4">
                                    <select id="" class="form-control" wire:model='project_title'
                                        wire:change='changeSubcategory'>
                                        <option value="">Select Project Title</option>
                                        @foreach ($project_title as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('project_titile') <small class="text-danger">{{ $message }}</small> @enderror
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
                            
                            {{-- <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Category :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='category' class="form-control">
                                        <option value="">Select</option>
                                        <option value="House">House</option>
                                        <option value="Flat">Flat</option>
                                        <option value="Appartment">Appartment</option>
                                        <option value="Villa">Villa</option>
                                    </select>
                                    @error('category') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div> --}}
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
                                    <input type="file" class="input-file" wire:model='newimage'/>
                                    @if($newimage)
                                        <img src="{{ $newimage->temporaryUrl() }}" alt="" width="120" class="img-fluid">
                                    @else
                                        <img src="{{ asset('assets/images/projects') }}/{{ $image }}" alt="" class="img-fluid" width="120">
                                    @endif
                                    @error('newimage') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Project Gallery:</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model='newimages' multiple/>
                                    @if($newimages)
                                       @foreach($newimages as $newimage)
                                            @if($newimage)
                                                    <img src="{{ $newimage->temporaryUrl() }}" alt="" width="120" class="img-fluid">
                                            @endif
                                       @endforeach
                                    @else
                                        @foreach($images as $image)
                                            @if($image)
                                                     <img src="{{ asset('assets/images/projects') }}/{{ $image }}" alt="" class="img-fluid" width="120">
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Specificartion :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='specification'>
                                    @error('specification') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            

                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Number of Units :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='number_of_units'>
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
                                    <input type="text" class="form-control align-self-center" wire:model='about_the_project'>
                                    @error('about_the_project') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Master Plan :</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model='new_masterplan'/>
                                    @if($new_masterplan)
                                        <img src="{{ $new_masterplan->temporaryUrl() }}" alt="" width="120" class="img-fluid">
                                    @else
                                        <img src="{{ asset('assets/images/masterplans') }}/{{ $master_plan }}" alt="" class="img-fluid" width="120">
                                    @endif
                                    @error('new_masterplan') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Floor Plans:</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model='new_floorplan' multiple/>
                                    @if($new_floorplan)
                                       @foreach($new_floorplan as $newimage)
                                            @if($newimage)
                                                    <img src="{{ $newimage->temporaryUrl() }}" alt="" width="120" class="img-fluid">
                                            @endif
                                       @endforeach
                                    @else
                                        @foreach($floor_plan as $image)
                                            @if($image)
                                                     <img src="{{ asset('assets/images/floorplans') }}/{{ $image }}" alt="" class="img-fluid" width="120">
                                            @endif
                                        @endforeach
                                    @endif
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
                                    <textarea id="description" type="text" class="form-control align-self-center" wire:model='description' rows="5"></textarea>
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
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center"></label>
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