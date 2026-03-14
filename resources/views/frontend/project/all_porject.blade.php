@extends('frontend.layout')
@section('title') Project @endsection
@section('content')



<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url({{ asset($banner->banner_image ?? null) }});">
    <div class="bg-overlay bg-gradient-overlay-2"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">All Luxurious Property</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        
    </div><!--end container-->
</section><!--end section-->
{{-- <div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div> --}}
<!-- Hero End -->

 {{-- completed project start --}}
 <div class=" mt-100 mt-60 mb-100 mb-60 pb-5" >
    {{-- search start --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4">
                <p class="fs-4 text-success"><i class="fa-solid fa-house-user"></i> Find Ongoing Property</p>
            </div>
            <div class="col-md-8 col-lg-8">
                <form action="{{ route('ongoing.project.search') }}" method="get">                   
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Property Type</label>
                                <select name="property_type" class="form-select" id="">
                                    <option value="" disabled selected>Select Property Type</option>
                                    <option value="Apartment" >Apartment</option>
                                    <option value="Land">Land</option>
                                </select>
                            </div>
                        </div>
                        @php
                            $property = App\Models\Project::where('property_status',1)->get();
                        @endphp
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Locatin</label>
                                <select name="location" class="form-select">
                                    <option value="" disabled selected>Select Property Location</option>
                                    @foreach($property as $location)
                                    <option value="{{ $location->id }}" >{{ $location->location_eng }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                               <div style="margin-top:27px">
                                <input type="submit"  class="btn btn-success" value="Search Property">
                               </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>{{-- end container --}}
        {{-- search end --}}
    <div class="row justify-content-center">
        <div class="col">
            <div class="section-title text-center mb-4 pb-2 mt-3">
               
                <h1>Luxurious Property for Sale in Dhaka</h1>
                <hr style="
                border-top:3px solid #17A84C;
                width:100px;margin:auto;
                opacity:1;margin-top:-15px;
                border-radius: 2px;" >
            </div>
            
            @if(session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>                            
            @endif
        </div><!--end col-->
    </div><!--end row-->

    <div class="row g-4 mt-0" style="width:100%;margin:auto">
        @foreach($all_project as $key => $item)
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                <div class="property-image position-relative overflow-hidden shadow">
                    <img src="{{ asset($item->property_thumbnail ?? null) }}" class="img-fluid" alt="{{ $item->property_name }}_Image" style="width: 100%;height:300px">
                    
                </div>

                <div class="card-body content p-4">
                    <a href="{{ route('completed.project.details',$item->id) }}" class="title  text-dark fw-medium"><h4 class="text-center fs-4 text-success fw-bold">{{ $item->property_name }}</h4></a>
                    <p class="text-center" style="font-size: 18px"><i class="fa-solid fa-location-dot text-success"></i> {{ $item->location_eng }}</p>
                    @if($item->property_mood == 'sqr feet')
                    <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                        <li class="d-flex align-items-center me-3">
                            <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>                           
                            <span class="text-muted">{{ $item->property_size  }} sqf</span>                           
                        </li>

                        <li class="d-flex align-items-center me-3">
                            <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                            <span class="text-muted">{{ $item->bedrooms  }} Beds</span>
                        </li>

                        <li class="d-flex align-items-center">
                            <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                            <span class="text-muted">{{ $item->bathrooms  }} Baths</span>
                        </li>
                    </ul>
                                 </ul>
                                <ul class="list-unstyled mt-2 mb-0">
                                    <li class="list-inline-item mb-0 d-flex justify-content-center">
                                        
                                      <div>
                                            <span class="fw-mediumtext-muted" >Offer Price: &#2547; {{ $item->discount }}  / per Sqft</span>
                                        <p class="fw-medium mb-0" style="font-size: smaller;">Regular Price: &#2547; <del>{{ $item->price }} / per Sqft</del></p>
                                      </div>
                                    </li>
                                    <li class="list-inline-item mb-0 mt-3 d-flex justify-content-center">
                                        <a href="tel:{{ App\Models\WebsiteLink::latest()->first()->phone }}" class="btn btn-sm btn-primary me-2" style="font-size: 14px">Call</a>
                                       <a href="{{ route('contact.us') }}" class="btn btn-sm btn-success" style="font-size: 14px">Email</a>
                                    </li>
                                    
                                </ul>
                  @else

                    <ul class="list-unstyled mt-2 mb-0">
                                    <li class="list-inline-item mb-0 d-flex justify-content-center">
                                      <div>
                                            
                                        <span class="fw-mediumtext-muted" >Offer Price: &#2547; {{ $item->discount }}  / per Katha</span>
                                        <p class="fw-medium mb-0" style="font-size: smaller;">Regular Price: &#2547; <del>{{ $item->price }} / per Katha</del></p>
                                      </div>
                                    </li>
                                    <li class="list-inline-item mb-0 mt-3 d-flex justify-content-center">
                                        <a href="tel:{{ App\Models\WebsiteLink::latest()->first()->phone }}" class="btn btn-sm btn-primary me-2" style="font-size: 14px">Call</a>
                                       <a href="{{ route('contact.us') }}" class="btn btn-sm btn-success" style="font-size: 14px">Email</a>
                                    </li>
                                    
                                </ul>
                    @endif
                </div>
            </div><!--end items-->
        </div><!--end col-->
        @endforeach

       
    </div><!--end row-->
</div><!--end container-->









@endsection