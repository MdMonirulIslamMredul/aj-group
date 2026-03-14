@php
    $links = App\Models\WebsiteLink::latest()->first();
    $logo = App\Models\Logo::latest()->first();
@endphp

<section class="bg-building-pic d-table w-100"
    style="background: url('{{ asset('frontend/assets/images/building.png') }}') bottom no-repeat;"></section>
<footer class="bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-py-60 footer-border">
                    <div class="row">
                        <div class="col-lg-5 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                            <a href="#" class="logo-footer">
                                <img src="{{ asset($logo->frontend_footer_image) }}" alt="logo" class="img-fluid"
                                    style="width: 200px; height: 100px;">
                            </a>
                            <p class="mt-4" style="text-align: justify;">
                                {{ App\Models\Footer::latest()->first()->footer_details_eng }} </p>
                            <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="{{ $links->linkedIn }}" target="_blank"
                                        class="rounded-3"><i data-feather="linkedin" class="fea icon-sm align-middle"
                                            title="Linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="{{ $links->facebook }}" target="_blank"
                                        class="rounded-3"><i data-feather="facebook" class="fea icon-sm align-middle"
                                            title="facebook"></i></a></li>
                                <li class="list-inline-item"><a href="{{ $links->instagram }}" target="_blank"
                                        class="rounded-3"><i data-feather="instagram" class="fea icon-sm align-middle"
                                            title="instagram"></i></a></li>
                                <li class="list-inline-item"><a href="{{ $links->twitter }}" target="_blank"
                                        class="rounded-3"><i data-feather="twitter" class="fea icon-sm align-middle"
                                            title="twitter"></i></a></li>
                                <li class="list-inline-item"><a href="mailto:{{ $links->email }}" class="rounded-3"><i
                                            data-feather="mail" class="fea icon-sm align-middle" title="email"></i></a>
                                </li>
                            </ul><!--end icon-->
                        </div><!--end col-->

                        <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">Company</h5>
                            <ul class="list-unstyled footer-list mt-4">
                                <li><a href="{{ route('about.details') }}" class="text-foot"><i
                                            class="mdi mdi-chevron-right align-middle me-1"></i> About us</a></li>
                                <li><a href="{{ route('team.members') }}" class="text-foot"><i
                                            class="mdi mdi-chevron-right align-middle me-1"></i> Team</a></li>
                                <li><a href="{{ route('contact.us') }}" class="text-foot"><i
                                            class="mdi mdi-chevron-right align-middle me-1"></i> Contact</a></li>

                            </ul>
                        </div><!--end col-->

                        <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">Others Links</h5>
                            <ul class="list-unstyled footer-list mt-4">

                                <li><a href="{{ route('all.news.list') }}" class="text-foot"><i
                                            class="mdi mdi-chevron-right align-middle me-1"></i>News</a></li>
                                <li><a href="/all/event" class="text-foot"><i
                                            class="mdi mdi-chevron-right align-middle me-1"></i> Events</a></li>
                                <li><a href="/front/video.gallery" class="text-foot"><i
                                            class="mdi mdi-chevron-right align-middle me-1"></i> Media Coverage</a></li>
                            </ul>
                        </div><!--end col-->

                        <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">Contact Details</h5>

                            <div class="d-flex mt-4">
                                <i data-feather="map-pin" class="fea icon-sm text-primary mt-1 me-3"
                                    style="    height: 25px !important;;
    width: 80px !important;"></i>
                                <div class="">
                                    <p class="mb-2">{{ $links->address_english }}</p>
                                    <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7300.004895436951!2d90.42113!3d23.818512!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7d80260317d%3A0xce3a7a07ee8d03a5!2sAJ%20Group!5e0!3m2!1sen!2sbd!4v1707981436657!5m2!1sen!2sbd"
                                        width="600" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"" data-type="iframe"
                                        class="text-primary lightbox">View on Google map</a>
                                </div>
                            </div>

                            <div class="d-flex mt-4">
                                <i data-feather="mail" class="fea icon-sm text-primary mt-1 me-3"></i>
                                <a href="mailto:{{ $links->email }}" class="text-foot">{{ $links->email }}</a>
                            </div>

                            <div class="d-flex mt-4">
                                <i data-feather="phone" class="fea icon-sm text-primary mt-1 me-3"></i>
                                <a href="tel:{{ $links->phone }}" class="text-foot">{{ $links->phone }}</a>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="footer-py-30 footer-bar">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-between">
                        <p class="mb-0"> {{ App\Models\Footer::latest()->first()->copy_right_text }}.
                        <p><a href="{{ route('privacy.policy') }}" class="text-reset">Privacy Policy</a></p>

                    </div>

                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->
