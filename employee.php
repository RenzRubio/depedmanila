<?php

//session_start();
//echo $_SESSION['username'];

require('./database/db.php');
require('./includes/deped_inc.php');
require('./includes/loaduserinfo.php');
require('./includes/account_restriction.php');


//log out session
if(isset($_POST['logout-btn']))
{
    $logout = new DEPED();
    $logout ->session_logout();

}

//activity id
function random_num($length){

  $text = "";
  if($length<5)
  {
    $length = 5;
  }
  
  $len = rand(4, $length);
  
  for ($i=0; $i < $len; $i++) 
  { 
    $text .= rand(0,9);
  }
  
  return $text;
  }
  
    //date and time today
    date_default_timezone_set('Asia/Manila');
    $date = date('Y-m-d H:i:s');
  
//insert button to create new employee        
if(isset($_POST['add-btn']))
{   
    //data needed to insert new employee
    $employee_no = $_POST['employee_no'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
   
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $account_type = $_POST['account_type'];

    $admin = $_SESSION['username'];
    $action = "Insert";
    $description = "Added New Employee";
    $target = "";

    $conf_pass = $_POST['conf_pass'];
    $confirm_pass = md5($conf_pass);
    $email = $_POST['email'];
    $position = $_POST['position'];
    $department = $_POST['department'];
    $school = $_POST['school'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    
    $image = $_FILES['image']['name'];

    $addEmployee = new DEPED();
    $addEmployee ->insert_employee($account_type,$image,$employee_no, $firstname, $lastname, $username, $password, $confirm_pass, $email, $position, $department, $school, $phone, $address);
        
    //$recent_activity = new DEPED();
    //$recent_activity ->recent_activity($date, $admin, $action, $description);
       
   
}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deped | Add User</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel = "stylesheet" href = "https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap4.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo.png">
    <a href="https://icons8.com/icon/60953/add"></a>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    <!-- for pagination-->
    <link rel ="stylesheet" href = "css/style_pagination.css">
    <script src="css/js.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready( function () {
    $('#prdctTable').DataTable();
    
    } );
    </script>

  </head>
