<?php

require('./includes/loaduserinfo.php');
require('./includes/deped_inc.php');
//require('./includes/itemInfo.php');

/*prevent accessing the checkout page when the status is unavailable*/
if($_SESSION['status'] == "Unavailable")
{
    header("location: /depedmanila/items.php");
}


$firstname = null;
$lastname = null;

//to pass the value from items
if(isset($_GET['checkout-btn']))
{
  
  $item_id = $_GET['item_id'];
  $item_name = $_GET['item_name'];
  $particular = $_GET['particular'];
  $status = $_GET['status'];
  $quantity = $_GET['quantity'];
  $cost = $_GET['cost'];
  
}

else
{
  $item_id = NULL;
  $item_name = null;
  $status = null;
  $particular = null;
  $status = null;
  $quantity = null;

}

//to find the ict-coordinator
if(isset($_POST['find-btn']))
{
 
  $school = $_POST['school'];

  $query = "SELECT * FROM register WHERE school = '$school' AND account_type = 'ICT Coordinator'";
  $select = mysqli_query($con, $query);

  $row = mysqli_fetch_array($select);

  if(mysqli_num_rows($select)>0)
  {
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $username = $row['username'];
    

  }
  
  else
  {
    
    $school = null;
    $firstname = null;
    $lastname = null;
    $username = null;

    $msg = "No ICT Coordinator";

  }
  
}

