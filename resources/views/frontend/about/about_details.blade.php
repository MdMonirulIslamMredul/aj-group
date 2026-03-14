@extends('frontend.layout')
@section('title') About @endsection
@section('content')



<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url({{ asset($about->banner_image ?? null) }});">
    <div class="bg-overlay bg-gradient-overlay-2"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">About Us</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        
    </div><!--end container-->
</section><!--end section-->

<!-- Hero End -->

<!-- Start -->
<section class="section mb-5">
    

    <div class="container">
        <div class="row g-4 mt-0">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h3 class="">{{ $about->title_english }}</h3>
                    <h1>{{ $about->short_title_english }}</h1>
                    <hr style="
                            border-top:3px solid #17A84C;
                            width:100px;margin:auto;
                            opacity:1;margin-top:-15px;
                            border-radius: 2px;" >
                </div>

            </div>

            <div class="row">
                <div class="col-md-12 col-lg-12">
                    {!! $about->details_1_eng !!}
                </div>
                
            </div>
           
            <div class="row mt-5">
                <div class="col-md-6">
                    <img src="{{ asset($about->main_image ?? null) }}" class="img-fluid img-thumbnail rounded "  alt="Profile_image" style="width:100%;height:80%">
                </div>
                <div class="col-md-6">
                    {!! $about->details_2_eng !!}
                </div>
               
            </div>
            <div class="row mt-5">
                
                <hr style="
                            border-top:3px solid #17A84C;
                            width:100px;margin:auto;
                            opacity:1;margin-top:-15px;
                            border-radius: 2px;" >

                <div class="col-md-12 mt-3">
                    {!! $about->details_3_eng !!}
                </div>
               
            </div>
            

           
           
           
               
           

          
        
        
    </div><!--end container-->
</section><!--end section-->
<!-- End -->









@endsection