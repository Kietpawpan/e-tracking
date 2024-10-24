<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/iRequest.css">
	    <link rel="stylesheet" href="css/monte.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/png" href="../img/krut.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
    

<title>MNRE | e-Tracking</title>

</head>

<body>
    	<nav>
        <div class="navbar">
            <img class="dpimg" onclick="openFullScreenDP()" src="images/mnre.png" style="width:27px" alt="">
            <div class="personalInfo">
                <label id="name">MNRE Service Link Center</label>
                 <label 
			id="lastseen">&copy; <?php if(date("Y") ==2024){echo date("Y");}else{echo '2024 - ' .date ("Y");} ?> MNRE SLC | 
			<a style="color:#94bab3;text-decoration:none" href="help.php">Help</a> 
			| <a style="color:#94bab3;text-decoration:none" href="index.php">Home</a>  
	   		| <a style="color:#94bab3;text-decoration:none" href="license.php">License</a>  

			</a>
		</label>
		<br>
           </div>
    </div>
    </nav>
	<input 
		style='color:black;
			background-color:lightgrey;
			border-color:grey' 
		type="text" 
		id="Question" 
		value="Send Feedback To" 
		title="ID">

 	<div 
		class="scrollable" 
		id="myScrollable">
      	<div 
		id="chatting" 
		class="chatting">

		<ul id="Answer">
		<li><a href="#">
<style>
.chip {
  display: inline-block;
  padding: 0 25px;
  height: 50px;
  font-size: 16px;
  line-height: 50px;
  border-radius: 25px;
  background-color: #f1f1f1;
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
}
</style>
</head>
<body>

<?php
$right = gmdate("Y");
$version = substr(gmdate("Y"),-2, -1) ."." .substr(gmdate("y"),-1) ;
 
?>
<img src="images/mnre.png" width="50px"><div class="slc">MNRE Service Link Center</div><br>
<div class="mnre"><b>Ministry of Natural Resources and Environment</b></div><hr class="orgline"><div class="mnreAddress">92 Soi Phahonyothin 7, Phahonyothin Rd., Phayathai, Bangkok 10400, THA</div>

<div class="myName"><b></b>
<div class="chip">
  <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Person" width="96" height="96">
 ศูนย์บริการร่วม ทส.
</div>
</div>

<div class="myPost"></div>
<div class="myContact">
<i class="fa fa-window-maximize"></i> &nbsp;<button class="btn" style="border-radius:5px;padding: 5 5 5 5;" onclick="location.replace('../comment/index.php')">Comment Box</button><br>
<i class="fa fa-bus"> </i> &nbsp;BTS Ari + Tuk Tuk (<font color="orange">฿20.00</font>)<br>
<i class="fa fa-envelope-o"></i> &nbsp;servicelinkcenter@mnre.go.th<br>
<i class="fa fa-phone"></i> &nbsp;0 2265 6224-5: 8am to 5pm (weekdays)
</div>
<li><a href="javascript:history.go(-1)"><i class='fa fa-angle-left' style='font-size:20px;color:#0096FF'> Back</i></a></li>

</a></li>
</ul>

</body>
</html>