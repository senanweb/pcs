<?php
    /*
        == Manage Members Page
        == You Can Add| Edit | Delete Members From Here
    */

    session_start();    
    $pageTitle = 'Members'; //start-20
        if (isset($_SESSION['name']))
        {
                include 'init.php';
                $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
                // Start Manage
                if ($do == 'Manage')
                {
                    
                }
                // End Manage
                /*===========================*/
                // Start Edit
                elseif ($do == 'Edit')
                {
                    //echo 'Welcome' . ' ' .$_GET['id']; //End-19
                    
                    //security page - start 21
                    // Check If Get Request userid Is Numeric & Get The Integer Value Of It
                    $id  = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
                    // select stmt
                    $stmt = $con -> prepare("SELECT * FROM users WHERE id = ? limit 1"); 
                    //select stmt
                    $stmt -> execute (array($id));
                    //Execute Query
                    $row = $stmt -> fetch();
                    //Fetch the data
                    $count = $stmt -> rowCount (); // Check If The User Exist In Database
                    //the Row Count
                    //print    
                    // if ($stmt -> rowCount() > 0) {
                    //     echo $row['name'] . $row['pass'];
                    // }
                    // else{echo 'bad';}
                    //print  
                    if ($stmt -> rowCount() > 0)
                    {
                    //security page 
        ?>
                        <h1 class="text-center">Edit Member</h1>
                        <div class="container">
                            <form class="form-horizontal" action="?do=Update" method="POST">
                                <input type="hidden" name="id" value="<?php echo $id; ?>"/>    
                            <!-- Start Username Field -->
                                <div class="form-group form-group-1g">
                                    <label class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-10 col-md-6">
                                        <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" autocomplete="off"/>
                                    </div>
                                </div>
                                <!-- End Username Field -->
                                <!-- Start pass Field -->
                                <div class="form-group form-group-1g">
                                    <label class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10 col-md-6">
                                        <input type="Password" name="pass" class="form-control" autocomplete="new-password" />
                                    </div>
                                </div>
                                <!-- End pass Field --> 
                                <!-- Start Email Field -->
                                <div class="form-group form-group-1g">
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10 col-md-6">
                                        <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control" />
                                    </div>
                                </div>
                                <!-- End Email Field -->
                                <!-- Start Full name Field -->
                                <div class="form-group form-group-1g">
                                    <label class="col-sm-2 control-label">Full Name</label>
                                    <div class="col-sm-10 col-md-6">
                                        <input type="text" name="full" value="<?php echo $row['full'] ?>" class="form-control" />
                                    </div>
                                </div>
                                <!-- End Full name Field -->
                                <!-- Start btn Field -->
                                <div class="form-group form-group-1g">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" value="Update" class="btn btn-primary" />
                                    </div>
                                </div>
                                <!-- End btn Field -->
                            </form>
                        </div>
                    
        <?php  
                    //else show error -- end 21
                    }
                    else
                    {
                        echo 'Theres No Such ID';
                    }
                    
                }
                // End Edit
                /*===========================*/
                // Start update - start-22
                elseif($do == 'Update')
                {
                    echo "<h1 class='text-center'>Update Member</h1>";
                    if ($_SERVER[ 'REQUEST_METHOD'] == 'POST')
                    {
                        // Get Variables From The Form
                        $id     =   $_POST['id'];
                        $name   =   $_POST['name'];
                        $email  =   $_POST['email'];
                        $full   =   $_POST['full'];
                        //echo $id . $name . $email . $full; //check the update
                        //update data
                        $stmt = $con->prepare("UPDATE users SET name = ?, email = ?, full = ? WHERE id = ?");
                        $stmt->execute(array($name, $email, $full, $id));
                        // Echo Success Message
                        echo $stmt->rowCount ().' Record Updated';

                    }
                    else {echo 'try again';}
                    // End update
                    /*===========================*/
                    // Start Delete
                    // End Delete
                    /*===========================*/            
                }
            include $tpl.'footer.php';}
            else 
            { 
                header('Location:index.php');
                exit(); 
            }
        
        
        

      