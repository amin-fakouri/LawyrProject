<div>





    <!-- Offcanvas START -->

    <!-- Offcanvas END -->

    <!-- =======================
    Header START -->
    <header style="margin-top: -10px" class="top-0 text-white navbar-sticky header-static">
        <div class="navbar-top d-none d-lg-block small">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center my-2">
                    <!-- Top bar left -->
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link ps-0" href="{{ route('about') }}">درباره ما</a>
                        </li>

                        @if(Auth::check())
                            @if(auth()->user()->role == "admin")
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="{{ URL::signedRoute('admin-dashboard') }}">صفحه
                                        اصلی</a>
                                </li>
                            @elseif(auth()->user()->role == "lawyer")
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="{{ URL::signedRoute('lawyer-dashboard') }}">صفحه
                                        اصلی</a>
                                </li>
                            @elseif(auth()->user()->role == "trainee")
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="{{ URL::signedRoute('trainee-dashboard') }}">صفحه
                                        اصلی</a>
                                </li>
                            @else

                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('my_login') }}">ورود</a>
                            </li>
                        @endif


                    </ul>
                    <!-- Top bar right -->
                    <div class="d-flex align-items-center">
                        <!-- Font size accessibility START -->
                        <div class="btn-group me-3" role="group" aria-label="font size changer">
                            <input type="radio" class="btn-check" name="fntradio" id="font-sm">
                            <label class="btn btn-xs btn-outline-light  mb-0" for="font-sm">A-</label>

                            <input type="radio" class="btn-check" name="fntradio" id="font-default" checked>
                            <label class="btn btn-xs btn-outline-light mb-0" for="font-def">A</label>

                            <input type="radio" class="btn-check" name="fntradio" id="font-lg">
                            <label class="btn btn-xs btn-outline-light mb-0" for="font-lg">A+</label>
                        </div>

                        <!-- Dark mode options START -->
                        <div class="nav-item dropdown mx-2">
                            <!-- Switch button -->
                            <button class="modeswitch" id="bd-theme" type="button" aria-expanded="false"
                                    data-bs-toggle="dropdown" data-bs-display="static">
                                <svg class="theme-icon-active">
                                    <use href="#"></use>
                                </svg>
                            </button>
                            <!-- Dropdown items -->
                            <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
                                <li class="mb-1">
                                    <button type="button" class="dropdown-item d-flex align-items-center"
                                            data-bs-theme-value="light">
                                        <svg width="16" height="16" fill="currentColor"
                                             class="bi bi-brightness-high-fill fa-fw mode-switch me-1"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                                            <use href="#"></use>
                                        </svg>
                                        روشن
                                    </button>
                                </li>
                                <li class="mb-1">
                                    <button type="button" class="dropdown-item d-flex align-items-center"
                                            data-bs-theme-value="dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
                                            <path
                                                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
                                            <use href="#"></use>
                                        </svg>
                                        تیره
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center active"
                                            data-bs-theme-value="auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1"
                                             viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
                                            <use href="#"></use>
                                        </svg>
                                        خودکار
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <!-- Dark mode options END -->
                    </div>
                    <!-- Main navbar END -->
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-youtube-square"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 pe-0 fs-5" href="#"><i class="fab fa-vimeo"></i></a>
                        </li>
                    </ul>

                </div>
                <!-- Divider -->
                <div class="border-bottom border-2 border-primary opacity-1"></div>
            </div>
        </div>

        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="#">
                    <img style="width: 220px; height: 80px;" class="navbar-brand-item light-mode-item"
                         src="{{ asset('bg_lw/logo.png') }}" alt="logo">
                    <img style="width: 220px; height: 80px;" class="navbar-brand-item dark-mode-item"
                         src="{{ asset('bg_lw/logo.png') }}" alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="text-body h6 d-none d-sm-inline-block">منو</span>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Main navbar START -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll mx-auto">

                        <!-- Nav item 1 Demos -->
                        <li class="nav-item">
                            <a class="nav-link text-body"
                               href="{{ route('welcome') }}">خانه</a>
                        </li>


                        <!-- Nav item 3 Post -->
                        <li class="nav-item dropdown">
                            <a class="nav-link text-body" style="font-size: 10px" href="{{ route('mngs') }}">هیات
                                مدیره</a>
                        </li>

                        <!-- Nav item 2 Pages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-body" href="#" id="pagesMenu"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">کمسیون</a>
                            <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                                <li><a class="dropdown-item" style="font-size: 10px" href="{{ route('koms') }}">کمیسون
                                        ماده ۸</a></li>
                                <!-- Dropdown submenu -->
                            </ul>
                        </li>

                        <!-- Nav item 3 Post -->
                        <li class="nav-item dropdown">
                            <a class="nav-link text-body" style="font-size: 10px" href="{{ route('lw') }}">وکلا/کارآموزان</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link text-body" style="font-size: 10px" href="{{ route('post_elec') }}"
                               id="postMenu">نشریه الکترونیکی</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link text-body" style="font-size: 10px" href="{{ route('kh_elec') }}"
                               id="postMenu">خدمات الکترونیکی</a>
                        </li>
                        <!-- Nav item 2 Pages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-body" href="#" id="pagesMenu"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">قوانین و مقررات</a>
                            <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                                @foreach($name_pages as $name_page)
                                    <li><a class="dropdown-item" style="font-size: 10px"
                                           href="{{ route('rule_page', ['page_id' => $name_page->id]) }}">{{ $name_page->name_page }}</a>
                                    </li>
                                @endforeach
                                <!-- Dropdown submenu -->
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link text-black active" style="font-size: 10px" href="{{ route('all-news') }}"
                               id="postMenu">اخبار</a>
                        </li>

                        <li class="nav-item nav-link">
                            <a class="text-white bg-danger p-2 rounded-lg"
                               style="font-size: 10px; border-radius: 8px; width: max-content; height: 40px"
                               href="{{ route('auto_misoin') }}" id="postMenu">اتوماسیون اداری</a>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>  <!-- =======================
    Header END -->

    <main>

        <!-- =======================
        Inner intro START -->
        <section class="pt-2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-dark-overlay-5 overflow-hidden card-bg-scale text-center" style="background-image:url({{ asset('storage/'.$find_post_id->image_url) }}); background-position: center bottom; height: 800px; background-size: cover;">
                            <!-- Card Image overlay -->
                            <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                                <div class="w-100 my-auto">
                                    <!-- Card category -->
                                    <!-- Card title -->
                                    <h2 class="text-white display-5">{{ $find_post_id->title }}</h2>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider text-white-force align-items-center justify-content-center">
                                        <li class="nav-item">
                                            @foreach($users as $user)
                                                @if($find_post_id->user_id == $user->id)
                                                    <div class="nav-link">
                                                        <div class="d-flex align-items-center text-white position-relative">
                                                            <div class="avatar avatar-sm">
                                                                <img class="avatar-img rounded-circle" src="{{ asset('storage/'.$user->image_profile) }}" alt="avatar">
                                                            </div>
                                                            <span class="ms-3"><a href="#" class="stretched-link text-reset btn-link">{{ $user->f_name.' '.$user->l_name }}</a></span>
                                                        </div>
                                                @endif
                                            @endforeach

                                            </div>
                                        </li>
                                        <li class="nav-item">{{ $find_post_id->submit_date_post }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Inner intro END -->

        <!-- =======================
        Main START -->
        <section class="pt-0">
            <div class="container position-relative" data-sticky-container>
                <div class="row">
                    <!-- Main Content START -->
                    <p>{{ $find_post_id->content }}</p>
                    <!-- Main Content END -->

                </div>
            </div>
        </section>
        <!-- =======================
        Main END -->


        <section class="pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Title -->
                        <div class="mb-4 d-md-flex justify-content-between align-items-center">
                            <h2 class="m-0"><i class="bi bi-megaphone"></i> اخبار مشابه<br>

                                @switch($find_post_id->box)
                                    @case(1)
                                        <a class="icon-link link-primary text-primary text-decoration-underline icon-link-hover" href="{{ route('all-news') }}">
                                            همه
                                        </a>
                                        @break
                                    @case(2)
                                        <a class="icon-link link-primary text-primary text-decoration-underline icon-link-hover" href="{{ route('all-news') }}">
                                            همه
                                        </a>
                                        @break
                                    @case(3)
                                        <a class="icon-link link-primary text-primary text-decoration-underline icon-link-hover" href="{{ route('see_more') }}">
                                            همه
                                        </a>
                                        @break
                                    @case(4)
                                        <a class="icon-link link-primary text-primary text-decoration-underline icon-link-hover" href="{{ route('see_more') }}">
                                            همه
                                        </a>
                                        @break
                                    @case(5)
                                        <a class="icon-link link-primary text-primary text-decoration-underline icon-link-hover" href="{{ route('amour') }}">
                                            همه
                                        </a>
                                        @break
                                    @case(6)
                                        <a class="icon-link link-primary text-primary text-decoration-underline icon-link-hover" href="{{ route('amour_trainee') }}">
                                            همه
                                        </a>
                                        @break
                                    @case(7)
                                        <a class="icon-link link-primary text-primary text-decoration-underline icon-link-hover" href="{{ route('did_tnk') }}">
                                            همه
                                        </a>
                                        @break
                                    @case(8)
                                        <a class="icon-link link-primary text-primary text-decoration-underline icon-link-hover" href="{{ route('submit_mng') }}">
                                            همه
                                        </a>
                                        @break
                                    @case(9)
                                        <a class="icon-link link-primary text-primary text-decoration-underline icon-link-hover" href="{{ route('koms') }}">
                                            همه
                                        </a>
                                        @break
                                @endswitch

                            </h2>
                        </div>
                        <div class="tiny-slider arrow-hover arrow-blur arrow-dark arrow-round">
                            <div class="tiny-slider-inner"
                                 data-autoplay="true"
                                 data-hoverpause="true"
                                 data-gutter="24"
                                 data-arrow="true"
                                 data-dots="false"
                                 data-items-xl="4"
                                 data-items-md="3"
                                 data-items-sm="2"
                                 data-items-xs="1">

                                @php $counter_post_6=0; @endphp
                                @foreach($posts as $post)
                                    @if($post->category == $find_post_id->category)
                                        @php $counter_post_6++; @endphp
                                        @if($counter_post_6 <= 12)
                                            <div class="card">
                                                <!-- Card img -->
                                                <div class="position-relative">
                                                    <img class="card-img" style=" aspect-ratio: 1.5; object-fit: contain; border-radius: 20px" src="{{ asset('storage/'.$post->image_url) }}" alt="Card image">
                                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                                        <!-- Card overlay Top -->
                                                        <div class="w-100 mb-auto d-flex justify-content-end">
                                                            <div class="text-end ms-auto">
                                                                <!-- Card format icon -->
                                                            </div>
                                                        </div>
                                                        <!-- Card overlay bottom -->
                                                        <div class="w-100 mt-auto">
                                                            <a href="#" class="badge text-bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{ $post->category }}</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body px-0 pt-3">
                                                    <h5 class="card-title"><a href="{{ route('post', ['post_id' => $post->id]) }}" class="btn-link text-reset"
                                                                              style="width: 100px; text-overflow: ellipsis">{{ $post->title }}</a></h5>
                                                    <!-- Card info -->
                                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                                        <li class="nav-item">
                                                            <div class="nav-link">
                                                                <div class="d-flex align-items-center position-relative">
                                                                    @foreach($users as $user)
                                                                        @if($post->user_id == $user->id)
                                                                            @foreach($users as $user)
                                                                                @if($post->user_id == $user->id)
                                                                                    <div class="avatar avatar-xs">
                                                                                        <img class="avatar-img rounded-circle" src="{{ asset('storage/'.$user->image_profile) }}" alt="avatar">
                                                                                    </div>
                                                                                    <span class="ms-3"><a href="{{ \Illuminate\Support\Facades\URL::signedRoute('test', ['user_id' => $user->id]) }}" class="stretched-link text-reset btn-link">{{ $user->f_name.','.$user->l_name }}</a></span>
                                                                                @endif
                                                                            @endforeach
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nav-item">{{ $post->submit_date_post }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                @endforeach

                                <!-- Card item START -->




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>


</div>
