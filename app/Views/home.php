<?= $this->extend("layout/main") ?>

<?= $this->section("content") ?>
<!-- CONTENT -->


<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="#e83e8c" style="background-color : #e83e8c;">
    <div class="hero-slider owl-carousel">
        <div class="hs-item">
            <div class="hs-left"><img src="<?= base_url() ?>/assets/img/slider-img.png" alt=""></div>
            <div class="hs-right">
                <div class="hs-content">
                    <div class="price"></div>
                    <h2><span>2021</span> <br>Your Fashion Style Everyday</h2>
                </div>
            </div>
        </div>
        <div class="hs-item">
            <div class="hs-left"><img src="<?= base_url() ?>/assets/img/slider-img.png" alt=""></div>
            <div class="hs-right">
                <div class="hs-content">
                    <div class="price"></div>
                    <h2><span>2021</span> <br>Your Fashion Style Everyday</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->


<?= $this->endSection() ?>