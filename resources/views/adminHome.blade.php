@extends('layouts.app')
    
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            background-color: #333;
            color: #fff;
        }

        .content {
            padding: 20px;
        }

        .header {
            background-color: #222;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('existing-registrations') }}">
                                Danh sách học viên
                            </a>
                            
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ma-co-ban.index') }}">
                                Mã cơ bản
                            </a>
                            
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ma-nang-cao.index') }}">
                                Mã nâng cao
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="header">
                    <h1 class="h2">Admin Dashboard</h1>
                </div>

                <div class="content">
                    <h2>Section title</h2>
                    <p>Welcome to the admin dashboard. Here you can manage users, posts, settings, etc.</p>
                </div>
            </main>
        </div>
    </div>
</body>
</html>

@endsection