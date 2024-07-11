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
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3 name="description">{{ $profile->description }}</h3>
                        <h4>
                            I studying the
                            science and practice
                            of junior web programming
                        </h4>
                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i name="lahir" class="bi bi-rounded-right"></i>
                                        <strong>Lahir : </strong> {{ $dabout->lahir }}
                                    </li>
                                    <li><i name="tempat_lahir" class="bi bi-rounded-right"></i> <strong>Tempat Lahir :
                                        </strong> {{ $dabout->tempat_lahir }}
                                    </li>
                                    <li><i name="umur" class="bi bi-rounded-right"></i> <strong>Umur :
                                        </strong> {{ $dabout->umur }}</li>
                                    <li><i name="agama" class="bi bi-rounded-right"></i>
                                        <strong>Agama : </strong> {{ $dabout->agama }}
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i name="gender" class="bi bi-rounded-right"></i>
                                        <strong>Jenis Kelamin : </strong> {{ $dabout->gender }}
                                    </li>
                                    <li><i name="phone" class="bi bi-rounded-right"></i>
                                        <strong>Phone :</strong> {{ $dabout->phone }}
                                    </li>
                                    <li><i name="alamat" class="bi bi-rounded-right"></i>
                                        <strong>Alamat :</strong> {{ $dabout->alamat }}
                                    </li>
                                    <li><i name="email" class="bi bi-rounded-right"></i>
                                        <strong>Email : </strong>{{ $dabout->email }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Skills</h2>
                </div>

                <div class="row skills-content">
                    @foreach ($skill as $skill)
                        <div class="col-lg-6">
                            <div class="progress">
                                <span class="skill">{{ $skill->nama_skill }} <i
                                        class="val">{{ $skill->level_skill }}</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                        style="width: {{ $skill->level_skill }}"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!-- ======= Testimonials Section ======= -->
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
