<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5" style="text-align: center"> THÔNG TIN ĐĂNG KÍ THI TÍN CHỈ TIN HỌC</h1>
        @if(session('success'))
            <p style="color: green">{{ session('success') }}</p>
        @endif
        <form method="POST" action="{{ route('registration.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="level">Trình độ:</label>
                <select class="form-control" name="level" id="level">
                    <option value="Cơ Bản">Cơ Bản</option>
                    <option value="Nâng Cao">Nâng Cao</option>
                </select>
            </div>
            <div class="form-group">
                <label for="avatar">Ảnh đại diện:</label>
                <input type="file" class="form-control-file" name="avatar" id="avatar">
            </div>
            <div class="form-group">
                <label for="full_name">Họ và tên:</label>
                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Nhập họ và tên">
            </div>
            <div class="form-group">
                <label for="dob">Ngày sinh:</label>
                <input type="date" class="form-control" name="dob" id="dob">
            </div>
            <div class="form-group">
                <label for="place_of_birth">Nơi sinh:</label>
                <input type="text" class="form-control" name="place_of_birth" id="place_of_birth" placeholder="Nhập nơi sinh">
            </div>
            <div class="form-group">
                <label>Giới tính:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="male" name="gender" value="Nam" checked>
                    <label class="form-check-label" for="male">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="female" name="gender" value="Nữ">
                    <label class="form-check-label" for="female">Nữ</label>
                </div>
            </div>
            <div class="form-group">
                <label for="ethnicity">Dân tộc:</label>
                <input type="text" class="form-control" name="ethnicity" id="ethnicity" placeholder="Nhập dân tộc">
            </div>
            <div class="form-group">
                <label for="phone_number">Số điện thoại:</label>
                <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="Nhập số điện thoại">
            </div>
            <div class="form-group">
                <label for="student_batch">Sinh viên khóa:</label>
                <select class="form-control" name="student_batch" id="student_batch">
                    <option value="21">Sinh viên khóa 21</option>
                    <option value="22">Sinh viên khóa 22</option>
                    <option value="23">Sinh viên khóa 23</option>
                    <option value="24">Sinh viên khóa 24</option>
                    <option value="other">Khác</option>
                </select>
            </div>
            <div class="form-group">
                <label for="major">Ngành học(Đối với sinh viên ĐH Cửu Long):</label>
                <input type="text" class="form-control" name="major" id="major" placeholder="Nhập ngành học">
            </div>
            <div class="form-group">
                <label for="registration_date">Đăng ký ngày học:</label>
                <select class="form-control" name="registration_date" id="registration_date">
                    <option value="Tối 2-4-6 (17:45 - 20:45)">Tối 2-4-6 (17:45 - 20:45)</option>
                    <option value="Tối 3-5 (17:45 - 20:45)">Tối 3-5 (17:45 - 20:45)</option>
                    <option value="Tối 5-7 (17:45 - 20:45)">Tối 5-7 (17:45 - 20:45)</option>
                    <option value="Ngày thứ 7 - Chủ nhật">Ngày thứ 7 - Chủ nhật</option>
                </select>
            </div>
            <div class="form-group">
                <label for="note">Ghi chú:</label>
                <textarea class="form-control" name="note" id="note" placeholder="Nhập ghi chú"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Đăng ký</button>
        </form>
    </div>
    
</body>
</html>
