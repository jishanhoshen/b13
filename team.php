<!DOCTYPE html>
<html lang="en">
<?php include('config.php');?>
<?php include('headerlink.php');?>
<body>
<?php include('preload.php');?>
<?php include('header.php');?>
    <!-- ***** Our Team Area Start ***** -->
    <section class="our-Team-area bg-white section_padding_100_50 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Our Team</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $select="select * from bthirteen_member ORDER BY id";
                $query=mysqli_query($db,$select);
                while($row=mysqli_fetch_assoc($query)){
                ?>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="http://admin.bthirteen.org/bidders_upload/<?php echo $row['member'];?>">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="<?php echo $row['memberfacebook']?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="<?php echo $row['membertwitter']?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="mailto:<?php echo $row['membermail']?>"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                    <a href="<?php echo $row['memberinstagram']?>"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="tel:<?php echo $row['memberphone']?>"> <i class="fa fa-phone" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4><?php echo $row['membername'];?></h4>
                            <p><?php echo $row['memberposition'];?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area End ***** -->
<?php include('footer.php');?>
</body>
</html>
