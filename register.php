<?php
include_once('connect_db.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <script>
    function validateForm() {
        let email = document.forms["myForm"]["email"].value;
        if (email == "") {
        alert("คุณยังไม่ได้กรอกอีเมล์");
        document.forms["myForm"]["email"].focus();
        return false;
        }
        let pass_word = document.forms["myForm"]["pass_word"].value;
        if (pass_word == "") {
        alert("คุณยังไม่ได้กรอกรหัสผ่าน");
        document.forms["myForm"]["pass_word"].focus();
        return false;
        }
        let address1 = document.forms["myForm"]["address1"].value;
        if (address1 == "") {
        alert("คุณยังไม่ได้กรอกที่อยู่ 1");
        document.forms["myForm"]["address1"].focus();
        return false;
        }
        let address2 = document.forms["myForm"]["address2"].value;
        if (address2 == "") {
        alert("คุณยังไม่ได้กรอกที่อยู่ 2");
        document.forms["myForm"]["address2"].focus();
        return false;
        }
        let city = document.forms["myForm"]["city"].value;
        if (city == "") {
        alert("คุณยังไม่ได้กรอกเมือง");
        document.forms["myForm"]["city"].focus();
        return false;
        }
        let state = document.forms["myForm"]["state"].value;
        if (state == "") {
        alert("คุณยังไม่ได้กรอกจังหวัด");
        document.forms["myForm"]["state"].focus();
        return false;
        }
        let zip = document.forms["myForm"]["zip"].value;
        if (zip == "") {
        alert("คุณยังไม่ได้กรอกรหัสไปรษณีย์");
        document.forms["myForm"]["zip"].focus();
        return false;
        }
    }
    </script>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>


            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Hello, world!</h1>
    <form action="registerSave.php" name="myForm" class="row g-3" method="post" onsubmit="return validateForm()">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" name="pass_word" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" name="address1" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Address 2</label>
          <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" name="city" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">State</label>
          <select id="inputState" class="form-select" name="state">
            <option selected value="">เลือกจังหวัด...</option>
            <option value="เลย">เลย</option>
            <option value="อุดรธานี">อุดรธานี</option>
            <option value="ขอนแก่น">ขอนแก่น</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" name="zip" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="check_me" value="" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <div class="col-12">
          <input type="submit" name="save" value="บันทึกข้อมูล" class="btn btn-primary">
        </div>
      </form>
      <hr>
      <?php
      $sql = "SELECT * FROM `register` ORDER BY `register`.`id` DESC";
      $result = mysqli_query($conn, $sql);
      ?>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">อีเมล์</th>
            <th scope="col">ที่อยู่</th>
            <th scope="col">รหัสผ่าน</th>
            <th scope="col">สถานะ</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $i = 1 ;
            while($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <th scope="row"><?php echo $i ?></th>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["address1"] ?></td>
            <td><?php echo $row["pass_word"] ?></td>
            <td><?php echo $row["check_me"] ?></td>
            <td>
              <a href="Javascript:if(confirm('ยืนยันการลบข้อมูล')==true) 
              {window.location='registerDel.php?id=<?php echo $row["id"]; ?>';}" class="btn btn-danger">ลบ</a>
              <a href="registerEdit.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">แก้ไข</a>
            </td>
          </tr>
          <?php
          $i++ ;
          }
        }
          ?>
        </tbody>
      </table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
