@extends('frontend.layout')
@section('title') Events @endsection
@section('content')



<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url({{ asset($banner->banner_image ?? null ) }});">
    <div class="bg-overlay bg-gradient-overlay-2"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark"> Events</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        
    </div><!--end container-->
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- Hero End -->

<!-- Start -->
<section class="section mb-5">
    

    <div class="container mb-5">
        <div class="row g-4 mt-0">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">All Our Events</h1>
                    <hr style="
                            border-top:3px solid #17A84C;
                            width:100px;margin:auto;
                            opacity:1;margin-top:-15px;
                            border-radius: 2px;" >
                </div>
            </div> 

            <div class="row mt-5">
                @foreach($events as $item)
                <a href="{{ route('events.detials',$item->id) }}">
                    <div class="col-md-4 text-center">
                        <img src="{{ asset($item->main_image ?? null ) }}" class="img-fluid img-thumbnail rounded"  alt="{{ $item->title_english }}_Image" style="width:100%;height:400px" > 
                        <span class="text-center">{{ $item->title_english }}</span>
                        
                    </div>
                </a>
                @endforeach
            </div>               
           
           
           
           
           
        
    </div><!--end container-->
</section><!--end section-->
<!-- End -->









@endsection