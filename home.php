<?php include("config.php"); ?>
<?php include("header.php"); ?>	
<html>
    
        <div id="pagecontainer">
                                <div class="slideshow-container">				  
				  <div class="mySlides fade">
				    <img src="home/img1.jpg" style="width:100%">
				    <div class="text">No two persons ever read the same book.–Edmund Wilson</div>
				 </div>
				  <div class="mySlides fade">
				    <img src="home/img2.jpg" style="width:100%">
				    <div class="text">Some books leave us free and some books make us free.–Ralph Waldo Emerson</div>
				  </div>
				  <div class="mySlides fade">
				    <img src="home/img3.jpg" style="width:100%">
				    <div class="text">A book is a dream that you hold in your hand.–Neil Gaiman</div>
				  </div>
				  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				  <a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
				
				<div style="text-align:center">
				  <span class="dot" onclick="currentSlide(1)"></span> 
				  <span class="dot" onclick="currentSlide(2)"></span> 
				  <span class="dot" onclick="currentSlide(3)"></span> 
				</div>

				 <div class="container">
			        <main class="maincolumn">
			        	<h2>Once Upon a Book</h2>
			        	<p>Welcome to Once Upon a Book, the world's online book library. We're proud to offer over 17 million titles, all at unbeatable prices with free delivery worldwide to over 100 countries. Whatever your interest or passion, you'll find something interesting in our library full of delights.</p>
			        	</main>
			        <aside class="sidecolumn">
			        	<h2>Why are we making as many books available as possible?</h2>
			        	<p>Of the 30 million titles ever printed in the English language only a few million of these are in print. We are seeking to make available as many of these titles as possible (and working to do the same with foreign language titles). This way, we will have the largest breadth of titles available in the world.</p>
			        	</aside>
                                </div>
                             
<?php include("footer.php"); ?>
	<script type="text/javascript" src="home.js"></script>
	</body>
        </div>
</html>