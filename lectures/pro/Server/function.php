<?php
require "db_connect.php";
    function getCat ()
    {

        global $con;

        $getCatQuery = "select* from categories";
        $result = mysqli_query($con, $getCatQuery);
        while ($row = mysqli_fetch_assoc($result)) {

            $title = $row['Cat_name'];
            $id = $row['Cat_id'];
            echo "<li><a class='nav-link' href='#'>$title</a></li>>";
    }

    }

function getBrand ()
{

    global $con;

    $getCatQuery = "select* from brands";
    $result = mysqli_query($con, $getCatQuery);
    while ($row = mysqli_fetch_assoc($result)) {

        $title = $row['Brand_name'];
        $id = $row['Brand_id'];
        echo "<li><a class='nav-link' href='#'>$title</a></li>>";
    }

}