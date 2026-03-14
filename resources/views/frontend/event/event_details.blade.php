@extends('frontend.layout')
@section('title') {{ $event_details->title_english }} @endsection
@section('content')



<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url({{ asset($banner->banner_image ?? null ) }});">
    <div class="bg-overlay bg-gradient-overlay-2"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">{{ $event_details->title_english }}</h5>
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
                    <h1 class="text-center">{{ $event_details->title_english }}</h1>
                    <hr style="
                            border-top:3px solid #17A84C;
                            width:100px;margin:auto;
                            opacity:1;margin-top:-15px;
                            border-radius: 2px;" >
                </div>
            </div>               
            <div class="row mt-5">
                <div class="col-md-12 ">
                    <img src="{{ asset($event_details->main_image ?? null ) }}" class="img-fluid img-thumbnail rounded d-block m-auto"  alt="Event_Image" >                    
                </div>
                <div class="col-md-12 mt-3">
                    {!! $event_details->des_sm_eng !!}
                 </div>  
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-md-12">
                   {!! $event_details->long_des1_eng !!}
                </div> 
                            
            </div> 
            
                                    <div>
<h5>Share Now:</h5>
@php
$link =url()->current();
@endphp
                          
                            <div id="socialSharing">
    <a href="http://www.facebook.com/sharer.php?u={{$link}}">
        <span id="facebook" class="fa-stack fa-lg">
           <i class="fa-brands fa-facebook-f"></i>
        </span>
    </a>
   
   
   
    <a href="https://www.linkedin.com/shareArticle?mini=true&url=[{{$link}}]&title=[TITLE]&source=[SITE_NAME]">
        <span id="linkedin" class="fa-stack fa-lg">
            <i class="fa-brands fa-linkedin"></i>
            
        </span>
    </a>
    <a href="whatsapp://send?&text=[TITLE] [{{$link}}]" data-action="share/whatsapp/share">
        <span id="whatsapp" class="fa-stack fa-lg">
         <i class="fa-brands fa-whatsapp"></i>
        </span>
    </a>
</div>
                        </div>
                    
           
           
           
           
        
    </div><!--end container-->
</section><!--end section-->
<!-- End -->









@endsection