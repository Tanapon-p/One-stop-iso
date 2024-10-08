<div class="partner-area">
    <div class="container">
        <div class="partner-wpr">
            <div class="row g-5 align-items-center">
                <div class="col-xl-4">
                    <div class="partner-left">
                        <h5 class="heading-5 mb-20">ผู้นำในทุกอุตสาหกรรมไว้วางใจเรา</h5>
                        <p class="mb-0">
                            ONE STOP ISO เราภูมิใจที่ได้ให้บริการองค์กรชั้นนำทุกระดับทุก
                            ขนาดขององค์กรธุรกิจ ตั้งแต่ธุรกิจท้องถิ่นจนถึงบริษัทระดับโลก เรายกระดับมาตรฐานการดำเนินงานสู่ระดับสากลในหลากหลายธุรกิจ
                            อุตสาหกรรม
                        </p>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="partner-right">
                        <div class="ptnr-sldr swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <?php
                                require_once './static/partner_data.php';
                                foreach ($partners as $partner) {
                                    echo '<div class="swiper-slide">';
                                    echo '<img src="' . rootURL() . $partner['img'] . '" class="partner-logo rounded-5" alt="' . $partner['alt'] . '">';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                            <!-- Pagination -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>