<?php     
    include 'init.php';
    include $tpl.'header.php';
    include $lang.'en.php';
    // check the post
    if ($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $username = $_POST['name'];
            $password = $_POST['pass'];
            // echo $username . ' ' . $password;
            $hashedPass = sha1($password);
            // echo  $hashedPass;
        }
?>
<!-- my-form -->
    <form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method='POST'>
    <h3 class="text-center">Admin Login</h3>
    <input class="form-control" type="text" name="name" placeholder="User" autocomplete="off">
    <input class="form-control" type="password" name="pass" placeholder="Password" autocomplete="new-password">
    <input class="btn btn-primary btn-block" type="submit" value="Login">
    </form>
<!-- my-form -->
    
<?php include $tpl.'footer.php'; ?>