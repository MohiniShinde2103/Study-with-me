<?php

session_start();
$Un=$_SESSION['un'];
$unm="";
$ps="";
$conn=mysqli_connect('sql311.epizy.com','epiz_25827727','0vwlrWNM5hh','epiz_25827727_ecampus');
   if(! $conn ) 
   {
      die('Could not connect: ' . mysqli_error());
   }
   
   $sql = "SELECT uname, fname FROM stud_info where uname='$Un'";
   $retval = mysqli_query($conn, $sql);
   
   if(! $retval ) 
   {
      //die('Could not get data: ' . mysqli_error());
   }
   
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) 
   {
      $unm=$row['fname'];
      $ps=$row['uname'];   
   }
  session_unset();
   $_SESSION['un']=$Un;
   mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-2-fit=no">
  <link rel="stylesheet" type="text/css"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="C:\Users\ASUS\Downloads\project downloads\3.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="icon" type="image/x-icon" href="3.jpg">
  <style type="text/css">
    body {
    font-family: sans-serif;
    }
    header {
      position: fixed;
      top: 0;
      left: 0;
        width: 100%;
        height: 62px;
        background:linear-gradient(90deg, rgba(4,25,38,1) 22%, rgba(16,45,60,1) 78%, rgba(11,50,69,1) 91%, rgba(12,75,106,1) 100%);
    }
    main {
      width: 80%;
      margin: 0 auto;

    }    
    .nav-toggle {
      position: absolute;
      top: 15px;
      cursor: pointer;
      padding-left: 30px;
      color:white;
    }
    
    a {
      color: #fff;
      text-decoration: none;
      text-align: left;
      cursor: pointer;
    }
    .main-navigation {
      position: fixed;
      top: 0;
      left: 0;
      width: 50%;
      height: 100%;
      background:linear-gradient(90deg, rgba(4,25,38,1) 22%, rgba(16,45,60,1) 78%, rgba(11,50,69,1) 91%, rgba(12,75,106,1) 100%);
        text-align: center;
      transition: transform 0.6s ease;
    }
    .left { 
      transform: translateX(-100%);
    }
    .right {
      transform: translateX(100%);
    }
    .top {
      transform: translateY(-100%);
    }
    .bottom {
      transform: translateY(100%);
    }
    .main-navigation ul {
      margin: 3% 0 0;
      padding: 0;
    }
    .main-navigation ul li span:nth-child(2) {
        margin-left: 1px;
        font-size: 14px;
        font-weight: 600;
    }
    .main-navigation ul li i {
        color: #0497df;
        min-width: 20px;
        text-align: center;
        margin-left: 1%;
    }
    .main-navigation ul a {
      padding-bottom: 10px;
      padding-top: 10px;
      display: block;
    }
    .main-navigation ul li {
        padding: 6px 6px;
        border-bottom: 1px solid #3c506a;
        position: relative;
    }
    .main-navigation.open {
      transform: translateX(0); 
    }
    .main-navigation .nav-toggle {
      right:3%;
      top: 3%;
    }
    img{
       height: 35px;
       width:45px; 
       border: solid;
       border-color: white; 
       border-bottom-right-radius:14%;
       border-top-left-radius: 14%;
       margin-top: 10px; 
    }
    label{
             font-size:20px;

    }
  </style>

        
</head>
</head>

<body id="body" style="background-repeat: no-repeat; background:linear-gradient(90deg, rgba(29,31,31,1) 6%, rgba(104,107,107,1) 31%, rgba(201,212,213,1) 50%, rgba(104,107,107,1) 75%, rgba(15,15,15,1) 95%); ">
    
    <header>
    <center><img src="3.jpg" hspace="22px;" align="center"></img><font  color="white"  style="font-size: 25px;"><u>iTSoft Developer</u></font>
</center>

    <i class="fa fa-ellipsis-v nav-toggle" style="font-size: 30px;
 "></i>
    <nav class="main-navigation left" role='navigation'>
      <span class="nav-toggle"><i class="fa fa-close fa-2x" style="color:#0497df; "></i></span>
      <ul><br><br>
        <font color="white" size="5" style="top:10px;">eCampus</font>
        <br><br><br>
        
        <li>
          <a href="student_dashboard.php">
              <span><i class="fa fa-home"></i></span>
              <span>Dashboard</span>
          </a>
        </li>
        

      <li>
          <a href="view_all_noticefstud.php">
              <span><i class="fa fa-home"></i></span>
              <span>View all notice</span>
          </a>
        </li>

         <li>
          <a href="Messages.php">
              <span><i class="fa fa-home"></i></span>
              <span>Discussion</span>
          </a>
        </li>


      <li>

        <form action="logout.php" method="post">
          <a href="logout.php">
            <span><i class="fa fa-power-off"></i></span>
            <span>Log out</span>
          </a></form>
      </li>



