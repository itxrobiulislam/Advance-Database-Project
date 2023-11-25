<?php
/*session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}*/
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title>Admin</title>
  </head>
  <body>
    <h1>ADMIN PANEL</h1>
    <form>
      
      <table border="2">
        <tr>
          
          <td>
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Users
              </button>
              <div class="dropdown-content">
                    <a href="display.php">Admin</a>
                    <a href="aaddCustomer.php">Customer</a>
              </div>
            </div>
          </td>
          <td><button class="btn btn-primary"><a href="../medicine/medicine.php" class="text-light">Medicines</a></button></td>
          <td><button class="btn btn-primary"><a href="display.php" class="text-light">Report</a></button></td>
          <td><button class="btn btn-primary"><a href="../control/logoutcontrol.php" class="text-light">Logout</a></button></td>
        
        
        </tr>
      </table>
    </form>
  </body>
</html>
