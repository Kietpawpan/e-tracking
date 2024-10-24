<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/iRequest.css">
    <link rel="stylesheet" href="css/chat.css">
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
            <img class="dpimg" onclick="openFullScreenDP()" src="images/mnre.png" style="width:30px" alt="">
            <div class="personalInfo">
                <label id="name">ศูนย์บริการร่วม ทส.</label>
                <label 
			id="lastseen">&copy; 2024 
			
			<font color='#94bab3'>MNRE SLC
			</font>
			| <a style="color:#94bab3;text-decoration:none" href="help.php">Help</a>
			| <a style="color:#94bab3;text-decoration:none;" href="feedback.php">Feedback</a> 
			| <a style="color:#94bab3;text-decoration:none" href="index.php">Home</a> 					
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
		value="e-Tracking Report" 
		title="ID">

 	<div 
		class="scrollable" 
		id="myScrollable">
      	<div 
		id="chatting" 
		class="chatting">

		<ul id="Answer">
   			<li><a>
<!--
<form method="post" action="updateResult.php">
<input type="hidden" name="username" value="<?php echo $name; ?>">
-->

<?php 
$Y0 = 2567;
$Y1 = idate("Y")+543;
if($Y0<$Y1){$wYear=$Y0 . "-" . $Y1;}
else{$wYear = $Y1;}
$name = hash("sha3-512", $_POST["name"]);

$filename = "customers/" . $name . ".php";
if (is_file($filename)) {
		include "customers/" . $name . ".php";
		$progress = array_search($name, $u);
		echo "<i class='fa fa-unlock' style='color:dimgrey';> Customer ID: XXXXXXXXXX" . substr($_POST["name"],10) . "</i><br><br><i class='fa fa-info-circle' style='color:;'></i> " . $progress ;
} else {
echo "<h4> ERR_001_ID_ERROR</h4><i class='fa fa-warning' style='color:red';> Wrong ID!</i><br><i class='fa fa-hand-o-right'></i> Please Enter A Correct National ID<br>โปรดกรอกหมายเลขประชาชนที่ถูกต้อง";}
?>
</a></li>
<li><a href="javascript:history.go(-1)"><i class='fa fa-angle-left' style='font-size:20px;color:#0096FF'> Back</i></a></li>


</div><br>

<br>


</div>
       	</a>
	</li>
     
</div>
</div>

<br>
<!HIDE PIN CODE>
	<script type='text/javascript'>
        	const togglePassword = document.querySelector("#togglePassword");
	        const password = document.querySelector("#name");
        	togglePassword.addEventListener("click", function () {
	            const type = password.getAttribute("type") === "password" ? "text" : "password";
        	    password.setAttribute("type", type);
                    this.classList.toggle("bi-eye");
	        });
    	
    	</script>


</body>
</html>
