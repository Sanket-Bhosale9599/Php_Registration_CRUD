<?php

require 'database.php';
$userid;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
   $userid = $_GET["Id"];

   $sql = "SELECT userName, userEmail, userPassword,userAddress from user WHERE Id=$userid";
   $result = $conn->query($sql);

   foreach ($result as $row) {
      $userName = $row['userName'];
      $userEmail = $row['userEmail'];
      $userPassword = $row['userPassword'];
      $userAddress = $row['userAddress'];
   }

   #echo $userid;

}
?>

<html>

<head>
   <title>
      Update page
   </title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <!-- js-->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>

   <style>
      .btn {
         background-color: aliceblue;

      }

      .list-btn {
         text-align: right;
      }
   </style>


</head>

<body background="download.png">

   <div class="container-fluid">
      <div class="list-btn">
         <!--
          <form action= "list.php" >
              <button type="submit" class="btn btn-outline-success mt-4" >List</button>
          </form>
         -->
      </div>


      <div class="row mt-3">

         <div class="col-md-4 offset-md-4">
            <div class="card mt-4">
               <div class="card-body px-5">
                  <div class="container text-center">
                     <img src="Capture.PNG" style="max-width: 150px;">
                  </div>
                  <div class="text-center my-3">
                     <h3>Update Form !!</h3>
                  </div>


                  <form id="form" action="update.php" method="post" return validate(event)>
                     <div class="mb-3 form-group">
                        <label for="userName" class="form-label">User name</label>
                        <input type="text" name="username" class="form-control" id="userName"
                           value="<?= $row['userName'] ?>">
                     </div>
                     <span id="nameerror" style="color:red;"></span>

                     <div class="mb-3 form-group">
                        <label for="userpassword" class="form-label">Password</label>
                        <input type="password" name="userpassword" class="form-control" id="userPassword"
                           value="<?= $row['userPassword'] ?>">

                     </div>

                     <span id="passworderror" style="color:red;"></span>
                     <input type="hidden" class="form-control" name="userId" value="<?= $userid ?>">

                     <div class="mb-3 form-group">
                        <label for="userEmail" class="form-label">Email address</label>
                        <input type="email" name="useremail" class="form-control" id="userEmail"
                           value="<?= $row['userEmail'] ?>">

                     </div>
                     <span id="emailerror" style="color:red;"></span>

                     <div class="mb-3 form-group">
                        <label for="userAddress" class="form-label">Address</label>
                        <textarea class="form-control" name="useraddress"
                           id="userAddress"><?= $row['userAddress'] ?></textarea>

                     </div>
                     <span id="addresserror" style="color:red;"></span>

                     <div class="container text-center">
                        <button type="submit" class="btn btn-outline-success" id="submit">Update</button>
                     </div>
                  </form>

               </div>
            </div>

         </div>
      </div>


   </div>
   <script type="text/javascript">
      /*var name=document.getElementById('userName');
      var email=document.getElementById('userEmail');
      var password=document.getElementById('userPassword');
      var address=document.getElementById('userAddress');
      var form=document.getElementById('form');
      */
      function validatename() {
         if (document.getElementById('userName').value === '' || document.getElementById('userName').value == null) {
            document.getElementById('nameerror').textContent = 'name is required';
            return false;
         } else {
            document.getElementById('nameerror').textContent = '';
            return true;
         }
      }
      function validateemail() {
         if (document.getElementById('userEmail').value === '' || document.getElementById('userEmail').value == null) {
            document.getElementById('emailerror').textContent = 'email is required';
            return false;
         } else {
            document.getElementById('emailerror').textContent = '';
            return true;
         }
      }

      function validatepassword() {
         if (document.getElementById('userPassword').value === '' || document.getElementById('userPassword').value == null) {
            document.getElementById('passworderror').textContent = 'password is required';
            return false;
         } else {
            document.getElementById('passworderror').textContent = '';
            return true;
         }


      }
      function validateaddress() {
         if (document.getElementById('userAddress').value === '' || document.getElementById('userAddress').value == null) {
            document.getElementById('addresserror').textContent = 'address is required';
            return false;
         } else {
            document.getElementById('addresserror').textContent = '';
            return true;
         }
      }
      function validate(events) {
         events.preventDefault();
         return validateaddress() && validateemail() && validatename() && validatepassword();
      }


   </script>
</body>

</html>