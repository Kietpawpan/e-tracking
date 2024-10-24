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
                <label id="name">กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม</label>
                <label 
			id="lastseen">&copy; <?php echo $wYear ?> 
			<i class="fa fa-home" onclick="location.href='https://esc.mnre.go.th'"></i> | 	
			<font color='#94bab3'>MNRE SLC
			</font> | <a style="color:#94bab3;text-decoration:none;" href="../../info/index.html">e-Request</a>
			<!--| <a style="color:#94bab3;text-decoration:none;" href="license.php">License</a>--> 
			| <a style="color:#94bab3;text-decoration:none" href="help.php">Help</a> 
	        | <a style="color:#94bab3;text-decoration:none" href="feedback.php">Contact</a> 
			</a>
		</label>
           </div>
    </div>
    </nav>
	<input 
		style='color:black;
			background-color:lightgrey;
			border-color:grey' 
		type="text" 
		id="Question" 
		value="ระบบติดตามสถานะคำขอ (e-Tracking)" 
		title="ID">

 	<div 
		class="scrollable" 
		id="myScrollable">
      	<div 
		id="chatting" 
		class="chatting">

		<ul id="Answer">
   			<li><a href="#">

<form method="post" action="check.php">

			หมายเลขประจำตัวประชาชน หรืออีเมลที่ยื่นคำขอ <div id="customer" style="color:red;size=-1"></div> 
			<input 
				type="password"
				inputmode="numeric" 
				id="customerName" 
				minlength="1"
				maxlength="50" 
				name="name"
				required 
				placeholder="3712345678912" 
				size="13" 
				style="width:80%" 
				
				/>
		
   			 <i 
				class="bi bi-eye-slash" 
				id="togglePassword">
			</i>
			<br>

	<button type="submit" name="update" value="Submit"
		style="width:120px;
			background-color:DodgerBlue;	
			cursor: pointer;
			border:none;
 			color: white;
			border-radius:5px;
			padding: 12px 16px;
			margin-top:18px;
			font-size: 16px;"><i class="fa fa-search"></i> Track</button>
</form>

</div>
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
	        const password = document.querySelector("#customerName");
        	togglePassword.addEventListener("click", function () {
	            const type = password.getAttribute("type") === "password" ? "text" : "password";
        	    password.setAttribute("type", type);
                    this.classList.toggle("bi-eye");
	        });
    	
    	</script>


</body>
</html>
