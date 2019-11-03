<!DOCTYPE html>
<html lang="en">
<?php include('headerlink.php');?>
<body>
<?php include('preload.php');?>
<?php include('header.php');?>

	<!-- ***** Client Feedback Area Start ***** -->
	<section id="event" class="section_padding_100 bg-white">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10">
			<div class="events_area" style="">
				<!-- ***** singel event Start ***** -->
				<?php
				$select="select * from top_biders";
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
			</div>
			</div>
		</div>
	</div>
	</section>
    <section class="our-monthly-membership section_padding_50 clearfix">

    </section>


<?php include('footer.php');?>
</body>

</html>
