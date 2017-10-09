	<?php include("config.php"); ?>
	<?php include("header.php"); ?>
<html>
        <div id="pagecontainer">
            
            <h1>Reserved books</h1>
	<?php 
	@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname); 
        if ($db->connect_error) {
            echo "could not connect: " . $db->connect_error;
            printf("<br><a href=home.php>Return to home page </a>");
            exit();
        }
        $sql = "SELECT title, author FROM books WHERE onloan=1";
        $result = $db->query($sql);
        if ($result!= true){
        	echo "Error: $sql </br> $db->error";
        }
		echo '<table cellpadding="6">';
        echo '<tr><b><td>Title</td> <td>Author</td> </b> </tr>';
        //Fetch assoc will give you each book one by one from the database. We loop on it to get all the books.
         while($book = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" .$book["title"] . "</td><td>" . $book["author"] . "</td>";
            echo "</tr>";
         }
         echo "</table>";
	 ?>
	<?php include("footer.php"); ?>
	
		<script type="text/javascript" src="my_books.js"></script>
	</body>
        </div>
</html>