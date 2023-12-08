<?php 
    session_start();
    include_once('connect_db.php');
    if (isset($_POST['login'])) {
        $sql = "SELECT * FROM `register` WHERE email = ? AND pass_word = ?";
        $email = $_POST['email'];
        $pass_word = md5($_POST['pass_word']);
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss', $email, $pass_word);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if ($row > 0 ) {
            $_SESSION['email'] = $row['email'];
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal.fire({
                title: "สำเร็จ!",
                text: "ยินดีต้อนรับเข้าสู่ระบบ",
                type: "success",
                icon: "success"
            });';
            echo '}, 500 );</script>';
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { 
                window.location.href = "index.php";';
            echo '}, 3000 );</script>';
        } else {
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal.fire({
                title: "ผิดพลาด!",
                text: "กรุณาลองใหม่!",
                type: "warning",
                icon: "error"
            });';
            echo '}, 500);</script>';
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { 
            window.location.href = "login.php";';
            echo '}, 3000 );</script>';
            }
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid">
        <div class="card" style="width: 18rem; margin:auto;">
            <div class="card-body">
                <h5 class="card-title">เข้าสู่ระบบ</h5>
                <form method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="pass_word" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <input type="submit" name="login" value="เข้าสู่ระบบ" class="btn btn-primary"></input>
                </form>
            </div>
        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>