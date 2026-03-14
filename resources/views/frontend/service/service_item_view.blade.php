@extends('frontend.layout')
@section('title') {{ $service->title_english }} @endsection
@section('content')


<section class="bg-half-170 d-table w-100" style="background: url({{ asset($banner->banner_image ?? null) }});">
    <div class="bg-overlay bg-gradient-overlay-2"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark mt-4">Services</h5>

                   
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

<section class="section" style="width: 90%;margin:auto" >
    <div class="container">
        <div class="row g-4 mt-0">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">{{ $service->title_english }}</h1>
                    <hr style="
                            border-top:3px solid #17A84C;
                            width:100px;margin:auto;
                            opacity:1;margin-top:-15px;
                            border-radius: 2px;" >
                </div>
            </div>
               
            <div class="row mt-5">
                <div class="col-md-6 ">
                    <img src="{{ asset($service->main_image ?? null) }}" class="img-fluid img-thumbnail rounded "  alt="{{ $service->title_english }}_Image" style="width: 700px;hegiht:500px">
                   
                </div>
                <div class="col-md-6 ">                  

                    <p class="py-3">{!! $service->des_sm_eng !!}</p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-12">
                    {!! $service->long_des1_eng !!}
                 </div>  
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <img src="{{ asset($service->detais_image_1 ?? null) }}" class="img-fluid img-thumbnail rounded "  alt="{{ $service->title_english }}_Image" style="width: 100%;height:600px">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset($service->detais_image_2 ?? null) }}" class="img-fluid img-thumbnail rounded "  alt="{{ $service->title_english }}_image" style="width: 100%;height:600px">
                </div>
                             
            </div>

            <div class="row py-3">
                <div class="col-md-12">
                    {!! $service->long_des2_eng !!}
                 </div>  
            </div>

            <div class="row mt-3 mb-5"> 
                <div class="col-md-12">
                    <img src="{{ asset($service->detais_image_2 ?? null ) }}" class="img-fluid img-thumbnail rounded "  alt="{{ $service->title_english }}_image" style="width: 100%;height:600px">
                </div>              
                <div class="col-md-12 mt-3">
                    {!! $service->long_des3_eng !!}
                 </div>               
            </div>
        
    </div><!--end container-->
</section><!--end section-->
    
@endsection
