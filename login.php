<?php include 'includes/config.php' ?>
<?php require 'includes/head_section.php' ?>
<?php include 'includes/navbar.php' ?>

<div class="wrapper">
    <form class="form-signin" autocomplete="off" method="post" action="includes/login_user.php">
        <h2 class="form-signin-heading">Please login</h2>
        <input type="text" class="form-control" name="username" placeholder="User name" required="" autofocus="" />
        <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login_btn">Login</button>
        <h1 style="color:red; font-size: 1em;"> <?php if (isset($_GET['error'])) echo $_GET['error'] ?> </h1>
    </form>

</div>