date_default_timezone_set('Asia/Manila');
$date = date('Y-m-d H:i:s');
  

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Deped | Check out</title>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!---jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
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
          <a href="school.php" class="active">
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
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Check-out Item</span>
      </div>
     
      <!-- user profile sa may nav bar -->
      <div class="btn-group">
        
         <button type="button" class="btn btn-light">
        <!--- 
        <span class="admin_name" style ="margin-top:10px; margin-right:12px;"><?php echo $username;?></span></button>
        <input type="hidden" name = 'hidden-fullname' value = '<?php echo $fullname; ?>'>
          <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
          <img src = "images/<?php echo $picture;?>" style="height:30px; width: 30px;" alt="user_prof">  
        </button>
        <div class="dropdown-menu">
          <a href="shop.php" class="btn btn-md btn-block" role="button">Edit Profile</a>
          <img src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/32/000000/external-log-out-user-interface-kmg-design-glyph-kmg-design.png"/ height="25px" width="25px" style="transform: translateY(120%); margin-left:9%;">
        
        <form action="" method="post">
          <input type="submit" value="Log out" name = 'logout-btn' id = "logout"> 
       
        </form>
          </button>-->
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
  
  <div class="box">
     
        <form action="" method="post">

          <div style="margin-left: 10%; ">

              <input type="hidden" name="school-deploy" id="" value = "<?php echo $school?>">
              <br><br>
              <label for="">Item ID :</label>
                <input type="text" name='' value = "<?php echo $item_id?>" class="form-control validate" id="" value = "" placeholder = "Item ID" style = "width:80%; height:6%;" disabled><br>
                <input type="hidden" name="item_id">
              
              <label for="">Item Name :</label>
                <input type="text" name='' disabled value = "<?php echo $item_name;?>" class="form-control validate" id="" value = "" placeholder = "Item Name" style = "width:80%; height:6%;" ><br>
                <input type="hidden" name='item_name' value = "<?php echo $item_name; ?>">

            <label for="">Particular: </label><br>
              <textarea name='' disabled id="" cols="65" rows="3"><?php echo $particular;?></textarea><br>
              <input type="hidden" name="particular" value = "<?php echo $particular?>" id="">


              <label for="">Status :</label><br>
                <select name='' id="" class="custom-select custom-select-sm mb-3"  style = "width:80%; height:6%;" required disabled>
                    
                    <option value="<?php echo $status;?>"><?php echo $status;?></option>
                   
                    
                </select><br>

                <script>
                  function SetField(val)
                  {
                      if(val==0)
                          document.getElementById('input-field').value='';
                      else
                          document.getElementById('input-field').value='<?php echo $receipt;?>';
                  }
                </script>
                
            <br>
               


                                    <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname="deped";
                                    // Create connection
                                    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                    $conn = new mysqli($servername, $username, $password, $dbname);


                                    $qu = "SELECT DISTINCT school,username,firstname,lastname FROM register WHERE account_type ='ICT Coordinator'";
                                    $res = $conn->query($qu);
                                    ?>
                                     <label>School:</label>
                                    <select name="name" ID="name" required onchange="myFunction()" class="form-control" style="width: 80%;">
                                    <option value="Select">Select</option>
                                    <?php

                                    while($r = mysqli_fetch_row($res))
                                    { 
                                        echo "<option data-add='$r[1]'  data-con='$r[4]' data-fname='$r[2]' data-lname='$r[3]'  value='$r[0]'> $r[0] </option>";
                                    }
                                    ?> 
                                    </select>
                                    <br>
                                    <label>ICT Coordinator:</label>
                                    <br>
                                      <!--username (to be insert)--->
                                      <input type="hidden" class="form-control validate" name="username" id="username" style="width:30%; height: 30px; border-radius: 2px; padding: 2px;"/>
                                      <!--Fullname (to be insert)-->
                                      <input type="text" class="form-control validate" name="fname" id="fname" style="width:81%; height: 30px; border-radius: 2px; padding: 2px;" required/>
                                      <!--Lastname-->
                                      <input type="hidden" class="form-control validate" name="lname" id="lname" style="width:30%; height: 30px; border-radius: 2px; padding: 2px;"/>
                                     
                                    
                                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                    <script>


                                        function myFunction(){
                                            var username = $('#name').find(':selected').data('add');
                                            var fname = $('#name').find(':selected').data('fname');
                                            var lname = $('#name').find(':selected').data('lname');

                                            $('#username').val(username);
                                            $('#fname').val(fname+" "+lname);
                                            
                                        }
                                    </script>
         



               <br>
              <label for="">Quantity :</abel>  
               <input type="number" name='dep-quantity' min = "1" class="form-control validate" id="" value = "" placeholder = "Quantity" style = "width:245%; height:6%;" required><br>

               <label for="" >Export Date : </label><br>
             
               <input type="date" name='export_date' required class="form-control validate" id="date_picker" value = "" placeholder = "Quantity" style = "width:245%; height:6%; display: inline-block;" ><br><br>
          </div>

              <a href="items.php"><button type="button" class="btn btn-secondary" data-dismiss="modal" >Back</button></a>
              
              <input type="submit" class="btn btn-danger" value="Check-out" name = 'checkout-btn' style="float:right;">
              <?php
              
                  require('./includes/report-generator.php');

              ?>
         </div>
        </form>

        <?php
         
          
          //to compute the quantity deployed
          if(isset($_POST['checkout-btn']))
          {
              $dep_quantity = $_POST['dep-quantity'];
              $quantity;
              $item_id;
              $cost;
              $reportID;
              $item_name = $_POST['item_name'];
              $school_dep = $_POST['name'];
              $ict_coordinator = $_POST['fname'];
              $export = $_POST['export_date'];
              $user_ict = $_POST['username'];
              
              $totalCost = $cost*$dep_quantity;
              
              $checkout = new DEPED();
              $checkout ->item_deployed($totalCost,$cost,$user_ict, $reportID, $item_id, $item_name, $school_dep, $ict_coordinator, $export, $school, $export, $dep_quantity, $quantity);

              echo '<script>window.location.href = "/depedmanila/items.php"</script>';

              $admin = $_SESSION['username'];
              $recent = new DEPED();
              $action = "Deployed";
              $checkout_to = $ict_coordinator;
              $recent ->recent_activity($date, $admin, $action, $checkout_to);
          }

        ?>
       

   
  
</body>
</html>




<script language="javascript">
                    
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0');
  var yyyy = today.getFullYear();

  today = yyyy + '-' + mm + '-' + dd;
  $('#date_picker').attr('min',today);

</script>