	<?php include("config.php"); ?>
	<?php include("header.php"); ?>
<html>
        
                <div id="pagecontainer">
			<div id="background">
				<?php     
                    //Connection to database. You find the server name, user name, password of your database in phpmyadmin in Privileges section.
                   // $dbserver, $dbuser, ...,  can be found in config.php
                    @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname); 
                    if ($db->connect_error) {
                        echo "could not connect: " . $db->connect_error;
                        printf("<br><a href=home.php>Return to home page </a>");
                        exit();
                    }
                    //

                    // This  following part is adding a book to the database. TODO: Unique title/author combination
                    //  $sql= "INSERT INTO books (title, author) VALUES ('Alan and Naomi', 'Levoy Myron')";
                    // if ($db->query($sql) != true){
                    //     echo "Error " . $sql . "<br>" . $db->error;
                       
                    // }
                    // else{
                    //      echo "book added";
                    //      printf("<br><a href=home.php>Return to home page </a>");
                    //      exit();
                    // }
                    


                    // This  following part is retrieving all the books from the database and storing it into $database.
                    $sql = "SELECT * FROM books";
                    $database = array();
                    $result = $db->query($sql);
                    if ($result != true){
                        echo "Error " . $sql . "<br>" . $db->error;
                        exit();
                    }
                    while($row = $result->fetch_assoc()) {
                        $database[] = ["title" => $row["title"], "author" => $row["author"], "bookid" => $row["bookid"]];
                    }
                    $db->close();
                    //


                                // array [Test, Test, Test]
					// $database[] = ["title" => "Jumanji", "author" => "Allsburg Chris Van"];
					// $database[] = ["title" => "Out of Reach", "author" => "Arcos Carrie"];
					// $database[] = ["title" => "Tiger Eyes", "author" => "Blume Judy"];
					// $database[] = ["title" => "Breakout", "author" => "Fleischman, Paul"];
					// $database[] = ["title" => "Julie of the Wolves", "author" => "George Jean Craighead"];
					// $database[] = ["title" => "Godless", "author" => "Hautman Pete"];
					// $database[] = ["title" => "Alan and Naomi", "author" => "Levoy Myron"];
				?>

					<div id="form_container">
					<h3>Search a book</h3>
						 <form action="browse_books.php" method="GET">
						 	<table cellpadding="6">
							 	<tbody>
							 		<tr>
										<td>By title:</td><br>
										<td><input type="text" name="searchtitle"></td><br>
									</tr>
									<tr>
										<td>By author:</td><br>
										<td><input type="text" name="searchauthor"></td><br><br>
									</tr>
									<tr>
										<td></td>
										<td><input type="submit" class="button"></td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
			
				

			</div>

		<h2>Results</h2>
	 <?php


    if (isset($_GET) && !empty($_GET)) { 
        $searchtitle = trim($_GET['searchtitle']); #remove white space for array
        $searchauthor = trim($_GET['searchauthor']);
        $searchtitle = addslashes($searchtitle); #add slashes in case of'
        $searchauthor = addslashes($searchauthor);
        $searchtitle= htmlentities($searchtitle);
        $searchauthor= htmlentities($searchauthor);

        $searchtitle= mysqli_real_escape_string($db, $searchtitle); 
        $searchauthor= mysqli_real_escape_string($db, $searchauthor);

        // Find multiple ids from the arrays.

        $title_columns = array_column($database, "title");
        $author_columns = array_column($database, "author");

        //$id = array_keys($title_columns, $searchtitle); #array in this case ?=database
       // $ib = array_keys($author_columns, $searchauthor);
        echo '<table bgcolor="#EC671B" cellpadding="6">';
        echo '<tr><b><td>Title</td> <td>Author</td> <td>Reserve</td> <td>Return</td> </b> </tr>';
        if (!empty($searchtitle)) { // Put $id !== FALSE if not using MY_ARRAY_KEYS
            $id = my_array_keys($title_columns, $searchtitle);
            foreach ($id as $key => $value) {
                $book = $database[$value];
                $title = $book['title'];
                $author = $book['author'];
                $bookid = $book['bookid'];
                echo "<tr>";
                echo "<td> $title </td><td> $author </td>";
                echo '<td><a href="reserve.php?reservation=' .  urlencode($title) . '&bookid=' . urlencode($bookid) . '"> Reserve </a></td>'; #not clear
                echo "</tr>";
            }
        }
        elseif (!empty($searchauthor)){  // Put $ib !== FALSE if not using MY_ARRAY_KEYS
            $ib = my_array_keys($author_columns, $searchauthor);
            foreach ($ib as $key => $value) {
                $book = $database[$value];
                $title = $book['title'];
                $author = $book['author'];
                $bookid = $book['bookid'];
                echo "<tr>";
                echo "<td> $title </td><td> $author </td>";
                echo '<td><a href="reserve.php?reservation=' .  urlencode($title) . '&bookid=' . urlencode($bookid) . '"> Reserve </a></td>'; #not clear
                echo "</tr>";
                

            }
        }
        echo "</table>";
    }
    else {             
        echo '<table bgcolor="#EC671B" cellpadding="6">';
        echo '<table cellpadding="6">';
        echo '<tr><b><td>Title</td> <td>Author</td> <td>Reserve</td> </b> </tr>';
        foreach ($database as $book) {
            $title = $book['title'];
            $author = $book['author'];
            $bookid = $book['bookid'];
            echo "<tr>";
            echo "<td> $title </td><td> $author </td>";
            echo '<td><a href="reserve.php?reservation=' . urlencode($title) . '&bookid=' . urlencode($bookid) . '"> Reserve </a></td>';//urlencode function to encode a string to be used in a query part of URL
            echo '<td><a href="returnBook.php?return=' . urlencode($title) . '&bookid=' . urlencode($bookid) . '"> Return </a></td>';
            echo "</tr>";
        }
        echo "</table>";
    }

    function my_array_keys($array, $name){
        $id = array();
        foreach ($array as $key => $value){
            $value_low = strtolower($value);
            $name_low = strtolower($name);
            if (strpos($value_low, $name_low) !== false){
                array_push($id, $key);
            }
        }
        return $id;
    }

    ?>
	<?php include("footer.php"); ?>
                
	</body>
        </div> <!-- closes page container-->
</html>