<!DOCTYPE html>
<html lang="en">

<?php include('headerlink.php');?>
<body>
<?php include('preload.php');?>
<?php include('header.php');?>

	<section id="event" class="section_padding_100 bg-white">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10">
			<div class="events_area">
				<!-- ***** singel event Start ***** -->
				<?php
				$select="select * from bthirteen_event";
				$query=mysqli_query($db,$select);
				while($row=mysqli_fetch_assoc($query)){
				    $title=$row['title'];
				    $image=$row['image'];
				    $desc=$row['description'];
				?>
			<div class="single_event" style="position:relative">
				<h2><?php echo $title?></h2>
				<div class="event_cover" style="background-image:url(http://admin.bthirteen.org/bidders_upload/<?php echo $image?>);height: 400px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
				<div class="event_desc" style="padding: 100px 10px 0px 0px;">
				<?php echo $desc?>
				</div>
			</div>
			<?php } ?>
			<!-- ***** singel event End *****====== -->
			
				<!-- ***** singel event Start ***** -->
			<!-- <div class="single_event" style="position:relative">
				<h2>// Developers party //</h2>
				<div class="event_cover" style="background-image:url(img/eve-img/cover.jpg);height: 400px;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
				<div class="event_photos" style="position: absolute;height: 200px;width: 95%;top: 320px;left: 0;right: 0;margin: auto;">
					<div class="eve_photo" style="background-image:url(img/team-img/team-1.jpg);max-height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;height: 100%;float: left;width: 23%;margin: 0px 1%;"></div>
					<div class="eve_photo" style="background-image:url(img/team-img/team-2.jpg);max-height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;height: 100%;float: left;width: 23%;margin: 0px 1%;"></div>
					<div class="eve_photo" style="background-image:url(img/team-img/team-3.jpg);max-height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;height: 100%;float: left;width: 23%;margin: 0px 1%;"></div>
					<div class="eve_photo" style="background-image:url(img/team-img/team-4.jpg);max-height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;height: 100%;float: left;width: 23%;margin: 0px 1%;"></div>
				</div>
				<div class="event_desc" style="padding: 100px 10px 0px 0px;">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
				<p>This is desc</p>
				<p>This is desc</p>
				</div>
			</div>
			<!-- ***** singel event End *****====== -->
			</div>
			</div>
		</div>
	</div>
	</section>

    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Get in touch with us!</h2>
                        <div class="line-shape"></div>
                    </div>
                    <div class="footer-text">
                        <p>We'll send you epic weekly blogs, whitepapers and things to make your app startup thrive, all FREE!</p>
                    </div>
                    <div class="address-text">
                        <p><span>Address:</span> Taltola Mor, Bezpara, Jessore-7400 ,Bangladesh</p>
                    </div>
                    <div class="phone-text">
                        <p><span>Phone:</span> +880 1856-252550</p>
                    </div>
                    <div class="email-text">
                        <p><span>Email:</span> info@bthirteen.org</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <form action="#" method="post">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Your Message *" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <button type="submit" class="btn submit-btn">Send Now</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area End ***** -->

<?php include('footer.php');?>
</body>

</html>
