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
    <title>Deped | Add Position</title>
    <link rel="stylesheet" href="css/style.css">
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
          <a href="position.php" class="active">
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
        <span class="dashboard">Add New Position</span>
      </div>
     
      <!-- user profile sa may nav bar -->
      <div class="btn-group">
        
         <button type="button" class="btn btn-light" style="background:#fff; border-style:none;">
         
       
         <span class="admin_name" style ="margin-top:10px; margin-right:12px; font-style:italic;"><?php echo $username;?></span></button>
          <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" style="border-radius: 20px;">
            <img src = "images/<?php 
            
           
            if($picture == NULL)
            {
              echo "user.jpg";
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
      
     <button type="button" class="btn-modal btn-lg" data-toggle="modal" data-target="#myModal" style="background: rgb(60,141,188);font-size: 16px; width: 140px; margin-top:2%; font-family: 'Exo 2', sans-serif;"><img src="" height="20px" style="margin-bottom: 2px; margin-right:3px;" />+ Add Position</button>

    
      <!-- the modal -->
      <div class="modal fade" id="myModal" style="margin-top: 5%;">
        <div class="modal-dialog modal-lg">
          <div class="modal-content col-9 mx-auto">

            <!-- modal header -->
            <div class="modal-header">
              <h4 class="modal-title" style="font-family: 'Fira Sans Condensed', sans-serif; font-size:30px; margin-top:2%;">Add New Position</h4>
              
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>

            <!-- modal body -->
            <div class="modal-body">
              
               <form action="" method="post" enctype = "multipart/form-data">
                
                    <label for="schoolID">Position </label>
                      <input type="text" name='position' class="form-control validate" id="" value = "" placeholder = "Position" style = "width:100%; height:20%;" required><br>

                 
                
                    <center><input type="submit" class="btn btn-success text-white col-2" value="Save" name = 'save-btn'></center>


                        <?php
                        
                            if(isset($_POST['save-btn']))
                            {
                              
                                $position = $_POST['position'];

                                $insert_position = new DEPED();
                                $insert_position -> insert_position($position);


                               
                            }
                        
                        
                        ?>

                  </div>
                  </div>
                  </div> 
                  </div>
            </form>
                  

                <!---up to here-->
                <div class="form-group">
                  

                  <script type="text/javascript">
                      function numberonly(input)
                        {
                             var num =  /[^0-9]/gi;
                            input.value = input.value.replace(num, "");
                        }
                  </script>
                  
              
          
           
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
              <h4 class="modal-title" style="text-align:center; font-size:30px; font-family: 'Fira Sans Condensed', sans-serif; font-size:30px;">Add Department</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- modal body -->
            <div class="modal-body">
              <h4 style="text-align: center;"></h4>
              <!--- cause of error -->
              <br>
              <form action="" method="post">
              <label for="Position" style="margin-left: 20%; font-family: 'Viga', sans-serif; color: #37323E; font-style: italic;">Department: &nbsp;</label>
                  <input type="text" onkeypress="return /[a-z]/i.test(event.key)" name='department' id="" required><br><br>
                
                  <center><input type="submit" value="Submit" name = 'insert' style="padding:5px; background:rgb(60, 141, 188); color:white; border-radius:6px; width:70px; border-style: none; width:20%;"></center>
                  <br>
              </form>

              <?php
              
                  if(isset($_POST['insert']))
                  { 
                      $department = $_POST['department'];

                      $insert_department = new DEPED();
                      $insert_department -> insert_department($department);
                  }
              
              
              ?>

            
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
                <!---<input type="text" id="searchProduct" class="form-control validate" name = 'search'  placeholder="Search School" style="border-color: #B8DFED; height:35px; margin-left:2%;">-->
              </div>
            </div>
  <div class="tab-title">
   
  </div>    
  <div class="product-table ">
  <table id="prdctTable" class="table bg-white table-hover" style="border-radius: 5px; ">
  <thead class="table-warning" style="background-color:rgb(171, 207, 228); ">
    <tr>
      <!-- title ng mga table add ka na lang dito -->
      <th onclick="sortTable(0)"scope="col">Position Description</th>
      <th onclick="sortTable(0)"scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody id="prodTable">
      


          <!-- The Modal kukunin ni button para sya ung ididisplay-->
            <div class="modal fade" id="delModalposition" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
      
          <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Delete Department</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
          <!-- Modal body -->
            <div class="modal-body">
              Are you sure you want to delete this Department?  
            </div>
        
          <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <form action="" method="post">

                  <input type="submit" class="btn deleteposition" id="liveAlertBtn" value = "Delete" name = 'delete'>
                  <input type="hidden"  name='del-pos' id="del-pos" value = "">

                  <?php

                    if(isset($_POST['delete']))
                    {
                        $id = $_POST['del-pos'];

                        $delete = new DEPED();
                        $delete -> delete_department($id);
                    }
                 
                    
                  
                  ?>

              </form>
              </div>
            
            </div>
          </div>
        </div>
        </div>
      </td>
        </tr>
        
          <tr>
            <?php
            
                $query = "SELECT * FROM position";
                $select = mysqli_query($con, $query);

                if($row = mysqli_num_rows($select)>0)
                {

                  while($row = mysqli_fetch_array($select))
                  {
                  ?>
                  <td style="line-height: 50px;"><?php echo $row['position']?></td>
                  <td>
                    <button type="button" class="btn editbtn"  data-toggle="modal" data-target="#editModal<?php echo $row['id']?>"><div class="icons8-edit"></div></button>
                    <button type="button" class="btn deletebtnemployee" data-toggle="modal" data-target="#deleteModal<?php echo $row['id']?>"><div class="icons8-trash"></div></button><br>
                  </td>
                  </tr> 

                  
     <!-- The Modal kukunin ni button para sya ung ididisplay-->
            <div class="modal fade" id="deleteModal<?php echo $row['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content" style="margin-top: 35%;">
      
          <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Delete Position</h4>
             
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
          <!-- Modal body -->
            <div class="modal-body">
              Are you sure you want to delete this position?  
            </div>
        
          <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <form action="" method="post">
                  <input type="hidden" name="position_id" value = "<?php echo $row['id']?>">
                  <input type="submit" class="btn btn-danger" id="liveAlertBtn" value = "Delete" name = 'delete-btn'>
                

                  <?php
                  
                    if(isset($_POST['delete-btn']))
                    { 
                      $position_id = $_POST['position_id'];

                      $del_position = new DEPED();
                      $del_position ->delete_position($position_id);
                    }
                      
                  
                  ?>
              
              </form>


            </div>
          </div>
        </div>
      </div>
    <!--Ending-->


                     <!-- Edit Modal for existing Products -->
          <div class="modal fade" id="editModal<?php echo $row['id']?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content col-9 mx-auto">

            <!-- modal header -->
            <div class="modal-header">
            <h4 class="modal-title" style=" font-family: 'Barlow Condensed', sans-serif; font-size:35px; margin-top:2%;">Edit Position</h4>
              
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
                
              <label for="position">Position: </label>
                <input type="hidden" name='id' class="form-control validate" id="schoolID2" value = "<?php echo $row['id']?>" placeholder = "School ID" style = "width:100%; height:20%;" ><br>

                <input type="text" name='position_name' class="form-control validate" id="school_id" value = "<?php echo $row['position']?>" placeholder = "School ID" style = "width:100%; height:20%;">

             
               <br>
             <!-- modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-light col-2" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-warning text-white" value="Update" name = 'update-btn'>

              <?php
              //updating school
               
                if(isset($_POST['update-btn']))
                {

                    $id = $_POST['id'];
                 
                    $position = $_POST['position_name'];
                   
                    $query = "UPDATE position SET position = '$position' WHERE id = '$id'";
                    $update = mysqli_query($con, $query);
                    
                    echo '<script>window.location.href = "/depedmanila/school.php"</script>';
                    
                }
              ?>
            
            </div>
                </div>
                </div>
                </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!---Ending--->
            <?php
                }
              }
              else
              { 
                echo "<tr><td align = 'center'colspan = \"14\"><img src='images/no-data.svg' style='height: 15%; width:15%;'<br> <br>No Data Yet</td></tr>";
              }
              
            ?>
          
       
      </tbody>
    </table>
            
    </div>
    
  </section>
  </form>

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