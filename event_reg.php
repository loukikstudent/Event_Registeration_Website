
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <?php session_start();?>
  <link rel="stylesheet" href="style_event_reg.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <div class="signup-box">
    <form class="signup-form" action="generate.php" method="get">
            <?php
            $conn=mysqli_connect("localhost","newuser1","","registerations");
            if (isset($_SESSION['selectedEvent'])){
                $event_name = $_SESSION['selectedEvent'];
                $query="select distinct CATEGORY_NAME from registerations where (EVENT_NAME = '$event_name') ;";
                $res=mysqli_query($conn,$query);
                while ($row=mysqli_fetch_assoc($res)){
                    echo "<select name='event_category' class='txtb1'>";
                    echo "<option value=$row[CATEGORY_NAME] class='txtb1'>$row[CATEGORY_NAME]</option>";
                    echo "</select>";
                    echo "<select name='event_name' class='txtb1' value=$event_name>";
                    echo "<option value=$event_name class='txtb1'>$event_name</option>";
                    echo "</select>";
                }
                if($_SESSION['type']="internal"){
                    echo "<input type='text' class = 'txtb' name = 'regno' placeholder='Registeration number'>";
                    echo "<input type='text' class = 'txtb' name = 'name' placeholder='Name'>";
                }
                elseif($_SESSION['type']="external"){
                    echo "<input type='text' class = 'txtb' name = 'name' placeholder='Name'>";
                }
            }
            else{
                $query="select distinct CATEGORY_NAME from registerations;";
                $res=mysqli_query($conn,$query);
                echo "<select name='event_category' class='txtb'";
                while ($row=mysqli_fetch_assoc($res)){
                    echo "<option value=$row[CATEGORY_NAME] class='txtb1'>$row[CATEGORY_NAME]</option>";
                }
                echo "</select>";
                $query="select distinct EVENT_NAME from registertions;";
                echo "<select name='event_name' class='txtb'";
                while ($row=mysqli_fetch_assoc($res)){
                    echo "<option value=$row[EVENT_NAME] class='txtb1'>$row[EVENT_NAME]</option>";
                }
                if($_SESSION['type']="internal"){
                    echo "<input type='text' class = 'txtb' name = 'regno' placeholder='Registeration number'>";
                    echo "<input type='text' class = 'txtb' name = 'name' placeholder='Name'>";
                }
                elseif($_SESSION['type']="external"){
                    echo "<input type='text' class = 'txtb' name = 'name' placeholder='Name'>";
                }

            }
            echo "<input type='text' class = 'txtb' name = 'nop' placeholder='Number of Particpants'>";
            //$nop = $_GET['nop'];
            $nop=1;
            $query="select distinct AMOUNT from registerations where (EVENT_NAME = '$event_name') limit 1;";
            $res1=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($res1)){
                
                echo "<select name='amount' class='txtb1'>";
                echo "<option value=$row[AMOUNT] class='txtb1'>$row[AMOUNT]</option>";
                echo "</select>";
            }
            echo "<select class='txtb1' name='payment'>";
            echo    "<option class='txtb1' value='Cash'>Cash</option>";
            echo    "<option class='txtb1' value='card'>Cerdit/Debit Card</option>";
            echo    "<option class='txtb1' value='netbanking'>NetBanking</option>";
            echo "</select>";
            echo "<select class='txtb1' name='gender'>";
            echo    "<option class='txtb1' value='Male'>Male</option>";
            echo    "<option class='txtb1' value='Female'>Female</option>";
            echo "</select>";
            echo "<input type='submit' class='loginbutton' value='Generate Invoice'>";
            ?>
      
    </form>
        </div>
  </body>
</html>
