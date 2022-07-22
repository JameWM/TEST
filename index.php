<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        *{
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>
<body>
<form name="form1" action="#" method="post" enctype="multipart/form-data">
<div class="mb-3">
    <div class="container">
    <div class="row">
            <div class="col">
            <label class="form-label">คำนำหน้าชื่อ</label>
            <select class="form-select" aria-label="Default select example" name="txt_firstname" id="txt_firstname">
                <option selected>คำนำหน้าชื่อ</option>
                <option value="1">นาย</option>
                <option value="2">นาง</option>
                <option value="3">นางสาว</option>
            </select>
            </div>
            <div class="col">
            <label class="form-label">ชื่อ</label>
            <input type="text" class="form-control" placeholder="กรุณากรอก ชื่อ" aria-label="Username" aria-describedby="basic-addon1"  name="txt_name" id="txt_name">
            </div>
            <div class="col">
            <label class="form-label">นาม-สกุล</label>
            <input type="text" class="form-control" placeholder="กรุณากรอก นาม-สกุล" aria-label="Username" aria-describedby="basic-addon1"  name="txt_lastname" id="txt_lastname">
            </div>
        </div>
        </div>
    </div>
</form>
</body>
</html>