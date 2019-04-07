<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start();?>
    <meta charset="UTF-8">
    <title>canvas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
     <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <style>
    
     * {
  box-sizing: border-box;
         margin: 0;
         padding: 0;
}
html, body {
  height: 100%;
  overflow: hidden;
    font-family: 'Roboto Condensed', sans-serif;
}

.page {
  height: 100%;
  background-color: black;
}
.content {
  height: 200%;
  transform-origin: top left;
  transition: transform 0.7s cubic-bezier(1, 0.005, 0.24, 1);
  background-image:linear-gradient(45deg,#d35400,#f1c40f);
}
.content_inner {
  height: 50%;
  overflow-y: auto;
  padding: 5% 5%;
}
/* basically all styling from now on */
.menu_toggle {
  z-index: 900;
  position: fixed;
  top: 0;
  left: 0;
  display: block;
  cursor: pointer;
  width: 100px;
  height: 80px;
  background-color: black;
  border-bottom-right-radius: 100%;
}
.menu_toggle:active i {
  opacity: 0.8;
}
.menu_toggle i {
  color: #f0f0f0;
}
.menu_toggle .menu_open, .menu_toggle .menu_close {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -15px;
  margin-left: -12px;
  transition: transform 0.7s cubic-bezier(1, 0.005, 0.24, 1);
}
.menu_toggle .menu_open {
  transform-origin: -100px -100px;
}
.menu_toggle .menu_close {
  transform: rotate(20deg);
  transform-origin: -100px -160px;
}
.menu_items {
  position: fixed;
  bottom: 0;
  left: 50px;
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.menu_items li {
  height: 60px;
  margin-bottom: 30px;
  transform: translateX(-300px);
  transition: transform 0.7s 0s cubic-bezier(1, 0.005, 0.24, 1);
}
.menu_items li:nth-child(2) {
  margin-left: 40px;
}
.menu_items li:nth-child(3) {
  margin-left: 80px;
}
.menu_items li:nth-child(4) {
  margin-left: 145px;
}
.menu_items a {
  display: block;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: #a4a4a4;
  transition: color 0.2s;
}
.menu_items a .icon {
  position: relative;
  display: inline-block;
  margin-right: 25px;
  color: #f0f0f0;
}
.menu_items a .icon:after {
  position: absolute;
  top: 50%;
  left: 50%;
  content: '';
  display: block;
  width: 60px;
  height: 60px;
  margin-left: -33px;
  margin-top: -32px;
  border-radius: 100%;
  border: 2px solid #f0f0f0;
  transition: border-color 0.2s;
}
.menu_items a:hover {
  color: #f0f0f0;
}
.menu_items a:hover .icon:after {
  border-color: #f37272;
}
.menu_items a:active .icon {
  color: #f37272;
}
/* Let's open up the menu */
.shazam {
  /*.content_inner {
   height: 100%;
   }*/
}
.shazam .content {
  transform: rotate(-30deg);
}
.shazam .menu_open {
  transform: rotate(-20deg);
}
.shazam .menu_close {
  transform: rotate(0);
}
.shazam .menu_items li {
  transform: translateX(0);
  transition: transform 0.35s 0.45s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.shazam .menu_items li:nth-child(2) {
  transition-delay: 0.47s;
}
.shazam .menu_items li:nth-child(3) {
  transition-delay: 0.48s;
}
.shazam .menu_items li:nth-child(4) {
  transition-delay: 0.49s;
}
body {
  color: #584e4a;
}
section{
	width:100%;
	height:50%;
	box-sizing: border-box;
	padding:0;
}
/* Float four columns side by side */
.col {
  float: left;
  width: 25%;
  height:50%;
  padding: 10px 0px;
  margin: 50px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Style the counter cards */
.card {
  position:relative;
  width: 300px;
  height:250%;
  background: linear-gradient(-45deg,#fe0847,#feae3f);
  border-radius:15px;
  margin: 0;
  padding:50px;
  box-shadow:0 10px 15px rgba(0,0,0,0.5);
  transition : 0.5s;
  border: 0;
  text-align: center;
}
.col:nth-child(1) .card
 {
  background: #1abc9c;

 }
 .col:nth-child(2) .card
 {
  background: #3498db;

 }
 .col:nth-child(3) .card
 {
  background: #9b59b6;
 }
 .f{
   font-size: 20px;
   text-decoration-line: none;
 }
 .m{
   font-size: 12px;
   color: white;
   font-weight: 100px;
 }
   .f:link {
      color: white;
      text-decoration: none;
    }

    /* visited link */

    /* mouse over link */
    a.f:hover {
      color: blue;
      text-decoration: none;
    }

    /* selected link */
    a.f:active {
      color:hotpink;
      text-decoration: none;
    }
    a.m:link{
      color: white;
      text-decoration: none;
    }
    a.m:hover{
      color: orange;
      text-decoration: none;
    }
.card:before{
  content:'';
  position:absolute;
  bottom:0;
  left:0;
  width:100%;
  height:40%;
  background: rgba(255,255,255,.1);
  z-index:1;
  transform: skewY(0deg) scale(1.0);
  border-bottom-left-radius:15px;
  border-bottom-right-radius: 15px;
}
.title .fa{
  color:#fff;
  font-size: 60px;
  width:100px;
  height:100px;
  border-radius: 50%;
  text-align: center;
  line-height: 100px;
  box-shadow: 0 10px 10px rgba(0,0,0,.1);

}
.title h2{
  position: right;
  margin: 20px 0 0;
  padding-bottom: 20px;
  color: #fff;
  font-size: 30px;
  z-index:2;
}
.option
{
  position: right;
  z-index:2;

}
.option ul{
  margin:0;
  padding:0;
}
.option ul li{
  margin:0 0px 10px;
  padding:0;
  list-style: none;
  color: #fff;
  font-size: 16px;
  text-align: center;
}
.card:hover{
  transform: scale(1.1);
}
  
    
    </style>
</head>
<body>
    <div class="page">  
  <span class="menu_toggle">
    <i class="menu_open fa fa-bars fa-lg"></i>
    <i class="menu_close fa fa-times fa-lg"></i>
  </span>
  <ul class="menu_items">
    <li><a href="can.html" class="m" class ="f"><i class="icon fa fa-home fa-2x"></i>Home</a></li>
    <li><a href="event_reg.php" class="m"><i class="icon fa fa-pencil fa-2x"></i> Event Submission</a></li>
    <li><a href="event_sub.html" class="m"><i class="icon fa fa-credit-card-alt fa-2x"></i> Registeration</a></li>
    <li><a href="logout.php" class="m"><i class="icon fa fa-sign-out fa-2x"></i> Logout</a></li>
  </ul>
  <main class="content">
    <div class="content_inner">
      <h1>Most Popular Events</h1>
        <section>
            <div class="container-fluid">
              <div class="container">
                <div class ="row">
                    <?php
                    $conn=mysqli_connect("localhost","newuser1","","registerations");
                    $query="select  EVENT_NAME,sum(NUMBER_OF_PARTICIPANTS) from registerations group by EVENT_NAME order by (sum(NUMBER_OF_PARTICIPANTS)) DESC limit 3;";
                    $res=mysqli_query($conn,$query);
                    while ($row = mysqli_fetch_assoc($res)) {
                    echo "<div class='col'>";
                    echo "   <a href='redirect.php?a=$row[EVENT_NAME]' class='f'>";
                    echo "   <div class='card'>";
                    echo "       <div class='title'>";
                    echo "       <i class='fa fa-paper-plane'></i>";
                    echo "       <h2>". $row['EVENT_NAME'] ."</h2>";
                    echo "       </div>";
                    echo "      <div class='option'>";
                    echo "           <ul>";
                    echo "               <li><p>Details about the Event!</p></li>";
                    echo "               <li>Fees ###<i class='fa fa-dollar-sign'></i></li>";
                    echo "           </ul>";
                    echo "           </div>";
                    echo "       </div>";
                    echo "       </div>";
                    echo "   </a>";}
                    ?>
                    </div>
                </div>
            </div>                
        </section>
            <h1>Events Popular Amongst Your Branch</h1>
            <section>
                <div class="container-fluid">
                  <div class="container">
                    <div class ="row">
                    <?php
                    $uname=$_SESSION['uname'];
                    function card($res){
                        while ($row = mysqli_fetch_assoc($res)) {
                        echo "<div class='col'>";
                        echo "   <a href='redirect.php?selectedEvent=$row[EVENT_NAME]' class='f'>";
                        echo "   <div class='card'>";
                        echo "       <div class='title'>";
                        echo "       <i class='fa fa-paper-plane'></i>";
                        echo "       <h2>". $row['EVENT_NAME'] ."</h2>";
                        echo "       </div>";
                        echo "      <div class='option'>";
                        echo "           <ul>";
                        echo "               <li><p>Details about the Event!</p></li>";
                        echo "               <li>Fees ###<i class='fa fa-dollar-sign'></i></li>";
                        echo "           </ul>";
                        echo "           </div>";
                        echo "       </div>";
                        echo "       </div>";
                        echo "   </a>";}}
                    $conn=mysqli_connect("localhost","newuser1","","registerations");
                    if (preg_match("/BCE/", $uname)){
                        $query="select  EVENT_NAME,sum(NUMBER_OF_PARTICIPANTS) from registerations where (REGISTER_NUMBER like '%BCE%') group by EVENT_NAME order by sum(NUMBER_OF_PARTICIPANTS) DESC limit 3;";
                        $res=mysqli_query($conn,$query);
                        card($res);}
                    elseif (preg_match("/BCB/", $uname)){
                        $query="select  EVENT_NAME,sum(NUMBER_OF_PARTICIPANTS) from registerations where (REGISTER_NUMBER like '%BCB%') group by EVENT_NAME order by sum(NUMBER_OF_PARTICIPANTS) DESC limit 3;";
                        $res=mysqli_query($conn,$query);
                        card($res);}
                    elseif (preg_match("/BCI/", $uname)){
                        $query="select  EVENT_NAME,sum(NUMBER_OF_PARTICIPANTS) from registerations where (REGISTER_NUMBER like '%BCI%') group by EVENT_NAME order by sum(NUMBER_OF_PARTICIPANTS) DESC limit 3;";
                        $res=mysqli_query($conn,$query);
                        card($res);}
                    elseif (preg_match("/BME/", $uname)){
                        $query="select  EVENT_NAME,sum(NUMBER_OF_PARTICIPANTS) from registerations where (REGISTER_NUMBER like '%BME%') group by EVENT_NAME order by sum(NUMBER_OF_PARTICIPANTS) DESC limit 3;";
                        $res=mysqli_query($conn,$query);
                        card($res);}
                    elseif (preg_match("/BIT/", $uname)){
                        $query="select  EVENT_NAME,sum(NUMBER_OF_PARTICIPANTS) from registerations where (REGISTER_NUMBER like '%BIT%') group by EVENT_NAME order by sum(NUMBER_OF_PARTICIPANTS) DESC limit 3;";
                        $res=mysqli_query($conn,$query);
                        card($res);}
                    elseif (preg_match("/BEC/", $uname)){
                        $query="select  EVENT_NAME,sum(NUMBER_OF_PARTICIPANTS) from registerations where (REGISTER_NUMBER like '%BEC%') group by EVENT_NAME order by sum(NUMBER_OF_PARTICIPANTS) DESC limit 3;";
                        $res=mysqli_query($conn,$query);
                        card($res);}
                    elseif (preg_match("/BBT/", $uname)){
                        $query="select  EVENT_NAME,sum(NUMBER_OF_PARTICIPANTS) from registerations where (REGISTER_NUMBER like '%BBT%') group by EVENT_NAME order by sum(NUMBER_OF_PARTICIPANTS) DESC limit 3;";
                        $res=mysqli_query($conn,$query);
                        card($res);}
                    elseif (preg_match("/BEE/", $uname)){
                        $query="select  EVENT_NAME,sum(NUMBER_OF_PARTICIPANTS) from registerations where (REGISTER_NUMBER like '%BEE%') group by EVENT_NAME order by sum(NUMBER_OF_PARTICIPANTS) DESC limit 3;";
                        $res=mysqli_query($conn,$query);                         card($res);}
                    elseif (preg_match("/BCM/", $uname)){
                        $query="select  EVENT_NAME,sum(NUMBER_OF_PARTICIPANTS) from registerations where (REGISTER_NUMBER like '%BCM%') group by EVENT_NAME order by sum(NUMBER_OF_PARTICIPANTS) DESC limit 3;";
                        $res=mysqli_query($conn,$query);                         card($res);}
                    elseif (preg_match("/BCL/", $uname)){
                        $query="select  EVENT_NAME,sum(NUMBER_OF_PARTICIPANTS) from registerations where (REGISTER_NUMBER like '%BCL%') group by EVENT_NAME order by sum(NUMBER_OF_PARTICIPANTS) DESC limit 3;";
                        $res=mysqli_query($conn,$query);                         card($res);}
                    elseif (preg_match("/BEM/", $uname)){
                        $query="select  EVENT_NAME,sum(NUMBER_OF_PARTICIPANTS) from registerations where (REGISTER_NUMBER like '%BEM%') group by EVENT_NAME order by sum(NUMBER_OF_PARTICIPANTS) DESC limit 3;";
                        $res=mysqli_query($conn,$query);                         card($res);}
                    elseif (preg_match("/BIS/", $uname)){
                        $query="select  EVENT_NAME,sum(NUMBER_OF_PARTICIPANTS) from registerations where (REGISTER_NUMBER like '%BIS%') group by EVENT_NAME order by sum(NUMBER_OF_PARTICIPANTS) DESC limit 3;";
                        $res=mysqli_query($conn,$query);                         card($res);}
                    elseif (preg_match("/BMA/", $uname)){
                        $query="select  EVENT_NAME,sum(NUMBER_OF_PARTICIPANTS) from registerations where (REGISTER_NUMBER like '%BMA%') group by EVENT_NAME order by sum(NUMBER_OF_PARTICIPANTS) DESC limit 3;";
                        $res=mysqli_query($conn,$query);                         card($res);}
                    elseif (preg_match("/MSH/", $uname)){
                        $query="select  EVENT_NAME,sum(NUMBER_OF_PARTICIPANTS) from registerations where (REGISTER_NUMBER like '%MSH%') group by EVENT_NAME order by sum(NUMBER_OF_PARTICIPANTS) DESC limit 3;";
                        $res=mysqli_query($conn,$query);                         card($res);}
                    ?>
                        </div>
                      </div>
                  </div>                
                </section> 
    </div>
  </main>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
    // elements
var $page = $('.page');

$('.menu_toggle').on('click', function(){
  $page.toggleClass('shazam');
});
$('.content').on('click', function(){
  $page.removeClass('shazam');
});
    
</script>
</body>
</html>