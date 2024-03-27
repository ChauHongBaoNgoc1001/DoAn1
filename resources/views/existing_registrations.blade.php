<!-- Add DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

<!-- Add jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Add DataTables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<!-- existing_registrations.blade.php -->
<div class="form-group">
    <label for="existing_registrations">Dữ liệu đã đăng ký:</label>
    <table class="table" id="existing_registrations_table">
        <thead>
            <tr>
                <th>Ảnh đại diện</th>
                <th>Họ và tên</th>
                <th>Ngày sinh</th>
                <th>Nơi sinh</th>
                <th>Giới tính</th>
                <th>Dân tộc</th>
                <th>Số điện thoại</th>
                <th>Sinh viên khóa</th>
                <th>Ngành học</th>
                <th>Đăng ký ngày học</th>
                <th>Ghi chú</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registrations as $registration)
            <tr>
                <td><img src="{{ asset($registration->avatar) }}" alt="Avatar" width="50"></td>
                <td>{{ $registration->full_name }}</td>
                <td>{{ $registration->dob }}</td>
                <td>{{ $registration->place_of_birth }}</td>
                <td>{{ $registration->gender }}</td>
                <td>{{ $registration->ethnicity }}</td>
                <td>{{ $registration->phone_number }}</td>
                <td>{{ $registration->student_batch }}</td>
                <td>{{ $registration->major }}</td>
                <td>{{ $registration->registration_date }}</td>
                <td>{{ $registration->note }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready( function () {
        $('#existing_registrations_table').DataTable();
    });
</script>
