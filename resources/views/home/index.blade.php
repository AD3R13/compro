<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.head')
</head>

<body>

    <!-- ======= Header ======= -->
    @include('inc.header')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
            <h1 name="name"><?php
            $name = $profile->name;
            $explode = explode(' ', $name);
            
            echo $explode[0] . ' ' . $explode[1];
            ?></h1>
            <h2 name="description">{{ $profile->description }}</h2>
            <a href="{{ 'about' }}" class="btn-about">About Me</a>
        </div>
    </section><!-- End Hero -->

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
