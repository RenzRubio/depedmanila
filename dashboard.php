<?php

require('./includes/deped_inc.php');
require('./includes/loaduserinfo.php');
require('./database/db.php');
require('./includes/account_restriction.php');

if(isset($_POST['logout-btn'])) 
{
  $logout = new DEPED();
  $logout ->session_logout(); 
}

?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Deped | Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="shortcut icon" href="images/logo.png">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

     <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/footer.css">
      <!-- chart css link -->

      <link rel="preconnect" href="https://fonts.googleapis.com"> 
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
      <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@300&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <a href="https://icons8.com/icon/KsdrAZR7Jynk/employees"></a>

      <link rel="icon" href="icon-colored-bl.png" type="image/x-icon">
      <link
          rel=
      "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
          type="text/css"
        />
        <script src=
      "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script
          src=
      "https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
          type="text/javascript"
        ></script>
        <script src=
      "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <script src=
      "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
        </head>
<body>
  

  
  <div class="sidebar">
    <div class="logo-details">
      
      <a href= "dashboard.php" ><span class="logo_name"><img src="images/logo2.png" height="50px" width="100px" style="margin-left:70%;"></span></a>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="employee.php">
            <i class="las la-users"></i>
            <span class="links_name">Users</span>
          </a>
        </li>
        <li>
          <a href="position.php">
            <i><img src="https://img.icons8.com/ios-filled/50/ffffff/administrator-male--v1.png" style = "width:20px; height:20px;" /></i>
            <span class="links_name">Position</span>
          </a>
        </li>
        <li>
          <a href="school.php" >
           <i class="las la-school"></i>
            <span class="links_name">Schools</span>&nbsp;<span class="badge bg-danger text-light" id="order_list"></span></a>
          </a>
        </li>
        <li>
          <a href="department.php" >
           <i><img src="https://img.icons8.com/glyph-neue/64/ffffff/room.png" style = "width:20px; height:20px;"/></i>
            <span class="links_name">Department</span>&nbsp;<span class="badge bg-danger text-light" id="order_list"></span></a>
          </a>
        </li>

        <button class="dropdown-btn" onclick="myFunction()" class="dropbtn"><i class="las la-box" style="color: white; margin-left: 4px;"></i><span style="font-size: 16px; color: white; margin-left:20px;">Items</span>
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container" id="myDropdown" class="dropdown-content">
          <button class="btndrop" style="width:100%; background:none; border: none;"><a href="consumable.php" style="color:white;">Consumable</a></button><br>
           <button class="btndrop" style="width:100%; background:none; border: none;"><a href="package.php" style="color:white;">Packages</a></button><br>
           <button class="btndrop" style="width:100%; font-size: 18px; background:none; border: none;"><a href="gadgets.php" style="color:white;">Tablets/Mobile Devices</a></button><br>
           <button class="btndrop" style="width:100%; background:none; border:  none;"><a href="computer.php" style="color:white;">Laptops/Desktops</a></button><br>
           <button class="btndrop" style="width:100%; background:none; border: none;"><a href="textbook.php" style="color:white;">Textbooks</a></button><br>
           <button class="btndrop" style="width:100%; background:none; border: none;"><a href="peripherals.php" style="color:white;">ICT Paraphernalia</a></button><br>
        </div>


      <script>
    
      //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
      var dropdown = document.getElementsByClassName("dropdown-btn");
      var i;

      for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
          } else {
            dropdownContent.style.display = "block";
          }
        });
        }



      </script>

        <li>
          <a href="report.php">
            <i class="las la-folder-plus"></i>
            <span class="links_name">Reports</span>
          </a>
        </li>

       
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
        <span class="dashboard" style="font-family: 'Fira Sans Condensed', sans-serif; ">Dashboard</span>
      </div>
      <!-- user profile sa may nav bar -->
      <div class="btn-group">
          
          
       <button type="button" class="btn btn-light"  style="background:#fff; border-style:none;">
         
      
         <span class="admin_name" style ="margin-top:10px; margin-right:12px; font-style:italic;"><?php echo $username;?></span></button>
          <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" style="border-radius: 20px;">
            <img src = "images/<?php 
            
            if($picture == "")
            {
                echo 'user.jpg';
            }
            
            else
            {
              echo $picture;
            }
            
            ;?>
            
            
            " style="height:30px; width: 30px; border-radius: 360px;" alt="user_prof">
          </button>
        <div class="dropdown-menu">
          
          <a href="profile.php" class="btn btn-md btn-block" role="button" style="margin-left:10px;">Edit Profile</a>
           <img src="https://img.icons8.com/ios-glyphs/25/000000/edit-user-female.png" height="25px" width="25px" style="transform: translateY(-33px); margin-left:9%;"/>
          <img src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/25/000000/external-log-out-user-interface-kmg-design-glyph-kmg-design.png"/ height="25px" width="25px" style="transform: translateY(100%); margin-left:-27px;">
        
          <form action="" method="post">
            <input type="submit" value="Log out" name = 'logout-btn' id = "logout"> 
         
          </form>
          </button>
        </div>
      </div>
    </nav>

    <div class="home-content">
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
          <a href="product.html" class="btn btn-danger col-4 mb-3" role="button">Log out</a>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <div class="shortcuts">
  <div class="row align-items-center">

    <div class="col-sm-3">
      <div class="card" style="background-color: #ffb700;">
        <div class="card-body">
         <img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/ffffff/external-employees-project-planing-flatart-icons-outline-flatarticons.png"/ width="60px" height="50px" style="float: left;"><p style="font-size: 20px; font-family: 'IBM Plex Sans Thai Looped', sans-serif; color:white; letter-spacing: 1px; text-align: center; margin-top: 5%; font-weight: bold;" >Users</p>
         <h4 class="card-subtitle mb-2 text-right text-white font-weight-bold"><?php 
          
          $display_emp = new DEPED();
          echo $display_emp->count_employees();
         
         
         ;?></h4>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card" style="background-color: #48bfe3;">
        <div class="card-body">
         
         <img src="images/school.png" width="50px" height="50px" style="float: left;"> 
         <p style="font-size: 20px; font-family: 'IBM Plex Sans Thai Looped', sans-serif; color:white; letter-spacing: 1px; text-align: center; margin-top: 5%; font-weight: bold;">Schools</p>
         <h4 class="card-subtitle mb-2 text-right text-white font-weight-bold"><?php 
          
          $display_school = new DEPED();
          echo $display_school->count_school();
         
         
         ;?></h4>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card" style="background-color: #99d98c;">
        <div class="card-body">
          
          <img src="https://img.icons8.com/ios/50/ffffff/commodity-turnover.png"/ width="50px" height="50px" style="float: left;">
         <p style="font-size: 20px; font-family: 'IBM Plex Sans Thai Looped', sans-serif; color:white; letter-spacing: 1px; text-align: center; margin-top: 5%; font-weight: bold;">Consumables</p>
         <h4 class="card-subtitle mb-2 text-right text-white font-weight-bold"><?php 
          
          $display_counsumable = new DEPED();
          echo $display_counsumable->count_consumables();
         
         
         ;?></h4>
          
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card bg-secondary">
        <div class="card-body">

          <img src="https://img.icons8.com/external-itim2101-fill-itim2101/64/ffffff/external-packages-logistics-and-delivery-itim2101-fill-itim2101.png"/  width="50px" height="50px" style="float: left;">
         <p style="font-size: 20px; font-family: 'IBM Plex Sans Thai Looped', sans-serif; color:white; letter-spacing: 1px; text-align: center; margin-top: 5%; font-weight: bold;">Packages</p>

         <h4 class="card-subtitle mb-2 text-right text-white font-weight-bold"><?php 
          
          $display_packages = new DEPED();
          echo $display_packages->count_packages();
         
         
         ;?></h4>
        </div>
      </div>
    </div>

     <div class="col-sm-3" style="margin-top: 2%;">
      <div class="card" style="background-color: #746ab0;">
        <div class="card-body">



          <img src="https://img.icons8.com/ios/50/ffffff/windows8-tablet.png"/ width="50px" height="50px" style="float: left;">
         <p style="font-size: 20px; font-family: 'IBM Plex Sans Thai Looped', sans-serif; color:white; letter-spacing: 1px; text-align: center; margin-top: 5%; font-weight: bold;">Tablets/Mobile</p>

          <h4 class="card-subtitle mb-2 text-right text-white font-weight-bold"><?php
          
            
          $display_tablet = new DEPED();
          echo $display_tablet->count_gadgets();
          
          ?></h4>
        </div>
      </div>
    </div>

    <div class="col-sm-3" style="margin-top: 2%;">
      <div class="card" style="background-color: #e83845;">
        <div class="card-body">

          <img src="https://img.icons8.com/pastel-glyph/64/ffffff/laptop--v3.png"/ width="50px" height="50px" style="float: left;">
         <p style="font-size: 20px; font-family: 'IBM Plex Sans Thai Looped', sans-serif; color:white; letter-spacing: 1px; text-align: center; margin-top: 5%; font-weight: bold;">Laptop/Desktop</p>

          <h4 class="card-subtitle mb-2 text-right text-white font-weight-bold"><?php 
          
          $display_laptop = new DEPED();
          echo $display_laptop->count_computer  ();
          
          ?></h4>
        </div>
      </div>
    </div>

    <div class="col-sm-3" style="margin-top: 2%;">
      <div class="card" style="background-color: #2B2E2F;">
        <div class="card-body">

        <img src="https://img.icons8.com/glyph-neue/64/ffffff/book.png" width="50px" height="50px" style="float: left;">
         <p style="font-size: 20px; font-family: 'IBM Plex Sans Thai Looped', sans-serif; color:white; letter-spacing: 1px; text-align: center; margin-top: 5%; font-weight: bold;">Textbook</p>

          <h4 class="card-subtitle mb-2 text-right text-white font-weight-bold"><?php 

                $display_desktop = new DEPED();
                echo $display_desktop->count_textbook();
          
          ?></h4>
        </div>
      </div>
    </div>

    <div class="col-sm-3" style="margin-top: 2%;">
      <div class="card" style="background-color: #7D3A8B;">
        <div class="card-body">

        <img src="https://img.icons8.com/dotty/80/ffffff/workstation.png" width="50px" height="50px" style="float: left;">
         <p style="font-size: 20px; font-family: 'IBM Plex Sans Thai Looped', sans-serif; color:white; letter-spacing: 1px; text-align: center; margin-top: 5%; font-weight: bold;">ICT Paraphernalia</p>

          <h4 class="card-subtitle mb-2 text-right text-white font-weight-bold"><?php 
          
          $display_tv = new DEPED();
          echo $display_tv->count_peripherals();
          
          ?></h4>
        </div>
      </div>
    </div>
  </div>

    </div>
