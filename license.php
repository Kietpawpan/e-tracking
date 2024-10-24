<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/iRequest.css">

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
	        | <a style="color:#94bab3;text-decoration:none" href="feedback.php">Feedback</a> 
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
		value="LICENSE" 
		title="ID">

 	<div 
		class="scrollable" 
		id="myScrollable">
      	<div 
		id="chatting" 
		class="chatting">

		<ul id="Answer">
		<li><a href="#">
<font size="-1">		
<?php
$right = gmdate("Y");
$version = substr(gmdate("Y"),-2, -1) ."." .substr(gmdate("y"),-1) ;
 
?>
<h2>e-Tracking</h2>
Copyright &copy; <?php echo "2023-" . $right ?> Service Link Center, Ministry of Natural Resources and Environment, Bangkok, Thailand. All rights reserved. <br><br>

<p><span style="text-transform:uppercase">THIS E-SERVICE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE E-SERVICE OR THE USE OR OTHER DEALINGS IN THE
E-SERVICE.</cap>
</span></p>
<br><br>
<h2>Avatar Image</h2>
Copyright &copy; <?php echo "1999-" . $right ?>. Refsnes Data and W3Schools (Linking to https://www.w3schools.com/howto/img_avatar.png). All rights reserved. <br><br>

<li><a href="javascript:history.go(-1)"><i class='fa fa-angle-left' style='font-size:20px;color:#0096FF'> Back</i></a></li>

</a></li>
</ul>

</body>
</html>