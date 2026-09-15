<div>




    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
        Inner intro START -->
        <section class="pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-dark-overlay-4 overflow-hidden card-bg-scale h-400 text-center" style="background-image:url({{ asset('bg_lw/mngs2.png') }}); background-position: center left; background-size: cover;">
                            <!-- Card Image overlay -->
                            <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                                <div class="w-100 my-auto">
                                    <h1 class="text-white display-5">درباره ما</h1>
                                    <!-- breadcrumb -->
                                    <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                                        <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                            <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house me-1"></i> خانه</a></li>
                                            <li class="breadcrumb-item active">درباره ما</li>
                                        </ol>
                                    </nav>
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
        About START -->
        <section class="pt-4 pb-0">
            <div class="container">
                <div class="row">
                    @foreach($abouts as $about)
                         <p>{{ $about->about }}</p>
                    @endforeach
                </div>
            </div>
        </section>

        <footer class="pt-5">
            <div class="container">

                <!-- About and Newsletter START -->
                <div class="row pt-3 pb-4">

                    <div class="col-md-3">
                        <img src="{{ asset('bg_lw/logo.png') }}" alt="footer logo">
                    </div>

                    <div class="col-md-5">
                        <h3 class="text-dark">آدرس:</h3>
                        <p class="text-body-dark">
                            بوشهر,خیابان بهشت صادق,روبه رو خبر گزاری جمهوری اسلامی
                        </p>
                    </div>

                    <div class="col-md-4">
                        <h3 class="text-dark">تلفکس:</h3>
                        <p class="text-body-dark">09172384175</p>
                        <p class="text-body-dark">09172384175</p>
                    </div>

                    <div class="col-md-5">
                    </div>

                </div>
                <!-- About and Newsletter END -->

                <!-- Divider -->
                <hr>

                <!-- Widgets START -->
                <div class="row pt-5">

                    <div class="col-md-6 col-lg-3 mb-4">
                        <h3 class="text-dark">پست الکترونیکی:</h3>
                        <p class="text-body-dark">nasim@gmail.com</p>
                    </div>

                </div>

                <div class="row pt-4">

                    <div class="col-md-6 col-lg-3 mb-4">
                        <h3 class="text-dark">سامانه پیامکی:</h3>
                        <p class="text-body-dark">65454455</p>
                        <p class="text-body-dark">6545689754455</p>
                    </div>

                </div>
                <!-- Widgets END -->

            </div>
        </footer>
        <!-- =======================
        About END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->




</div>
