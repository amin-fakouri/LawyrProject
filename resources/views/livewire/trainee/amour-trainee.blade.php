<div>
    <header style="margin-top: -10px" class="navbar-dark top-0 text-white navbar-sticky header-static">
        <div class="navbar-top d-none d-lg-block small">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center my-2">
                    <!-- Top bar left -->
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link ps-0" href="{{ route('about') }}">درباره ما</a>
                        </li>

                        @if(\Illuminate\Support\Facades\Auth::check())
                            @if(auth()->user()->role == "admin")
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ \Illuminate\Support\Facades\URL::signedRoute('admin-dashboard') }}">صفحه اصلی</a>
                                </li>
                            @elseif(auth()->user()->role == "lawyer")
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ \Illuminate\Support\Facades\URL::signedRoute('lawyer-dashboard') }}">صفحه اصلی</a>
                                </li>
                            @elseif(auth()->user()->role == "trainee")
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ \Illuminate\Support\Facades\URL::signedRoute('trainee-dashboard') }}">صفحه اصلی</a>
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
                            <label class="btn btn-xs btn-outline-light  mb-0" for="font-sm" style="color: white">A-</label>

                            <input type="radio" class="btn-check" name="fntradio" id="font-default" checked>
                            <label class="btn btn-xs btn-outline-light mb-0" for="font-def" style="color: white">A</label>

                            <input type="radio" class="btn-check" name="fntradio" id="font-lg">
                            <label class="btn btn-xs btn-outline-light mb-0" for="font-lg" style="color: white">A+</label>
                        </div>

                        <!-- Dark mode options START -->
                        <div class="nav-item dropdown mx-2">
                            <!-- Switch button -->
                            <button class="modeswitch" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
                                <svg class="theme-icon-active"><use href="#"></use></svg>
                            </button>
                            <!-- Dropdown items -->
                            <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
                                <li class="mb-1">
                                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
                                        <svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                                            <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                                            <use href="#"></use>
                                        </svg>روشن
                                    </button>
                                </li>
                                <li class="mb-1">
                                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
                                            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
                                            <use href="#"></use>
                                        </svg>تیره
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
                                            <use href="#"></use>
                                        </svg>خودکار
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
                    <img style="width: 220px; height: 80px;" class="navbar-brand-item light-mode-item" src="{{ asset('bg_lw/logo.png') }}" alt="logo">
                    <img style="width: 220px; height: 80px;" class="navbar-brand-item dark-mode-item" src="{{ asset('bg_lw/logo.png') }}" alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="text-body h6 d-none d-sm-inline-block">منو</span>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Main navbar START -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll mx-auto">

                        <!-- Nav item 1 Demos -->
                        <li class="nav-item">
                            <a style="font-size: 10px" class="nav-link text-dark" href="{{ route('welcome') }}">خانه</a>
                        </li>



                        <!-- Nav item 3 Post -->
                        <li class="nav-item dropdown">
                            <a class="nav-link text-black" style="font-size: 10px" href="{{ route('mngs') }}">هیات مدیره</a>
                        </li>

                        <!-- Nav item 2 Pages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-black" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">کمسیون</a>
                            <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                                <li> <a class="dropdown-item" style="font-size: 10px" href="{{ route('koms') }}">کمیسون ماده ۸</a></li>
                                <!-- Dropdown submenu -->
                            </ul>
                        </li>

                        <!-- Nav item 3 Post -->
                        <li class="nav-item dropdown">
                            <a class="nav-link text-black" style="font-size: 10px" href="{{ route('lw') }}">وکلا/کارآموزان</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link text-black" style="font-size: 10px" href="{{ route('post_elec') }}" id="postMenu">نشریه الکترونیکی</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link text-black" style="font-size: 10px" href="{{ route('kh_elec') }}" id="postMenu">خدمات الکترونیکی</a>
                        </li>
                        <!-- Nav item 2 Pages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-black" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">قوانین و مقررات</a>
                            <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                                @foreach($name_pages as $name_page)
                                    <li> <a class="dropdown-item" style="font-size: 10px" href="{{ route('rule_page', ['page_id' => $name_page->id]) }}">{{ $name_page->name_page }}</a></li>
                                @endforeach
                                <!-- Dropdown submenu -->
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link text-black" style="font-size: 10px" href="{{ route('all-news') }}" id="postMenu">اخبار</a>
                        </li>

                        <li class="nav-item nav-link">
                            <a class="text-white bg-danger p-2 rounded-lg" style="font-size: 10px; border-radius: 8px; width: max-content; height: 40px" href="{{ route('auto_misoin') }}" id="postMenu">اتوماسیون اداری</a>
                        </li>


                    </ul>
                </div>

            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- =======================
    Header END -->

    <section class="pt-3 pt-lg-5">
        <div class="container">
            <div class="row">
                <!-- Title -->
                <div class="mb-4">
                    <h2 class="m-0">امور کارآموزی</h2>
                    <hr style="width: 30%">
                    <h2 class="m-0">جستجو خبر</h2>
                </div>

                <!-- Main part START -->
                <div class="col-xl-9 mx-auto">

                    <!-- Search filter START -->
                    <form class="row g-2 g-xl-4 mb-4">
                        <!-- Search -->
                        <div class="col-xl-12">
                            <div class="rounded position-relative">
                                @if($table_sort == 0)
                                    <input class="form-control pe-5" wire:model.live="search" type="search"
                                           placeholder="جستجو عنوان..." aria-label="Search">
                                    <button
                                        class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                        type="submit"><i class="bi bi-search fs-5"> </i></button>
                                @elseif($table_sort == 1)

                                @endif
                            </div>

                            <hr>

                        </div>
                    </form>
                    <!-- Search filter END -->

                    <!-- Product START -->
                    <div class="row g-4">

                        @if($table_sort == 0)
                            @foreach($posts as $post)
                                @if($post->category == "امور کارآموزان")
                                    <!-- Product item START -->
                                    <div class="col-sm-6 col-md-4">
                                        <div class="card border p-3 h-100">
                                            <div class="position-relative">
                                                <!-- Image -->
                                                <a href="shop-detail.html" class="position-relative z-index-9"><img
                                                        class="card-img" src="{{ asset('storage/'.$post->image_url) }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Card body -->
                                            <div class="card-body text-center p-3 px-0">

                                                <h5 class="card-title" style="width: 230px; text-overflow: ellipsis"><a href="#">{{ $post->title }}</a>
                                                </h5>
                                                <hr>
                                                <p style="white-space: nowrap; overflow: hidden; width: 100px; text-overflow: ellipsis">{{ $post->content }}</p>
                                                <hr>
                                                @foreach($users as $user)
                                                    @if($post->user_id == $user->id)
                                                        <h4>{{ $user->f_name.' '.$user->l_name }}</h4>
                                                    @endif
                                                @endforeach
                                                <br>
                                                <h5>{{ $post->submit_date_post }}</h5>
                                                <!-- Title -->

                                            </div>

                                            <!-- Card footer -->
                                            <div class="card-footer text-center p-0">
                                                <!-- Button -->
                                                <a href="{{ URL::signedRoute('post', ['post_id' => $post->id]) }}"
                                                   class="btn btn-sm btn-primary-soft mb-0"><i
                                                        class="bi bi-newspaper me-2"></i>دیدن اطلاعات</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product item END -->

                                @endif

                            @endforeach
                        @elseif($table_sort == 1)
                            @foreach($sort_posts as $sort_post)
                                @if($sort_post->category == "امور کارآموزان")
                                    <div class="col-sm-6 col-md-4">
                                        <div class="card border p-3 h-100">
                                            <div class="position-relative">
                                                <!-- Image -->
                                                <a href="shop-detail.html" class="position-relative z-index-9"><img
                                                        class="card-img" src="{{ asset('storage/'.$sort_post->image_url) }}"
                                                        alt=""></a>
                                            </div>

                                            <!-- Card body -->
                                            <div class="card-body text-center p-3 px-0">

                                                <h5 class="card-title"  style="width: 230px; text-overflow: ellipsis">><a href="#">{{ $sort_post->title }}</a>
                                                </h5>
                                                <hr>
                                                <p style="white-space: nowrap; overflow: hidden; width: 100px; text-overflow: ellipsis">{{ $sort_post->content }}</p>
                                                <hr>
                                                @foreach($users as $user)
                                                    @if($sort_post->user_id == $user->id)
                                                        <h4>{{ $user->f_name.' '.$user->l_name }}</h4>
                                                    @endif
                                                @endforeach
                                                <br>
                                                <h5>{{ $sort_post->submit_date_post }}</h5>
                                                <!-- Title -->

                                            </div>

                                            <!-- Card footer -->
                                            <div class="card-footer text-center p-0">
                                                <!-- Button -->
                                                <a href="{{ URL::signedRoute('per_lw', ['user_id' => $sort_post->id]) }}"
                                                   class="btn btn-sm btn-primary-soft mb-0"><i
                                                        class="bi bi-newspaper me-2"></i>دیدن اطلاعات</a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <!-- Product item START -->


                            @endforeach
                        @endif


                    </div>
                    <!-- Product END -->
                    {{ $posts->links() }}

                </div>
                <!-- Main part END -->
            </div>
        </div>
    </section></div>

