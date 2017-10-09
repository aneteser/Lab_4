
		<head>	
			<title>home</title>
			<meta charset="utf-8">
			<link href="http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900" rel="stylesheet" type="text/css">
			<link href="home.css" type="text/css" rel="stylesheet" />
			<link href="navigation.css" type="text/css" rel="stylesheet" />
                        <link href="background.css" type="text/css" rel="stylesheet" />
			<link rel="stylesheet" href="footer-distributed-with-address-and-phones.css">
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
			<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

		</head>
	<body>
		
			<div class="topnav" id="myTopnav">
                        <p> <a class="<?php echo ($current_page == 'home.php' || $current_page == '') ? 'selected' : NULL ?>" href="home.php"> Home </a> </p> 
		        <p> <a class="<?php echo $current_page == 'about_us.php' ? 'selected' : NULL ?>" href="about_us.php"> About us </a> </p>
		        <p> <a class="<?php echo $current_page == 'browse_books.php' ? 'selected' : NULL ?>" href="browse_books.php"> Browse books </a> </p>
		        <p> <a class="<?php echo $current_page == 'my_books.php' ? 'selected' : NULL ?>" href="my_books.php"> My books </a> </p>
                        <p> <a class="<?php echo $current_page == 'gallery.php' ? 'selected' : NULL ?>" href="gallery.php"> Gallery </a> </p>
		        <p> <a class="<?php echo $current_page == 'contact.php' ? 'selected' : NULL ?>" href="contact.php"> Contact </a> </p>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
                        </div>

