@extends('frontend.layout')
@section('title') Coverage @endsection
@section('content')


  <!-- Hero Start -->
  <section class="bg-half-170 d-table w-100" style="background: url({{ asset('frontend/assets/images/bg/05.jpg') }}) center;">
    <div class="bg-overlay bg-gradient-overlay-2"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <p class="text-white-50 para-desc mx-auto mb-0">Media Coverage</p>
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Media Coverage</h5>
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
<!-- Start -->
<section class="section">

    <div class="container">        
        <div class="row g-4">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="row g-4">
                    @foreach($video_gallery as $item)
                    <div class="col-lg-6">
                        <div class="card" style="">
                            <iframe width="100%" height="350"
                            src="https://www.youtube.com/embed/{{ $item->video_link }}">
                            </iframe>
                           
                          </div>
                        
                    </div><!--end col-->
                    @endforeach

                </div><!--end row-->

                
            </div>

           
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->






@endsection