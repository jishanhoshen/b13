<html>
<?php include('headerlink.php');?>
<body>
<?php include('preload.php');?>
<?php include('header.php');?>
<?php
$select_about="select * from bthirteen_features where id = 1";
$select_about_query=mysqli_query($db,$select_about);
$select_about_row=mysqli_fetch_assoc($select_about_query);
    $about_title_echo=$select_about_row['title'];
    $features_title_a_echo=$select_about_row['title_1'];
    $features_bdesc_a_echo=$select_about_row['desc_1'];
    $features_title_b_echo=$select_about_row['title_2'];
    $features_bdesc_b_echo=$select_about_row['desc_2'];
    $features_title_c_echo=$select_about_row['title_3'];
    $features_bdesc_c_echo=$select_about_row['desc_3'];
    $features_title_d_echo=$select_about_row['title_4'];
    $features_bdesc_d_echo=$select_about_row['desc_4'];
    $features_title_e_echo=$select_about_row['title_5'];
    $features_bdesc_e_echo=$select_about_row['desc_5'];
    $features_title_f_echo=$select_about_row['title_6'];
    $features_bdesc_f_echo=$select_about_row['desc_6'];
?>
    <!-- ***** Awesome Features Start ***** -->
    <section class="awesome-feature-area bg-white section_padding_100 clearfix" id="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text -->
                    <div class="section-heading text-center">
                        <h2><?php echo $about_title_echo?></h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-user" aria-hidden="true"></i>
                        <h5><?php echo $features_title_a_echo?></h5>
                        <p><?php echo $features_bdesc_a_echo?></p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-pulse" aria-hidden="true"></i>
                        <h5><?php echo $features_title_b_echo?></h5>
                        <p><?php echo $features_bdesc_b_echo?></p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-dashboard" aria-hidden="true"></i>
                        <h5><?php echo $features_title_c_echo?></h5>
                        <p><?php echo $features_bdesc_c_echo?></p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-palette" aria-hidden="true"></i>
                        <h5><?php echo $features_title_d_echo?></h5>
                        <p><?php echo $features_bdesc_d_echo?></p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-crown" aria-hidden="true"></i>
                        <h5><?php echo $features_title_e_echo?></h5>
                        <p><?php echo $features_bdesc_e_echo?></p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-headphone" aria-hidden="true"></i>
                        <h5><?php echo $features_title_f_echo?></h5>
                        <p><?php echo $features_bdesc_f_echo?></p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Awesome Features End ***** -->
    <?php include('footer.php');?>
</body>
</html>