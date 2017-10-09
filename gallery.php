	<?php include("config.php"); ?>
	<?php include("header.php"); ?>	



<html>
    <div id="pagecontainer">
		<div id="background">

<body>


<?php
@ $db = new mysqli('localhost', 'root', '', 'testinguser');

if ($db->connect_error) {
    echo "could not connect: " . $db->connect_error;
    printf("<br><a href=index.php>Return to home page </a>");
    exit();
}

if (isset($_POST['username'], $_POST['userpass'])) {
    #with statement under we're making it SQL Injection-proof
    $uname = mysqli_real_escape_string($db, $_POST['username']);
    
    $upass = sha1($_POST['userpass']);

    #echo $upass;
    
    $query = ("SELECT * FROM user WHERE username = '{$uname}' "."AND userpass = '{$upass}'");
       
    
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->store_result(); 
    
    #here we create a new variable 'totalcount' just to check if there's at least
    #one user with the right combination. If there is, we later on print out "access granted"
    $totalcount = $stmt->num_rows();
    
    
    
}
?>


<html>
    
        <?php
        
        
        
        if (isset($totalcount)) {
            if ($totalcount == 0) {
                echo '<h2>You got it wrong. Please enter valid password or username!</h2>';
            } else {
                echo '<h2>Welcome! Now you can upload your images.</h2>';
                echo '<h2>Click on the link to upload your images</h2>';
                echo '<a href="fileUpload.php">Click on the link to upload an image</a>';
                    
               
            
        }
        }
  ?>
    <html>
        <form method="POST" action="">
            <input type="text" name="username">
            <input type="password" name="userpass">
            <input type="submit" value="Go">
        </form>
    </html>
    

        <ul id="imgList">
                <?php
                /*Added a loop that iterates through the img folder, and adds each element into the img list*/
                $dir = new DirectoryIterator("uploadedfiles");
                foreach ($dir as $fileinfo) {
                    if (!$fileinfo->isDot()) {
                    echo "<li><img src=\"uploadedfiles/" . $fileinfo->getFilename() . "\"></li>";
                    }
                }
                ?>
        </ul>

    
</body>

        </div>
        </div>
	<?php include("footer.php"); ?>
	</body>
       
</html>