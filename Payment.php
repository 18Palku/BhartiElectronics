<!doctype html>
<html>
<head>
<title>form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row { 
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; 
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%;
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; 
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
a.btn {
    text-decoration: none;
    text-transform: capitalize;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }}
  </style></head>
  <body>
  <div class="row">
<div class="col-50">
 <div class="col-75">
 <div class="container">



<?php 
$link = mysqli_connect("localhost", "root", "" ,"mobile");

// check connections 
if($link===false){
	die("error could not connect".mysqli_connect_error())	;
}
$fname=mysqli_real_escape_string($link,$_REQUEST['firstname']);
$mobname=mysqli_real_escape_string($link,$_REQUEST['mobile']);
$number=mysqli_real_escape_string($link,$_REQUEST['contact']);
$email=mysqli_real_escape_string($link,$_REQUEST['email']);
$address= mysqli_real_escape_string($link,$_REQUEST['address']);
$city=mysqli_real_escape_string($link,$_REQUEST['city']);
$state=mysqli_real_escape_string($link,$_REQUEST['state']);
$zip=mysqli_real_escape_string($link,$_REQUEST['zip']);





/*
$Insert="Insert into billing1('',Full Name,Product Name,Phone Number ,Email , Address ,City,State,Zip)
values('', '$fname','','$number','$email',$address,'$city','$state','$zip')";
*/
// $Insert ="INSERT INTO `billing1`( `firstname`, `mobile`, `contact`, `email`, `address`, `city`, `state`, `zip`) 
// VALUES ('$fname','$mobname','$number','$email','$address','$city','$state','$zip')";

$Insert = "INSERT INTO `billing1`(`firstname`, `mobile`, `contact`, `email`, `address`, `city`, `state`, `zip`) 
VALUES ('$fname','$mobname','$number','$email','$address','$city','$state','$zip')";

if( mysqli_query($link,$Insert))
	
{
		echo"value inserted  successfully";
}
else
{
echo"couldnot insert value".mysqli_error($link);

}
?>





 <form>
      
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
			<!-- <input type="submit" value="Confirm Payment" onclick="payment()" class="btn"> -->
      <a href="androidstore.php" class="btn" role="button">confirm Payment</a>
       <!-- <script>  
          function payment(){
             alert("Your payment has been successful");
           }
      </script> -->
			</form>
          </div>
		  </div>
		  </div>
		  </div>
          
      
		</body>
		</html>