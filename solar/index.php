<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login System Course </title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">


</head>

<body>

<script> 

<script >
document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

  // Add a click event on each of them
  $navbarBurgers.forEach( el => {
    el.addEventListener('click', () => {

      // Get the target from the "data-target" attribute
      const target = el.dataset.target;
      const $target = document.getElementById(target);

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      el.classList.toggle('is-active');
      $target.classList.toggle('is-active');

    });
  });
}


// click alert closed 
(document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
    const $notification = $delete.parentNode;

    $delete.addEventListener('click', () => {
      $notification.parentNode.removeChild($notification);
    });
  });


});
</script>

</body>

</html></script>
<nav class="navbar is-black" role="navigation" aria-label="main navigation">
   <div class="navbar-brand">
      <a class="navbar-item " href="index.php">
         Login system
      </a>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
         <span aria-hidden="true"></span>
         <span aria-hidden="true"></span>
         <span aria-hidden="true"></span>
      </a>
   </div>

   <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
         <a class="navbar-item" href="index.php">
            Main
         </a>

         <a class="navbar-item" href="doc.php">
            Documentation
         </a>
         <a class="navbar-item" href="home.php">
            My Profile
         </a>

      </div>

      <div class="navbar-end">
         <div class="navbar-item">
            <div class="buttons">
               <a class="button is-primary" href="./signup.php">
                  <strong>Sign up</strong>
               </a>
               <a class="button is-light" href="./login.php">
                  Log in
               </a>
            </div>
         </div>
      </div>
   </div>
</nav>