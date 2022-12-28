{{-- <div> --}}
    {{-- <div id="ApartmentDetail" class="my-5 my-md-4">
        <div class="container px-5 py-5 bg-info rounded">
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <h2 class="text-primary fw-semibold">Apartment: </h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/projects') }}/{{ $project->image }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <div class="row g-3">
                            @php $images = explode(",",$project->images); @endphp
                            @foreach($images as $key=>$image)
                            @if ($image)
                            <div class="col-md-6">
                                <div class="">
                                    <img src="{{ asset('assets/images/projects') }}/{{ $image }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-primary fw-semibold p-2 border-5 border-start border-secondary mb-3 mt-5">
                        Description</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-unstyled fs-5">
                        <li>Property Size <span class="fw-bold text-primary"> - {{ $project->size }} sqft</span></li>
                        <li class="py-3">Price <span class="fw-bold text-primary"> - {{ $project->price }} crore</span>
                        </li>

                        <li class="">More Info <span class="text-primary fw-bold">- {{ $project->about_the_project
                                }}</span> </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <ul class="list-unstyled fs-5">
                            <li class="">Descriptions <span class="text-primary fw-bold">- {{ $project->description
                                    }}</span> </li>
                            <li class="fw-bold text-primary">{{$project->description}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div id="ContactInformation" class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center text-primary">
                        <h2>Contact Information</h2>
                        <div class="line rounded"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <h3> Enquire About This Property</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center bg-light">
                <div class="col-md-10">
                    <div class="">
                        <form class="row g-3 mt-4">
                            <div class="col-md-6 py-2">
                                <label for="inputName" class="form-label text-primary fw-semibold">Name</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Enter Your Name">
                            </div>
                            <div class="col-md-6 py-2">
                                <label for="inputName" class="form-label text-primary fw-semibold">Phone Number</label>
                                <input type="tel" class="form-control" id="inputName"
                                    placeholder="Enter your Phone number">
                            </div>

                            <div class="col-md-6 py-2">
                                <label for="inputName" class="form-label text-primary fw-semibold">Email</label>
                                <input type="email" class="form-control" id="inputName"
                                    placeholder="Enter Your Email-Id">
                            </div>
                            <div class="col-md-6 py-2">
                                <label for="inputName" class="form-label text-primary fw-semibold">I'm a</label>
                                <input type="text" class="form-control" id="inputName" placeholder="I'm a buyer">
                            </div>
                            <div class="col-md-12 py-2">
                                <label for="floatingTextarea2" class="text-primary fw-semibold">Message</label>
                                <textarea class="form-control" placeholder="Message" id="floatingTextarea2"
                                    style="height: 100px"></textarea>
                            </div>
                            <div class="col-12 text-center py-2">
                                <button class="btn btn-primary rounded-pill px-5 fs-5" type="submit">Request
                                    Information</button>
                                <p class="pt-3">By Submitting this form I agree to Terms of Use</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div id="PropertyListing" class="py-3 py-md-5">
        <div class="container">
            <div class="">
                <h2 class="text-primary fw-semibold">Other Properties Near by</h2>
            </div>
            <div class="text-end">
                <a href="#" class="text-decoration-none text-primary">See All Properties <i
                        class="fa fa-arrow-right"></i></a>
            </div>
            <div class="row g-3 pt-3">
                <div class="col-md-3">
                    <div class="bg-white shadow-sm rounded-4 border border-primary">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/image-1.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="p-2">
                            <h6 class="">Prestige White Meadows</h6>
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="border-end border-2 border-primary">
                                        <h5 class="text-primary">₹ 4.5 Cr</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="">
                                        <h5 class="text-primary">2134 Sqft</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="">lorem ipsum dolor sit amet, consectetur adip lorem ipsum dolor sit</p>
                            </div>
                            <div class="">
                                <a href="{{ route('contact') }}"><button
                                        class="btn btn-sm btn-primary rounded-pill">Contact Owner</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white shadow-sm rounded-4 border border-primary">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/image-1.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="p-2">
                            <h6 class="">Prestige White Meadows</h6>
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="border-end border-2 border-primary">
                                        <h5 class="text-primary">₹ 4.5 Cr</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="">
                                        <h5 class="text-primary">2134 Sqft</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="">lorem ipsum dolor sit amet, consectetur adip lorem ipsum dolor sit</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white shadow-sm rounded-4 border border-primary">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/image-1.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="p-2">
                            <h6 class="">Prestige White Meadows</h6>
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="border-end border-2 border-primary">
                                        <h5 class="text-primary">₹ 4.5 Cr</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="">
                                        <h5 class="text-primary">2134 Sqft</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="">lorem ipsum dolor sit amet, consectetur adip lorem ipsum dolor sit</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white shadow-sm rounded-4 border border-primary">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/image-1.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="p-2">
                            <h6 class="">Prestige White Meadows</h6>
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="border-end border-2 border-primary">
                                        <h5 class="text-primary">₹ 4.5 Cr</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="">
                                        <h5 class="text-primary">2134 Sqft</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="">lorem ipsum dolor sit amet, consectetur adip lorem ipsum dolor sit</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}


    {{-- </div> --}}

<div class="">
    <div id="AppartmentDetail" class="py-3 py-md-4">
        <div class="container">
            <div class="row">
                <div class="col-md-5 order-last">
                    <div class="pb-3">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/" class="text-decoration-none text-dark">
                                        Home
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $project->name }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="">
                        <h2 class="fs-3">
                            {{ $project->name }}
                        </h2>
                        <p class="fs-4">
                            <i class="fa fa-location-dot fs-5"></i> {{ $project->location }}
                        </p>
                    </div>
                    <div class="pb-2">
                        <h2 class="fs-4">₹ {{ $project->price }} Cr</h2>
                        <a href="" class="btn btn-primary w-100 my-4"><i class="fa-solid fa-phone-volume"></i> Instant
                            Callback</a>
                    </div>
                    <div class="py-2">
                        <h2 class="fs-4">Project Highlights</h2>
                        <div class="table-responsive">
                            <Table class="table align-middle table-borderless">
                                <tbody>
                                    <tr>
                                        <th class="">RERA No : </th>
                                        <td>{{ $project->rera_number }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="">Development Size : </th>
                                        <td>{{ $project->size }}</td>
                                    </tr>
                                    <tr>
                                        <th class="">No. of Units : </th>
                                        <td>{{ $project->unit }}</td>
                                    </tr>
                                    <tr>
                                        <th class="">Possession : </th>
                                        <td>{{ $project->possession }}</td>
                                    </tr>
                                </tbody>
                            </Table>
                        </div>
                    </div>
                </div>

                <div class="col-md-7" class="align-self-center order-first">
                    <div class="">
                        <a href="#">
                            <img src="{{ asset('assets/images/projects') }}/{{ $project->image }}" class="img-fluid"
                                alt="" />
                        </a>
                    </div>
                    <div class="">
                        <div class="row g-3">
                            @php $images = explode(",",$project->images); @endphp
                            @foreach($images as $key=>$image)
                            @if ($image)
                            <div class="col-md-3 py-3">
                                <div class="">
                                    <img src="{{ asset('assets/images/projects') }}/{{ $image }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="py-3 py-md-3 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">About The Project</h2>
                    <p class="text-center"> {{ $project->about_the_project }}</p>
                </div>
            </div>
        </div>
    </div>

    <div id="master-plan" class="py-3 py-md-4">
        <div class="container">
            <h2 class="text-center">Master Plan</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <img src="{{ asset('assets/images/masterplans') }}/{{ $project->master_plan }}" class="img-fluid"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="floor-plan" class="py-3 py-md-4">
        <div class="container">
            <h2 class="text-center">Floor Plan</h2>
            <div class="row">
                @php $images = explode(",",$project->floor_plan); @endphp
                @foreach($images as $key=>$image)
                @if ($image)
                <div class="col-md-3 py-3">
                    <div class="">
                        <img src="{{ asset('assets/images/floorplans') }}/{{ $image }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>

    <div id="amenities" class="py-3 py-md-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Amenities</h2>
                    <p class="text-center">{{ $project->amenities }}</p>
                </div>
            </div>
        </div>
    </div>

    <div id="PropertyListing" class="py-3 py-md-5">
        <div class="container">
            <div class="">
                <h2 class="text-primary fw-semibold">Other Properties Near by</h2>
            </div>
            <div class="text-end">
                <a href="#" class="text-decoration-none text-primary">See All Properties <i
                        class="fa fa-arrow-right"></i></a>
            </div>
            <div class="row g-3 pt-3">
                <div class="col-md-3">
                    <div class="bg-white shadow-sm rounded-4 border border-primary">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/image-1.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="p-2">
                            <h6 class="">Prestige White Meadows</h6>
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="border-end border-2 border-primary">
                                        <h5 class="text-primary">₹ 4.5 Cr</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="">
                                        <h5 class="text-primary">2134 Sqft</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="">lorem ipsum dolor sit amet, consectetur adip lorem ipsum dolor sit</p>
                            </div>
                            <div class="">
                                <a href="{{ route('contact') }}"><button
                                        class="btn btn-sm btn-primary rounded-pill">Contact Owner</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white shadow-sm rounded-4 border border-primary">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/image-1.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="p-2">
                            <h6 class="">Prestige White Meadows</h6>
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="border-end border-2 border-primary">
                                        <h5 class="text-primary">₹ 4.5 Cr</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="">
                                        <h5 class="text-primary">2134 Sqft</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="">lorem ipsum dolor sit amet, consectetur adip lorem ipsum dolor sit</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white shadow-sm rounded-4 border border-primary">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/image-1.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="p-2">
                            <h6 class="">Prestige White Meadows</h6>
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="border-end border-2 border-primary">
                                        <h5 class="text-primary">₹ 4.5 Cr</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="">
                                        <h5 class="text-primary">2134 Sqft</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="">lorem ipsum dolor sit amet, consectetur adip lorem ipsum dolor sit</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white shadow-sm rounded-4 border border-primary">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/image-1.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="p-2">
                            <h6 class="">Prestige White Meadows</h6>
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="border-end border-2 border-primary">
                                        <h5 class="text-primary">₹ 4.5 Cr</h5>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="">
                                        <h5 class="text-primary">2134 Sqft</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class="">lorem ipsum dolor sit amet, consectetur adip lorem ipsum dolor sit</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>