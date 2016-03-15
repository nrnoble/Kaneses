<?php
if(!isset($_SESSION))
{
    session_start();
}
else
{
    //	$sessionID = $
}

if ($_SESSION['access'] == true)
{
    //echo "<script>alert('login true')</script>";
}
else
{

    $test = "login false";

    // echo "<script>alert('$test')</script>";
    header('Location: index.php');
}

?>

<?php include "kfb_head.php" ?>


<body class="no-trans   ">

<?php include "kfb_menubar.php" ?>
<div class="page-wrapper">

    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container kfb_background">

        <div class="container">
            <div class="row">

                <!-- main start -->

                <div class="main col-md-9">
                    <div id = "kfb_volunteer-List" class ="pageblock">
                        <!-- main start -->
                        <h2>Sponsors</h2>

                    </div>
                    <? include "functions.php" ?>

                    <div id = sqlconnection class ="pageblock" style="margin-top: 10px; display: none;">

                        <h2>SQL CONNECTION</h2>
                        <?php

                        //$servername = gethostname();
                        //$username = get_current_user();
                        //$password = getpwd();

                        // Create connection
                        $conn = new mysqli("127.0.0.1", "kaneses_kfb", "Ru4real2016","kaneses_kfb");

                        // Check connection
                        if ($conn->connect_error)
                        {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        echo "Connected successfully SQL server: <b>" .gethostname() ."</b><br>";;
                        echo 'Current script owner: <b>' . get_current_user() ."</b><br>";
                        echo "Connection info: <b>" .$conn->host_info ."</b><br>";



                        // combine everything into a trans transaction
                        // rollback before closing connection so that the db
                        // gets reset.
                        //$sql = "START TRANSACTION";
                        //$conn->query($sql);

                        ?>

                    </div> <!-- id sqlconnection -->


                    <!-- List Volunteers  -->
                    <div id = "div5" name ="div5" class="pageblock" style=" margin-top: 10px;" >



                        <?php
                        $sqlfile = file_get_contents("kfb_sponsorshiplist_list.sql");
                        ?>

                        <div id ="querybox" name="querybox" class="kfb_querybox">


                            <form name="query" method="post" action="">
                                <?php
                                if (isset($_POST))
                                {

                                    if ($_POST['submitquery'] == "Search")
                                    {
                                        $sqlfile = $_POST["textdata"];
                                    }

                                }
                                ?>

                                <!--    File Name: <input type="text" name="filename" value=""><br/>-->
                                <textarea  name="textdata" class = "kfb_queryeditbox"><?php echo "$sqlfile"; ?> </textarea><br/><br>
                                <input type="submit" name="submitquery" value="Search" class="kfb_button">
                            </form>


                        </div>

                        <p class = 'todo'>TODO: Replace sql query box with a single line query that searches all fields</p>
                        <!--<pre>-->
                        <?php //#echo "$sqlfile"; ?>
                        <!--</pre>-->


                    </div>

                    <!-- Sponsors List  -->
                    <div id = "div6" name ="div6" class="pageblock" style=" margin-top: 10px;"; >
                        <?php
                        $query = $sqlfile;

                        //$result = $conn->query($query)->fetch_assoc();;
                        $result = $conn->query($query);
                        //TODO: write a function that create debug block
                        ?>
                        <div style = "display: none" class ="page">
                            <?php # echo "var_dump($result->num_rows)"; ?>
                        </div>

                        <!--put scripts into jsfunctions.php-->
                        <script>

                            function ShowDetails1(elem)
                            {
                                var value = $(elem).attr("value");
                                var id = $(elem).attr("id");
                                //alert(Id);
                                value++;
                                var rowId = "#row" + value;
                                //alert(id + " " +rowId);
                                //alert(id + " " +rowId);
                                $(rowId).toggle();


                            }


                            function foo (e)
                            {
                                e.preventDefault();
                                var elem = $(this).next('.td1')
                                elem.toggle('slow');

                                //alert(id);
                            }

                            function ShowDetails (e)
                            {
                                var row = $(e).next("tr");
                                $(row).toggle()
                                e.preventDefault();

                            }

                            function hello_world()
                            {
                                alert("hello world");
                            }

                        </script>


                        <p class = 'todo'>TODO: Add functionality to be able sort by column when clicking on column header</p>
                        <table>

                            <?php

                            # echo "var dump::  var_dump($result->fetch_field()[0]->name);";
                            $fieldnames = [];
                            if ($result->field_count > 0)
                            {
                                echo "<tr style = \" width: 250px;  border: 0px solid black; text-decoration: underline; text-align: left\">";
//
//                                for ($idx = 0; $idx < 4; $idx =$idx+1)
//                                {
//                                    $fieldnames[] = $field[$idx];
//                                    echo "<th class =\"fkb_datatable\" style = \" width: 250px;  border: 0px solid black; text-decoration: underline; \">". $field[$idx]->name . "</th>";
//                                }


                                $count =0;
                                while($field = $result->fetch_field() )
                                {
                                    $count++;
                                    $fieldnames[] = $field->name;
                                    if ($count < 6 )
                                    {
                                        echo "<th class =\"fkb_datatable\" style = \" width: 250px;  border: 0px solid black; text-decoration: underline; text-align: left\">" . $field->name . "</th>";
                                    }

                                }
                                echo "</tr>";
                            }


                            //echo (var_dump($result));
                            //$row = $result->fetch_assoc();
                            //echo var_dump($row);
                            // echo $row["AVG (film.length)"];
                            //$rowcount =0;
                            if ($result->num_rows > 0)
                            {
                                // output data of each row

                                while($row = $result->fetch_assoc())
                                {
                                    $rowcount = $rowcount + 1;

                                    echo "<tr id =\"row$rowcount\" value =\"$rowcount\" class =\"fkb_datatable\" onclick='ShowDetails(this)' ><td class =\"kfb_datatable\"  style = \"text-align: left ;!important;\">". $row["$fieldnames[0]"]
                                        . "</td><td class =\"fkb_datatable\">" . $row["$fieldnames[1]"]
                                        . "</td><td class =\"fkb_datatable\">" . $row["$fieldnames[2]"]
                                        . "</td><td class =\"fkb_datatable\">" . $row["$fieldnames[3]"]
                                        . "</td><td class =\"fkb_datatable\">" . $row["$fieldnames[4]"]
                                        . "</td></tr>\n\r";
//                                    class ='kdb_datatable kdb_DataTableDetailedInfo'
                                    $rowcount = $rowcount +1;
                                    echo "<tr id =\"row$rowcount\" value =\"$rowcount\" style='display:none'><td colspan='5'>
                                           <div id='1' class ='kfb_DataTableDetailedInfo'>
                                           <ul>
                                           <li> <b>Sponsor:</b> " . $row["$fieldnames[1]"] . " " . $row["$fieldnames[0]"]. "</li>"
                                        . "<li> <b>$fieldnames[2]:</b> " . $row["$fieldnames[2]"] ."</li>"
                                        . "<li> <b>$fieldnames[3]:</b> " . $row["$fieldnames[3]"] ."</li>"
                                        . "<li> <b>$fieldnames[4]:</b> " . $row["$fieldnames[4]"] ."</li>"
                                        . "<li> <b>$fieldnames[5]:</b> " . $row["$fieldnames[5]"] ."</li>"
                                        . "<li> <b>$fieldnames[6]:</b> " . $row["$fieldnames[6]"] ."</li>"
                                        . "<li> <b>$fieldnames[7]:</b> " . $row["$fieldnames[7]"] ."</li>"
                                        . "<li> <b>$fieldnames[8]:</b> " . $row["$fieldnames[8]"] ."</li>"
                                        . "<li> <b>$fieldnames[9]:</b> " . $row["$fieldnames[9]"] ."</li>"
                                        ."</ul></div></td>";
                                    echo "</td></tr>\n\r";
//                                    echo "<h2>test</h2>";

                                }
                            }
                            else
                            {
                                //print_r($result);
                                echo "0 results";
                            }

                            ?>
                        </table>
                    </div> <!-- div5 -->






                    <div id = closesql class="pageblock" style="margin-top: 10px; display:none;">
                        <H3>Closing SQL connection</H3>
                        <?php>
                        //$sql = "ROLLBACK";
                        //$conn->query($sql);
                        mysqli_close($conn);
                        ?>
                    </div> <!--id = closesql -->





                </div>

                <!-- main end -->

                <!-- sidebar start -->
                <!-- ================ -->

                <?php #include "kfb_sidebar.php" ?>

                <!-- sidebar end -->

            </div>

        </div>

    </section>
    <!-- main-container end -->



</div>
<!-- page-wrapper end -->
</div>
<!-- sidebar start -->


<?php include "kfb_footer.html" ?>
</body>
<html>