<!doctype html>
<html lang="en">

<!-- Mirrored from shreethemes.in/towntor/layouts/index-three.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 05:10:05 GMT -->

<head>

    @include('frontend.includes.headlink')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #F08121;
            --secondary-color: #3f3f3b;
            --accent-color: #F8F9FA;
            --dark-color: #1A1A1B;
            --light-gray: #F8F9FA;
            --text-muted: #6c757d;
            --text-dark: #2c3e50;
            --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.12);
            --shadow-lg: 0 12px 32px rgba(0, 0, 0, 0.15);
            --border-color: #e8e8e8;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
        }

        /* ===== HERO SECTION ===== */
        .swiper-slider-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
        }

        .swiper-slider-hero .slide-inner {
            background-size: cover !important;
            background-position: center !important;
        }

        .swiper-slider-hero .bg-overlay {
            background: rgba(26, 26, 27, 0.5);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .title-heading h1 {
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -0.5px;
        }

        .title-heading p {
            font-weight: 400;
            letter-spacing: 0.3px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            background: rgba(240, 129, 33, 0.85) !important;
            transition: all 0.3s ease !important;
            border: none !important;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: rgba(240, 129, 33, 1) !important;
            transform: scale(1.08);
        }

        /* ===== SEARCH FORM ===== */
        #costom {
            backdrop-filter: blur(12px);
            background: transparent !important;
            border: none !important;
            box-shadow: none !important;
        }

        #costom h4 {
            color: var(--dark-color) !important;
        }

        .searchform {
            background: rgba(253, 227, 200, 0.456) !important;
            border: none !important;
            box-shadow: none !important;
        }

        .searchform .form-control,
        .searchform .form-select {
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 12px 14px;
            font-size: 14px;
            transition: all 0.3s ease;
            background-color: #ffffff;
            color: var(--text-dark);
        }

        .searchform .form-label {
            color: var(--secondary-color) !important;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .searchform .form-control:focus,
        .searchform .form-select:focus {
            border-color: var(--primary-color);
            background-color: #fff;
            box-shadow: 0 0 0 3px rgba(240, 129, 33, 0.1);
            outline: none;
        }

        .searchform .form-control::placeholder {
            color: var(--text-muted);
        }

        #search {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%) !important;
            border: none !important;
            color: white !important;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        #search:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 32px rgba(240, 129, 33, 0.3) !important;
        }

        /* ===== SECTION STYLING ===== */
        .section {
            padding: 80px 0;
        }

        .py-100 {
            padding: 100px 0;
        }

        .section-title {
            margin-bottom: 60px;
        }

        .section-title span {
            font-size: 12px;
            letter-spacing: 2px;
            color: var(--secondary-color);
            text-transform: uppercase;
            font-weight: 600;
        }

        .section-title h1 {
            color: var(--dark-color);
            font-size: 2.8rem;
            font-weight: 700;
            margin-top: 15px;
            line-height: 1.3;
        }

        .section-title h3 {
            color: var(--dark-color);
            font-weight: 700;
        }

        .section-title .divider {
            width: 60px;
            height: 4px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            margin: 20px auto;
            border-radius: 2px;
        }

        .section-title p {
            color: var(--text-muted);
            font-size: 15px;
            line-height: 1.8;
            margin-top: 20px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* ===== ABOUT SECTION ===== */
        .ms-lg-5 {
            margin-left: 3rem !important;
        }

        .section-title {
            text-align: center;
        }

        /* ===== BUTTON STYLES ===== */
        .btn-modern {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white !important;
            border: none;
            padding: 14px 32px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-modern:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 32px rgba(240, 129, 33, 0.3);
            color: white;
        }

        .btn-secondary {
            background: white;
            color: var(--primary-color) !important;
            border: 2px solid var(--primary-color);
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-secondary:hover {
            background: #f0f7ff;
            color: var(--secondary-color);
        }

        /* ===== PROJECT CARDS ===== */
        .property {
            border-radius: 12px !important;
            overflow: hidden;
            transition: all 0.3s ease;
            background: white;
            border: 1px solid var(--border-color) !important;
        }

        .property:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 48px rgba(0, 0, 0, 0.12) !important;
        }

        .property-image {
            height: 280px;
            overflow: hidden;
            background: #f0f0f0;
        }

        .property-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .property:hover .property-image img {
            transform: scale(1.05);
        }

        .card-body {
            padding: 24px;
        }

        .card-body h4 {
            color: var(--dark-color);
            font-weight: 700;
            margin-bottom: 12px;
            font-size: 18px;
        }

        .card-body p {
            color: var(--text-muted);
            font-size: 14px;
            margin-bottom: 12px;
        }

        /* ===== COUNTER SECTION ===== */
        .counter-section {
            background: linear-gradient(135deg, var(--dark-color) 0%, var(--primary-color) 100%);
            padding: 60px 40px;
            border-radius: 16px;
            box-shadow: var(--shadow-lg);
        }

        .counter-box h2 {
            color: var(--accent-color);
            font-size: 2.5rem;
            font-weight: 700;
        }

        .counter-box p {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 600;
            margin-top: 12px;
            font-size: 16px;
        }

        /* ===== TAB STYLING ===== */
        .nav-pills {
            gap: 12px;
        }

        .nav-link {
            border: 2px solid var(--primary-color);
            color: var(--primary-color) !important;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            padding: 10px 20px;
        }

        .nav-link:hover {
            background: #f0f7ff;
            transform: translateY(-2px);
        }

        .nav-link.active {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white !important;
            border: none;
        }

        /* ===== ACCORDION STYLING ===== */
        .accordion {
            color: var(--text-dark);
            cursor: pointer;
            padding: 18px 24px;
            width: 100%;
            border: none;
            border-bottom: 1px solid var(--border-color);
            text-align: left;
            outline: none;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
            background: #ffffff;
        }

        .accordion:hover {
            background-color: #f8f9fa;
            padding-left: 28px;
        }

        .accordion.active {
            background: linear-gradient(135deg, rgba(240, 129, 33, 0.1) 0%, rgba(63, 63, 59, 0.08) 100%);
            color: var(--primary-color);
        }

        .accordion:after {
            content: '+';
            color: var(--primary-color);
            font-weight: bold;
            float: right;
            font-size: 20px;
            transition: transform 0.3s ease;
        }

        .accordion.active:after {
            content: "−";
        }

        .panel {
            padding: 24px;
            background-color: #fafbfc;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            border-bottom: 1px solid var(--border-color);
            color: var(--text-muted);
            line-height: 1.8;
        }

        /* ===== TESTIMONIALS ===== */
        .client-testi {
            padding: 0;
        }

        .client-testi .card-body {
            position: relative;
            padding: 32px;
            background: white;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .client-testi .card-body:hover {
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.15);
            transform: translateY(-4px);
        }

        .client-testi .avatar {
            object-fit: cover;
        }

        .client-testi h6 {
            color: var(--dark-color);
            font-weight: 700;
            margin-bottom: 4px;
        }

        .client-testi small {
            color: var(--text-muted);
            font-size: 13px;
        }

        .client-testi p {
            color: var(--text-muted);
            font-style: italic;
            line-height: 1.8;
            margin-top: 16px;
        }

        .star-rating {
            color: #ffc107;
            display: flex;
            gap: 4px;
            margin-top: 12px;
        }

        /* ===== SPONSOR SECTION ===== */
        .sponsor-card {
            background: white;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            padding: 32px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid var(--border-color);
        }

        .sponsor-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
        }

        .sponsor-card img {
            max-width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 12px;
        }

        /* ===== CONTACT BUTTONS ===== */
        .phone-button {
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            bottom: 25px;
            right: 40px;
            z-index: 99;
            border-radius: 50%;
            transition: all 0.3s ease;
            background: rgba(161, 161, 161, 0.476);
            box-shadow: var(--shadow-lg);
            border: 2px solid rgba(255, 255, 255, 0.2);
            width: 56px;
            height: 56px;
        }

        .phone-button:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 40px rgba(240, 129, 33, 0.35);
        }

        .whatsapp_float {
            position: fixed;
            width: 56px;
            height: 56px;
            bottom: 25px;
            left: 40px;
            background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
            color: #fff;
            border-radius: 50%;
            text-align: center;
            font-size: 28px;
            box-shadow: var(--shadow-lg);
            z-index: 100;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        .whatsapp_float:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 40px rgba(37, 211, 102, 0.35);
        }

        .bounce {
            animation: float 2s infinite ease-in-out;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        .bounce_w {
            animation: float 2s infinite ease-in-out;
        }

        .phone-button i,
        .whatsapp-icon {
            color: #fff;
            font-size: 24px;
            margin: 0;
        }

        .theme-switcher {
            display: none !important;
        }

        .back-to-top.open {
            bottom: 100px;
        }

        /* ===== RESPONSIVE DESIGN ===== */
        @media only screen and (max-width: 768px) {
            .mbst {
                position: absolute;
                z-index: 999;
                top: 58%;
                left: 50%;
                width: 95%;
                max-width: 100%;
                transform: translateX(-50%);
            }

            .d-show {
                display: block !important;
            }

            .d-off {
                display: none !important;
            }

            #costom {
                width: 95% !important;
                max-width: 100%;
            }

            .section-title h1 {
                font-size: 2rem;
            }

            .whatsapp_float {
                width: 48px;
                height: 48px;
                bottom: 70px;
                right: 25px;
                font-size: 20px;
            }

            .phone-button {
                width: 48px;
                height: 48px;
                bottom: 70px;
                right: 25px;
                font-size: 20px;
            }

            .phone-button i,
            .whatsapp-icon {
                font-size: 20px;
            }

            .section {
                padding: 60px 0;
            }

            .py-100 {
                padding: 60px 0;
            }
        }

        @media only screen and (max-width: 426px) {
            .mbst {
                position: absolute;
                z-index: 999;
                top: 55%;
                left: 50%;
                width: 95%;
                max-width: 100%;
                transform: translateX(-50%);
            }

            .section-title h1 {
                font-size: 1.7rem;
            }

            .title-heading h1 {
                font-size: 2.5rem !important;
            }

            .whatsapp_float,
            .phone-button {
                width: 48px;
                height: 48px;
                bottom: 25px;
                right: 15px;
                font-size: 20px;
            }
        }
    </style>

