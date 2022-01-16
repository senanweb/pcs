<?php     
    // session start
    session_start();
    $noNavbar = '';
    // print_r($_SESSION);
    // if(isset($_SESSION['name']))
    // {
    //     header('Location: dashboard.php');
    // }
    // ------------------------>>>>>
    include 'init.php';
    // ------------------------>>>>>
    // check the post
    if ($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $username = $_POST['name'];
            $password = $_POST['pass'];
            // ------------------------>>>>>
            // echo $username . ' ' . $password;  //normal control
            $hashedPass = sha1($password);
            // echo  $hashedPass;
            // ------------------------>>>>>
            $stmt = $con -> prepare('select name,pass from users where name = ? and pass = ? and groupid = 1');
            $stmt->execute(array($username, $hashedPass));
            $count = $stmt->rowCount(); 
            // ---->>>>> check users
            // ------------------------>>>>>
            // echo $count;     
            // if count > 0 this mean database have users
            if ($count > 0)
            {
                // echo 'Welcome' . ' ' . $username;
                // ------------------------>>>>>
                $_SESSION['name'] = $username ; 
                // ---->>>>> Register session name 
                header('Location: dashboard.php');
                exit();
            }
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