<?php include 'template/header.php'; ?>
<?php
    if($_SESSION['username']) {
        header('Location: home.php');
        exit();
    }
?>
<?php
    $actinon  = $_GET['action'];

    if($actinon) {
        if($actinon === 'register') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $name     = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email    = $_POST['email'];
            $gender   = $_POST['gender'];

            $hashPassword = hash('SHA256',$password);
            
            $sql = "INSERT INTO table_member (
                                        member_username,
                                        member_password,
                                        member_role,
                                        member_name,
                                        member_lastName,
                                        member_email,
                                        member_gender
                                    ) VALUES (
                                        '$username',
                                        '$hashPassword',
                                        '0',
                                        '$name',
                                        '$lastname',
                                        '$email',
                                        '$gender'
                                    )";
            $result = $conn->exec($sql);

            if($result) {
                echo "<script>alert('ลงทะเบียนสำเร็จ')</script>";
                echo "<script>window.location = 'login.php'</script>";
            } else {
                echo "<script>alert('ลงทะเบียนไม่สำเร็จ')</script>";
                echo "<script>window.history.back()</script>";
            }
        }
    }
    
    
?>

<div class="container"> 
    <form action="register.php?action=register" method="post">
        <input type="text" placeholder="Username" name="username" id="" class="form-control">
        <input type="password" placeholder="Password" name="password" id="" class="form-control">
        <input type="text" placeholder="Name" name="name" id="" class="form-control">
        <input type="text" placeholder="LastName" name="lastname" id="" class="form-control">
        <input type="email" placeholder="Email" name="email" id="" class="form-control">
        <input type="radio" name="gender" value="M" id="" class="form-control">M
        <input type="radio" name="gender" value="F" id="" class="form-control">F
        
        <input type="submit" value="register">
    </form>
</div>

<?php include 'template/footer.php'; ?>