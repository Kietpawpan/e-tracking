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
	  <script src="js/monte.js"></script>

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
			
			<font color='#94bab3'>MNRE SLC | <a style="color:#94bab3;text-decoration:none;" href="license.php">License</a> 
			| <a style="color:#94bab3;text-decoration:none" href="index.php">Home</a>	| 
			<a style="color:#94bab3;text-decoration:none" href="help.php">Help</a> 
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
		value="e-Tracking Administrator" 
		title="ID">

 	<div 
		class="scrollable" 
		id="myScrollable">
      	<div 
		id="chatting" 
		class="chatting">

		<ul id="Answer">
   			<li><a>
<form method="post" action="updateResult.php">
<b>หมายเลขประจำตัวประชาชน หรืออีเมลของผู้ขอ</b><br>
<input 
				type="password"
				inputmode="numeric" 
				id="pin1" 
				minlength="1"
				maxlength="50" 
				name="name"
				size="13" 
				required
				style="width:60%">
				
				<i 
				class="bi bi-eye-slash" 
				id="togglePassword1">
			    </i>

<br><br>
			<b>ความคืบหน้า</b><br>
			<textarea 
				oninput="setHeight()"
				id="t1" 
				maxlength="1000"
				name="progress"
				required 
				size="13" 
				style="width:100%"
				required></textarea>
   			 
		
			<br><br>
    <b>OTP</b><br> 
	<input 
				type="password" 
				id="pin2" 
				maxlength="13" 
				name="pin"
				size="13"
				required
				style="width:60%">
				<i 
				class="bi bi-eye-slash" 
				id="togglePassword2">
			    </i>
	<br><br>
	<input type="submit" name="update" value="Submit" 
		style="width:100px;
			background-color:DodgerBlue;	
			cursor: pointer;
			border:none;
 			color: white;
			padding: 12px 16px;
			font-size: 16px;"
	>

</form>
<br><br>
<span onclick='window.open("getotp.html")' class='otp'>*<u>Forget OTP?</u></span>

<style>
.otp:hover {
	  color: blue;
}

span:hover + .otp {
	  display: block;
}
</style>
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
	for(let i=1; i < 3;i++){
        	const togglePassword = document.querySelector("#togglePassword"+i);
	        const password = document.querySelector("#pin"+i);
        	togglePassword.addEventListener("click", function () {
	            const type = password.getAttribute("type") === "password" ? "text" : "password";
        	    password.setAttribute("type", type);
                    this.classList.toggle("bi-eye");
	}); }
    	</script>
		

</body>
</html>
