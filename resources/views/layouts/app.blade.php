<!DOCTYPE html>
<html>
<head>
    <title>Movie Collection</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .movie-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 12px;
            background-color: #fff;
        }
        .genres span {
            display: inline-block;
            margin-right: 8px;
            background-color: #f1f1f1;
            padding: 4px 8px;
            border-radius: 12px;
        }
        .btn-floating {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            font-size: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-container {
            position: relative;
        }
        .add-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .action-buttons button, .action-buttons form {
            margin-left: 10px;
        }
        @media (max-width: 576px) {
            .btn-floating {
                width: 40px;
                height: 40px;
                font-size: 18px;
            }
            .movie-card {
                padding: 12px;
            }
            .add-button {
                bottom: 10px;
                right: 10px;
            }
            .action-buttons button, .action-buttons form {
                margin-left: 5px;
            }
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    @yield('scripts')
</body>
</html>