<body>

  <div class="sidebar">
    <div class="logo-details">
      <a href= "dashboard.php" style = "text-decoration:none;"><span class="logo_name"><img src="images/logo2.png" height="50px" width="100px" style="margin-left:70%; "></span></a>
    </div>
    <ul class="nav-links">
        <li>
          <a href="dashboard.php" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="employee.php" class="active">
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
           <button class="btndrop" style="width:100%; background:none; border: none;"><a href="gadgets.php" style="color:white;">Tablets/Mobile Devices</a></button><br>
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
        <span class="dashboard">Record of Users</span>
      </div>
     
     
      <!-- user profile sa may nav bar -->
      <div class="btn-group">
        
         <button type="button" class="btn btn-light"  style="background:#fff; border-style:none;">
         
      
         <span class="admin_name" style ="margin-top:10px; margin-right:12px; font-style:italic;"><?php echo $username;?></span></button>
          <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" style="border-radius: 20px;">
            <img src = "images/<?php 
            
            
            if($picture == NULL)
            {
              echo 'user.jpg';
            }

            else
            {
              echo $picture;
            }
            
            
            ?>" style="height:30px; width: 30px; border-radius: 360px;" alt="user_prof">
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
   <!--- error
      <!--button to open modal -->
      <button type="button" class="btn-modal btn-lg" data-toggle="modal" data-target="#myModal" style="background: rgb(60,141,188);font-size: 16px; width: 140px; margin-top:2%; font-family: 'Exo 2', sans-serif;"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/add--v1.png" height="20px" style="margin-bottom: 2px; margin-right:3px;" />Add User</button>

      <!--<button type="button" class="btn-modal btn-lg" data-toggle="modal" data-target="#myModall" style="background: rgb(226, 22, 53); margin-left: 2%;  font-size: 16px; width: 180px; margin-top:2%; font-family: 'Exo 2', sans-serif;"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/add--v1.png" height="20px" style="margin-bottom: 2px; margin-right:3px;" />Add Position</button>
      --->
      <!--import user-->
      <button data-toggle="modal" data-target="#exampleModal" class="btn btn-success" style="margin-left: 60%; font-size: 16px; height:40px; width: 140px; margin-top:2%; font-family: 'Exo 2', sans-serif; "><img src="https://img.icons8.com/ios-glyphs/30/ffffff/add--v1.png" height="20px" style="margin-bottom: 2px; margin-right:3px;" />Import</button>

      <!--extract user-->
     <form action="includes/export-user.php" method="get">

         <button data-toggle="modal"  name = 'export-btn' class="btn btn-info" style="margin-left: 10%; font-size: 16px;  width: 140px; margin-top:15%; font-family: 'Exo 2', sans-serif; "><img src="images/export.png" height="20px" style="margin-bottom: 2px; margin-right:3px;" />Export</button>
    
     </form>

      <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content"  style="width:900px; left: -30%;">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Import User</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  
                  <img src="images/123.png" style="float:left;">

                    <p style="margin-top:6px; margin-left:50px; font-family: 'Exo 2', sans-serif; color: black;">Upload CSV File</p>

                        <form action="includes/user-import.php" method="post" enctype = "multipart/form-data">
                            <input type="file" name="file" id="" accept=".csv" style="margin-left:38px;">
                                <p style="margin-top:38px; margin-left:50px; font-family: 'Exo 2', sans-serif; color: black;">This must be the format of the CSV template.</p>
                                  <span style="margin-left:60px;">Required fields are User ID, School, Username, First Name, last name, Email, Contact #, <br> <span style="margin-left:30px;">Position, Department, Account Type, Address and Password.</span></span>

                                    <img src="images/csv.png" style="margin-top:12px; margin-left:20px;">

                                <p style="margin-top:32px; margin-left:50px; font-family: 'Exo 2', sans-serif; color: black;">Import CSV File</p>

                            <input type="submit" class="btn btn-primary" value="Import" name = 'import' style="margin-left: 55px; width:100px;">

                        </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
          </div>



 <!-- the modal -->
 <div class="modal fade" id="myModal">
   <div class="modal-dialog modal-lg">
     <div class="modal-content col-9 mx-auto">

       <!-- modal header -->
       <div class="modal-header">
         <h4 class="modal-title" style="font-family: 'Fira Sans Condensed', sans-serif; font-size:30px;">User Registration</h4>
         
         <button type="button" class="close" data-dismiss="modal">&times;</button>
           
       </div>

       <!-- modal body -->
       <div class="modal-body">
         
         <!--- cause of error -->
         <br>
             

           <!---up to here-->
           <div class="form-group">
             
             
             </select>
       <script type="text/javascript">
         function numberonly(input)
           {
                var num =  /[^0-9]/gi;
               input.value = input.value.replace(num, "");
           }
     </script>



   <form action="" name = "registration" onsubmit="return validateForm()" method="post" enctype = "multipart/form-data">
          
          <center><img src="images/icons8-male-user.gif" style="height: 90px; width: 90px; " alt="logo" style="width:40px;"><br><br>
          <!--<label for="" style= "">Choose Image: </label>-->

           <input type="file" name='image' accept="image/png, image/gif, image/jpeg" id="" style = "margin-left:65px;" required></center><br><br>

           <!--<label for="Employee_no">Employee No. </label><br>-->
         
           <input type="text" name='employee_no' class="form-control validate" id="" required value = "" placeholder = "User ID"  style = "width:48%; height: 35px;" >
           <input type="text"  name='username' class="form-control validate" required style = "float:right;margin-top:-35px; width: 50%; height: 35px;" placeholder = "Username" ><br>

           <input type="text"  onkeypress="return /[a-z]/i.test(event.key)" required  name='firstname' id="" class="form-control validate" style = "float:left; width: 48%; height: 35px;display: inline-block;;" placeholder ="First Name" >
           <input type="text"  onkeypress="return /[a-z]/i.test(event.key)" required name='lastname' class="form-control validate" placeholder ="Last Name" id="" style = "float:right; height: 35px; width: 50%;" ><br><br>

           <input type="text" name='email' class="form-control validate" id="" required placeholder = "Email Address" style = "width: 48%; height: 35px;"  >

           <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) required this.value = this.value.slice(0, this.maxLength);" maxlength = "11" name='phone' id="" class="form-control validate" style = "float:right;margin-top:-35px; width: 50%; height: 35px;" placeholder = "Phone Number" ><br>

           
          <br>

                
                <select name='position' id = "position" required class="custom-select custom-select-sm mb-3" style = "float:right; width: 100%; margin-top: -35px;" >
                    <option selected disabled value = "">Select Position</option>
                    <?php
                    
                      $query = "SELECT * FROM position";
                      $select = mysqli_query($con,$query);

                      while($row = mysqli_fetch_array($select))
                      {
                        echo "<option>".$row['position']."</option>";

                      }
                    
                    ?>
                </select>
                
                <select name='school' id="school" class="custom-select custom-select-sm mb-3" required>
                    <option selected disabled value = "">Select School</option>
                    <?php
                    
                        $query = "SELECT * FROM school";
                        $select = mysqli_query($con, $query);

                        while($row = mysqli_fetch_array($select))
                        {
                          echo "<option>".$row['school_name']."</option>";

                        }
                          ?>
                         
                </select>
               <br>

                <select name='department' id="department" class="custom-select custom-select-sm mb-3"  required style = "width:48%;" >
                    
                    <option selected disabled value = "">Select Department</option>
                    <option value="IT Department">IT Department</option>
                    
                </select>

                <select name='account_type' required class="custom-select custom-select-sm mb-3" onchange="showDiv(this)" style = "float:right; margin-top:-1px; width: 50%;" >
                    
                    <option selected disabled value = "">Select Account Type</option>
                    
                    <!---<option value="Employee">Employee</option>-->
                    <option value="ICT Coordinator">ICT Coordinator</option>
                    <option value="Super Administrator">Super Administrator</option>
                    
                </select><br>

                

                <input type="text" name='address'  required class="form-control validate" placeholder = "Home Address" style = "float:left; width: 100%;display: inline-block;" ><br><br>
                
                <!--<div id="hidden_div" style="display:none;">-->

                    <input type="password" name='password' placeholder ="Password"class="form-control validate" ><br>

                    <input type="password" name='conf_pass'  placeholder ="Confirm Password" class="form-control validate" id="" ><br>

                <!--</div>-->

               
                <center>
                <input type="submit" class="btn btn-success text-white col-2" value="Save" name = 'add-btn' >
                <button type="button" class="btn btn-danger text-white col-2" data-dismiss="modal">Close</button>
                </center>
               

                        </div>
                        </div>
                        </div> 
                    </div>
            </form>
          </div>
        </div>
      </div>

    </div>
      
        

      <!-- the modal -->
     
      <div class="modal fade" id="myModall">
        <div class="modal-dialog modal-lg">
          <div class="modal-content col-9 mx-auto">

            <!-- modal header -->
            <div class="modal-header">
              <h4 class="modal-title" style="text-align:center; font-family: 'Fira Sans Condensed', sans-serif; font-size:30px;">Add Position</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- modal body -->
            <div class="modal-body">
              <h4 style="text-align: center;"></h4>
              <!--- cause of error -->
              <br>
              <form action=""  id = "form" name =  "positionForm" method="post">
                  
                  <label for="Position" style="margin-left: 10%; font-family: 'Viga', sans-serif; color: black; font-size:16px;">Position: &nbsp;</label>
              
                  <center><input type="text" name='position' style = "width:45%; margin-top:-6%; height:20%;" class="form-control" id=""><center>
                  <br><br>  
                  <span id = "text"></span>
                  <center><input type="submit" value="Save" class="btn btn-success"  name = 'insert-btn' style = "width:20%;"></center>
                  <br>

              </form>
              
            <?php

              if(isset($_POST['insert-btn']))
              {
                $position = $_POST['position'];
                $insert_position = new DEPED();
                
                $admin = $_SESSION['username'];
                $action = "Insert";
                $description = "Inserted New Position";

                $insert_position->insert_position($position, $date, $admin, $action, $description);

              }
                        
            ?>

        <p style="font-family: 'Viga', sans-serif; color: #37323E; font-style: italic;">Records of Position</p>
        
        <div style="height:200px ;overflow: auto;">
        <table id="position">
           <tr>
             <th width = "55%" style = "background-color:rgb(60, 141, 188); position: sticky; top:0;" >Position</th>
             <th style = "background-color:rgb(60, 141, 188); position: sticky; top:0;">Actions</th>
           </tr>
           
           <?php
           
              $query = "SELECT * FROM position";
              $loadPosition = mysqli_query($con, $query);
             
              while($row = mysqli_fetch_array($loadPosition))
              {

                ?><tr>
                   <td><?php echo $row['position']?></td>
                   <td style = "display:none;"><?php echo $row['id']?></td>
                   <td> <input type="submit" class="deletebtnposition" id="liveAlertBtn" value = "Delete" name = 'delete' style="background: rgb(219, 52, 69); color: white; width: 35%; border-style: none; padding: 6px; border-radius: 3px;">
                    <input type="submit" class="updateposition" id = "liveAlertBtn"value="Update" name = 'update' style="background: rgb(4, 170, 109); color: white; width: 35%; border-style: none; padding: 6px; border-radius: 3px;"></td>
              <?php
              }

             ?>
             </table>
            </div>
          <div class="modal fade" id="updatepositionto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content" style="margin-top: 35%;">
       <form action="" method="post">
          <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Update Position</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
          <!-- Modal body -->
            <div class="modal-body">
              
               <label for="Position" style="margin-left: 20%; font-family: 'Viga', sans-serif; color: #37323E; font-style: italic;">Position: &nbsp;</label>
                  <input type="text" name='update-pos' id="update-pos" required><br><br>
                  <input type="hidden" name="position_id" id="position_id">
                  <center><input type="submit" value="Update" name = 'update-btn' style="padding:5px; background:rgb(40, 167, 69); color:white; border-radius:6px; width:70px; border-style: none;"></center>
              
            </div>
              <!--</form>-->
              </form>
              <?php
              
                if(isset($_POST['update-btn']))
                { 
                  $position = $_POST['update-pos'];
                  $position_id = $_POST['position_id'];

                  $admin = $_SESSION['username'];
                  $action = "Update";
                  $description = "Update Employee Position";

                  $updatePosition = new DEPED();
                  $updatePosition->update_position($position, $position_id, $date, $admin, $action, $description);

                }
              
              ?>

            </div>
          </div>
        </div>
     
           </tr>
        
              
                <!---up to here-->
                <div class="form-group">
                  
                  
                  </select>
            <script type="text/javascript">
                function numberonly(input)
                {
                  var num =  /[^0-9]/gi;
                  input.value = input.value.replace(num, "");
                }
          </script>
       
          

            </div>
            </form>

      
            <!-- modal footer -->
            <div class="modal-footer">
              
             
            </div>

          </div>
        </div>
      </div>

    </div>

            <div class="s-container">

              <div class="input-group mb-3 col-4">

                
              
              </div>
              <!--<input class="btn btn-warning mb-3 text-white" type="submit" value="Search" name = 'search-btn' style="background: #D53D3D; border-color: #D53D3D;">-->
              
            </div>
  <div class="tab-title">
  <!--<h5 style="font-family: 'Viga', sans-serif; color: #37323E; font-style: italic; font-size: 24px;">Records of User</h5>-->
  </div>    
  <div class="product-table">
  <table id="prdctTable" class="table bg-white table-hover" >
  <thead class="table-warning">
    <tr>
      <!-- title ng mga table add ka na lang dito -->
     
      <th scope="col">User ID</th>
      <th scope="col">Image</th>
      <th scope="col" style = "display:none;">Username</th>
      <th onclick="sortTable(0)"scope="col">Name</th>
      <th scope="col">Position</th>
      <th onclick="sortTable(1)" scope="col">School</th>
      <th scope="col">Department</th>
      <th scope="col" style="text-align:center;">Actions</th>
      <th style = "display:none;"></th>
      <th style = "display:none;"></th>
      <th style = "display:none;"></th>
      <th style = "display:none;"></th>
      <th style = "display:none;"></th>
      <th style = "display:none;"></th>
      <th style = "display:none;"></th>
      <th style = "display:none;"></th>
    </tr>
  </thead>
  
    <tbody id="prodTable">
      
      
          <!-- The Modal kukunin ni button para sya ung ididisplay-->
            <div class="modal fade" id="delModalposition" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
      
          <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Delete Position</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
          <!-- Modal body -->
            <div class="modal-body">
              Are you sure you want to delete this Position?  
            </div>
        
          <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <form action="" method="post">

                  <input type="submit" class="btn deleteposition" id="liveAlertBtn" value = "Delete" name = 'delete-pos'>
                  <input type="hidden"  name='deleteposition' id="del-pos" value = "">
                 
                  <?php

                      if(isset($_POST['delete-pos']))
                      { 
                          $position = $_POST['deleteposition'];

                          $delposition = new DEPED();

                          $admin = $_SESSION['username'];
                          $action = "Delete";
                          $description = "Deleted Employee Position";  


                          $delposition -> delete_position($position,$date, $admin, $action, $description);

                      }

                  ?>
              
              </form>



              <?php
              
              if(isset($_POST['delete-btn']))
              {
                  $employee_id = $_POST['delete_id'];

                  $delete_emp = new DEPED();
                  $delete_emp -> delete_employee($employee_id);

                  $admin = $_SESSION['username'];
                  $action = "Delete";
                  $description = "Removed Employee";
                  $target = NULL;

                  //$recent_activity = new DEPED();
                  //$recent_activity -> recent_activity($date, $admin, $action, $description, $target);
              }
              
              
              ?>
              </div>
            

            </div>
          </div>
        </div>
        </div>
      </td>
        </tr>
        
          <?php
      
          $query = "SELECT * FROM register EXCEPT SELECT * FROM register WHERE account_type = 'Super Administrator'";
          $rs_result = mysqli_query($con, $query);

          if($rows = mysqli_num_rows($rs_result)>0)
          {

          
          while($row = mysqli_fetch_array($rs_result))
          {
          ?>
          <tr>
           
            <td scope="row" style="line-height: 50px;"><?php echo $row['employee_no']?></td>
            <td colspan="1" ><?php 
            
            if($row['image'] == '')
            {
              
              echo $defaultImage = "<img src = 'images/user.jpg'>";
            }

            else
            {
              echo "<img src = 'images/".$row['image']."'>";
            }
         
          ?></td>
              <td style = "display:none; line-height: 50px;"><?php echo $row['username']?></td>
              <td style="line-height: 50px;"><?php echo $row['firstname'].' '.$row['lastname'];?></td>
              <td style="line-height: 50px;"><?php echo $row['position']?></td>
              <td style="line-height: 50px;"><?php echo $row['school']?></td>
              <td style="line-height: 50px;"><?php echo $row['department']?></td>
          
         <form action="" method="get">
              
              <td>
              <button type="button" name = 'get-btn' class="btn editbtn"  data-toggle="modal" data-target="#form_modal<?php echo $row['employee_no']?>"><div class="icons8-edit"></div></button>
              <button type="button" class="btn deletebtnemployee" data-toggle="modal" data-target="#del_modal<?php echo $row['employee_no']?>"><div class="icons8-trash"></div></button><br></td>

              <?php
                  
                  if(isset($_GET['get-btn']))
                  {
                      $position = $row['postion'];
                      $school = $row['school'];
                      $department = $row['department'];
                  }
              
              
              ?>
          
        </form>

              <!--Hidden data use to refelect in update modal-->
              <td style = "display: none;"><?php echo $row['username']?></td>
              <td style = "display: none;"><?php echo $row['firstname']?></td>
              <td style = "display: none;"><?php echo $row['lastname']?></td>
              <td style = "display: none;"><?php echo $row['email']?></td>
              <td style = "display: none;"><?php echo $row['phone']?></td>
              <td style = "display: none;"><?php echo $row['address']?></td>
              <td style = "display: none;"><?php echo $row['position']?></td>
              <td style = "display: none;"><?php echo $row['account_type']?></td>
              <?php
                //use as variable in fetching the data
                $_SESSION['ictusername']= $row['username'];
              
              ?>

              
    <!-- The Modal kukunin ni button para sya ung ididisplay-->
    <div class="modal fade" id="del_modal<?php echo $row['employee_no']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content" style="margin-top: 35%;">
      
          <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Delete Employee</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
          <!-- Modal body -->
            <div class="modal-body">
              Are you sure you want to delete this User?  
            </div>
        
          <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <form action="" method="post">

                  <input type="submit" class="btn btn-danger" id="liveAlertBtn" value = "Delete" name = 'delete-btn'>
                  <input type="hidden" name='delete_id' id="del_empID" value = "<?php echo $row['employee_no']?>">
                  
              </form>

            </div>
          </div>
        </div>
      </div>
      <!---End-->
              
               <!-- Edit Modal for existing Products -->
          <div class="modal fade" id="form_modal<?php echo $row['employee_no']?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content col-9 mx-auto">

            <!-- modal header -->
            <div class="modal-header">
              <h4 class="modal-title">Edit User</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- modal body -->
            <div class="modal-body">
                <div class="form-group">
          

                  <form action="" method="post" enctype = "multipart/form-data">

                      <center><img style = " height:120px; width: 120px; border-radius:360px;" src="images/<?php
                      
                        if($row['image'] == NULL)
                        {
                            echo 'user.jpg';
                        }
                        
                        else
                        {
                            echo $row['image'];
                        }
                      
                      ?>" style="height: 90px; width: 90px; " alt="logo" style="width:40px;"><br><br>
                    
                      <input type="file"  name='image' id="" style = "margin-left:65px;"></center><br><br>

                      <input type="text" disabled name='employee_no2' class="form-control validate" id='employee-dis' value = "<?php echo $row['employee_no']?>" placeholder = "User Number" style = "width:48%; height:35px;" required>
                      <input type="hidden" name="employee-display" value = "<?php echo $row['employee_no']?>" id="employee-display" >
                      <input type="text" disabled name='username2' value = "<?php echo $row['username']?>" class="form-control validate" id = 'username' style = "float:right;margin-top:-35px; width: 50%; height:35px;" placeholder = "Username" required><br>
                      
                      <input type="text" name='firstname2'  value = "<?php echo $row['firstname']?>" class="form-control validate" id = 'firstname'  style = "float:left;  width: 48%;display: inline-block;;" placeholder ="First Name" required>
                    
                      <input type="text" name='lastname2' value = "<?php echo $row['lastname']?>" class="form-control validate" id = "lastname" placeholder ="Last Name" id="" style = "float:right; width: 50%;" required><br><br>

                      <input type="text" name='email2' value = "<?php echo $row['email']?>" class="form-control validate" id="email" placeholder = "Email Address" style = "width: 48%" required>

                      <input type="text" name='phone2' value = "<?php echo $row['phone']?>" class="form-control validate" id = "phone" style = "float:right;margin-top:-25px; width: 50%;" placeholder = "Phone Number" required><br>
                      <?php
                          
                          $query = "SELECT * FROM register WHERE username = '{$_SESSION['ictusername']}'";
                          $select = mysqli_query($con, $query);
                          $fetch = mysqli_fetch_array($select);
                          
                          $school = $fetch['school'];
                          $department = $fetch['department'];
                          $account_type = $fetch['account_type'];                     
                          $address = $fetch['address'];

                        ?>
                      <br>
                      <br>
                     
                      <select name='position2' id="position2" class="custom-select custom-select-sm mb-3" style = "float:right;margin-top:-47px; width: 100%;" >
                          <option selected value = "<?php echo $row['position']?>"><?php echo $row['position']?></option>
                          <?php
                          
                          $query = "SELECT * FROM position";
                          $select = mysqli_query($con,$query);

                          while($row = mysqli_fetch_array($select))
                          {
                            echo "<option>".$row['position']."</option>";

                          }
                        
                        ?>
                        
                      </select>
                      
                     
                    
                      <select name='school2' disabled id="school2" class="custom-select custom-select-sm mb-3" >
                        
                          <option selected value = "<?php echo $school?>"><?php echo $school;?></option>
                          <?php
                          
                          $query = "SELECT * FROM school";
                          $select = mysqli_query($con,$query);

                          while($row = mysqli_fetch_array($select))
                          {
                            echo "<option>".$row['school_name']."</option>";

                          }
                        
                        ?>
                        
                      </select><br>

                    <select name='department2' id="department2" class="custom-select custom-select-sm mb-3"  style = "width:48%;">
                        <option selected value = "<?php echo $department?>"><?php echo $department;?></option>
                          <?php
                          
                          $query = "SELECT * FROM department";
                          $select = mysqli_query($con,$query);

                          while($row = mysqli_fetch_array($select))
                          {
                            echo "<option>".$row['department']."</option>";

                          }
                        
                        ?>
                    </select><br>
                       
                    <select name='account_type2' id = "account_type2" onchange="showDiv2(this)" class="custom-select custom-select-sm mb-3" onchange="showDiv2(this)" style = "float:right; transform:translateY(-47px); width: 50%;" >
                        
                        <option selected value = "<?php echo $account_type?>"><?php echo $account_type?></option>
                       
                        <option value="ICT Coordinator">ICT Coordinator</option>
                        <option value="Super Administrator">Super Administrator</option>
                        
                    </select>

                    <input type="text" name='address2'id = "address2" value = "<?php echo $address;?>" class="form-control validate" value = "<?php echo $row['address']?>" placeholder = "Home Address" style = "float:left;  transform:translateY(-47px); width: 100%; height: 35px;display: inline-block;" required>

                    <input type="password" name='password2' placeholder ="Password"class="form-control validate" ><br>

                    <input type="password" name='conf_pass2'  placeholder ="Confirm Password" class="form-control validate" id="" ><br>
                    <br><br>
                        <center>
                          <input type="submit" class="btn btn-success text-white col-2" value="UPDATE" name = 'update-btn2'>
                          <button type="button" class="btn btn-danger text-white col-2" data-dismiss="modal">Close</button>
                      </center>
                
                <?php

                    if(isset($_POST['update-btn2']))
                    {
                        $position = NULL;

                        $firstname = $_POST['firstname2'];
                        $lastname = $_POST['lastname2'];
                        $email = $_POST['email2'];
                        $phone = $_POST['phone2'];
                       
                        $position = $_POST['position2'];
                        //$school = $_POST['school2'];
                        $department = $_POST['department2'];
                        $address = $_POST['address2'];
                        $account_type = $_POST['account_type2'];

                        $pass = $_POST['password2'];
                        $password = md5($pass);

                        $conf = $_POST['conf_pass2'];
                        $conf_pass = md5($conf);
                        
                        $image = $_FILES['image']['name'];
                        $employee_no = $_POST['employee-display'];
                        
                        $update_employee = new DEPED();
                        $update_employee -> employee_update($account_type,$password, $conf_pass, $image, $firstname, $employee_no, $lastname, $email, $phone, $position, $department, $address);
                        
                    }

                ?>
              
                </form>  
                </div>

                </div>
                </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
   <!---Ending-->

              
            <?php
            }
          }

          else
          {
            echo "<tr><td align = 'center'colspan = \"14\"><img src='images/no-data.svg' style='height: 15%; width:15%;'<br> <br>No Data Yet</td></tr>";
          }
            ?>
             
        </tr> 
      </tbody>
    </table>
    </div>
  </section>
  </form>

 

  <script>
        $(document).ready(function(){
        $('.deletebtnposition').on('click', function(){

            $('#deleteModalposition').modal('show');

              $tr = $(this).closest('tr');

              var data = $tr.children("td").map(function(){
                  return $(this).text();
              }).get();

              console.log(data);

              $('#del-pos').val(data[0]);
             
              
        });
        });
      </script>


      <script>
        $(document).ready(function(){
        $('.deletebtnposition').on('click', function(){

            $('#delModalposition').modal('show');

              $tr = $(this).closest('tr');

              var data = $tr.children("td").map(function(){
                  return $(this).text();
              }).get();

              console.log(data);

              $('#del_posID').val(data[0]);

              $('#wew').val(data[3]);
              
        });
        });
      </script>

       

  <script>
   let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".sidebarBtn");
  sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
