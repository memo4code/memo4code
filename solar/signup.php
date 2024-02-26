<?php include_once('./partials/header.php'); ?>

<?php

// import db
require_once("./connection.php");

// send Submit information 
if (isset($_REQUEST['btnSignUp'])) {

   $fullname = $_REQUEST['fullnameuser'];
   $username = $_REQUEST['usernameuser'];
   $email = $_REQUEST['email'];
   $password = $_REQUEST['passworduser']; // Corrected variable name
   $created = date('Y-m-d H:i:s'); // Corrected format for MySQL datetime

   // Using prepared statements to prevent SQL injection
   $sql = "INSERT INTO customers (fullname, email, username, password, created)
           VALUES (?, ?, ?, ?, ?)";

   
   $stmt = mysqli_prepare($conn, $sql);

   // Bind parameters
   mysqli_stmt_bind_param($stmt, "sssss", $fullname, $email, $username, $password, $created);

   // Execute the statement
   $result = mysqli_stmt_execute($stmt);

   if ($result) {
       header('location:index.php');
   } else {
       echo "Error: " . mysqli_error($conn); // Display error message for debugging
   }

   // Close statement
   mysqli_stmt_close($stmt);
}
?>



<div class="container" style="max-width: 600px;">
   
      </div>
   
   <section class="section is-small">
      <h4 class="title">Sign Up</h4>
      <form method="post" action="./signup.php">
         <div class="field">
            <label class="label">Full Name</label>
            <div class="control">
               <input class="input" name="fullnameuser" type="text" placeholder="Your Full Name" required>
            </div>
         </div>
         <div class="field">
            <label class="label">User Name</label>
            <div class="control">
               <input class="input" name="usernameuser" type="text" placeholder="Your User Name" required>
            </div>
         </div>
         <div class="field">
            <label class="label">Email</label>
            <div class="control">
               <input class="input" name="email" type="email" placeholder="Your Email" required>
            </div>
         </div>
         <div class="field">
            <label class="label">Password</label>
            <div class="control">
               <input class="input" name="passworduser" type="password" placeholder="password" required minlength="8">
            </div>
         </div>
         <div class="control">
            <button class="button is-link" name="btnSignUp">Sign Up</button>
         </div>
      </form>
   </section>


</div>



<?php include_once('./partials/footer.php'); ?>