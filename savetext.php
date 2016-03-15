<!DOCTYPE HTML>
<html>
<body style="background-color: rgb(225,225,225)">
<form name="savefile" method="post" action="">

    <?php
        $topten = "";
        $filename = "kfb_topten.txt";
        if(!file_exists("index.php"))
        {
        exit("Error: File does not exist....");
        }
        $file = fopen($filename, "r");
        while(!feof($file))
        {
            $topten = $topten .fgets($file);
        //echo fgets($file). "<br />";
        }
        fclose($file);

    if (isset($_POST))
    {

        $_POST['filename'] = 'kfb_topten.txt';
        if ($_POST['submitsave'] == "Save Text to Server"  && !empty($_POST['filename']))
        {
            if(!file_exists($_POST['filename']))
            {
                $file = tmpfile();
            }
            $file = fopen($_POST['filename'],"a+");
//        while(!feof($file))
//        {
//            $old = $old . fgets($file);
//        }
            $text = $_POST["textdata"];
            file_put_contents($_POST['filename'],$text);
            fclose($file);
            $topten = $text;
        }

//    if ($_POST['submitopen'] == "Submit File Request") {
//        if(!file_exists($_POST['filename'] . ".txt")){
//            exit("Error: File does not exist.");
//        }
//        $file = fopen($_POST['filename'] . ".txt", "r");
//        while(!feof($file)){
//            echo fgets($file). "<br />";
//        }
//        fclose($file);

    }
    ?>

<!--    File Name: <input type="text" name="filename" value=""><br/>-->
    <textarea rows="16" cols="100" name="textdata"><?php echo "$topten"; ?> </textarea><br/>
    <input type="submit" name="submitsave" value="Save Text to Server">
</form>

<br/><hr style="background-color: rgb(150,150,150); color: rgb(150,150,150); width: 100%; height: 4px;"><br/>

<form name="openfile" method="post" action="">
    Open File: <input type="text" name="filename" value="">
    <input type="submit" name="submitopen" value="Submit File Request">
</form>
<br/><hr style="background-color: rgb(150,150,150); color: rgb(150,150,150); width: 100%; height: 4px;"><br/>
File Contents:<br/>

</body>
</html>