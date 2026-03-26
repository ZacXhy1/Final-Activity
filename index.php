<?php include 'views/header.php'?>
<div class="registration-form">
    
    <p class="title">REGISTER</p>
    <form action="models/register_account.php" method="POST">
        <label for="email">Email</label>
            <input type="email"id="email" name="email" placeholder="buytrago@gmail.com">
        <label for="firstname">First name</label>
            <input type="text"id="firstname" name="firstname" placeholder="Zachary Ivan">
        <label for="lastname">Last name</label>
            <input type="text"id="lastname" name="lastname" placeholder="Buytrago">
        <label for="password">Password</label>
            <input type="password"id="password" name="password" placeholder="********">
        <label for="cpassword">Confirm Password</label>
            <input type="cpassword"id="cpassword" name="cpassword" placeholder="********">
            <input type="submit" value="Sign up">
      </form>
</div>
<?php include 'views/footer.php';
