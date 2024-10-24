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

<?php 
$Y0 = 2567;
$Y1 = idate("Y")+543;
if($Y0<$Y1){$wYear=$Y0 . "-" . $Y1;}
else{$wYear = $Y1;}
?>
<title>MNRE | e-Tracking</title>

</head>

<body>
    	<nav>
        <div class="navbar">
            <img class="dpimg" onclick="openFullScreenDP()" src="images/mnre.png" style="width:30px" alt="">
            <div class="personalInfo">
                <label id="name">ศูนย์บริการร่วม ทส.</label>
                <label 
			id="lastseen">&copy; <?php echo $wYear ?> 
			
			<font color='#94bab3'>MNRE SLC 
			 | <a style="color:#94bab3;text-decoration:none" href="help.php">Help</a> 
			| <a style="color:#94bab3;text-decoration:none" href="index.php">e-Tracking</a>  
	        | <a style="color:#94bab3;text-decoration:none" href="update.php">Update</a> 
			</font>
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
		value="e-Tracking Update" 
		title="ID">

 	<div 
		class="scrollable" 
		id="myScrollable">
      	<div 
		id="chatting" 
		class="chatting">

		<ul id="Answer">
   			<li><a href="#">
<?php 
$pin =  htmlspecialchars($_POST["pin"]);
$name = hash("sha3-512", $_POST["name"]);
$progress = $_POST["progress"];
$filename = "customers/" . $name . ".php";
$d = date("m/d/Y");
$code = md5($d);
$otp = substr($code,0, 6);
if($pin!==$otp){echo "Error 02 Wrong OTP!";}
else{
		$file= fopen($filename, "w");
		$code = "<?php" . "\n$" . "u=array" ."('" . $progress . "'=>'" . $name ."',);?>" ;
		fwrite($file, $code);
		fclose($file);
		include "customers/" . $name . ".php";
		$progress = array_search($name, $u);
		echo "<i class='fa fa-check-square-o ' style='color:dimgrey';> " . $_POST["name"] . " Updated Successfully" ."</i><br><i class='fa fa-info-circle' style='color:;'> " . $progress . "</i>";} 
?>

</a></li>
<li><a href="javascript:history.go(-1)"><i class='fa fa-angle-left' style='font-size:20px;color:#0096FF'> Back</i></a></li>
			<br>
		
			<br>

	




</div><br>

<br>


</div>
       	</a>
	</li>
        <li><center><div id="copyRight"></div></center></li>
</div>
</div>

<br>
<!HIDE PIN CODE>
	<script type='text/javascript'>
        	const togglePassword = document.querySelector("#togglePassword");
	        const password = document.querySelector("#input");
        	togglePassword.addEventListener("click", function () {
	            const type = password.getAttribute("type") === "password" ? "text" : "password";
        	    password.setAttribute("type", type);
                    this.classList.toggle("bi-eye");
	        });
    	
    	</script>


</body>
</html>
