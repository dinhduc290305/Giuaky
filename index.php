<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Đăng Ký</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="checking.js"></script>
    <style>
        body {
            background: url(image/img.jpg);
        }
        .container {
            margin-top: 50px;
        }
        .panel {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
            border-radius: 10px;
        }
        .panel-heading {
            background-color: #1f9cca ;
            color: #ffffff ;
            padding: 20px;
        }
        .btn {
            border-radius: 25px;
        }
        select.form-control {
            display: inline-block;
            width: auto;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading text-center">
            <h2><strong>BẢNG ĐĂNG KÝ</strong></h2>
        </div>
        <div class="panel-body">
            <form action="system.php" method="post" id="form">
                <div class="form-group">
                    <label for="full_Name"><strong>Họ và tên</strong></label>
                    <input type="text" id="full_Name" name="full_Name" placeholder="Điền họ và tên" class="form-control">
                </div>
                <div class="form-group">
                    <label for="dob"><strong>Ngày sinh</strong></label>
                    <input type="date" id="dob" name="dob" class="form-control">
                </div>
                <div class="form-group">
                    <label><strong>Giới tính</strong></label><br>
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="male" value=1> Nam
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="female" value=0> Nữ
                    </label>
                </div>
                <div class="form-group">
                    <label for="hometown"><strong>Địa chỉ</strong></label>
                    <input type="text" id="hometown" name="hometown" placeholder="Điền địa chỉ" class="form-control">
                </div>
                <div class="form-group">
                    <label for="level"><strong>Trình độ</strong></label>
                    <select name="level" id="level" class="form-control">
                        <option value="0">Tiến sĩ</option>
                        <option value="1">Thạc sĩ</option>
                        <option value="2">Kỹ sư</option>
                        <option value="3">Khác</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="group"><strong>Nhóm</strong></label>
                    <input type="text" id="group" name="group" placeholder="Điền nhóm" class="form-control">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg">Đăng Ký</button>
                    <button type="reset" class="btn btn-danger btn-lg">Hủy</button>
                    <a href="home.php" class="btn btn-info btn-lg">Quay lại trang chủ</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
