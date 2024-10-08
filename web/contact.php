<!DOCTYPE html>
<html lang="en">

<head>

    <?php require_once "./head.php"; ?>
    <?php require_once "./static/services_data.php"; ?>

</head>

<body id="bdy">

    <?php require_once "./component/header.php"; ?>


    <!-- Start PreLoader 
============================================= -->
    <div class="preloader">
        <div class="preloader-container">
            <span class="preloader-text">one stop iso</span>
            <div class="preloader-animation">
            </div>
        </div>
    </div>
    <!-- Start PreLoader-->

    <main class="main">

        <!-- Start Breadcrumb
    ============================================= -->
        <div class="site-breadcrumb" style="background: url(<?php echo rootURL(); ?>assets/img/pictures/breadcrumb.jpg)">
            <div class="container">
                <div class="site-breadcrumb-wpr">
                    <h2 class="breadcrumb-title">ติดต่อเรา</h2>
                    <ul class="breadcrumb-menu clearfix">
                        <li><a href="/">หน้าหลัก</a></li>
                        <li class="active">ติดต่อเรา</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start Service Single
    ============================================= -->
        <div class="contact-area pos-rel pt-5">
            <img src="<?= rootURL(); ?>assets/img/vector/tiles-shape.png" class="contact-tech-single-page" alt="no image">
            <div class="container">
                <div class="contact-wpr">
                    <div class="row g-5 contact-content">
                        <div class="col-xl-4">
                            <div class="contact-sdebar">
                                <div class="contact-up-title">
                                    <h2 class="heading-1">
                                        ยกระดับธุรกิจสู่มาตรฐานสากลกับเรา
                                    </h2>
                                    <p class="mb-0">
                                        พร้อมก้าวสู่การรับรอง ISO ที่จะเปลี่ยนวิธีการทำงานของคุณ? ติดต่อเราวันนี้! เรามีทีมผู้เชี่ยวชาญพร้อมให้คำปรึกษาและนำทางคุณสู่ความสำเร็จ
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="contact-home pl-30">
                                <div class="addr-home">
                                    <div class="addr-box">
                                        <a href="https://www.google.com/maps/search/55%2F72+Moo+2+Tambon+Bang+bua+thong+Amphoe+Bang+bua+Thong+Nonthaburi/@13.9205825,100.4096946,15z/data=!3m1!4b1?authuser=0&entry=ttu" class="addr-box-single-link">
                                            <div class="addr-box-single">
                                                <div class="addr-icon">
                                                    <i class="icofont-google-map"></i>
                                                </div>
                                                <div class="addr-desc">
                                                    <h5>Location</h5>
                                                    <p class="mb-0">
                                                        55/72 Moo 2, Bangbuathong, Nonthaburi
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="tel:+66636452424" class="addr-box-single-link">
                                            <div class="addr-box-single">
                                                <div class="addr-icon">
                                                    <i class="icofont-phone"></i>
                                                </div>
                                                <div class="addr-desc">
                                                    <h5>โทรทันที</h5>
                                                    <p class="mb-0">
                                                        (+66) 63-645-2424
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="contact-home pl-30">
                                <div class="addr-home">
                                    <div class="addr-box">
                                        <a href="mailto:saleonestopiso@gmail.com" class="addr-box-single-link">
                                            <div class="addr-box-single">
                                                <div class="addr-icon">
                                                    <i class="icofont-email"></i>
                                                </div>
                                                <div class="addr-desc">
                                                    <h5>Email</h5>
                                                    <p class="mb-0">
                                                        saleonestopiso@gmail.com
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="https://line.me/ti/p/yeLz6_xbpa" class="addr-box-single-link">
                                            <div class="addr-box-single">
                                                <div class="addr-icon">
                                                    <img src="<?= rootURL(); ?>assets/img/pictures/qr-line.jpg" alt="qr-line">
                                                </div>
                                                <div class="addr-desc">
                                                    <h5>Line@</h5>
                                                    <p class="mb-0">
                                                        @Saleonestop
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Project Single -->


            <?php require_once './component/partner.php' ?>
            <?php require_once './component/services.php' ?>

    </main>


    <!-- Start Scroll top
============================================= -->
    <a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>
    <!-- End Scroll top-->



</body>
<?php require_once "./component/footer.php"; ?>
<?php require_once "./js.php"; ?>

</html>