<!-- chart -->
              
        
   
     

</div>
<div class="orders-container" >
<table class="table bg-white table-hover" style="border-radius: 5px; width: 100%;" >
    <thead class="table-light"><br><br>
      <h4 style="font-family: 'Viga', sans-serif; color: #37323E; font-style: italic; margin-left:2%; margin-bottom: 1%;">Recent Activity</h4>
   
     
    </thead>
    <thead class="table-warning" style="background-color:rgb(171, 207, 228);">
      
      <tr>
        <th>Date</th>
        <th>Admin</th>
        <th>Action</th>
        <th>Checked Out To</th>
        <th></th>
      </tr>

      </thead>
    <tbody>
    </tbody>
    
  <tr>
      
    <?php
    
      $query = "SELECT * FROM activity ORDER BY date DESC LIMIT 10";
      $select = mysqli_query($con, $query);

      while($row = mysqli_fetch_array($select))
      {
        ?>

          <td><img src="https://img.icons8.com/external-xnimrodx-lineal-xnimrodx/24/000000/external-date-time-management-xnimrodx-lineal-xnimrodx.png" style="width:24px; height: 24px;" /> &nbsp;<?php echo $row['date'];?></td>

          <td><img src="https://img.icons8.com/ios-glyphs/24/000000/person-male.png" style="width:24px; height: 24px;"/><?php echo $row['admin'];?></td>

          <td><?php echo $row['action'];?></td>

          <td><?php echo $row['description']?></td>

          

  </tr>

        <?php
      }

    ?>
  </table>
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
