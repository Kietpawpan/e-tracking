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
   <script src="js/monte.js"></script>

<title>MNRE | e-Tracking</title>

</head>

<body>
    	<nav>
        <div class="navbar">
            <img class="dpimg" onclick="openFullScreenDP()" src="images/mnre.png" style="width:27px" alt="">
            <div class="personalInfo">
                <label id="name">MNRE Service Link Center</label>
                 <label 
			id="lastseen">&copy; <?php if(date("Y") ==2024){echo date("Y");}else{echo '2024 - ' .date ("Y");} ?> SLC  
			| <a style="color:#94bab3;text-decoration:none" href="index.php">Home</a>  
			| <a style="color:#94bab3;text-decoration:none" href="LICENSE.php">License</a>  
	        | <a style="color:#94bab3;text-decoration:none" href="feedback.php">Feedback</a> 
	
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
		value="HELP" 
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
$right = gmdate("Y");
$version = substr(gmdate("Y"),-2, -1) ."." .substr(gmdate("y"),-1) ;
 
?>
<h2>e-Tracking</h2>
ระบบ e-Tracking ใช้ติดตามสถานะคำขอข้อมูลข่าวสารของราชการ 
<br><br>
<h4>วิธีใช้</h4>
1. กดปุ่ม <button class="buttonText" onclick="home()" style="color:#94bab3;background-color:#202c33;font-size:14px;"> | Home</button>  ที่เมนูด้านบน
<br><br>
2. กรอกหมายเลขประจำตัวประชาชน 13 หลัก
<br><br>
3. กดปุ่ม <span class="key"> <i class="fa fa-search" style="margin-right:5px;margin-left:5px;"><b>&nbsp;Track</b> </i>  </span>
<br>
เพื่อตรวจดูข้อมูลความก้าวหน้าของการพิจารณาเปิดเผยข้อมูลข่าวสาร <font color="red"> ภายใน 24 ชั่วโมง</font> นับแต่วันที่ศูนย์บริการร่วมกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อมได้รับคำขอ  หรือวันที่ยื่นคำขอผ่านระบบ <button class="buttonText" onclick="eRequest()" style="background-color:#0096FF;font-size:14px;"><i class="fa fa-external-link"></i> e-Request</button>

<br><br>

4. กดปุ่ม <button class="buttonText" onclick="license()" style="color:#94bab3;background-color:#202c33;font-size:14px;"> | License</button> หากต้องการตรวจดูข้อมูลลิขสิทธิ์ของโปรแกรมนี้

<br><br>

5. กดปุ่ม <button class="buttonText" onclick="feedBack()" style="color:#94bab3;background-color:#202c33;font-size:14px;"> | Feedback</button> หากต้องการแสดงความเห็น แนะนำ หรือติชม บริการนี้
  
<li><a href="javascript:history.go(-1)"><i class='fa fa-angle-left' style='font-size:20px;color:#0096FF'> Back</i></a></li>

</a></li>
</ul>

</body>
</html>