var alertTrigger = document.getElementById('liveAlertBtn')

// search bar
$(document).ready(function(){
  $("#searchProduct").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#prodTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});



// HEADER SORTER TABLE PRODUCT NAME AND PRICE

function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("prdctTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}

 </script>
  
</body>
</html>



  
<script>

function showDiv(select)
{
   if(select.value=="ICT Coordinator")
   {
    document.getElementById('hidden_div').style.display = "block";
    
   } 

   else if(select.value=="Super Administrator")
   {
    document.getElementById('hidden_div').style.display = "block";
   }
   
   else
   {
    document.getElementById('hidden_div').style.display = "none";
   }

} 
</script>


<script>
    
    function validatePosition() 
    {
        let position = document.forms["positionForm"]["position"].value;
        var text = document.getElementById("text");
        var position_text = document.getElementById("position");
           if(position == '')
           {
              //alert("Position is required");
              //return false;

              form.classList.add("valid");
              text.innerHTML = "Position is null";
              text.style.color = "#ff0000";;
              return false;
           }

          
    }
</script>
    
<script>


$(document).ready(function(){
$('.updateposition').on('click', function(){

    $('#updatepositionto').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function(){
          return $(this).text();
      }).get();

      console.log(data);

      $('#update-pos').val(data[0]);
     
      $('#position_id').val(data[1]);

      
});
});

</script>