</ul>
</nav>
  </header>
  <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>
    $(document).ready(function($) {
      $(function() {
        $('.nav-toggle').on('click', function() {
          $('.main-navigation').toggleClass('open');
        });
      });
    });
  </script><br><br><br>
  <div id="bd" class="cla" >
    <div style=" background-color: rgba(255, 254, 255, 0.7 ); padding-top: 0%; padding-bottom: 0%; border-bottom-right-radius: 15px; border-top-left-radius: 15px; margin-top: 8%; "><center><font size="6"> Welcome Student!</font></center>
    </div>
        
        <div style=" background-color: rgba(255, 254, 255, 0.7 ); padding-top: 0%; padding-bottom: 5%; border-bottom-right-radius: 15px; border-top-left-radius: 15px; margin-top: 3%; ">
          <br><br>
          <form align="center" >
          <br>
          <label><b>Name:</b></label>&nbsp;&nbsp; <br> <input class="input-field" type="text" name="name" style="border-top-left-radius: 15px; width: 80%; padding: 10px; height: 40px; border: solid; border-color: #b3b3b3; border-bottom-right-radius: 15px;" value="<?php echo $unm; ?>"readonly>
          <br><br><br><br>
          <label><b>Roll No:   </b></label>&nbsp;&nbsp;&nbsp; <br><input class="input-field" type="text"  value="<?php echo $Un; ?>"  name="post" style="border-top-left-radius: 15px; width: 80%; padding: 10px; height: 40px; border:solid; border-color: #b3b3b3; border-bottom-right-radius: 15px;"readonly>
          <br><br><br><br>
          <button style="font-family: 'Arial'; color: white!important;  font-size: 14px; box-shadow: 1px 1px 1px #BEE2F9; padding: 10px 25px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: #63B8EE; border-color: #b3b3b3; border: solid; background: linear-gradient(90deg, rgba(4,25,38,1)22%, rgba(16,45,60,1)78%, rgba(11,50,69,1)91%, rgba(12,75,106,1)100%); margin-left: 0%;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" type="button">Change password</button>
          <button style="font-family: 'Arial'; color: white!important; font-size: 14px; box-shadow: 1px 1px 1px #BEE2F9; padding: 10px 25px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: #63B8EE; border-color: gray; border: solid; background: linear-gradient(90deg, rgba(4,25,38,1)22%, rgba(16,45,60,1)78%, rgba(11,50,69,1)91%, rgba(12,75,106,1)100%); margin-left: 10%;"><a href="logout.php">Log out</a></button>
          </form>
        </div>
    
<?php
        include_once('database_connection.php');


        if(isset($_POST['changepass']))
        {
            $rl=$_POST['roll'];
            $np=$_POST['newp'];
            $sql ="update admin_info set password=$np where uname=$rl";
            mysqli_query($conn,$sql);

        }
?>

<form method="post" action="">
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog " style="width: 90%; margin-left: 3%;">
      <div class="container-fluid" style="height: 60%; width: 90%; margin-left: 8%; background-color: rgba(255, 254, 255, 0.7 ); border-bottom-right-radius: 15px; border-top-left-radius: 15px; border:black;">
    
    <div class="mt-5">
      <center>
        
          <br>
            <img src="3.jpg" hspace="22px;"  style="height: 30%; width: 10%; border: solid; border-color: white; border-bottom-right-radius:14%; border-top-left-radius: 14%; "></img><font size="4" ><u>Change Password</u></font><br><br>
            

                     <input class="input-field" type="text" placeholder="User_id" name="roll" style="border-top-left-radius: 15px; width: 100%; padding: 10px; height: 40px; border: solid; border-color: white; border-bottom-right-radius: 15px;"><br><br>

                     <input class="input-field" type="password" placeholder="password" name="newp" style="border-top-left-radius: 15px; width: 100%; padding: 10px; height: 40px; border: solid; border-color: white; border-bottom-right-radius: 15px;"><br><br>

 <button type="button" name="changepass" style="font-family: 'Arial'; color: white!important;  font-size: 14px; box-shadow: 1px 1px 1px #BEE2F9; padding: 10px 25px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: #63B8EE; border-color: #b3b3b3; border: solid; background: linear-gradient(90deg, rgba(4,25,38,1)22%, rgba(16,45,60,1)78%, rgba(11,50,69,1)91%, rgba(12,75,106,1)100%); " value="">">Change pwd</button>

   <button type="button" class="btn btn-default" data-dismiss="modal" style="font-family: 'Arial'; color: white!important; font-size: 14px; box-shadow: 1px 1px 1px #BEE2F9; padding: 10px 25px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: #63B8EE; border-color: gray; border: solid; background: linear-gradient(90deg, rgba(4,25,38,1)22%, rgba(16,45,60,1)78%, rgba(11,50,69,1)91%, rgba(12,75,106,1)100%); margin-left: 5%;">Close</button>
 
          <br>
      </center>
    </div>
  </div>
                            
    </div> 
</div>

</form>
</div>
</div>
</body>
</html>