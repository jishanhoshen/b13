<!DOCTYPE html>
<html lang="en">
<?php include('headerlink.php');?>
<body>
<?php include('preload.php');?>
<?php include('header.php');?>
<?php
$select_about="select * from bthirteen_about where id = 1";
$select_about_query=mysqli_query($db,$select_about);
$select_about_row=mysqli_fetch_assoc($select_about_query);
    $about_title_echo=$select_about_row['title'];
    $services_title_a_echo=$select_about_row['titlea'];
    $bdesc_a_echo=$select_about_row['desca'];
    $services_title_b_echo=$select_about_row['titleb'];
    $bdesc_b_echo=$select_about_row['descb'];
    $services_title_c_echo=$select_about_row['titlec'];
    $bdesc_c_echo=$select_about_row['descc'];
    $services_title_d_echo=$select_about_row['titled'];
    $bdesc_d_echo=$select_about_row['descd'];
?>
    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2><?php echo $about_title_echo?></h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                            <i class="ti-mobile" aria-hidden="true"></i>
                        </div>
                        <h4><?php echo $services_title_a_echo?></h4>
                        <p><?php echo $bdesc_a_echo?></p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <i class="ti-ruler-pencil" aria-hidden="true"></i>
                        </div>
                        <h4><?php echo $services_title_b_echo?></h4>
                        <p><?php echo $bdesc_b_echo?></p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                            <i class="ti-settings" aria-hidden="true"></i>
                        </div>
                        <h4><?php echo $services_title_c_echo?></h4>
                        <p><?php echo $bdesc_c_echo?></p>
                    </div>
                </div>
            </div>
        </div>
        <div style="background: url(mystore/balance.png) center no-repeat;height: 480px;width: 90%;background-size: contain;margin: auto;"></div>
        <!-- Special Description Area -->
        <div class="special_description_area mt-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="special_description_img">
                            <img src="mystore/bid.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 ml-xl-auto">
                        <div class="special_description_content">
                            <h4><?php echo $services_title_d_echo?></h4>
                            <p><?php echo $bdesc_d_echo?></p>
                            <div class="app-download-area">
                                <div class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Google Store Btn -->
                                    <a href="#">
                                        <i class="fa fa-android"></i>
                                        <p class="mb-0"><span>available on</span> Google Store</p>
                                    </a>
                                </div>
                                <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">
                                    <!-- Apple Store Btn -->
                                    <a href="#">
                                        <i class="fa fa-apple"></i>
                                        <p class="mb-0"><span>Comming Soon</span> Apple Store</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Special Area End ***** -->

<?php include('footer.php');?>
</body>

</html>
