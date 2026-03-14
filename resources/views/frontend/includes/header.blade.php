@php
    $links = App\Models\WebsiteLink::latest()->first();
@endphp
<style>
    @media only screen and (max-width: 600px) {
        .mobile_loggo {
            width: 184px !important;
            height: 50px !important;

        }
</style>
<header id="topnav" class="defaultscroll sticky"
    style="background: linear-gradient(135deg, #F08121 0%, #565553 100%); box-shadow: 0 4px 16px rgba(240, 129, 33, 0.15); border-radius: 18px;">
    <div class="container-fluid py-3">
        <a class="logo" href="{{ url('/') }}">
            <span class="logo-light-mode" style="padding:7px 0px 7px">
                <img src="{{ asset(App\Models\Logo::first()->frontend_logo_image) }}" class="l-dark mobile_loggo"
                    id="mainlogo" alt="" style="margin-left: 10px; width:100px; height: 100px;">
                <img src="{{ asset(App\Models\Logo::first()->frontend_logo_image) }}" class="l-light" id="mainlogo"
                    alt="" style="margin-left: 10px; width:100px; height: 100px;">
            </span>
            <img src="{{ asset(App\Models\Logo::first()->frontend_logo_image) }}" class="logo-dark-mode" id="mainlogo"
                alt="" style="margin-left: 10px; height: 100px;">
        </a>

        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation" id="isToggle"
                    onclick="toggleMenu()">
                    <div class="lines">
                        <span style="background-color: white;"></span>
                        <span style="background-color: white;"></span>
                        <span style="background-color: white;"></span>
                    </div>
                </a>
            </div>
        </div>

        <ul class="buy-button list-inline mb-0">

            <li class="list-inline-item ps-1" style="position: fixed; margin-left: -150px;">
                <div class="phone-number text-center" style="margin-right:20px; color: white;">
                    <b style="font-size: 12px; text-transform: uppercase; letter-spacing: 1px;">Hotline</b> <br>
                    <a href="tel:{{ $links->phone }}" class=""
                        style="color: white; font-weight: 600; text-decoration: none;">{{ $links->phone }}</a><br>
                    <a href="tel:{{ $links->phone_2 }}" class=""
                        style="color: white; font-weight: 600; text-decoration: none;">{{ $links->phone_2 }}</a>
                </div>
            </li>

            <li class="list-inline-item ps-1 mb-0">
                <div class="p-0 mb-0 mt-0" style="margin-right:-12px; gap: 4px; display: flex; flex-direction: column;">
                    <a href="{{ $links->facebook }}" class="fs-6 p-2 social-icon"
                        style="height: 36px; width: 36px; display: flex; align-items: center; justify-content: center; color: white; background: rgba(255, 255, 255, 0.2); border-radius: 8px; transition: all 0.3s ease; text-decoration: none;"
                        onmouseover="this.style.background='rgba(255, 255, 255, 0.3)'; this.style.transform='translateY(-2px)'"
                        onmouseout="this.style.background='rgba(255, 255, 255, 0.2)'; this.style.transform='translateY(0)'">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="{{ $links->youtube }}" class="fs-6 p-2 social-icon"
                        style="height: 36px; width: 36px; display: flex; align-items: center; justify-content: center; color: white; background: rgba(255, 255, 255, 0.2); border-radius: 8px; transition: all 0.3s ease; text-decoration: none;"
                        onmouseover="this.style.background='rgba(255, 255, 255, 0.3)'; this.style.transform='translateY(-2px)'"
                        onmouseout="this.style.background='rgba(255, 255, 255, 0.2)'; this.style.transform='translateY(0)'">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="{{ $links->linkedIn }}" class="fs-6 p-2 social-icon"
                        style="height: 36px; width: 36px; display: flex; align-items: center; justify-content: center; color: white; background: rgba(255, 255, 255, 0.2); border-radius: 8px; transition: all 0.3s ease; text-decoration: none;"
                        onmouseover="this.style.background='rgba(255, 255, 255, 0.3)'; this.style.transform='translateY(-2px)'"
                        onmouseout="this.style.background='rgba(255, 255, 255, 0.2)'; this.style.transform='translateY(0)'">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
            </li>

        </ul>


        <div id="navigation" class="mt-3">
            <ul class="navigation-menu nav-light" style="display: flex;  align-items: center;">
                <li class="has-submenu parent-menu-item">
                    <a href="{{ url('/') }}" style="color: white;"><i class="bi bi-house-door"></i></a>
                </li>
                <li class="has-submenu parent-menu-item">
                    <a href="{{ route('about.details') }}" style="color: white;">About</a>
                </li>




                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)" style="color: white;">Project</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ route('frontend.ongoing.project') }}" class="sub-menu-item">Ongoing </a></li>
                        <li><a href="{{ route('frontend.upcomming.project') }}" class="sub-menu-item">Upcomming </a>
                        </li>
                        <li><a href="{{ route('frontend.completed.project') }}" class="sub-menu-item">Completed </a>
                        </li>
                    </ul>
                </li>



                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)" style="color: white;">Media</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu parent-menu-item"><a href="{{ route('all.news.list') }}">News</a>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="{{ route('frontend.events') }}">Events </a>
                        <li class="has-submenu parent-menu-item"><a href="{{ route('front.video.gallery') }}">
                                Coverage </a>
                        <li class="has-submenu parent-menu-item"><a href="{{ route('front.image.gallery') }}"> Image
                                Gallery </a>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)" style="color: white;">Services</a><span class="menu-arrow"></span>
                    <ul class="submenu">

                        @php
                            $services = App\Models\Service::orderBy('id', 'DESC')->get();
                        @endphp
                        @foreach ($services as $item)
                            <li><a href="{{ route('service.item.details', $item->id) }}"
                                    class="sub-menu-item">{{ $item->title_english }}</a></li>
                        @endforeach

                    </ul>
                </li>

                <li><a href="{{ route('contact.us') }}" class="sub-menu-item" style="color: white;">Contact</a></li>


                @auth
                    @if (Auth::user()->role === 'admin')
                        <li><a href="{{ route('dashboard') }}" class="sub-menu-item" style="color: white;">Dashboard</a>
                        </li>
                    @elseif (Auth::user()->role === 'user')
                        <li><a href="{{ route('agent.dashboard') }}" class="sub-menu-item"
                                style="color: white;">Dashboard</a></li>
                    @endif
                @endauth

            </ul>
        </div>
        {{-- <div>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-youtube"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
        </div> --}}
    </div>

</header>
