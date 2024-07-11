<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.head')
</head>

<body>

    <!-- ======= Header ======= -->
    @include('inc.header')
    <!-- End Header -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>EDUCATION</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        @foreach ($daducation as $daducation)
                            <div class="resume-item">
                                <h4>{{ $daducation->nama }}</h4>
                                <h5>{{ $daducation->masuk }} - {{ $daducation->kelulusan }}</h5>
                                <p><em>{{ $daducation->kejuruan }}</em></p>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        @endforeach
                        <div class="resume-item">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('inc.footers')
    <!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('inc.js')

</body>

</html>
