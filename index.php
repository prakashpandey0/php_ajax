<!DOCTYPE html>
<html>
<head>
<title>Submit Form Using AJAX and jQuery</title>

</head>
<body>

<h2>Submit Form Using AJAX and jQuery</h2> <!-- Required div Starts Here -->
<div id="display"></div>

<label>Name :</label>
<input id="name" type="text" id="name">

<input id="submit" type="button" value="Submit">


</body>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
$("#submit").click(function(){
var name = $("#name").val();
console.log(name);

// Returns successful data submission message when the entered information is stored in database.
if(name=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "db.php",
data: {fname: name},
cache: false,
success: function(result){
	alert("data submitted");
	display();
}
});
}
return false;
});
});
	function display(){
		$.ajax({
			type: "POST",
			url: "db.php",
			data: {
				display: 1
			},
			success: function(data){
				$("#display").html(data);
			}
		});

		
	}
</script>