<?php

require('./includes/loaduserinfo.php');
require('./includes/deped_inc.php');
require('./includes/account_restriction.php');


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
    <title>Deped | Add ICT Paraphernalia</title>
    <link rel="stylesheet" href="css/style_items.css">
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
          <a href="dashboard.php">
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
        <span class="dashboard">Record of ICT Paraphernalia</span>
      </div>
     
      <!-- user profile sa may nav bar -->
      <div class="btn-group">
        
         <button type="button" class="btn btn-light" style="background:#fff; border-style:none;">
         
       
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
            
            ;?>" style="height:30px; width: 30px; border-radius: 360px;" alt="user_prof">
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
      
    
       <button type="button" class="btn-modal btn-lg" data-toggle="modal" data-target="#myModal2" style="background: rgb(60,141,188);font-size: 16px; margin-left:2%; margin-top: 2%;">+ Add Item</button>

      <!-- the modal -->
      <div class="modal fade" id="myModal2">
        <div class="modal-dialog modal-lg">
          <div class="modal-content col-9 mx-auto">

            <!-- modal header -->
            <div class="modal-header">
              <h4 class="modal-title" style=" font-family: 'Barlow Condensed', sans-serif; font-size:30px; margin-top:2%;">Add Peripherals</h4>
              
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <form action="" method="post">
            <!-- modal body -->
            <div class="modal-body">
            <label>Item ID: </label>
            

            <input type="text"  name='itemID' class="form-control validate" id="" value = "" placeholder = "Item ID" style = "width:100%; height:20%;"><br>
            
            <label>Item Name:</label>
              <input type="text" name='itemName' class="form-control validate" id="" value = "" placeholder = "Item Name" style = "width:100%; height:20%;"><br>
                
            <label for="">Particular: </label><br>
              <textarea name='particular' id="" style="width:100%;" rows="3"></textarea><br>
 
            <label>Quantity: </label>
              <input type="number" name='quantity' class="form-control validate" id="" value = "1" placeholder = "Quantity" style = "width:100%; height:20%;"><br>
            
            <label>Cost: </label>
              <input type="text" name='cost' class="form-control validate" id="" value = "" placeholder = "Cost" style = "width:100%; height:20%;"><br>
            
            <label>Purchase Date: </label>
              <input type="date" name='purchase_date' class="form-control validate" id="" value = "" placeholder = "Purchase Date" style = "width:100%; height:20%;"><br>
              <!--- cause of error -->
            
            <center><button class="btnadd" name= 'add-package'>Add</button></center>

         </form>

            <?php

               if(isset($_POST['add-package']))
               {  

                  $item_id = $_POST['itemID'];
                  $item_name = $_POST['itemName'];
                  $particular = $_POST['particular'];
                  $quantity = $_POST['quantity'];
                  $cost = $_POST['cost'];
                  $purchase_date = $_POST['purchase_date'];
                  $category = "Peripherals";
                  $status =  $_POST['status'];

                  if($quantity >0)
                  {
                    $status = "Available";
                    $add_peripherals = new DEPED();
                    $add_peripherals -> insert_item($item_id, $item_name, $particular, $quantity, $cost, $purchase_date, $category, $status);
                    
                    if($add_peripherals)
                    {
                        echo '<script>window.location.href = "/depedmanila/peripherals.php"</script>';
                    }
  
                    else
                    {
                        echo '<script>alert("Failed to insert")</script>';
                    }
                  }

                  else
                  {
                    $status = "Unavailable";
                    $add_peripherals = new DEPED();
                    $add_peripherals -> insert_item($item_id, $item_name, $particular, $quantity, $cost, $purchase_date, $category, $status);
                    
                    if($add_peripherals)
                    {
                        echo '<script>window.location.href = "/depedmanila/peripherals.php"</script>';
                    }
  
                    else
                    {
                        echo '<script>alert("Failed to insert")</script>';
                    }
                  }
                  
               }
            ?>

                <!---up to here-->
                <div class="form-group">

                </div>
              </div>
            </div>
            </div>
          </div>

         <div class="tab-title" style="margin-top:100px;">
              <!--<p style="font-family: 'Viga', sans-serif; color: #37323E; font-size: 20px; font-style: italic;">Record of ICT Paraphernalia</p>
              -->
              <div class="product-table ">
              <table id="prdctTable" style="width:109%;" class="table bg-white table-hover">
              <thead class="table-warning" style="background-color:rgb(171, 207, 228); ">
                <tr>
               <!-- title ng mga table add ka na lang dito -->
               <th scope="col">Item ID</th>
                  <th onclick="sortTable(0)"scope="col">Item Name</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Particular</th>
                  <th scope="col">Status</th>
                  <th scope="col">Category</th>
                  <th scope="col">Action</th>
                  <th style= "width:-100%; display:none;">Pagination</th>
                  <th style= "width:-100%; display:none;">Pagination</th>
                </tr>
              </thead>
              <tbody id="prodTable">



      </td>
        </tr>
                
                <?php
          
                    $query = "SELECT * FROM item WHERE category = 'Peripherals'";
                    $display_emp = mysqli_query($con, $query);
                
                    if($rows = mysqli_num_rows($display_emp)>0)
                    {
                
                    
                    while($row = mysqli_fetch_array($display_emp))
                    {
                      ?>
                      <tr>
                      <td scope="row"><?php echo $row['item_id']?></td>
                      <td colspan="1"><?php echo $row['item_name']?></td>
                      <td scope="row"><?php echo $row['quantity'].' pcs'?></td>
                      <td><?php echo $row['particular']?></td>
                      <td><?php 
                        
                        if($row['status'] == 'Available' && $row['quantity'] >0)
                        {
                          echo '<span style = "width:65%;" class="badge badge-success">'.'Available'.'</span>';
                        }

                        else
                        {
                          echo '<span style = "width:65%;" class="badge badge-danger">'.'Unavailable'.'</span>';
                        }

                      ?></td>
                      <td style= "display:none;"><?php echo $row['quantity']?></td>
                      <td style= "display:none;"><?php echo $row['cost']?></td>
                      <td><?php echo $row['category']?></td>
                    
                      <form action="/depedmanila/checkout.php" method="get">
                        
                         <td>
                          <!---<button type="button" class="btn checkoutbtnpackage"><i class="las la-clipboard-list"></i></div></button>-->
                          <?php
                              
                              if($row['status'] == 'Available')
                              {
                                echo '<button name = "checkout-btn" class="checkout-btn"><img src="https://img.icons8.com/fluency-systems-regular/20/3C323C/checkout.png" style="width:20px; height:20px; margin-right:8px;"/></button>';
                              }

                              else if($row['status'] == 'Unavailable')
                              {
                                echo '<button name = "checkout-btn" disabled class="checkout-btn"><img src="https://img.icons8.com/fluency-systems-regular/20/3C323C/checkout.png" style="width:20px; height:20px; margin-right:8px;"/></button>';
                              }

                          ?>
                                        
                           <!--to pass the value of item id to checkout.php page-->
                            <input type="hidden" name="item_id" id="" value = "<?php echo $row['item_id'] ?>">
                            <input type="hidden" name="item_name" id="" value = "<?php echo $row['item_name'] ?>">
                            <input type="hidden" name="particular" id="" value = "<?php echo $row['particular'] ?>">
                            <input type="hidden" name="status" id="" value = "<?php echo $row['status'] ?>">
                            <input type="hidden" name="quantity" value = "<?php echo $row['quantity'] ?>">
                            <input type="hidden" name="cost" value = "<?php echo $row['cost']?>">
                      </form>
                          <button type="button" class="btn editbtnpackage" data-toggle="modal" data-target="#editModalpackage<?php echo $row['item_id']?>"><div class="icons8-edit"></div></button>
                          <button type="button" class="btn deletebtnpackage" data-toggle="modal"  data-target="#delModalpackage<?php echo $row['item_id']?>"><div class="icons8-trash"></div></button><br>
                        </td>
          
<!-- The Modal kukunin ni button para sya ung ididisplay-->
<div class="modal fade" id="delModalpackage<?php echo $row['item_id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content" style="margin-top: 35%;">
      
          <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Delete this Package?</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
          <!-- Modal body -->
            <div class="modal-body">
              Are you sure you want to delete this specific Package?  
            </div>
        
          <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <form action="" method="post">

                  <input type="submit" class="btn btn-danger" id="liveAlertBtn" value = "Delete" name = 'delete-btn'>
                  <input type="hidden" name='delete-package' id="delete-package" value = "<?php echo $row['item_id']?>">

                  <?php
                  
                    if(isset($_POST['delete-btn']))
                    { 
                      $item_id = $_POST['delete-package'];
                      
                      $del_peripherals = new DEPED();
                      $del_peripherals -> delete_item($item_id);

                      if($del_peripherals)
                      {
                          echo '<script>window.location.href = "/depedmanila/peripherals.php"</script>';
                      }
    
                      else
                      {
                          echo '<script>alert("Failed to Delete")</script>';
                      }

                    }
                      
                  
                  ?>
              
              </form>


            </div>
          </div>
        </div>
      </div>
      <!---End--->


                        <!-- Edit Modal for existing Products -->
          <div class="modal fade" id="checkoutModalpackage">
        <div class="modal-dialog modal-lg">
          <div class="modal-content col-9 mx-auto">

            <!-- modal header -->
            <div class="modal-header">
            <h4 class="modal-title" style=" font-family: 'Barlow Condensed', sans-serif; font-size:35px; margin-top:2%;">Check-out</h4>
              
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
            <form action="" method="post" enctype = "multipart/form-data">
                
                <input type="text" name='' class="form-control validate" id="" value = "" placeholder = "Item ID" style = "width:100%; height:20%;" disabled><br>
                <input type="text" name='' class="form-control validate" id="" value = "" placeholder = "Item Name" style = "width:100%; height:20%;" ><br>
                
                <select name='' id="" class="custom-select custom-select-sm mb-3"  style = "width:48%;" required>
                    
                    <option selected disabled value = "">Select Status</option>
                    <option value="IT Department">Archieved</option>
                    <option value="IT Department">Pending</option>
                    <option value="IT Department">Deploy</option>
                    
                </select>


                <select name='' id="" class="custom-select custom-select-sm mb-3"  style = "width:48%;" required>
                    
                    <option selected disabled value = "">Select School</option>
                    
                </select>
                <input type="text" name='' class="form-control validate" id="" value = "" placeholder = "Item ID" style = "width:50%; height:20%; display: inline-block;" disabled>

                <input type="submit" name="" value="Find ICT Coordinator" style="background:rgb(60, 141, 188); padding: 7px; width: auto; border-radius: 5px; color: white; border-style: none; display: inline-block;"><br><br>

               

               <input type="number" name='' class="form-control validate" id="" value = "" placeholder = "Quantity" style = "width:100%; height:20%;" ><br>

               <label for="" style="display: inline-block; font-size: 16px;">Export Date: </label>
               <input type="date" name='' class="form-control validate" id="" value = "" placeholder = "Quantity" style = "width:80%; height:15%; display: inline-block;" ><br>




             <!-- modal footer -->
            <div class="modal-footer">
              <input type="submit" class="btn btn-danger" value="Check-out" name = 'update-btn'>
              <button type="button" class="btn btn-light col-2" data-dismiss="modal">Close</button>
              

            
            </div>
                </div>
                </div>
                </div> 
            </div>
          </form>
        </div>
      </div>
          </form>
            </form>
            
                <!-- Edit Modal for existing Products -->
          <div class="modal fade" id="editModalpackage<?php echo $row['item_id']?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content col-9 mx-auto">

            <!-- modal header -->
            <div class="modal-header">
            <h4 class="modal-title" style=" font-family: 'Barlow Condensed', sans-serif; font-size:35px; margin-top:2%;">Edit Package Item</h4>
              
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
              <form action="" method="post">

                  <input type="text" disabled name='' class="form-control validate" id="itemID" value = "<?php echo $row['item_id']?>" placeholder = "Item ID" style = "width:100%; height:20%;"><br>
                  <input type="hidden" name='item_id' value = "<?php echo $row['item_id']?>" id = 'itemid2'>

                  <label>Item Name:</label>
                  <input type="text" name='itemName' class="form-control validate" id="item_name" value = "<?php echo $row['item_name']?>" placeholder = "Item Name" style = "width:100%; height:20%;"><br>
                    
                  <label for="">Particular: </label><br>
                  <textarea name='particular' id="particular2" cols="72" rows="3"><?php echo $row['particular']?></textarea><br>

                  <label>Quantity: </label>
                  <input type="number" name='quantity' class="form-control validate" id="quantity2" value = "<?php echo $row['quantity']?>" placeholder = "Quantity" style = "width:100%; height:20%;"><br>

                  <label>Cost: </label>
                  <input type="text" name='cost' class="form-control validate" id="cost2" value = "<?php echo $row['cost']?>" placeholder = "Cost" style = "width:100%; height:20%;"><br>

                  <input type="hidden" name="status" id="status2">

                  <!--- cause of error -->
                  <br>
                  <!-- modal footer -->
                  <div class="modal-footer">
                  <button type="button" class="btn btn-light col-2" data-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-warning text-white" value="Update" name = 'update-btn'>

              </form>
              <?php
              
                if(isset($_POST['update-btn']))
                {
                  $item_id = $_POST['item_id'];
                  $itemName = $_POST['itemName'];
                  $particular = $_POST['particular'];
                  $quantity = $_POST['quantity'];
                  $cost = $_POST['cost'];
                  $status = $_POST['status'];

                  $update = new DEPED();
                  $update ->update_item($item_id,$itemName, $particular, $quantity, $cost, $status);
                  
                  echo '<script>window.location.href = "/depedmanila/peripherals.php"</script>';

                }

              
              ?>
               <br>
            </div>
                </div>
                </div>
                </div> 
            </div>
            </div>
          </div>
        </div>
        </div>
        <!---End--->
      
            <!--Hidden data use to refelect in update modal-->
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
          </div>
        </div>

    <!-- for consumable-->
    
<script>
  $(document).ready(function(){
  $(".tabs li a").click(function() {
    
    // Active state for tabs
    $(".tabs li a").removeClass("active");
    $(this).addClass("active");
    
    // Active state for Tabs Content
    $(".tab_content_container > .tab_content_active").removeClass("tab_content_active").fadeOut(200);
    $(this.rel).fadeIn(500).addClass("tab_content_active");
    
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



1