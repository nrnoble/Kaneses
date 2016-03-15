<!DOCTYPE html>
<?php include "kfb_head.php" ?>

<body class="no-trans kfb_background">


<?php include "kfb_menubar.php" ?>

<div class="page-wrapper" >

    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container kfb_background">

        <div class="container">
            <div class="row">

                <!-- Think carefully before modifying code above this line  -->

                <!-- KFB page content starts here  -->

                <div class="main col-md-9">

                    <div class="pageblock">
                        <input type="button" id="show_login" value="Show Login" onclick="showpopup()"><br>
                        <input type="button" id="close_login" value="close_login" onclick="hidepopup()"><br>
                        Note: Strictly for testing\debugging purposes. Will be removed after testing is completed.

                    </div >



                    <div id = pageblock1 class = "pageblock">
                        <h2> Page Title Goes Here</h2>

                    </div>

                    <div id = pageblock2 class = "pageblock">

                        <div id = "kfb_contactform" class="container" style="width: inherit">



                            <form role="form" action="<?= $_SERVER['PHP_SELF']; ?>" method="post" >
                                <div class="col-md-9">

                                    <div class="well well-sm"><strong style = "color: blue">
                                            <i class="glyphicon;"></i>
                                            Contact The Kent Food Bank</strong>
                                    </div>

                                    <div class="form-group">
                                        <label for="InputName">Your Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputEmail">Your Email</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required  >
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputMessage">Message</label>
                                        <div class="input-group">
                                            <textarea name="comments" id="InputMessage" class="form-control" rows="5" required></textarea>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                                    </div>

                                    <!--		  <div class="form-group">-->
                                    <!---->
                                    <!--			<label for="InputReal">What is 4+3? (Simple Spam Checker)</label>-->
                                    <!--			<div class="input-group">-->
                                    <!--			  <input type="text" class="form-control" name="InputReal" id="InputReal" required>-->
                                    <!--			  <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>-->
                                    <!--		  </div>-->

                                    <input type="submit" name="send" id="send" value="send" class="btn btn-info pull-left">
                                </div>
                            </form>
                        </div>

                    </div>

                    <div id = pageblock3 class = "pageblock">
                        <h2> More Page content goes here</h2>
                        <h3> More Page content goes here</h3>
                        <h4> More Page content goes here</h4>
                    </div>


                </div>
                <!-- KFB page content ends here  -->

                <!-- Think carefully before modifying code below this line  -->

                <!-- sidebar start -->
                <!-- ================ -->

                <?php #include "kfb_sidebar_bozhang.php" ?>

                <!-- sidebar end -->

            </div>

        </div>

    </section>
    <!-- main-container end -->



</div>
<!-- page-wrapper end -->

<!-- sidebar start -->


<?php include "kfb_footer.html" ?>
</body>
</html>