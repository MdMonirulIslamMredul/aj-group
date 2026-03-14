@extends('frontend.layout')
@section('title') News @endsection
@section('content')

   <!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url({{ asset($banner->banner_image ?? null ) }});">
    <div class="bg-overlay bg-gradient-overlay-2"></div>
    
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- Hero End -->

<!-- Start Blogs -->
<section class="section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 col-md-7">
                <div class="card border-0 shadow rounded-3 overflow-hidden">
                    <img src="{{ asset($blog_details->main_image ?? null ) }}" class="img-fluid" alt="Image">

                    <div class="card-body">
                       <h3>{{$blog_details->title_english}}</h3>
<br>
                        <p class="text-muted">{!! $blog_details->short_des_eng !!}</p>
                        <p class="text-muted">{!! $blog_details->long_des1_eng !!}</p>
                        <p class="text-muted">{!! $blog_details->long_des2_eng !!}</p>
                        <p class="text-muted">{!! $blog_details->long_des3_eng !!}</p>
                    
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
                    </div>
                    
                </div>

              
            </div><!--end col-->

            <!-- START SIDEBAR -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card bg-white p-4 rounded-3 shadow sticky-bar">
                    @php
                        $blogs = App\Models\Blog::where('status',1)->latest()->limit(3)->get();
                    @endphp
                    <!-- RECENT POST -->
                    <div class="mt-4 pt-2">
                        <h6 class="pt-2 pb-2 bg-light rounded-3 text-center">Recent Post</h6>
                        <div class="mt-4">
                            @foreach($blogs as $item)
                            <div class="blog blog-primary d-flex align-items-center mt-3">
                                <img src="{{ asset($item->main_image ?? null) }}" class="avatar avatar-small rounded-3" style="width: auto;" alt="{{ $item->title_english }}_Image">
                                <div class="flex-1 ms-3">
                                    <a href="#" class="d-block title text-dark fw-medium">{{ $item->title_english }}</a>
                                    <span class="text-muted small">{{ Carbon\Carbon::parse($item->created_at)->format('dS M Y') }}</span>
                                </div>
                            </div>
                            @endforeach
                          
                        </div>
                    </div>
                    <!-- RECENT POST -->

                    
                </div>
            </div><!--end col-->
            <!-- END SIDEBAR -->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Blogs -->





@endsection