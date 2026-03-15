@php
    $links = App\Models\WebsiteLink::latest()->first();
    $logo = App\Models\Logo::latest()->first();
    $footer = App\Models\Footer::latest()->first();
@endphp

<style>
    :root {
        --footer-brand: #f08121;
        --footer-brand-deep: #c76412;
        --footer-ink: #f6f3ed;
        --footer-muted: rgba(246, 243, 237, 0.72);
        --footer-line: rgba(255, 255, 255, 0.08);
        --footer-bg: #0d1622;
        --footer-bg-deep: #07101b;
        --footer-panel: rgba(255, 255, 255, 0.04);
        --footer-panel-border: rgba(255, 255, 255, 0.1);
    }

    .footer-banner-strip {
        background: linear-gradient(180deg, transparent 0%, rgba(7, 16, 27, 0.72) 100%),
            url('{{ url('frontend/assets/images/building.png') }}') bottom center / contain no-repeat;
        min-height: 120px;
    }

    .site-footer {
        position: relative;
        overflow: hidden;
        background:
            radial-gradient(circle at 7% 12%, rgba(240, 129, 33, 0.2), transparent 30%),
            radial-gradient(circle at 90% 8%, rgba(240, 129, 33, 0.14), transparent 34%),
            linear-gradient(180deg, var(--footer-bg) 0%, var(--footer-bg-deep) 100%);
        color: var(--footer-ink);
    }

    .site-footer::before,
    .site-footer::after {
        content: '';
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        filter: blur(14px);
    }

    .site-footer::before {
        width: 320px;
        height: 320px;
        left: -140px;
        bottom: -140px;
        background: rgba(240, 129, 33, 0.1);
    }

    .site-footer::after {
        width: 280px;
        height: 280px;
        right: -90px;
        top: 18%;
        background: rgba(255, 255, 255, 0.05);
        pointer-events: none;
    }

    .footer-main {
        position: relative;
        z-index: 1;
        padding: 78px 0 46px;
        border-bottom: 1px solid var(--footer-line);
    }

    .site-footer .container {
        width: min(1360px, 94vw);
        max-width: none;
    }

    .footer-brand-panel,
    .footer-links-panel,
    .footer-contact-panel {
        height: 100%;
        border-radius: 22px;
        border: 1px solid var(--footer-panel-border);
        background: linear-gradient(145deg, rgba(255, 255, 255, 0.06), rgba(255, 255, 255, 0.02));
        backdrop-filter: blur(8px);
    }

    .footer-brand-panel {
        padding: 28px 30px;
    }

    .footer-brand-logo {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 14px 18px;
        border-radius: 20px;
        background: linear-gradient(145deg, rgba(255, 255, 255, 0.08), rgba(255, 255, 255, 0.03));
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .footer-brand-logo img {
        width: 200px !important;
        height: 120px !important;
        display: block;
    }

    .footer-kicker {
        display: inline-flex;
        align-items: center;
        padding: 7px 14px;
        border-radius: 999px;
        background: rgba(240, 129, 33, 0.14);
        color: var(--footer-brand);
        font-size: 0.74rem;
        font-weight: 800;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        margin: 18px 0 14px;
    }

    .footer-copy {
        color: var(--footer-muted);
        line-height: 1.85;
        margin-bottom: 0;
        max-width: 58ch;
    }

    .footer-mini-title {
        color: #fff;
        font-size: 0.82rem;
        letter-spacing: 0.11em;
        text-transform: uppercase;
        margin: 24px 0 12px;
        font-weight: 700;
    }

    .footer-socials {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .footer-socials a {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        background: var(--footer-panel);
        border: 1px solid var(--footer-panel-border);
        transition: transform 0.22s ease, background 0.22s ease, border-color 0.22s ease, box-shadow 0.22s ease;
    }

    .footer-socials a:hover {
        transform: translateY(-3px) scale(1.02);
        background: linear-gradient(135deg, var(--footer-brand), var(--footer-brand-deep));
        border-color: transparent;
        box-shadow: 0 12px 24px rgba(240, 129, 33, 0.3);
        color: #fff;
    }

    .footer-links-panel {
        display: grid;
        gap: 22px;
        padding: 24px;
    }

    .footer-link-group {
        border-radius: 16px;
        border: 1px solid rgba(255, 255, 255, 0.09);
        background: rgba(255, 255, 255, 0.02);
        padding: 16px 16px 14px;
    }

    .footer-title {
        color: #fff;
        font-size: 1.03rem;
        font-weight: 700;
        margin-bottom: 14px;
        letter-spacing: -0.01em;
    }

    .footer-title::after {
        content: '';
        display: block;
        width: 36px;
        height: 2px;
        border-radius: 999px;
        background: linear-gradient(90deg, var(--footer-brand), var(--footer-brand-deep));
        margin-top: 8px;
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
        display: grid;
        gap: 10px;
    }

    .footer-links a {
        color: var(--footer-muted);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: color 0.2s ease, transform 0.2s ease;
        line-height: 1.6;
    }

    .footer-links a:hover {
        color: #fff;
        transform: translateX(4px);
    }

    .footer-links i {
        color: var(--footer-brand);
        font-size: 1rem;
    }

    .footer-contact-panel {
        padding: 24px;
    }

    .footer-contact-list {
        display: grid;
        gap: 16px;
    }

    .footer-contact-card {
        display: flex;
        gap: 14px;
        align-items: flex-start;
        padding: 16px;
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.09);
        transition: border-color 0.22s ease, transform 0.22s ease;
    }

    .footer-contact-card:hover {
        border-color: rgba(240, 129, 33, 0.45);
        transform: translateY(-2px);
    }

    .footer-contact-icon {
        width: 42px;
        height: 42px;
        border-radius: 14px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        background: linear-gradient(135deg, var(--footer-brand), var(--footer-brand-deep));
        color: #fff;
        box-shadow: 0 12px 20px rgba(240, 129, 33, 0.22);
    }

    .footer-contact-card h6 {
        color: #fff;
        font-size: 0.95rem;
        font-weight: 700;
        margin: 0 0 6px;
    }

    .footer-contact-card p,
    .footer-contact-card a {
        color: var(--footer-muted);
        margin: 0;
        text-decoration: none;
        line-height: 1.75;
        word-break: break-word;
    }

    .footer-contact-card a {
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .footer-phone-secondary {
        margin-top: 6px !important;
    }

    .footer-contact-card a:hover {
        color: #fff;
    }

    .footer-meta {
        position: relative;
        z-index: 1;
        padding: 20px 0;
    }

    .footer-meta-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        flex-wrap: wrap;
    }

    .footer-meta p {
        margin: 0;
        color: var(--footer-muted);
    }

    .footer-meta-links {
        display: flex;
        align-items: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .footer-meta a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
    }

    .footer-meta a:hover {
        color: var(--footer-brand);
    }

    @media (max-width: 991px) {
        .site-footer .container {
            width: min(100%, 92vw);
        }

        .footer-main {
            padding: 56px 0 30px;
        }

        .footer-brand-panel,
        .footer-links-panel,
        .footer-contact-panel {
            padding: 22px;
        }
    }

    @media (max-width: 767px) {
        .footer-banner-strip {
            min-height: 72px;
            background-size: cover;
        }

        .footer-main {
            padding-top: 42px;
        }

        .footer-brand-logo img {
            width: 166px;
        }

        .footer-copy {
            line-height: 1.75;
        }

        .footer-socials {
            gap: 10px;
        }

        .footer-socials a {
            width: 42px;
            height: 42px;
        }

        .footer-meta {
            padding: 18px 0 22px;
        }

        .footer-meta-row {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
    }
</style>

<section class="footer-banner-strip"></section>
<footer class="site-footer">
    <div class="footer-main">
        <div class="container">
            <div class="row g-4 g-xl-5 align-items-stretch">
                <div class="col-lg-5 col-12">
                    <div class="footer-brand-panel">
                        <a href="{{ url('/') }}" class="footer-brand-logo">
                            <img src="{{ asset($logo->frontend_footer_image) }}" alt="logo">
                        </a>
                        {{-- <div class="footer-kicker">About AJ Group</div> --}}
                        <p class="footer-copy">{{ $footer->footer_details_eng }}</p>

                        <h6 class="footer-mini-title">Follow Us</h6>
                        <ul class="footer-socials">
                            <li><a href="{{ $links->linkedIn }}" target="_blank" rel="noopener" aria-label="LinkedIn"><i
                                        data-feather="linkedin" class="fea icon-sm align-middle"></i></a></li>
                            <li><a href="{{ $links->facebook }}" target="_blank" rel="noopener" aria-label="Facebook"><i
                                        data-feather="facebook" class="fea icon-sm align-middle"></i></a></li>
                            <li><a href="{{ $links->instagram }}" target="_blank" rel="noopener"
                                    aria-label="Instagram"><i data-feather="instagram"
                                        class="fea icon-sm align-middle"></i></a></li>
                            <li><a href="{{ $links->twitter }}" target="_blank" rel="noopener" aria-label="Twitter"><i
                                        data-feather="twitter" class="fea icon-sm align-middle"></i></a></li>
                            <li><a href="mailto:{{ $links->email }}" aria-label="Email"><i data-feather="mail"
                                        class="fea icon-sm align-middle"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-12">
                    <div class="footer-links-panel">
                        <div class="footer-link-group">
                            <h5 class="footer-title">Company</h5>
                            <ul class="footer-links">
                                <li><a href="{{ route('about.details') }}"><i
                                            class="mdi mdi-chevron-right"></i><span>About
                                            Us</span></a></li>
                                <li><a href="{{ route('team.members') }}"><i
                                            class="mdi mdi-chevron-right"></i><span>Team</span></a></li>
                                <li><a href="{{ route('contact.us') }}"><i
                                            class="mdi mdi-chevron-right"></i><span>Contact</span></a></li>
                            </ul>
                        </div>

                        <div class="footer-link-group">
                            <h5 class="footer-title">Explore</h5>
                            <ul class="footer-links">
                                <li><a href="{{ route('all.news.list') }}"><i
                                            class="mdi mdi-chevron-right"></i><span>News</span></a></li>
                                <li><a href="/all/event"><i class="mdi mdi-chevron-right"></i><span>Events</span></a>
                                </li>
                                <li><a href="/front/video.gallery"><i class="mdi mdi-chevron-right"></i><span>Media
                                            Coverage</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-7 col-12">
                    <div class="footer-contact-panel">
                        <h5 class="footer-title">Contact</h5>
                        <div class="footer-contact-list">
                            <div class="footer-contact-card">
                                <div class="footer-contact-icon">
                                    <i data-feather="map-pin" class="fea icon-sm align-middle"></i>
                                </div>
                                <div>
                                    <h6>Office Address</h6>
                                    <p>{{ $links->address_english }}</p>
                                    <a href="https://maps.google.com/?q={{ urlencode($links->address_english) }}"
                                        target="_blank" rel="noopener" style="color: rgba(240, 130, 33, 0.72)">
                                        Google Map</a>
                                </div>
                            </div>

                            <div class="footer-contact-card">
                                <div class="footer-contact-icon">
                                    <i data-feather="mail" class="fea icon-sm align-middle"></i>
                                </div>
                                <div>
                                    <h6>Email</h6>
                                    <a href="mailto:{{ $links->email }}">{{ $links->email }}</a>
                                </div>
                            </div>

                            <div class="footer-contact-card">
                                <div class="footer-contact-icon">
                                    <i data-feather="phone" class="fea icon-sm align-middle"></i>
                                </div>
                                <div>
                                    <h6>Phone</h6>
                                    <a href="tel:{{ $links->phone }}">{{ $links->phone }}</a>
                                    @if (!empty($links->phone_2))
                                        <a class="footer-phone-secondary"
                                            href="tel:{{ $links->phone_2 }}">{{ $links->phone_2 }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-meta">
        <div class="container">
            <div class="footer-meta-row">
                <p>{{ $footer->copy_right_text }}.</p>
                <div class="footer-meta-links">
                    <a href="{{ route('privacy.policy') }}">Privacy Policy</a>
                    <a href="{{ route('contact.us') }}">Contact</a>
                </div>
            </div>
        </div>
    </div>
</footer><!--end footer-->
