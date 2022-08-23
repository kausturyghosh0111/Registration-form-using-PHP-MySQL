<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>Registration form</title>
</head>
<body>
    <div class="container">
        <h2>Employee Registration</h2><br>
            <div class="col-5">
                <form name="frm-reg" method="post" action="index_code.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email_id">Email</label>
                        <input type="email" name="email_id" id="email_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="pass" id="pass" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" id="dob" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="radio" id="gender" name="gender" value="Male">
                        <label for="gender1">Male</label>
                        <input type="radio" id="gender" name="gender" value="Female">
                        <label for="gender2">Female</label>
                    </div>
                    <div class="form-group">
                        <label for="language">Language</label>
                        <input type="checkbox" id="language" name="language[]" value="C">
                        <label for="language1"> C</label>
                        <input type="checkbox" id="language" name="language[]" value="C++">
                        <label for="language2"> C++</label>
                        <input type="checkbox" id="language" name="language[]" value="PHP">
                        <label for="language3"> PHP</label>
                    </div>
                    <div class="form-group">
                    <label for="city">City:</label>
                        <select name="city" id="city">
                        <option value="select city">--Select city--</option>
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
                        <textarea name="address" rows="3" class="form-control"></textarea>
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
            </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>