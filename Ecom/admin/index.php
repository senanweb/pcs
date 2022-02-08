<?php
    session_start();
    $noNavbar = ''; //navbar
    $pageTitle = 'Login';
    if (isset($_SESSION[ 'Username']))
    {
      header('Location: dashboard.php'); // Redirect To Dashboard Page
    }
    //include
    include "init.php";

    //check the http post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        $username = $_POST['name'];
        $password = $_POST['pass'];
        //echo $username . ' ' . $password; //print info
        $hashedPass = sha1($password);
        //echo $hashedPass; // print sha
        // select stmt
        $stmt = $con -> prepare("SELECT id, name, pass FROM users WHERE name = ? AND Pass = ? AND gid = 1 limit 1"); 
        //select stmt
        $stmt -> execute (array($username, $hashedPass));
        $row = $stmt -> fetch();
        $count = $stmt -> rowCount (); // Check If The User Exist In Database
        //echo $count; //check count
        if ($count > 0)
            {
            //echo 'Welcome Admin'. ' ' . $username;
            //print_r($row);    //show info for user
                $_SESSION['name'] = $username ; // Register Session Name
                $_SESSION['id'] = $row['id'];   // Register session id
                header('Location:dashboard.php'); // Redirect To Dashboard Page
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

<?php
    include $tpl . "footer.php";
?>