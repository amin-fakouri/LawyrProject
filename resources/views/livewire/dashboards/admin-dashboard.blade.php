<div>
    <!-- Preloader END -->
    <!-- =======================
    Header START -->
    <header class="navbar-light navbar-sticky header-static border-bottom navbar-dashboard">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand me-3" href="{{ route('admin-dashboard') }}" wire:navigate>
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
                        <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}"><i class="bi bi-house-door me-1"></i>پیشخوان</a></li>

                        <!-- Nav item 2 Post -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="postMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-pencil me-1"></i>ایجاد</a>
                            <ul class="dropdown-menu" aria-labelledby="postMenu">
                                <!-- dropdown submenu -->
                                <li> <a class="dropdown-item"
                                        href="{{ \Illuminate\Support\Facades\URL::signedRoute('upload-post', ['user_id' => \auth()->user()->id]) }}"
                                    >اخبار</a> </li>

                                <li> <a class="dropdown-item"
                                        href="{{ route('create_koms') }}"
                                    >هیات مدیره</a> </li>
                                <li> <a class="dropdown-item"
                                        href="{{ route('create_about') }}"
                                    >درباره ما</a> </li>
                                <li> <a class="dropdown-item"
                                        href="{{ route('link') }}"
                                    >ثبت لینک خدمات الکترو نیکی/اتوماسیون اداری</a>
                                </li>
                                <li> <a class="dropdown-item"
                                        href="{{ route('create_page_rule') }}"
                                    >صفحات قوانین</a>
                                </li>
                                <li> <a class="dropdown-item"
                                        href="{{ route('create_rule') }}"
                                    >قوانین و مقررات</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Nav item 3 Pages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-folder me-1"></i>صفحات</a>
                            <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                                <li> <a class="dropdown-item" href="{{ route('users-index') }}" wire:navigate>{{__('لیست کاربران')}}</a></li>
                                <li> <a class="dropdown-item" href="{{ route('show') }}">{{__('لیست شکایات')}}</a></li>
                                <li> <a class="dropdown-item"
                                        href="{{ \Illuminate\Support\Facades\URL::signedRoute('update-password', ['user_id' => \auth()->user()->id]) }}">
                                        {{__('تغیر گذرواژه')}}
                                    </a></li>
                                <li> <a class="dropdown-item"
                                        href="{{ \Illuminate\Support\Facades\URL::signedRoute('create-user') }}">
                                        {{__('ایجاد کاربر')}}
                                    </a></li>
                                <li> <a class="dropdown-item"
                                        href="{{ route('rule_list') }}">
                                        {{__('لیست قوانین و مقررات')}}
                                    </a></li>

                            </ul>
                        </li>
                    </ul>

                </div>
                <!-- Main navbar END -->

                <!-- Nav right START -->
                <div class="nav flex-nowrap align-items-center">



                    <!-- Profile dropdown START -->
                    <div class="nav-item ms-2 ms-md-3 dropdown">
                        <!-- Avatar -->
                        <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="avatar-img rounded-circle" src="{{ asset('storage/'.auth()->user()->image_profile) }}" alt="avatar">
                        </a>

                        <!-- Profile dropdown START -->
                        <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                            <!-- Profile info -->
                            <li class="px-3">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar me-3">
                                        <img class="avatar-img rounded-circle shadow" src="{{ asset('storage/'.auth()->user()->image_profile) }}" alt="">
                                    </div>
                                    <div>
                                        <a class="h6 mt-2 mt-sm-0" href="#">{{ auth()->user()->f_name.','.auth()->user()->l_name }}</a>
                                        <p class="small m-0">{{ auth()->user()->role }}</p>
                                    </div>
                                </div>
                                <hr>
                            </li>
                            <!-- Links -->
                            <li><a class="dropdown-item"
                                   href="{{ \Illuminate\Support\Facades\URL::signedRoute('profile', ['user_id' => \auth()->user()->id]) }}" wire:navigate
                                ><i class="bi bi-person fa-fw me-2"></i>ویرایش</a></li>
                            <li><a wire:click="logout"  class="dropdown-item cursor-pointer">
                                    <i class="bi bi-power fa-fw me-2"></i>خروج</a>
                            </li>

                            <li>
                                <div class="dropdown-item">
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
                            </li>


                        </ul>
                        <!-- Profile dropdown END -->
                    </div>
                    <!-- Profile dropdown END -->

                    <!-- Nav right END -->
                </div>
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- =======================
    Header END -->

    <section class="py-4">
        <div class="container">
            <div class="row g-5">

                <div class="col-12">
                    <!-- Counter START -->
                    <div class="row g-4">

                        @php $counter_complaints=0; @endphp
                        @foreach($complaints as $complaint)
                            @php $counter_complaints+=1; @endphp
                        @endforeach

                        <!-- Counter item -->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-body border p-3">
                                <div class="d-flex align-items-center">
                                    <!-- Icon -->
                                    <div class="icon-xl fs-1 bg-success bg-opacity-10 rounded-3 text-success">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                    <!-- Content -->
                                    <div class="ms-3">
                                        <h3>{{ $counter_complaints }}</h3>
                                        <h6 class="mb-0">{{__('تعداد شکایات')}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @php $counter_post=0; @endphp

                        @foreach($posts as $post)
                            @php $counter_post++; @endphp
                        @endforeach



                        <!-- Counter item -->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-body border p-3">
                                <div class="d-flex align-items-center">
                                    <!-- Icon -->
                                    <div class="icon-xl fs-1 bg-primary bg-opacity-10 rounded-3 text-primary">
                                        <i class="bi bi-file-earmark-text-fill"></i>
                                    </div>
                                    <!-- Content -->
                                    <div class="ms-3">
                                        <h3>{{ $counter_post }}</h3>
                                        <h6 class="mb-0">{{__('اخبار جدید')}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @php $counter_admins=0; @endphp
                        @foreach($users as $user)
                            @if($user->role == "admin")
                                @php $counter_admins+=1; @endphp
                            @else
                                @php $counter_admins+=0; @endphp
                            @endif
                        @endforeach

                        <!-- Counter item -->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-body border p-3">
                                <div class="d-flex align-items-center">
                                    <!-- Icon -->
                                    <div class="icon-xl fs-1 bg-danger bg-opacity-10 rounded-3 text-danger">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                    <!-- Content -->
                                    <div class="ms-3">
                                        <h3>{{ $counter_admins }}</h3>
                                        <h6 class="mb-0">{{__('تعداد ادمین')}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @php $counter_lawyer=0; @endphp
                        @foreach($users as $user)
                            @if($user->role == "lawyer")
                                @php $counter_lawyer+=1; @endphp
                            @else
                                @php $counter_lawyer+=0; @endphp
                            @endif
                        @endforeach

                        <!-- Counter item -->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-body border p-3">
                                <div class="d-flex align-items-center">
                                    <!-- Icon -->
                                    <div class="icon-xl fs-1 bg-info bg-opacity-10 rounded-3 text-info">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                    <!-- Content -->
                                    <div class="ms-3">
                                        <h3>{{ $counter_lawyer }}</h3>
                                        <h6 class="mb-0">{{__('تعداد وکلا')}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @php $counter_trainee=0; @endphp
                        @foreach($users as $user)
                            @if($user->role == "trainee")
                                @php $counter_trainee+=1; @endphp
                            @else
                                @php $counter_trainee+=0; @endphp
                            @endif
                        @endforeach

                        <!-- Counter item -->
                        <div class="col-sm-12 col-lg-12">
                            <div class="card card-body border p-3">
                                <div class="d-flex align-items-center">
                                    <!-- Icon -->
                                    <div class="icon-xl fs-1 bg-warning bg-opacity-10 rounded-3 text-warning">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                    <!-- Content -->
                                    <div class="ms-3">
                                        <h3>{{ $counter_trainee }}</h3>
                                        <h6 class="mb-0">{{__('تعداد کار آموزها')}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="col-12">
                            <!-- Blog list table START -->
                            <div class="card border bg-transparent rounded-3">
                                <!-- Card header START -->
                                <div class="card-header bg-transparent border-bottom p-3">
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <h5 class="mb-2 mb-sm-0">لیست اخبار <span class="badge bg-primary bg-opacity-10 text-primary">{{ $counter_post }}</span></h5>
                                        <a href="{{ \Illuminate\Support\Facades\URL::signedRoute('upload-post', ['user_id' => \auth()->user()->id]) }}"
                                           class="btn btn-sm btn-primary mb-0">ثبت خبر جدید</a>
                                    </div>
                                </div>
                                <!-- Card header END -->

                                <!-- Card body START -->
                                <div class="card-body">

                                    <!-- Search and select START -->
                                    <div class="row g-3 align-items-center justify-content-between mb-3">
                                        <!-- Search -->
                                        <div class="col-md-8">
                                            <form class="rounded position-relative">
                                                <input class="form-control pe-5 bg-transparent" type="text" wire:model.live="search" placeholder="جستجو" aria-label="Search">
                                                <button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                                            </form>
                                        </div>

                                        <!-- Select option -->
                                        <div class="col-md-1">
                                            <!-- Short by filter -->
                                            <a href="{{ \Illuminate\Support\Facades\URL::signedRoute('all-post') }}"
                                               class="link-dark text-decoration-underline">همه</a>
                                        </div>
                                    </div>
                                    <!-- Search and select END -->

                                    <!-- Blog list table START -->
                                    <div class="table-responsive border-0">
                                        <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                            <!-- Table head -->
                                            <thead class="table-dark">
                                            <tr>
                                                <th scope="col" class="border-0 rounded-start">عنوان خبر</th>
                                                <th scope="col" class="border-0">نام نویسنده</th>
                                                <th scope="col" class="border-0">بخش</th>
                                                <th scope="col" class="border-0">دسته بندی عناوین</th>
                                                <th scope="col" class="border-0">تاریخ انتشار</th>
                                                <th scope="col" class="border-0">توضیحات</th>
                                                <th scope="col" class="border-0">{{__('عکس')}}</th>
                                                <th scope="col" class="border-0 rounded-end">عملیات</th>
                                            </tr>
                                            </thead>



                                            @php $counter_row_post=0; @endphp

                                            @foreach($posts as $post)
                                                @php $counter_row_post++; @endphp

                                                @if($counter_row_post <= 4)
                                                    <!-- Table body START -->
                                                    <tbody class="border-top-0">
                                                    <!-- Table item -->
                                                    <tr>
                                                        <!-- Table data -->
                                                        <td>
                                                            <h6 class="course-title mt-2 mt-md-0 mb-0" style="width: 230px; text-overflow: ellipsis"><a href="#">{{ $post->title }}</a></h6>
                                                        </td>
                                                        <!-- Table data -->
                                                        @foreach($users as $user)
                                                            @if($post->user_id == $user->id)
                                                                <td>
                                                                    <h6 class="mb-0"><a href="#">{{ $user->username }}</a></h6>
                                                                </td>
                                                            @endif
                                                        @endforeach

                                                        @switch($post->box)
                                                            @case(1)
                                                                <td>
                                                                    <h6 class="mb-0"><a href="#">اخبار ویژه</a></h6>
                                                                </td>
                                                                @break
                                                            @case(2)
                                                                <td>
                                                                    <h6 class="mb-0"><a href="#">جز ۴ پوستر اول</a></h6>
                                                                </td>
                                                                @break
                                                            @case(3)
                                                                <td>
                                                                    <h6 class="mb-0"><a href="#">سایر اخبار</a></h6>
                                                                </td>
                                                                @break
                                                            @case(3)
                                                                <td>
                                                                    <h6 class="mb-0"><a href="#">گالری فیلم و عکس</a></h6>
                                                                </td>
                                                                @break
                                                        @endswitch

                                                        <td>
                                                            <a href="#" class="badge text-bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{ $post->category }}</a>
                                                        </td>

                                                        <!-- Table data -->
                                                        <td>{{ $post->submit_date_post }}</td>
                                                        <!-- Table data -->
                                                        <td>
                                                            <a href="#" class="badge text-black mb-2 w-80" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ $post->content }}</a>
                                                        </td>
                                                        <!-- Table data -->
                                                        <td>
                                                        <span class="badge bg-opacity-10 mb-2 rounded">
                                                            <img src="{{ asset('storage/'.$post['image_url']) }}" class="w-60 h-60 rounded">
                                                        </span>
                                                        </td>
                                                        <!-- Table data -->
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <a wire:click="delete_post({{ $post->id }})" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"><i class="bi bi-trash"></i></a>
                                                                <a href="{{ \Illuminate\Support\Facades\URL::signedRoute('edite-post', ['post_id' => $post->id]) }}" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش"><i class="bi bi-pencil-square"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    </tbody>
                                                    <!-- Table body END -->
                                                @else

                                                @endif
                                            @endforeach






                                        </table>
                                    </div>
                                </div>
                                <!-- Blog list table END -->
                            </div>

                        </div>
                        <!-- Counter END -->

                    </div>
                </div>
            </div>
        </div>
    </section>


</div>



