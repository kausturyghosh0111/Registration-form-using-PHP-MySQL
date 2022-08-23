<?php require_once('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>Update</title>
</head>
<body>
    <div class="jumbotron bg-info">
        <h2 class="text-center">Update Employee</h2>
    </div>
    <section class="container">
        <?php
            $id=$_GET['id'];
            $src="SELECT * FROM employee WHERE id=$id";
            $rs=mysqli_query($con, $src)or die(mysqli_error($con));
            if(mysqli_num_rows($rs)>0){
                $rec=mysqli_fetch_assoc($rs);
            }else{
                header('location:viewEmp.php?err=Sorry employee not found');
                exit();
            }
            $langArr=explode(",",$rec['language']); //Converting Array to String
        ?>
        <div class="col-5">
                <form name="frm-reg" method="post" action="index_code.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $rec['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email_id">Email</label>
                        <input type="email" name="email_id" id="email_id" class="form-control" value="<?php echo $rec['email_id'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="pass" id="pass" class="form-control" value="<?php echo $rec['pass'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" id="dob" class="form-control" value="<?php echo $rec['dob'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="radio" id="gender" name="gender" value="Male" <?php if($rec['gender']=="Male"){ echo 'checked'; } ?>>
                        <label for="gender1">Male</label>
                        <input type="radio" id="gender" name="gender" value="Female" <?php if($rec['gender']=="Female"){ echo 'checked'; } ?>>
                        <label for="gender2">Female</label>
                    </div>
                    <div class="form-group">
                        <label for="language">Language</label>
                        <input type="checkbox" id="language" name="language" value="C"
                        <?php
                        if(in_array("C",$langArr)){
                            echo "checked";
                        }
                        ?>
                        >
                        <label for="language1"> C</label>
                        <input type="checkbox" id="language" name="language" value="C++"
                        <?php
                        if(in_array("C++",$langArr)){
                            echo "checked";
                        }
                        ?>
                        >
                        <label for="language2"> C++</label>
                        <input type="checkbox" id="language" name="language" value="PHP"
                        <?php
                        if(in_array("PHP",$langArr)){
                            echo "checked";
                        }
                        ?>
                        >
                        <label for="language3"> PHP</label>
                    </div>
                    <div class="form-group">
                    <label for="city">City:</label>
                        <select name="city" id="city">
                        <option value="<?php echo $rec['city'] ?>" selected><?php echo $rec['city'] ?></option>
                        <option value="kolkata">Kolkata</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="delhi">Delhi</option>
                        <option value="bangalore">Bangalore</option>
                        <option value="hyderabad">Hyderabad</option>
                        <option value="pune">Pune</option>
                        <option value="lucknow">Lucknow</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Address</label>
                        <textarea name="address" rows="3" class="form-control"><?php echo $rec['address'] ?></textarea>
                    </div>
                        <input type="submit" name="ok" value="Save" class="btn btn-primary">
                </form>
                    <?php
                        if(isset($_GET['msg'])){
                            ?>
                                <div class="alert alert-success">
                                    <?php echo $_GET['msg'] ?>
                                </div>
                            <?php
                        }
                        elseif(isset($_GET['err'])){
                            ?>
                                <div class="alert alert-danger">
                                    <?php echo $_GET['err'] ?>
                                </div>
                            <?php
                        }
                    ?>
                        <br>
                        <a href="viewEmp.php" class="btn btn-info">View Employee</a>
            <?php
            if(isset($_POST['ok'])){
                $name=$_POST['name'];
                $email_id=$_POST['email_id'];
                $pass=$_POST['pass'];
                $upd="UPDATE employee SET name='$name', email_id='$email_id', pass='$pass' WHERE id=$id";
                $res=mysqli_query($con,$upd)or die(mysqli_error($con));
                if($res==1){
                    header('location:viewEmp.php?msg=Employee data update successfully');
                }else{
                    echo 'Employee data not update successfully';
                }
            }
            ?>
        </div>
    </section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>