</head>


<body>

    <a href="https://api.WhatsApp.com/send?phone=+8801715175856&text=Hello! " style="padding-top: 1px;margin-top: 9px;"
        class="phone-button bounce"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="70"
            viewBox="0 0 48 48">
            <path fill="#fff"
                d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
            </path>
            <path fill="#fff"
                d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
            </path>
            <path fill="#cfd8dc"
                d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
            </path>
            <path fill="#40c351"
                d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
            </path>
            <path fill="#fff" fill-rule="evenodd"
                d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                clip-rule="evenodd"></path>
        </svg></a>
    <!-- Navbar STart -->
    @include('frontend.includes.header')
    <!-- Navbar End -->

    <!-- Hero Start -->

    <section class="swiper-slider-hero position-relative d-block vh-100" id="home">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($slider as $item)
                    <div class="swiper-slide d-flex align-items-center overflow-hidden">
                        <div class="slide-inner slide-bg-image d-flex align-items-center"
                            style="background: center center;" data-background="{{ asset($item->image) }}">
                            <div class="bg-overlay"></div>
                            <div class="container position-relative">
                                <div class="row ">
                                    <div class="col-12">
                                        <div class="title-heading mb-5 text-center">
                                            <h1 class="heading fw-bold title-dark mb-3"
                                                style="color:#fff; font-size: 3.5rem; text-shadow: 0 2px 8px rgba(0,0,0,0.3); letter-spacing: -1px;">
                                                {{ $item->title_english }}</h1>
                                            <p class="fs-3 fw-semibold title-dark mb-0 text-center"
                                                style="color:#fff; text-shadow: 0 1px 4px rgba(0,0,0,0.3); font-weight: 400;">
                                                {{ $item->short_text_eng }}</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->


                            </div>
                            <!--end container-->
                        </div>
                        <!-- end slide-inner -->
                    </div>
                    <!-- end swiper-slide -->
                @endforeach
            </div>
            <!-- end swiper-wrapper -->
            <!-- swipper controls -->
            <div class="swiper-button-next rounded-circle text-center"
                style="background: rgba(240, 129, 33, 0.8); width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;"
                onmouseover="this.style.background='rgba(240, 129, 33, 1)'"
                onmouseout="this.style.background='rgba(240, 129, 33, 0.8)'">
                <i class="fa-solid fa-arrow-right" style="color:#fff; font-size: 18px;"></i>
            </div>
            <div class="swiper-button-prev rounded-circle text-center"
                style="background: rgba(240, 129, 33, 0.8); width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;"
                onmouseover="this.style.background='rgba(240, 129, 33, 1)'"
                onmouseout="this.style.background='rgba(240, 129, 33, 0.8)'">
                <i class="fa-solid fa-arrow-left" style="color:#fff; font-size: 18px;"></i>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    {{-- Heros end  --}}

    <div class="rounded-3 sm-rounded-0 translate-middle mbst" id="costom"
        style="position: absolute; z-index: 900; top: 65%; left: 50%; width: 50%; border-radius: 16px;">
        <div class="searchform card border-0 tab-pane fade show active" id="buy" role="tabpanel"
            aria-labelledby="buy-login">
            <form class="card-body text-start" method="get" action="{{ url('/serch-property/type/location') }}">
                @csrf
                <h4 class="mb-4" style="color: var(--dark-color); font-weight: 700;">Find Your Perfect Property</h4>
                <div class="text-start">
                    <div class="row g-3 text-cneter">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label mb-2">Location</label>
                                <input name="location" type="text" class="form-control" placeholder="Enter location">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label mb-2">Property Type</label>
                                <select class="form-select" name="property_type">
                                    <option disabled selected>Select property type</option>
                                    <option value="Apartment">Apartment </option>
                                    <option value="Land">Land </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="form-group">
                                <label class="form-label mb-2">Beds</label>
                                <input name="bedrooms" type="text" class="form-control" placeholder="Number of beds">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="form-group">
                                <label class="form-label mb-2">Baths</label>
                                <input name="bathrooms" type="text" class="form-control"
                                    placeholder="Number of baths">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="form-group">
                                <label class="form-label mb-2">Area</label>
                                <input name="property_size" type="text" class="form-control"
                                    placeholder="SQFT/Katha">
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="submit" id="search" name="search" class="btn w-100"
                                value="Search Properties">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- main body section Start -->
    <section class="section py-100">
        <!-- short about section Start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-sm-0 pt-sm-0">
                    <div class="section-title">
                        <span>{{ $about->title_english }}</span>
                        <h1>{{ $about->short_title_english }}</h1>
                        <div class="divider"></div>
                        <div class="py-4" style="color: var(--text-muted); line-height: 1.8; font-size: 15px;">
                            {!! $about->details_1_eng !!}
                        </div>
                        <div class="mt-5">
                            <a href="{{ route('about.details') }}" class="btn-modern">Explore About Us
                                <i class="mdi mdi-arrow-right align-middle ms-2"></i></a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- short about section end -->
    </section>
    {{-- <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">How It Works</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row g-4 mt-0">
                    <div class="col-md-4">
                        <div class="position-relative features text-center mx-lg-4 px-md-1">
                            <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                                <i data-feather="hexagon" class="hexagon"></i>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i data-feather="home" class="fea icon-m-md text-primary"></i>
                                </div>
                            </div>

                            <div class="mt-4">
                                <a href="#" class="fw-medium title text-dark fs-5">Evaluate Property</a>
                                <p class="text-muted mt-3 mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4">
                        <div class="position-relative features text-center mx-lg-4 px-md-1">
                            <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                                <i data-feather="hexagon" class="hexagon"></i>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i data-feather="briefcase" class="fea icon-m-md text-primary"></i>
                                </div>
                            </div>

                            <div class="mt-4">
                                <a href="#" class="fw-medium title text-dark fs-5">Meeting with Agent</a>
                                <p class="text-muted mt-3 mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4">
                        <div class="position-relative features text-center mx-lg-4 px-md-1">
                            <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                                <i data-feather="hexagon" class="hexagon"></i>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i data-feather="key" class="fea icon-m-md text-primary"></i>
                                </div>
                            </div>

                            <div class="mt-4">
                                <a href="#" class="fw-medium title text-dark fs-5">Close the Deal</a>
                                <p class="text-muted mt-3 mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container--> --}}

    {{-- completed project start --}}
    <div class="container-fluid py-100" style="background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);">
        <div class="row justify-content-center">
            <div class="col">
                <div class="container section-title">
                    <span>Explore Your Dream Homes</span>
                    <h1>Unveiling Our Premier Projects</h1>
                    <div class="divider"></div>
                    <p class="my-4">Step into the realm of luxury living and unparalleled convenience as we showcase
                        our exceptional apartment
                        and land projects in and around Dhaka. From stunning urban residences to expansive plots of land
                        ripe for development.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4 mt-0" style="width:100%;margin:auto">
            @for ($i = 1; $i < 4; $i++)
                @foreach ($projects as $item)
                    @if ($item->property_status == $i)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card property border-0 overflow-hidden" style="background: white;">
                                <div class="property-image position-relative overflow-hidden">
                                    <img src="{{ asset($item->property_thumbnail ?? null) }}" class="img-fluid"
                                        alt="Image">
                                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0) linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.3) 100%); transition: all 0.4s ease;"
                                        class="img-overlay"></div>
                                </div>

                                <div class="card-body">
                                    <h4 class="text-center fw-bold">{{ $item->property_name }}</h4>

                                    <p class="text-center mb-3"><i class="fa-solid fa-location-dot"
                                            style="color: var(--secondary-color); margin-right: 6px;"></i>{{ $item->location_eng }}
                                    </p>

                                    @if ($item->property_mood == 'sqr feet')
                                        <div class="d-flex justify-content-between align-items-center py-3 border-top border-bottom"
                                            style="border-color: var(--border-color);">
                                            <div class="text-center">
                                                <i class="mdi mdi-arrow-expand-all"
                                                    style="color: var(--primary-color); font-size: 20px;"></i>
                                                <p class="mb-0 small"
                                                    style="color: var(--text-muted); margin-top: 4px;">
                                                    {{ $item->property_size }} sqft</p>
                                            </div>
                                            <div class="text-center">
                                                <i class="mdi mdi-bed"
                                                    style="color: var(--primary-color); font-size: 20px;"></i>
                                                <p class="mb-0 small"
                                                    style="color: var(--text-muted); margin-top: 4px;">
                                                    {{ $item->rooms }} Beds</p>
                                            </div>
                                            <div class="text-center">
                                                <i class="mdi mdi-shower"
                                                    style="color: var(--primary-color); font-size: 20px;"></i>
                                                <p class="mb-0 small"
                                                    style="color: var(--text-muted); margin-top: 4px;">
                                                    {{ $item->bathrooms }} Baths</p>
                                            </div>
                                        </div>

                                        <div class="text-center mt-3">
                                            <p class="mb-1" style="font-size: 14px; color: var(--text-muted);">Offer
                                                Price</p>
                                            <p class="mb-2 fw-bold"
                                                style="color: var(--primary-color); font-size: 18px;">&#2547;
                                                {{ $item->discount }}<span
                                                    style="font-size: 12px; color: var(--text-muted);"> / per
                                                    sqft</span></p>
                                            <p class="mb-0 small" style="color: var(--text-muted);">Regular:
                                                <del>&#2547; {{ $item->price }}</del>
                                            </p>
                                        </div>
                                    @else
                                        <div class="text-center my-3">
                                            <p class="mb-1" style="font-size: 14px; color: var(--text-muted);">Offer
                                                Price</p>
                                            <p class="mb-2 fw-bold"
                                                style="color: var(--primary-color); font-size: 18px;">&#2547;
                                                {{ $item->discount }}<span
                                                    style="font-size: 12px; color: var(--text-muted);"> / per
                                                    Katha</span></p>
                                            <p class="mb-0 small" style="color: var(--text-muted);">Regular:
                                                <del>&#2547; {{ $item->price }}</del>
                                            </p>
                                        </div>
                                    @endif

                                    <div class="d-grid gap-2 mt-4">
                                        <a href="tel:{{ App\Models\WebsiteLink::latest()->first()->phone }}"
                                            class="btn btn-secondary">
                                            <i class="mdi mdi-phone me-1"></i>Call Now
                                        </a>
                                        <a href="{{ route('contact.us') }}" class="btn-modern"
                                            style="text-align: center;">
                                            <i class="mdi mdi-email me-1"></i>Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div><!--end items-->
                        </div><!--end col-->
                    @endif
                @endforeach
            @endfor

            <div class="col-12 mt-4 pt-2">
                <div class="text-center">
                    <a href="{{ route('all.project.list') }}"
                        style="color: var(--primary-color); font-weight: 600; text-decoration: none; transition: all 0.3s ease; display: inline-block;"
                        onmouseover="this.style.letterSpacing='1px'" onmouseout="this.style.letterSpacing='0'">View
                        More Properties
                        <i class="mdi mdi-arrow-right align-middle"></i></a>
                </div>
            </div>
        </div><!--end row-->
    </div><!--end container-->

    {{-- completed project end --}}


    {{-- counter start --}}
    <div class="container-fluid py-100">
        <div class="container">
            <div class="position-relative overflow-hidden counter-section">
                <div class="row">
                    <div class="col-md-4 col-12 text-center py-4">
                        <div class="counter-box">
                            <h2 class="mb-0"><span class="counter-value"
                                    data-target="{{ $counter_icon->value_1 }}">1</span>+</h2>
                            <p>{{ $counter_icon->title_english_1 }}</p>
                        </div><!--end counter box-->
                    </div><!--end col-->

                    <div class="col-md-4 col-12 text-center py-4"
                        style="border-left: 1px solid rgba(255,255,255,0.1); border-right: 1px solid rgba(255,255,255,0.1);">
                        <div class="counter-box">
                            <h2 class="mb-0"><span class="counter-value"
                                    data-target="{{ $counter_icon->value_2 }}">1</span>+</h2>
                            <p>{{ $counter_icon->title_english_2 }}</p>
                        </div><!--end counter box-->
                    </div><!--end col-->

                    <div class="col-md-4 col-12 text-center py-4">
                        <div class="counter-box">
                            <h2 class="mb-0"><span class="counter-value"
                                    data-target="{{ $counter_icon->value_3 }}">1</span>+</h2>
                            <p>{{ $counter_icon->title_english_3 }}</p>
                        </div><!--end counter box-->
                    </div><!--end col-->
                </div><!--end row-->
            </div>
        </div>
    </div><!--end container fluid-->
    {{-- counter end --}}

    {{-- various projects start --}}
    <div class="container-fluid py-100">
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="section-title">
                    <span>Our Portfolio</span>
                    <h1>Ongoing, Upcoming & Completed</h1>
                    <div class="divider"></div>
                    <p>We offer a wide variety of residential and commercial properties in Dhaka. Find your dream home
                        or
                        commercial space from our pull of nicely built properties.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills d-flex justify-content-center flex-wrap mb-5" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#ongoing" data-bs-toggle="tab" aria-expanded="true" class="nav-link px-4 py-2"
                                aria-selected="false" role="tab" tabindex="-1">
                                <i class="mdi mdi-play-circle me-2"></i>Ongoing
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#upcomming" data-bs-toggle="tab" aria-expanded="false"
                                class="nav-link px-4 py-2" aria-selected="true" role="tab">
                                <i class="mdi mdi-rocket-launch me-2"></i>Upcoming
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#completed" data-bs-toggle="tab" aria-expanded="false"
                                class="nav-link active px-4 py-2" aria-selected="false" role="tab"
                                tabindex="-1">
                                <i class="mdi mdi-check-circle me-2"></i>Completed
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="completed" role="tabpanel">
                            <div class="row g-4 mt-4">
                                @foreach ($completed_project as $key => $item)
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="card property border-0 position-relative overflow-hidden">

                                            <div class="property-image position-relative overflow-hidden">
                                                <img src="{{ asset($item->property_thumbnail ?? null) }}"
                                                    class="img-fluid" alt="{{ $item->property_name }}_Image">
                                            </div>
                                            <div class="card-body">
                                                <h4 class="text-center fw-bold text-success">
                                                    {{ $item->property_name }}</h4>
                                                <p class="text-center"><i
                                                        class="fa-solid fa-location-dot text-success"></i>
                                                    {{ $item->location_eng }}</p>
                                                @if ($item->property_mood == 'sqr feet')
                                                    <ul
                                                        class="list-unstyled mb-0 py-3 border-top border-bottom d-flex align-items-center justify-content-between small">
                                                        <li class="d-flex align-items-center">
                                                            <i class="mdi mdi-arrow-expand-all me-2 text-primary"></i>
                                                            <span class="text-muted">{{ $item->property_size }}
                                                                SQFT</span>
                                                        </li>

                                                        <li class="d-flex align-items-center">
                                                            <i class="mdi mdi-bed me-2 text-primary"></i>
                                                            <span class="text-muted">{{ $item->rooms }}
                                                                Beds</span>
                                                        </li>

                                                        <li class="d-flex align-items-center">
                                                            <i class="mdi mdi-shower me-2 text-primary"></i>
                                                            <span class="text-muted">{{ $item->bathrooms }}
                                                                Baths</span>
                                                        </li>
                                                    </ul>
                                                @endif
                                                <ul class="list-unstyled mt-2 mb-0">
                                                    <li class="list-inline-item mb-0 d-flex justify-content-center">
                                                        <div class="text-center">
                                                            <span class="fw-medium text-muted">Offer Price:
                                                                &#2547; {{ $item->discount }} / per
                                                                Sqft</span>
                                                            <p class="fw-medium mb-0 small">
                                                                Regular Price:
                                                                &#2547; <del>{{ $item->price }} / per
                                                                    Sqft</del></p>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="list-inline-item mb-0 mt-3 d-flex justify-content-center gap-2">
                                                        <a href="tel:{{ App\Models\WebsiteLink::latest()->first()->phone }}"
                                                            class="btn btn-sm btn-primary">Call</a>
                                                        <a href="{{ route('contact.us') }}"
                                                            class="btn btn-sm btn-success">Email</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!--end items-->
                                    </div>
                                    <!--end col-->
                                @endforeach
                                <div class="col-12 mt-4 pt-2">
                                    <div class="text-center">
                                        <a href="{{ route('all.project.list') }}" class="mt-3">View
                                            More <i class="mdi mdi-arrow-right align-middle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                        <div class="tab-pane" id="ongoing" role="tabpanel">
                            <div class="row g-4 mt-0">
                                @foreach ($ongoing_project as $key => $item)
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="card property border-0 position-relative overflow-hidden">

                                            <div class="property-image position-relative overflow-hidden">
                                                <img src="{{ asset($item->property_thumbnail ?? null) }}"
                                                    class="img-fluid" alt="{{ $item->property_name }}_Image">
                                            </div>
                                            <div class="card-body">
                                                <h4 class="text-center fw-bold text-success">
                                                    {{ $item->property_name }}</h4>
                                                <p class="text-center"><i
                                                        class="fa-solid fa-location-dot text-success"></i>
                                                    {{ $item->location_eng }}</p>

                                                @if ($item->property_mood == 'sqr feet')
                                                    <ul
                                                        class="list-unstyled py-3 border-top border-bottom d-flex align-items-center justify-content-between small">
                                                        <li class="d-flex align-items-center">
                                                            <i class="mdi mdi-arrow-expand-all me-2 text-primary"></i>
                                                            <span class="text-muted">{{ $item->property_size }}
                                                                SQFT</span>
                                                        </li>

                                                        <li class="d-flex align-items-center">
                                                            <i class="mdi mdi-bed me-2 text-primary"></i>
                                                            <span class="text-muted">{{ $item->rooms }}
                                                                Beds</span>
                                                        </li>

                                                        <li class="d-flex align-items-center">
                                                            <i class="mdi mdi-shower me-2 text-primary"></i>
                                                            <span class="text-muted">{{ $item->bathrooms }}
                                                                Baths</span>
                                                        </li>
                                                    </ul>
                                                @endif
                                                <ul class="list-unstyled mt-2 mb-0">
                                                    <li class="list-inline-item mb-0 d-flex justify-content-center">

                                                        <div class="text-center">
                                                            <span class="fw-medium text-muted">Offer Price:
                                                                &#2547; {{ $item->discount }} / per
                                                                Sqft</span>
                                                            <p class="fw-medium mb-0 small">
                                                                Regular Price:
                                                                &#2547; <del>{{ $item->price }} / per
                                                                    Sqft</del></p>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="list-inline-item mb-0 mt-3 d-flex justify-content-center gap-2">
                                                        <a href="tel:{{ App\Models\WebsiteLink::latest()->first()->phone }}"
                                                            class="btn btn-sm btn-primary">Call</a>
                                                        <a href="{{ route('contact.us') }}"
                                                            class="btn btn-sm btn-success">Email</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!--end items-->
                                    </div>
                                    <!--end col-->
                                @endforeach

                            </div>
                            <!--end row-->
                        </div>
                        <div class="tab-pane" id="upcomming" role="tabpanel">
                            <div class="row g-4 mt-0">
                                @foreach ($upcomming_project as $key => $item)
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="card property border-0 position-relative overflow-hidden">

                                            <div class="property-image position-relative overflow-hidden">
                                                <img src="{{ asset($item->property_thumbnail ?? null) }}"
                                                    class="img-fluid" alt="{{ $item->property_name }}_Image">
                                            </div>
                                            <div class="card-body">
                                                <h4 class="text-center fw-bold text-success">
                                                    {{ $item->property_name }}</h4>
                                                <p class="text-center"><i
                                                        class="fa-solid fa-location-dot text-success"></i>
                                                    {{ $item->location_eng }}</p>
                                                @if ($item->property_mood == 'sqr feet')
                                                    <ul
                                                        class="list-unstyled py-3 border-top border-bottom d-flex align-items-center justify-content-between small">
                                                        <li class="d-flex align-items-center">
                                                            <i class="mdi mdi-arrow-expand-all me-2 text-primary"></i>
                                                            <span class="text-muted">{{ $item->property_size }}
                                                                SQFT</span>
                                                        </li>

                                                        <li class="d-flex align-items-center">
                                                            <i class="mdi mdi-bed me-2 text-primary"></i>
                                                            <span class="text-muted">{{ $item->rooms }}
                                                                Beds</span>
                                                        </li>

                                                        <li class="d-flex align-items-center">
                                                            <i class="mdi mdi-shower me-2 text-primary"></i>
                                                            <span class="text-muted">{{ $item->bathrooms }}
                                                                Baths</span>
                                                        </li>
                                                    </ul>
                                                @endif
                                                <ul class="list-unstyled mt-2 mb-0">
                                                    <li class="list-inline-item mb-0 d-flex justify-content-center">

                                                        <div class="text-center">
                                                            <span class="fw-medium text-muted">Offer Price:
                                                                &#2547; {{ $item->discount }}</span>
                                                            <p class="fw-medium mb-0 small">
                                                                Regular Price:
                                                                &#2547;<del>{{ $item->price }}</del></p>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="list-inline-item mb-0 mt-3 d-flex justify-content-center gap-2">
                                                        <a href="tel:{{ App\Models\WebsiteLink::latest()->first()->phone }}"
                                                            class="btn btn-sm btn-primary">Call</a>
                                                        <a href="{{ route('contact.us') }}"
                                                            class="btn btn-sm btn-success">Email</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!--end items-->
                                    </div>
                                    <!--end col-->
                                @endforeach

                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card-->
        </div>
        <!-- end col -->
    </div>

    </div>
    <!--end container-->
    {{-- various projects end --}}
    <section class="section">

        <div class="container">
            <div class="row g-4">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="row g-4">
                        @foreach ($video_gallery as $item)
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



    <div class="container-fluid py-100" style="background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);">
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="section-title">
                    <h3>Our Partners</h3>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="container">
            <div class="row g-4 mt-0">
                @foreach ($sponsors as $item)
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="sponsor-card">
                            <img src="{{ asset($item->image ?? null) }}" class="img-fluid" alt="partner_logo">
                        </div>
                    </div><!--end col-->
                @endforeach
            </div><!--end row-->
        </div><!--end container-->
    </div><!--end container-fluid-->

    {{-- Faq start --}}
    <div class="container-fluid py-100">
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="section-title text-center">
                    <span class="text-uppercase fw-semibold"
                        style="font-size: 12px; letter-spacing: 2px; color: var(--secondary-color);">Help &
                        Support</span>
                    <h1 style="color: var(--dark-color); font-size: 2.5rem; font-weight: 700; margin-top: 10px;">
                        Frequently Asked Questions</h1>
                    <div
                        style="width: 60px; height: 4px; background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%); margin: 20px auto; border-radius: 2px;">
                    </div>
                    <p class="my-4 mx-auto"
                        style="text-align: center; max-width: 600px; color: var(--text-muted); line-height: 1.8;">Dive
                        into our FAQ section to find answers to common inquiries about AJ Group, our projects, and
                        services.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="container">
            <div class="col-12 col-lg-8 mx-auto">
                @foreach ($faqs as $faq)
                    <button class="accordion">{{ $faq->faq_question }}</button>
                    <div class="panel">
                        <p>{{ $faq->faq_ans }}</p>
                    </div>
                @endforeach
                <!--<button class="accordion">Uncompromised Safety</button>-->
                <!--<div class="panel">-->
                <!--  <p>We design and develop buildings in line with the compliance guidelines stated in the National Building Code. We never deviate from the standards and best practices in the industry for providing safe addresses to our esteemed clients. Therefore, our buildings are capable of withstanding the code-specified natural forces like earthquakes.</p>-->
                <!--</div>-->

                <!--<button class="accordion">Best Construction Materials</button>-->
                <!--<div class="panel">-->
                <!--  <p>As a committed real estate company, we never compromise with the quality of construction materials. We assure that price hike or any other situation in the market don’t make us deviate from materials quality. Since we use the best materials, our buildings become stronger, more sustainable without harming the environment to a significant extent.</p>-->
                <!--</div>-->
                <!--<button class="accordion">On-Time Delivery</button>-->
                <!--<div class="panel">-->
                <!--  <p>On-time delivery is one of our motos while dealing in real estate business. We are always committed to satisfying you with on-time delivery service.</p>-->
                <!--</div>-->
                <!--<button class="accordion">World-Class Consultants</button>-->
                <!--<div class="panel">-->
                <!--  <p>We are endowed with world-class real estate consultants who ensure the best service in the domain.</p>-->
                <!--</div>-->
                <!--<button class="accordion">Prestigious Landmarks</button>-->
                <!--<div class="panel">-->
                <!--  <p>Since the very beginning, Assure Group has been passing many prestigious landmarks. One of the biggest landmarks that we have touched is evolving as a trusted real estate development company in Bangladesh.</p>-->
                <!--</div>-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    {{-- Faq end --}}


    {{-- testimonial start --}}
    <div class="container-fluid mt-100 mt-60 py-5">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title text-primary mb-3">Client's Testmonial</h4>
                    <p class="para-desc mb-0 mx-auto">Discover the unparalleled quality and dedication through the
                        experiences of our satisfied clients at AJ Group</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row" style="width: 90%;margin:auto">
            <div class="col-12 mt-4">
                <div class="tiny-three-item">
                    @foreach ($testimonials as $key => $item)
                        <div class="tiny-slider client-testi">
                            <div class="card border-0 bg-white">
                                <div class="card-body p-4 rounded-3 shadow m-2">
                                    <i
                                        class="mdi mdi-format-quote-open display-1 text-primary opacity-25 position-absolute end-0 top-0"></i>

                                    <div class="d-flex">
                                        <img src="{{ asset($item->image ?? null) }}"
                                            class="avatar avatar-md-sm rounded-circle shadow-md" alt="">
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0">{{ $item->name_english }}</h6>
                                            <small class="text-muted">{{ $item->desig_eng }}</small>
                                        </div>
                                    </div>

                                    <p class="text-muted fst-italic mb-0 mt-4"> {!! $item->review_eng !!} </p>

                                    <ul class="list-unstyled mb-0 mt-3 text-warning h5">
                                        @for ($i = 0; $i < $item->star; $i++)
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        @endfor
                                    </ul>


                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    {{-- testimonial end --}}








    <div class="container mt-100 mt-60 py-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center">
                    <h4 class="title text-primary mb-3">Have a question, inquiry, or simply want to get in touch?
                    </h4>
                    <p class="para-desc mb-0 mx-auto" style="text-align: justify;">We're here to assist you every
                        step of the way. Whether you're looking for more information about our projects, have
                        queries about our services, or want to explore partnership opportunities, our dedicated team
                        is ready to help. Simply fill out the form below, and we'll get back to you promptly. Your
                        satisfaction is our priority, and we look forward to hearing from you soon!</p>
                    <div class="mt-4 pt-2">
                        <a href="{{ route('contact.us') }}" class="btn btn-pills btn-primary"><span
                                class="h5 mb-0 me-1"><i data-feather="mail" class="fea icon-sm"></i></span>
                            Contact us</a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Footer Start -->
    @include('frontend.includes.footer')
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top rounded-pill fs-5"><i
            data-feather="arrow-up" class="fea icon-sm align-middle"></i></a>
    <!-- Back to top -->

    <!-- JAVASCRIPTS -->
    @include('frontend.includes.script')

    {{-- faq js --}}
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
</body>

<!-- Mirrored from shreethemes.in/towntor/layouts/index-three.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 05:10:06 GMT -->

</html>
