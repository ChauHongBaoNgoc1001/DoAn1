<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mã Năng Cao</title>

    <!-- Add DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <style>
        /* CSS để căn giữa tiêu đề */
        h1 {
            text-align: center;
        }

        /* CSS để căn giữa nội dung bảng */
        #manangcao_table_wrapper {
            margin: auto;
        }
        
    </style>
</head>
<body>

    <h1>Danh sách Mã Nâng Cao</h1>

    <table id="manangcao_table" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mã Số</th>
                <th>Thời gian tạo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($manangcaos as $manangcao)
                <tr>
                    <td>{{ $manangcao->id }}</td>
                    <td>{{ $manangcao->maso }}</td>
                    <td>{{ $manangcao->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Add jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Add DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

    <!-- Initialize DataTables -->
    <script>
        $(document).ready( function () {
            $('#manangcao_table').DataTable();
        });
    </script>

</body>
</html>
