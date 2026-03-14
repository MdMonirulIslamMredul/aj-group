@extends('frontend.layout')
@section('title') Gallery @endsection
@section('content')

<div class="page-content bg-white">
    <!-- inner page banner -->

  <!-- Hero Start -->
  <section class="bg-half-170 d-table w-100" style="background: url({{ asset('frontend/assets/images/bg/05.jpg') }}) center;">
    <div class="bg-overlay bg-gradient-overlay-2"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <p class="text-white-50 para-desc mx-auto mb-0">Image Gallery</p>
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Image Gallery </h5>
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
<br>
<br>
<br>
    <!-- Breadcrumb row END -->
    <div class="section-full content-inner-1">
        <!-- Left & right section start -->
        <div class="container">            

            <div class="row">                
            

                    @foreach($img_gallery as $item)
                    <div class="col-md-4">
                        <img src="{{ asset($item->image ?? null ) }}"   style="width: 377px;height:230px">
                    </div>
                    
                    @endforeach

               

            </div>
             <!-- Gallery END -->
                
                <!-- Pagination END -->
        </div>
       
    </div>
</div>

@endsection