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
                        <h2>Volunteer List </h2>
                        TODO: Add Detail form that displays full volunteer information.
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



                    <!-- List Volunteers1  -->
                    <div id = "div5" name ="div5" class="pageblock" style=" margin-top: 10px;" >
                        <H3>List of Volunteers</H3>


                    <?php
                    $sqlfile = file_get_contents("kfb_volunteer_list.sql");
                    ?>

                        <H1> TESTABCD List of Volunteers</H1>




                    <!-- List Volunteers  -->
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


                    <table>

                        <?php

                        # echo "var dump::  var_dump($result->fetch_field()[0]->name);";
                        $fieldnames = [];
                        if ($result->field_count > 0)
                        {
                            echo "<tr>";

                            while($field = $result->fetch_field() )
                            {
                                $fieldnames[] = $field->name;
                                echo "<th class =\"fkb_datatable\" style = \"text-align: left; width: 250px;  border: 0px solid black;   \">". $field->name . "</th>";
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
                                $rowcount = $rowcount +1;

                                echo "<tr id =\"row$rowcount\" class =\"fkb_datatable\"><td class =\"fkb_datatable\"  style = \"text-align: left ; nth-child(even); !important;\">". $row["$fieldnames[0]"]
                                    . "</td class =\"fkb_datatable\"><td class =\"fkb_datatable\">" . $row["$fieldnames[1]"]
                                    . "</td class =\"fkb_datatable\"><td class =\"fkb_datatable\">" . $row["$fieldnames[2]"]
                                    . "</td class =\"fkb_datatable\"><td class =\"fkb_datatable\">" . $row["$fieldnames[3]"]
                                    . "</td class =\"fkb_datatable\"><td class =\"fkb_datatable\">" . $row["$fieldnames[4]"]
                                    . "</td></tr>\n\r";
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