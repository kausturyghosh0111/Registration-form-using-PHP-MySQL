<?php require_once("config.php") 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>View Employee</title>
</head>
<body>
    <section class="container">
        <h2 class="text-center">All Employees</h2><br>
        <a href="index.php" class="btn btn-info">Add Employees</a>
        <div class="col-5">
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
        </div>
            <?php
            $src="SELECT * FROM employee";
            $rs=mysqli_query($con, $src) or die(mysqli_error($con));
            if(mysqli_num_rows($rs)>0){
                ?>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Language</th>
                            <th>City</th>
                            <th>Address</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        echo "<pre>";
                        while($rec=mysqli_fetch_assoc($rs)){
                            ?>
                            <tr>
                                <td><?php echo $rec['name'] ?></td>
                                <td><?php echo $rec['email_id'] ?></td>
                                <td><?php echo $rec['pass'] ?></td>
                                <td><?php echo $rec['dob'] ?></td>
                                <td><?php echo $rec['gender'] ?></td>
                                <td><?php echo $rec['language'] ?></td>
                                <td><?php echo $rec['city'] ?></td>
                                <td><?php echo $rec['address'] ?></td>
                                <td><a href="update.php?id=<?php echo $rec['id'] ?>"><i class="fas fa-edit"></i></a></td>
                                <td><a href="delete.php?id=<?php echo $rec['id'] ?>"><i class="fas fa-trash text-danger"></i></a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <?php
            }else{
                ?>
                <br><center><h4 class="text-danger">Sorry Employee details are not found</h4></center>
                <?php
            }
        ?>
    </section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>