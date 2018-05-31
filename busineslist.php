<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>কল্পসাধন</title>
	<link rel="stylesheet" href="mystyle.css">
  </head>
  <body>
  
  <!-- header part of the page -->
  <div class="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark">
	    <div class="navbar-header">
		  <h1><a class="navbar-brand" style="font-size: 40px; padding: 0px 0px 0px 0px; margin:0px;" href="index.php">কল্পসাধন</a></h1>
		  <h6 style="color:#ffecd7; margin:0px;">স্বাবলম্বী হবে আমার দেশ!</h6>
        </div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
		
		<div class="collapse navbar-collapse" id="navbarContent" >
		  <ul class="navbar-nav ml-auto">
			<li class="nav-item" ><a style="padding: 5px; margin: 6px 8px 2px 8px;" href="#12">কিভাবে কাজ করে জানুন!</a></li>
            <li class="nav-item"><a style="padding: 5px; margin: 6px 8px 2px 8px;" href="signup.php"><span class="fa fa-user"></span> সাইন আপ</a></li>
            <li class="nav-item"><a style="padding: 5px; margin: 6px 8px 2px 8px;" href="login.php"><span class="fa fa-sign-in"></span> লগ ইন</a></li>
			<li class="nav-item"><button class="btn navbar-btn"><a style="padding: 5px; margin: 6px 8px 2px 8px;">English</a></button></li>
		  </ul>
		</div>
	  </nav>
	</div>	  
  </div>
  
<div class="pageheader jumbotron">
  <div class="container">
    <h5 style="margin: 12px 2px 12px 2px;"><span id="roundborder">ব্যবসা পরিকল্পনা তালিকা</span></h5>
  </div>	
</div>


<div class="primay-menu header">
  <div class="container">
    <nav class="navbar navbar-expand-sm navbar-dark justify-content-center" style="padding: 0px 0px 0px 0px;">
      <ul class="navbar-nav">
        <li class="nav-item"><h5 style="margin: 10px 0px 0px 0px;"><span class="fa fa-map-marker"></span>  অবস্থান নির্ণয় করুন</h5></li>
        <li class="nav-item">
          <div class="form-group form-group-md">
            <select class="form-control" id="location">
			  <option><li>সকল</li></option>
			  <option><li>ঢাকা</li></option>
              <option><li>বরিশাল</li></option>
              <option><li>চট্টগ্রাম</li></option>
              <option><li>খুলনা</li></option>
              <option><li>ময়মনসিংহ</li></option>
              <option><li>রাজশাহী</li></option>
              <option><li>রংপুর</li></option>
              <option><li>সিলেট</li></option>
            </select>
          </div>
	    </li>
        <li class="nav-item"><button type="button" class="btn btn-invst btn-md" style="border-radius: 20px; margin: 5px 2px 2px 2px;"><span class="fa fa-search"></span> অনুসন্ধান</button></li>
      </ul>
    </nav>
  </div>
</div>


<div class="body jumbotron">
  <div class="container">
    <div class="row">
	  <div class="col-sm-2">
	    <div class="section-header">
		  <h5>শ্রেনি নির্বাচন</h5>
		</div>
		<div class="section-body">
          <h6><input type="checkbox" value=""checked> কৃষি</h6>
		  <h6><input type="checkbox" value=""checked> খামার</h6>
		  <h6><input type="checkbox" value=""checked> দোকান</h6>
		  <h6><input type="checkbox" value=""checked> নার্সারি</h6>
		  <h6><input type="checkbox" value=""checked> রিকশা</h6>
		  <h6><input type="checkbox" value=""checked> বিদেশ গমন</h6>
        </div>
	  </div>
	  <div class="col-sm-8">
	  
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kolposadhon_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, email, address, title, fund_amount, description, duration, rate, gender FROM users NATURAL JOIN borrowers NATURAL JOIN businesses";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
		{
			echo "<div class="."\"card\""." data-toggle="."\"collapse\""." data-parent="."\"#accordion\""." href="."\"#demo\"".">";
			echo "<div class="."\"row\"".">";
			echo "<div class="."\"col-sm-4\"".">";
			echo "<div>";
			if($row["gender"]=="male")
			echo "<img src="."\"user-male-icon.png\""." alt="."\"profile image\""." class="."\"img-fluid\""." width="."\"100%\"".">";
		    else
			echo "<img src="."\"user-female-icon.png\""." alt="."\"profile image\""." class="."\"img-fluid\""." width="."\"100%\"".">";
			echo "</div>";
			echo "<div>";
			echo "<h4>".$row["name"]."</h4>";
			echo "<p>".$row["email"]."</p>";
			echo "</div>";
			echo "</div>";
			echo "<div class="."\"col-sm-8\"".">";
			echo "<h3>".$row["title"]."</h3>";
			echo "<h5>অর্থের প্রয়োজনঃ ".$row["fund_amount"]." টাকা।</h5>";
			echo "<h5>সর্বোচ্চ সময়ঃ ".$row["duration"]." মাস।</h5>";
			echo "<h5>শতকরা হারঃ ".$row["rate"]."%</h5>";
			echo "<h5>".$row["address"]."</h5>";
			echo "<div id="."\"demo"." class="."\"collapse\"".">";
			//echo "<p>".$row["description"]."</p>";
			echo "</div>";
			echo "<button type="."\"button\""." class="."\"btn btn-invst btn-lg\"".">বিনিয়োগ করুন</button>";
			echo "</div>";
			echo "<div class="."\"col-sm-8\"".">";
			echo "</div>";
			echo "</div>";
			echo "</div>";
		}
		$conn->close();
}

?>
		
	
		
		<div>
          <ul class="pager">
            <li class="previous"><a href="#"><span class="fa fa-chevron-left"></span>পূর্ববর্তী পৃষ্ঠা</a></li>
            <li class="next"><a href="#">পরবর্তী পৃষ্ঠা<span class="fa fa-chevron-right"></span></a></li>
          </ul>
        </div>
		
	  </div>
	  <div class="col-sm-2">
	  </div>
	</div>
  </div>
</div>

<footer>
  <div class="footer">
    <div class="container">
      <a>কল্পসাধন ©  All Rights Reserved  |  Developed by কল্পসাধন </a>
	</div>
  </div>
</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>