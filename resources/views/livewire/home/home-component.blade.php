<div>
    <div id="banner" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active bg-primary"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#banner" data-bs-slide-to="1" aria-label="Slide 2"></button>
            {{-- <button type="button" data-bs-target="#banner" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/banner-1.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/banner-2.png') }}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>



    <div id="Property" class="py-3 py-md-5">
        <div class="container">
            <div class="">
                <h2 class="fw-semibold text-center text-danger py-3">Our Associations</h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="">
                        <img src="{{ asset('assets/images/home/i-1.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <img src="{{ asset('assets/images/home/i-2.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <img src="{{ asset('assets/images/home/i-1.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <img src="{{ asset('assets/images/home/i-2.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="listing-property" class="py-3 py-md-5">
        <div class="container">
            <div class="">
                <h2 class="text-primary fw-semibold">Our Projects</h2>
                <div class="line rounded"></div>
            </div>
            <div class="row g-3 pt-3">
                @foreach($projects as $project)
                    <div class="col-md-3">
                        <div class="bg-white shadow-sm rounded border border-primary">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/projects') }}/{{ $project->image }}" alt="" class="img-fluid rounded">
                            </div>
                            <div class="p-2">
                                <h6 class="">{{ $project->type }}</h6>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="">
                                            <h6 class="">{{ $project->location }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-7">
                                        <div class="border-end border-2 border-primary">
                                            <h5 class="text-primary">₹ {{ $project->price }}*</h5>
                                        </div>
                                       
                                    </div>
                                    
                                    <div class="col-6 col-md-5">
                                        <div class="">
                                            <h5 class="text-primary">{{ $project->size }} Sqft</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <p class="">{{ $project->description }}</p>
                                </div>
                                <div class="">
                                    <a href="{{ route('project.details', ['project_slug' => $project->slug]) }}" class="btn btn-sm btn-primary rounded-pill">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

        {{-- <div id="our-projects" class="py-3 py-md-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="fw-semibold text-center">Our Projects</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="">
                            <img src="{{ asset('assets/images/home/image-1.jpeg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="text-center">
                            <h4 class="text-danger pt-2">Adarsh Palm Acres</h4>
                            <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus aut autem
                                sapiente
                                eos nulla explicabo qui magnam.</p>
                            <a href="#" class="btn btn-sm btn-danger rounded-pill">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="">
                            <img src="{{ asset('assets/images/home/image-2.jpeg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="text-center">
                            <h4 class="text-danger pt-2">Prestige White Meadows</h4>
                            <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus aut autem
                                sapiente
                                eos nulla explicabo qui magnam.</p>
                            <a href="#" class="btn btn-sm btn-danger rounded-pill">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="">
                            <img src="{{ asset('assets/images/home/image-3.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="text-center">
                            <h4 class="text-danger pt-2">Adarsh Wisteria</h4>
                            <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus aut autem
                                sapiente
                                eos nulla explicabo qui magnam.</p>
                            <a href="#" class="btn btn-sm btn-danger rounded-pill">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="">
                            <img src="{{ asset('assets/images/home/image-4.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="text-center">
                            <h4 class="text-danger pt-2">Adarsh Tranqville</h4>
                            <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus aut autem
                                sapiente
                                eos nulla explicabo qui magnam.</p>
                            <a href="#" class="btn btn-sm btn-danger rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div id="flexi" class="py-3 py-md-4 bg-light shadow-sm mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center py-3 ">
                            <h3>Flexi Payment Plans Available | Lower Booking Amount Gauranteed*</h3>
                            <h3 class="fw-semibold">Just Pay 10% To Book Now. No Pre-EMI Till Possession*</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control rounded-pill" placeholder="name" aria-label="First name">
                    </div>
                    <div class="col-md-3">
                        <input type="tel" class="form-control rounded-pill" id="inputNumber" placeholder="Phone number">
                    </div>
                    <div class="col-md-3">
                        <input type="email" class="form-control rounded-pill" placeholder="Email ID" id="inputEmail3">
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-danger rounded-pill fx-5" type="submit">Book Free Site Visitor</button>
                    </div>
                </div>
            </div>
        </div>


        <div id="Listing" class="py-3 py-md-5">
            {{-- <div class="container"> --}}
                <div class="">
                    <h2 class="text-danger fw-semibold text-center">Appartment Projects</h2>
                </div>
                <div class="row g-3 pt-3">
                    <div class="col-md-3">
                        <div class="bg-white shadow-sm rounded border border-primary">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/home/image-1.jpeg') }}" alt=""
                                    class="img-fluid rounded">
                            </div>
                            <div class="p-2">
                                <div class="text-center">
                                    <h5 class="text-danger pt-2">Adarsh Palm Acres</h5>
                                    <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus aut
                                        autem
                                        sapiente eos nulla explicabo qui magnam.</p>
                                    <a href="#" class="btn btn-sm btn-danger rounded-pill px-3">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="bg-white shadow-sm rounded border border-primary">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/home/image-4.jpg') }}" alt=""
                                    class="img-fluid rounded">
                            </div>
                            <div class="p-2">
                                <div class="text-center">
                                    <h5 class="text-danger pt-2">Prestige White Meadows</h5>
                                    <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus aut
                                        autem
                                        sapiente eos nulla explicabo qui magnam.</p>
                                    <a href="#" class="btn btn-sm btn-danger rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="bg-white shadow-sm rounded border border-primary">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/home/image-3.png') }}" alt=""
                                    class="img-fluid rounded">
                            </div>
                            <div class="p-2">
                                <div class="text-center">
                                    <h5 class="text-danger pt-2">Adarsh Wisteria</h5>
                                    <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus aut
                                        autem
                                        sapiente eos nulla explicabo qui magnam.</p>
                                    <a href="#" class="btn btn-sm btn-danger rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="bg-white shadow-sm rounded border border-primary">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/home/image-4.jpg') }}" alt=""
                                    class="img-fluid rounded">
                            </div>
                            <div class="p-2">
                                <div class="text-center">
                                    <h5 class="text-danger pt-2">Adarsh Tranqville</h5>
                                    <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus aut
                                        autem
                                        sapiente eos nulla explicabo qui magnam.</p>
                                    <a href="#" class="btn btn-sm btn-danger rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </div>


        <div id="why" class="position-relative d-none d-md-block">
            <img src="{{asset('assets/images/home/banner-1.png')}}" alt="" class="img-fluid">
            <div class="position-absolute top-0 mt-5 pt-md-5 end-0 transalate-middle-y">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6 align-self-center">
                            <div class="second text-center">
                                <h2 class="text-white fw-bold">What we are?</h2>
                                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum
                                    provident eius, nostrum, aut repudiandae expedita dolore magni quam commodi autem
                                    praesentium repellat. Ipsam, recusandae aut? Recusandae exercitationem voluptatibus
                                    praesentium totam. Ipsam, recusandae aut? Recusandae exercitationem voluptatibus
                                    praesentium totam.
                                </p>
                                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum
                                    provident eius, nostrum, aut repudiandae expedita dolore magni quam commodi autem
                                    praesentium repellat. Ipsam, recusandae aut? Recusandae exercitationem voluptatibus
                                    praesentium totam. Ipsam, recusandae aut? Recusandae exercitationem voluptatibus
                                    praesentium totam.
                                </p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-sm btn-white rounded-pill px-4">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="flexi" class="py-3 py-md-4 bg-light shadow-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center py-3 ">
                            <h3>Flexi Payment Plans Available | Lower Booking Amount Gauranteed*</h3>
                            <h3 class="fw-semibold">Just Pay 10% To Book Now. No Pre-EMI Till Possession*</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control rounded-pill" placeholder="name" aria-label="First name">
                    </div>
                    <div class="col-md-3">
                        <input type="tel" class="form-control rounded-pill" id="inputNumber" placeholder="Phone number">
                    </div>
                    <div class="col-md-3">
                        <input type="email" class="form-control rounded-pill" placeholder="Email ID" id="inputEmail3">
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-danger rounded-pill fx-5" type="submit">Download Brochure</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div id="specialization" class="py-3 py-md-4">
            {{-- <div class="container"> --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="">
                            {{-- <img src="{{ asset('assets/images/home/') }}" alt="" class="img-fluid rounded"> --}}
                        </div>
                    </div>
                    <div class="col-md-8">
                        {{-- <h2 class="text-center text-danger fw-semibold py-3">Our Specilization</h2> --}}
                        <div class="row">
                            <div class="col-md-3">
                                {{-- <img src="{{ asset('assets/images/home/') }}" alt="" class="img-fluid rounded">
                                --}}
                                <div class="">
                                    {{-- <h5>Property Purchase Assistance</h5> --}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                {{-- <img src="{{ asset('assets/images/home/') }}" alt="" class="img-fluid rounded">
                                --}}
                                <div class="">
                                    {{-- <h5>Home Loan</h5> --}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                {{-- <img src="{{ asset('assets/images/home/') }}" alt="" class="img-fluid rounded">
                                --}}
                                <div class="">
                                    {{-- <h5>Interior Services</h5> --}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                {{-- <img src="{{ asset('assets/images/home/') }}" alt="" class="img-fluid rounded">
                                --}}
                                <div class="">
                                    {{-- <h5>Vastu Consultancy</h5> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        {{-- </div> --}} --

        {{-- <div id="blockquote" class="py-3 py-md-4">
            <div class="row">
                <div class="col-md-7">
                    <img src="{{ asset('assets/images/home/image-2.jpeg') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-md-5">
                    <div class="text-center bg-white shadow-sm p-4">
                        <p class="fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis eum dolore
                            molestias aut velit quo vel. Numquam aperiam tempora magni beatae illum, quaerat eos sint
                            quo, voluptatibus molestias dolore at? Numquam aperiam tempora magni beatae illum, quaerat
                            eos sint quo, voluptatibus molestias dolore at?</p>
                        <h6 class="fs-4">A Well-known quote, contained in a blockquote in a blockquote element.</h6>
                        <p class="fs-5">Someone famous in Source Title</p>
                    </div>
                </div>
            </div>
        </div> --}}

        <div id="gallery" class="py-3 py-md-4">
            {{-- <div class="container"> --}}
                <h2 class="text-danger text-center fw-semibold">Proprelator Gallery</h2>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="">
                            <img src="{{ asset('assets/images/home/image-3.png') }}" alt="" class="img-fluid rounded-5">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="">
                            <img src="{{ asset('assets/images/home/image-3.png') }}" alt="" class="img-fluid rounded-5">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="">
                            <img src="{{ asset('assets/images/home/image-3.png') }}" alt="" class="img-fluid rounded-5">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="">
                            <img src="{{ asset('assets/images/home/image-3.png') }}" alt="" class="img-fluid rounded-5">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="">
                            <img src="{{ asset('assets/images/home/image-3.png') }}" alt="" class="img-fluid rounded-5">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="">
                            <img src="{{ asset('assets/images/home/image-3.png') }}" alt="" class="img-fluid rounded-5">
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
    </div>