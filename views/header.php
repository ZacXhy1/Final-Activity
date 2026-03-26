<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Buytrago</title>
    <link href="views/res/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="navbar">

<?php if(isset($_SESSION['aid'])){ ?>

    <ul class="left-nav">
        <li class="logo">
            <a href="timeline.php">&nbsp;</a>
        </li>
        <li>
            <a href="timeline.php">Socmed_Buytrago</a>
        </li>
    </ul>

    <ul class="right-nav">
        <li>
            <a href="profile.php">
                <?= $_SESSION['firstname']." ".$_SESSION['lastname']; ?>
            </a>
        </li>
        <li>
            <a href="models/logout_account.php">Logout</a>
        </li>
    </ul>

<?php }else{ ?>

    <ul class="left-nav">
        <li class="logo">
            <a href="login.php">&nbsp;</a>
        </li>
        <li>
            <a href="login.php">Socmed_Buytrago</a>
        </li>
    </ul>

    <ul class="right-nav">
        <li>
            <a href="login.php">Login</a>
        </li>
        <li>
            <a href="index.php">Signup</a>
        </li>
    </ul>

<?php } ?>

</div>
