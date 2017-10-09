<?php include("header.php"); ?>	
    <?php include("config.php"); ?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

          
// Get the title of the book we're reserving (from the URL)
            $reservedbook = urldecode($_GET['reservation']);
            $bookid = intval(urldecode($_GET['bookid']));

            //Create the databse
            @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

            // Create the update query
            $sql =  "UPDATE books SET onloan=true WHERE bookid=" . $bookid;

            // Execute the query
            if ($db->query($sql) != true){
                echo "Error:" . $db->error;
                exit();
            }
            //intval("42")-> 42
            //intval(42) -> 42
            //intval('42ejoewijewiojgi') ->42
            $db->close();
            session_start();
            if (!isset($_SESSION['reservedbooklist']))
                $reservedbooklist = "";
            else
                $reservedbooklist = $_SESSION['reservedbooklist'];     
// The list is maintained as a single string
// with the titles separated by slashes
            $reservedbooklist = $reservedbooklist . "/" . $reservedbook;
            $_SESSION['reservedbooklist'] = $reservedbooklist;
            
            
            
            echo "Thank you.<br>\"$reservedbook\" has been added to your reservation list";
            echo "<br><a href=home.php>Return to home page</a>";
            ?>
<?php include("footer.php"); ?>