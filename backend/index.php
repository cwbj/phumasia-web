<!-- Header -->
<?php 
include "header.php"; 

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: login.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}
?>
 
<!-- body -->
<div class="container mt-5">
    <h1 class="text-center"> Welcome, Lets Create a PHP CRUD Application!</h1>
        <p class="text-center">
            We are going to use PHP and MySQL to create a CRUD (Create, Read, Update, Delete) Application.
        </p>
  <div class="container">
    <form action="includes/home.php" method="post">
        <div class="from-group text-center">
            <input type="submit" class="btn btn-primary mt-2" value="Let's Do it!">
        </div>
    </form>
    <form method='post' action="">
        <div class="from-group text-center">
            <input type="submit" class="btn btn-danger mt-2" value="Logout" name="but_logout">
        </div>
    </form>
  </div>
</div>

<?php 
echo "This is string";
?>
 
<!-- Footer -->
<?php include "footer.php" ?>