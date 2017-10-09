	<?php include("config.php"); ?>
	<?php include("header.php"); ?>	
<html>
        <div id="pagecontainer">
		<div id="background">
			<div id="form_container">
				<form id="contact_form">
					<label>Reason</label>
						<select>
						  <option value="About a book">About a book</option>
						  <option value="Delivery">Delivery</option>
						  <option value="Payment">Payment</option>
						  <option value="Suggestions and Feedback">Suggestions and Feedback</option>
						</select><br><br>
					<label>Name</label>
						<input type="text" name="name"><br><br>
					<label>Email</label>
						<input type="text" name="email"><br><br>
					<label>Phone</label>
						<input type="text" name="phone"><br><br>
					<br><br>
					<div id="middle_button">
						<input type="submit" class="button" id="submit">
                                        </div>
                        </div>
                                </form>
                </div>
				
			
			<p id="book_list"></P>
        
              
	<?php include("footer.php"); ?>
	</body>
        </div> <!-- closes page container-->
</html>