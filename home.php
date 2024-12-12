<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bảng Dữ Liệu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading text-center" style="background: #1f9cca">
            <h2><strong><i class="fas fa-table"></i> BẢNG DỮ LIỆU</strong></h2>
        </div>
        <div class="panel-body">
            <form action="" method="post" class="form-inline text-center" style="margin-bottom: 20px;">
                <div class="form-group">
                    <input type="text" name="search" class="form-control" placeholder="Nhập thông tin tìm kiếm" style="width: 300px;">
                </div>
                <button type="submit" name="find" class="btn btn-info">
                    <i class="fas fa-search"></i> Tìm kiếm
                </button>
                <a href="" class="btn btn-secondary">
                    <i class="fas fa-list"></i> Hiển thị tất cả
                </a>
                <a href="index.php" class="btn btn-success" style="margin-left: 10px">
                    <i class=" fas fa-user-plus"></i> Thêm sinh viên
                </a>

            </form>

            <?php
            require_once("connect.php");
            global $conn;

            $sql = "SELECT * FROM table_students";

            if (isset($_POST['find'])) {
                $search = $_POST['search'];

                if (!empty($search)) {
                    $sql = "SELECT * FROM table_students WHERE fullname LIKE '%$search%' OR hometown LIKE '%$search%'";
                }
            }

            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);

            if (isset($_POST['find']) && empty($search)) {
                echo '<div class="alert alert-warning text-center">Vui lòng nhập để tìm kiếm.</div>';
            } elseif (isset($_POST['find']) && $count <= 0) {
                echo '<div class="alert alert-danger text-center">Không tìm thấy kết quả nào với từ khóa: <strong>' . $search . '</strong></div>';
            } elseif (isset($_POST['find']) && $count > 0) {
                echo '<div class="alert alert-success text-center">Tìm thấy <strong>' . $count . '</strong> kết quả với từ khóa: <strong>' . $search . '</strong></div>';
            }
            ?>

            <table class="table table-bordered table-hover text-center">
                <thead class="bg-info">
                <tr>
                    <th style="text-align: center"><i class="fas fa-id-badge"></i> ID</th>
                    <th style="text-align: center"><i class="fas fa-user"></i> Họ và tên</th>
                    <th style="text-align: center"><i class="fas fa-calendar-alt"></i> Ngày sinh</th>
                    <th style="text-align: center"><i class="fas fa-venus-mars"></i> Giới tính</th>
                    <th style="text-align: center"><i class="fas fa-map-marker-alt"></i> Địa chỉ</th>
                    <th style="text-align: center"><i class="fas fa-graduation-cap"></i> Trình độ</th>
                    <th style="text-align: center"><i class="fas fa-users"></i> Nhóm</th>
                    <th style="text-align: center"><i class="fas fa-cogs"></i> Tùy chọn</th>
                </tr>
                </thead>

                <tbody>
                <?php
                $levels = ["Tiến sĩ", "Thạc sĩ", "Kỹ sư", "Khác"];
                $genders = ["Nữ", "Nam"];

                while ($r = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $r['id'] ?></td>
                        <td><?php echo $r['fullname'] ?></td>
                        <td><?php echo $r['dob'] ?></td>
                        <td><?php echo $genders[$r['gender']]; ?></td>
                        <td><?php echo $r['hometown'] ?></td>
                        <td><?php echo $levels[$r['level']]; ?></td>
                        <td><?php echo $r['group'] ?></td>
                        <td>
                            <a href="edit.php?hid=<?php echo $r['id'] ?>" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Sửa
                            </a>
                            <a onclick="return confirm('Bạn có muốn xóa thành viên này không?');"
                               class="btn btn-danger btn-sm" href="delete.php?hid=<?php echo $r['id'] ?>">
                                <i class="fas fa-trash-alt"></i> Xóa
                            </a>

                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
