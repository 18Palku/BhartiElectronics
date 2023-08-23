<!DOCTYPE html>
<html>
<head>
	<style>
	
	table,th,tr,td {
    border: 1px solid #000;
	padding: 20px 20px 20px 20px;
}
body {
    margin: 0 auto;
}      
.Hundred {
    width: 100%;
   float: left;
       background: #9bcfe0;
    /*padding: 8px 1px 3px 0px;*/
}
.Ninty {
    width: 90%;
    margin: 0 auto;
}
.Twenty {
    float: left;
    width: 20%;
}
.eighty {
    width: 80%;
    float: right;
}
li.H {
    padding: 0 0 0 134px;
}
a {
    color: black;
    text-decoration: none;
}
img.logo {
    width: 74px;
}
ul.alpha {
    list-style-type: none;
    display: inline-flex;
    font-size: 19px;
    font-style: inherit;
}
li.NR {
    position: relative;
    padding-left:134px ;
}

li.c {
    padding-left: 132px;
}
ul.NR1 {
    position: absolute;
    list-style: none;
    left: 40%;
    width: 206px;
    line-height: 2;
    top: 21px;
    padding: 0;
    background-color: #00bbff;
    display: none;
}
li.NR:hover ul.NR1 {
    display: block;
}
li.dropdown {
    padding: 0;
    color: red;
    border: 1px solid #ccc5;
}

ul.C1 {
    position: absolute;
    width: 8%;
    right: 0%;
    line-height: 2;
    list-style: none;
    top: 39px;
    background: lightpink;
    display: none;
    padding: 10px;
}
li.c:hover ul.C1 {
    display: block;
}


img.logo {
    width: 61%;
    height: 56px;
}

/******   hundred 1 completed here */
	
/***footer section started here  */
.footer {
    width: 100%;
    float: left;
    background-color: #00438ba1;
    color: white;
}
.foot_section1 {
    width: 25%;
    float: left;
    padding-left: 20px;
}
p.de {
    font-size: 22px;

}
p.te {
    font-size: 15px;
    line-height: 2;
}
.foot_section2 {
    float: left;
    width: 25%;
	/*padding-left:30px;*/
}
p.le {
    
    font-size: 15px;
    padding-left: 20px;
	 line-height: 2;
}
p.me {
    padding-left: 20px;
    font-size: 23px;
}
.foot_section3 {
    width: 25%;
    float: left;
		/*padding-left:60px;*/
}
p.about {
    font-size: 23px;
   /* padding: 0 0 0 128px;*/
    
}

.foot_section4 {
    width: 23%;
    float: right;
}
p.nw {
    font-size: 23px;
}
p.paragraph1 {
    line-height: 1.5;
}
a {
    text-decoration: none;
   /*color: white;*/
}
li {
    list-style-type: none;
}
ul.parha {
    line-height: 2;
    font-size: 14px;
   
    padding-left: 0;
}
i.fa.fa-star {
    color: orangered;
    padding-left: 2px;
    font-size: 18px;
}
input.eml {
    text-align: center;
    width: 215px;
    height: 40px;
    font-size: 17px;
    color: white;
    border: white;
    padding-top: 0px;
    background-color: #b9d6ff;
    border-radius: 47px;
	
}
i.fa.fa-facebook-square {
    font-size: 25px;
	color:white;
}
i.fa.fa-linkedin-square {
    font-size: 25px;
	padding-left: 4px;
	
}
i.fa.fa-instagram {
    font-size: 25px;
	padding-left: 4px;
	
}
i.fa.fa-youtube-square {
    font-size: 25px;
	padding-left: 4px;
	
}
p.footsub {
    
    text-align: center;
}
.footer_sub {
    background: #ff9000c4;
    float: left;
    width: 100%;
}
.about{
    color: #fff;
}



</style>
</head>

