@extends('frontend.layout')
@section('title')
    Contact
@endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    @php
        $links = App\Models\WebsiteLink::latest()->first();
    @endphp

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100"
        style="background: url({{ asset($banner->banner_image ?? null) }}) center/cover; position: relative;">
        <div class="bg-overlay" style="background: rgba(0, 0, 0, 0.4);"></div>
        <div class="container position-relative">
            <div class="row align-items-center min-vh-50">
                <div class="col-12">
                    <div class="title-heading text-center">
                        <h1 class="display-5 fw-bold text-white mb-0">Get in Touch</h1>
                        <p class="text-white-50 mt-3 fs-5">We'd love to hear from you. Send us a message and we'll respond as
                            soon as possible.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="section py-5">
        <div class="container">
            <!-- Contact Form -->
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-sm p-4 p-md-5 rounded-4">
                        <h3 class="card-title fs-4 fw-bold mb-1 text-dark">Send Us a Message</h3>
                        <p class="text-muted mb-4">Fill out the form below and we'll get back to you shortly.</p>

                        <form id="myForm" method="POST" action="{{ route('contactdata.store') }}">
                            @csrf
                            <div class="row g-3">
                                <!-- Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label fw-semibold mb-2">Full Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-lg" id="name"
                                            name="name_english" placeholder="Your full name" required>
                                        <span class="invalid-feedback d-block mt-1"></span>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label fw-semibold mb-2">Email Address <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control form-control-lg" id="email"
                                            name="email" placeholder="your@email.com" required>
                                        <span class="invalid-feedback d-block mt-1"></span>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label fw-semibold mb-2">Phone Number <span
                                                class="text-danger">*</span></label>
                                        <input type="tel" class="form-control form-control-lg" id="phone"
                                            name="phone" placeholder="+880 1234 567890" required>
                                        <span class="invalid-feedback d-block mt-1"></span>
                                    </div>
                                </div>

                                <!-- Subject -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject" class="form-label fw-semibold mb-2">Subject <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-lg" id="subject"
                                            name="subject_english" placeholder="Inquiry about properties" required>
                                        <span class="invalid-feedback d-block mt-1"></span>
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message" class="form-label fw-semibold mb-2">Message <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" id="message" name="message_english" rows="5" placeholder="Your message here..."
                                            required></textarea>
                                        <span class="invalid-feedback d-block mt-1"></span>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success btn-lg fw-semibold w-100">
                                        <i class="bi bi-send me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="row g-4 mb-5">
                <!-- Phone -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-4 text-center h-100 transition-all"
                        style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="mb-3">
                            <div class="d-inline-flex align-items-center justify-content-center rounded-circle"
                                style="width: 60px; height: 60px; background: rgba(23, 168, 76, 0.1);">
                                <i class="bi bi-telephone-fill fs-4" style="color: #F08121;"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-3">Phone</h5>
                        <p class="text-muted mb-3">Call us during business hours</p>
                        <a href="tel:{{ $links->phone }}" class="fw-semibold text-decoration-none"
                            style="color: #F08121;">{{ $links->phone }}</a>
                        <div class="mt-2">
                            <a href="tel:{{ $links->phone_2 }}" class="fw-semibold text-decoration-none"
                                style="color: #F08121;">{{ $links->phone_2 }}</a>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-4 text-center h-100 transition-all"
                        style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="mb-3">
                            <div class="d-inline-flex align-items-center justify-content-center rounded-circle"
                                style="width: 60px; height: 60px; background: rgba(23, 168, 76, 0.1);">
                                <i class="bi bi-envelope-fill fs-4" style="color: #F08121;"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-3">Email</h5>
                        <p class="text-muted mb-3">Send us an email anytime</p>
                        <a href="mailto:{{ $links->email }}" class="fw-semibold text-decoration-none"
                            style="color: #F08121;">{{ $links->email }}</a>
                    </div>
                </div>

                <!-- Location -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-4 text-center h-100 transition-all"
                        style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <div class="mb-3">
                            <div class="d-inline-flex align-items-center justify-content-center rounded-circle"
                                style="width: 60px; height: 60px; background: rgba(23, 168, 76, 0.1);">
                                <i class="bi bi-geo-alt-fill fs-4" style="color: #F08121;"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-3">Location</h5>
                        <p class="text-muted mb-3">Visit our office in Dhaka</p>
                        <a href="https://maps.app.goo.gl/AY3CarnWAkNERxKi7" target="_blank"
                            class="fw-semibold text-decoration-none"
                            style="color: #F08121;">{{ $links->address_english }}</a>
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 overflow-hidden rounded-4 shadow-sm">
                        <div class="card-body p-0" style="height: 450px;">
                            {!! $links->map_link ??
                                '<iframe src="https://maps.google.com/" style="width:100%; height:100%; border:0;" allowfullscreen="" loading="lazy"></iframe>' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section End -->

    <!-- Form Validation Script -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    name_english: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    subject_english: {
                        required: true
                    },
                    phone: {
                        required: true
                    },
                    message_english: {
                        required: true
                    }
                },
                messages: {
                    name_english: {
                        required: 'Please enter your name'
                    },
                    email: {
                        required: 'Please enter your email',
                        email: 'Please enter a valid email address'
                    },
                    subject_english: {
                        required: 'Please enter a subject'
                    },
                    phone: {
                        required: 'Please enter your phone number'
                    },
                    message_english: {
                        required: 'Please enter your message'
                    }
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('text-danger small fw-semibold');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>

    <style>
        .min-vh-50 {
            min-height: 50vh;
        }

        .transition-all {
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 1.25rem 3.75rem rgba(23, 168, 76, 0.15) !important;
        }

        .form-control-lg {
            padding: 0.75rem 1rem;
            font-size: 1rem;
            border-color: #e0e0e0;
        }

        .form-control-lg:focus {
            border-color: #F08121;
            box-shadow: 0 0 0 0.2rem rgba(23, 168, 76, 0.15);
        }

        .is-invalid {
            border-color: #dc3545 !important;
        }

        .is-invalid:focus {
            border-color: #dc3545 !important;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.15) !important;
        }
    </style>
@endsection
