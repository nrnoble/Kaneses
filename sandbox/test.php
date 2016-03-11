<!DOCTYPE html>

<?php include "kfb_head.php" ?>

<body>

<script>


    function hide()
    {
        $("#clickme").click(function () {
            $("#book").toggle();
        });
    }
</script>


<div  id="book">

    <h1>Hide me</h1>
    <img id="book" src="images/kfb_logo15-dropshadow5.png" alt="" width="100" height="123" style ="display: none">

</div>

<div id="clickme" onclick="hide()">
    Click here
</div>





<img id="book" src="images/kfb_logo15-dropshadow5.png" alt="" width="100" height="123" style ="display: ">
With the element initially hidden, we can show it slowly:


// Animation complete.


<?php include "kfb_footer.html" ?>
</body>
</html>