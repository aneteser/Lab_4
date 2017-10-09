

var books = [];

function addBook() {
	var str = document.getElementById("title").value;
    books.push(str);
    document.getElementById("title").value='';// Making the text box blank
    disp();
}

function disp(){
	var str='';
	for (i=0;i<books.length;i++) 
	{ 
		str += i + ' : '+books[i] + "<br >";  // adding each element with key number to variable
	} 
	document.getElementById("book_list").innerHTML=str;
}

	 // Display the elements of the array
