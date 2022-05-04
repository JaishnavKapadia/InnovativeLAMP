<html>
<!-- Setting Cookie to track last visit -->
<?php
include("counter.php");
$total_count = 0;
if(isset($_COOKIE['count'])){
$total_count = $_COOKIE['count'];
$total_count ++;
}
if(isset($_COOKIE['last_visit'])){
$last_visit = $_COOKIE['last_visit'];
}
setcookie('count', $total_count);
 setcookie('last_visit', date("H:i:s"));
if($total_count == 0){
echo "Welcome! We are glad to see you here.";
echo '<br>';
} else {
echo "This is your visit number ".$total_count;
echo '<br>';
echo "Last time, you were here at ".$last_visit;
}
?>
<!---->


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Travel Know More</title>
</head>

<body>
<fieldset>
<legend> Extra Info</legend>
 We Welcome You to Know more about our trips.<br>
 Here you will find information regarding timings of trips and how may people are interested. <br>
<banner><img src="banner.jpg"></banner>
</fieldset>
<style>
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white;
  color: black;
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
</style>

<button id="bid2" class="button button1">Chopta</button>
<button id="bid3" class="button button2">Manali</button>
<button id="bid4" class="button button1">Mars</button>
<button id="bid5" class="button button2">Saturn</button>
<button id="bid1" class="button button2">Back</button>
</body>


<script type="text/javascript">
    document.getElementById("bid1").onclick = function () {
        location.href = "main.html";
    };
    document.getElementById("bid2").onclick = function () {
        location.href = "Trip_Chopta.php";
    };
    document.getElementById("bid3").onclick = function () {
        location.href = "Trip_Manali.php";
    };
    document.getElementById("bid4").onclick = function () {
        location.href = "Trip_Mars.php";
    };
    document.getElementById("bid5").onclick = function () {
        location.href = "Trip_Saturn.php";
    };
</script>
  </html>