<body>
  <!-- top header -->
  <div class="Hundred">
            <div class="Ninty">
                <div class="Twenty">
            <a href="androidstore.php"><img class="logo" src=  "images/logo4.webp";></a>
                </div>
                    <div class="eighty">
                        <ul class="alpha">
                        <li class="H"> <a href="androidstore.php">Home</a>
                            <ul class="H1"></ul>
                        </li>
                        <li class="H"> <a href="#main_content2">About</a>
                            <ul class="A1"></ul>
                        </li>
                        <li class="NR"> <a href="#">New Releases</a>
                                <ul class="NR1">
                                  <a href="vivo.php"><li class="dropdown">Vivo V25 Pro 5G</li></a>
                                  <a href="oppo.php">  <li class="dropdown">OPPO Reno8</li></a>
                                 <a href="oneplus.php">   <li class="dropdown">OnePlus 10T</li></a>
                                  <a href="mi.php"><li class="dropdown">Xiaomi Redmi K50i</li></a>
                                </ul>
                            </li>
                            <li class="H"> <a href="#">Best sellers</a>
                        <ul class="BS1"></ul>
                        </li>
                            <li class="c"><a href="#">Contact</a>
                        <ul class="C1">
                            <li class="dd">1234567</li>
                            <li class="dd">12345</li>

                        </ul>
                        
                        </li>

                        </ul>

                    </div>
                </div>
            
        </div>











<?php
$link=mysqli_connect("localhost","root","", "mobile");
//checking connections
if($link===false)
{
	die("ERROR could'nt connect".mysqli_connect_error());
}
$sql="select*from billing1";
if($result=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($result)>0)
	{
		echo"<center><table>";
		echo"<tr>";
		echo"<th>id</th>";
		echo"<th>First Name</th>";
		echo"<th>mobile</th>";
		echo"<th>phone</th>";
		echo"<th>email</th>";
		echo"<th>address</th>";
		echo"<th>city</th>";
		echo"<th>state</th>";
		echo"<th>zip</th>";
		echo"<th>bought_at</th>";
		echo"</tr>";
		while($row=mysqli_fetch_array($result)){
			echo"<tr>";
			echo"<td>".$row['id']."</td>";
		    echo"<td>".$row['firstname']."</td>";
		    echo"<td>".$row['mobile']."</td>";
		    echo"<td>".$row['contact']."</td>";
		    echo"<td>".$row['email']."</td>";
		    echo"<td>".$row['address']."</td>";
		    echo"<td>".$row['city']."</td>";
		    echo"<td>".$row['state']."</td>";
		    echo"<td>".$row['zip']."</td>";
		    echo"<td>".$row['Bought_at']."</td>";
			echo"</tr>";
		}
		echo "</table></center>";
		mysqli_free_result($result);
	}
	
		else
		echo "No Record Found";
}
else{
	echo "Error".mysqli_error($link);
	mysqli_close($link);
}
?>

<!--footer section starts here-->
<div class="footer">
    <div class="Ninty">
         <div class="foot_section1">
                         <p class="de"><u>Contact Us</u></p>
                         <p class="te">Call us (10 AM - 7 PM) IST<br>
                            04035616279</p>
                 <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                  <i class="fa fa-instagram" aria-hidden="true"></i>
<i class="fa fa-youtube-square" aria-hidden="true"></i>
</div>
<div class="foot_section2">
   <p class="me"><u>Policy</u></p>
  <p class="le">Privacy policy<br>
       Return & Refund Policy<br>
        Cancellation Policy
  </p>

</div>
   

<div class="foot_section3">
    <p class="about"><u>About</u> </p>
    <ul class="parha"><a class="about" href="#"><li>About Us</li>
     <li>Contact Us</li><li>Our Store</li>
     <li>Blogs</li>
      <li>Terms and Conditions</li></a></p>
</div>



<div class="foot_section4">

    <p class="nw"><u>Newsletter</u></p>
     <p class="paragraph1">Subscribe our newsletter to get our <br>latest updates & news.</p>
   <form>
        
       <input class="eml" type="email" placeholder="Enter Email Address"></form>
        <br ><p class="paragraph3">
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		 We never gonna spamming</p>

</div>

</div>
</div>
<!--Sub footer section starts here-->
<div class="footer_sub">
<div class="Ninty">
<p class="footsub">&copy Palak Bharti  U Rollno:20010203035 </p>

</div>
</div>






</body>
</html>