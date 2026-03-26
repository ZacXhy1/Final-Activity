<?php
    include 'views/header.php'
?>

<div class="registration-form">
    <p class="title">LOGIN</p>
    <form action="models/login_account.php" method="POST">
    <?php
        if(isset($_GET['err'])){
            echo "<p class=\"alert\">";
            echo "Invalid email or password";
            echo "</p>";
        }
     ?>
        <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="example@gmail.com">
        <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="******">
        <label for="cpassword">Confirm Password</label>
            <input type="cpassword" id="cpassword" name="cpassword" placeholder="******">
            <input type="submit" value="Login">
        
        
    </form>
</div>
<?php include 'views/footer.php';