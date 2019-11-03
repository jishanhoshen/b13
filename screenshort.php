<!DOCTYPE html>
<html lang="en">

<?php include('headerlink.php');?>
<body>
<?php include('preload.php');?>
<?php include('header.php');?>
    <!-- ***** App Screenshots Area Start ***** -->
    <section class="app-screenshots-area bg-white section_padding_100 clearfix" id="screenshot">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>App Screenshots</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- App Screenshots Slides  -->
                    <div class="app_screenshots_slides owl-carousel">
                    <?php
                    $sql = "SELECT * FROM `bthirteen_screenshort`";
                    $query=mysqli_query($db,$sql);
                    while($row=mysqli_fetch_assoc($query)){
                    ?>
                        <div class="single-shot">
                            <img src="http://admin.bthirteen.org/bidders_upload/<?php echo $row['image']?>"/>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** App Screenshots Area End *****====== -->

<?php include('footer.php');?>
</body>
</html>
