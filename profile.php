<?php

require('./includes/loaduserinfo.php');
require('./includes/deped_inc.php');
//require('./includes/session_login.php');

//logout session
if(isset($_POST['logout-btn']))
{
    $logout = new DEPED();
    $logout ->session_logout();

}

//date and time today
date_default_timezone_set('Asia/Manila');
$date = date('Y-m-d H:i:s');


?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Deped | Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_update.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel = "stylesheet" href = "https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap4.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500&display=swap" rel="stylesheet">
   </head>
<body>

  <div class="sidebar">
    <div class="logo-details">
      <a href= "dashboard.php" style = "text-decoration:none;"><span class="logo_name"><img src="images/logo2.png" height="50px" width="100px" style="margin-left:70%; "></span></a>
    </div>
      <ul class="nav-links">

        <?php
        
          if($_SESSION['account_type'] == 'Super Administrator')
          {
              echo '<li>
              <a href="dashboard.php">
                <i class="bx bx-grid-alt" ></i>
                <span class="links_name">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="employee.php" >
                <i class="bx bx-box" ></i>
                <span class="links_name">Users</span>
              </a>
            </li>
            <li>
              <a href="school.php">
                <i class="bx bx-coin-stack"></i>
                <span class="links_name">School</span>&nbsp;<span class="badge bg-danger text-light" id="order_list"></span></a>
              </a>
            </li>
            <li>
              <a href="items.php">
                <img src="images/item.png" height="18px" width="18px" style="margin-left: 9%; margin-right: 8%;">
                <span class="links_name">Items</span>
              </a>
            </li>
            <li>
              <a href="report.php">
                <img src="images/item.png" height="18px" width="18px" style="margin-left: 9%; margin-right: 8%;">
                <span class="links_name">Reports</span>
              </a>
            </li>';
          }

          else if($_SESSION['account_type'] == 'ICT Coordinator')
          {
              echo '<li>
              <a href="report.php">
                <img src="images/item.png" height="18px" width="18px" style="margin-left: 9%; margin-right: 8%;">
                <span class="links_name">Reports</span>
              </a>
            </li>';
          }

          else
          {
            
          }

        
        
        ?>
        
        <li class="log_out">
          
            <span  style="margin-left:15%; color: gray; font-size: 12px;">All rights reserved 2022 | Deped</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Personal Information</span>
      </div>
     
      <!-- user profile sa may nav bar -->
      <div class="btn-group">
        
         <button type="button" class="btn btn-light">
         
        <span class="admin_name" style ="margin-top:10px; margin-right:12px;"><?php echo $username;?></span></button>
        <input type="hidden" name = 'hidden-fullname' value = '<?php echo $fullname; ?>'>
          <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
          <img src = "images/<?php 
          
            if($picture == NULL)
            {
                echo "user.jpg";
            }

            else
            {
                echo $picture;
            }
          
          ?>" style="height:30px; width: 30px;" alt="user_prof">  
        </button>
        <div class="dropdown-menu">
          <a href="shop.php" class="btn btn-md btn-block" role="button">Edit Profile</a>
          <img src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/32/000000/external-log-out-user-interface-kmg-design-glyph-kmg-design.png"/ height="25px" width="25px" style="transform: translateY(120%); margin-left:9%;">
        
        <form action="" method="post">
          <input type="submit" value="Log out" name = 'logout-btn' id = "logout"> 
       
        </form>
          </button>
        </div>
      </div>
     </nav> 

    <div class="m-container">
       <!-- The Logout Modal -->
  <div class="modal fade" id="logoutModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-center">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Logout</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="d-flex justify-content-center">
            <img src="img/logout.png" style="height:100px; width: 120px;" alt="logout_pic">
          </div>
          Are you sure you want to Logout?
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <div class="d-grid gap-2 col-9 mx-auto">
         
          <button type="button" class="btn btn-light col-4 mb-3" data-dismiss="modal">Close</button>
          <a href="signout.php" class="btn btn-danger col-4 mb-3" role="button">Log out</a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
  <div class="boxprofile">
  
      <!--<div class="dp"><img src = "images/<?php //echo $picture?>"></div>-->
      <center><span class="circle-image">
        <img src="images/<?php 
        
            if($picture == NULL)
            {
                echo "user.jpg";
            }

            else
            {
                echo $picture;
            }
        
        
        ?>"/>
      </span></center>
      <center><h3><?php echo $firstname.' '.$lastname?></h3><center>
        <h6 style = "color:gray;"><?php echo $account_type;?></h6>
      <hr style="height:2px;border-width:0;color:gray;background-color:rgb(255, 22, 13)"><br><br>

        <form action="" method="post" enctype = "multipart/form-data">
          
              Upload Your Image: <input type="file" name='image' style="font-size: 14px; margin-left: 5%;">

              <div style="margin-left: 15%; margin-top: 5%; ">
        
             
              <input type="text" name='firstname' class = "form-control validate" id="firstname" value = "<?php echo $firstname?>" placeholder = "Enter your firstname" ><br>

                <input type="text" name='lastname' class="form-control validate" id="lastname" value = "<?php echo $lastname;?>" placeholder = "Enter your lastname" ><br>

                <input type="text" name='email' class="form-control validate" id="email" value = "<?php echo $email;?>" placeholder = "Enter your new email" ><br>

                <input type="text" name='phone' class="form-control validate" id="phone" value = "<?php echo $phone;?>" placeholder = "Enter your phone number" ><br>

                 
                <select name='position' id = "position" class="custom-select custom-select-sm mb-3" style = "margin-top:-90px;">
                 
                    <?php
                      if(isset($_POST['update-btn']))
                      {
                       
                        echo "<option value='$position'>$position</option>";

                      }

                    ?>
                    
                    
                    <?php
                    
                      $query = "SELECT * FROM position";
                      $select = mysqli_query($con,$query);

                      while($row = mysqli_fetch_array($select))
                      {

                        echo "<option>".$row['position']."</option>";

                      }
                    
                    ?>
                </select>
                

                <input type="text" name='address' class="form-control validate" id="address" style= "margin-top:-25px;"value = "<?php echo $address?>" placeholder = "">
                <br><br>

                <input type="password" name='password' class="form-control validate" id="address" style= "margin-top:-25px;"value = "" placeholder = "Password">
                <br><br>

                <input type="password" name='confirm_password' class="form-control validate" id="address" style= "margin-top:-25px;"value = "" placeholder = "Confirm Password">
                <br><br>

                <input type="hidden" name="ict_username" value = "<?php echo $ict_username?>" id="">
                
                <input type="submit"name = 'update-btn' class="btn btn-outline-success" value="UPDATE" style = "margin-left:-90px;">
              </div>
        </form>
         
</div>
</body>
</html>
      
      <?php
     
        
        if(isset($_POST['update-btn']))
        { 
          
          $position = NULL;
          $username = $_POST['ict_username'];
          $image = $_FILES['image']['name'];
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $position = $_POST['position'];
          $address = $_POST['address'];

          $password = md5($_POST['password']);
          $conf_pass = md5($_POST['confirm_password']);

        
          $edit = new DEPED();
          $edit ->edit_user($password, $conf_pass, $username, $image, $firstname, $lastname, $position, $email, $phone, $address);
          
        }
      
      
      ?>

<style>
 #firstname
{ 
  height:32px;
  margin-left:-70%;
  width:50%;
}

#lastname
{
  height:33px;
  width:50%;
  margin-right: -35%;
  margin-top:-57px;
 
}

#email
{
  width:103%;
  margin-left:-17%;
  height:33px;
}

#phone
{
  height:32px;
  width:50%;
  margin-left:-70%;
} 

#position
{
  height:33px;
  width:50%;
  margin-right: -35%;

}

#address
{
  width:103%;
  height:35px;
  margin-left:-17%;
}

#update
{
  width:150px;
  margin-right:10%;
}


</style>



