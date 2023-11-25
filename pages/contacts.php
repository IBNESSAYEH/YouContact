<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        :root {
            --main-text-color: #333;
            --second-text-color: #fff;
            --main-bg-color: #f2f2f2;
            --second-bg-color: #fff;
            --main-btn-bg-color: #007bff;
        }
        body {
            background-color: var(--main-bg-color);
            color: var(--main-text-color);
        }
        .navbar {
            background-color: var(--main-bg-color);
            color: var(--main-text-color);
        }
        .btn-primary {
            background-color: var(--main-btn-bg-color);
            border-color: var(--main-btn-bg-color);
        }
        .table td, .table th {
            border-color: var(--second-bg-color);
        }
        .table thead th {
            background-color: var(--second-bg-color);
            color: var(--main-text-color);
            border-color: var(--second-bg-color);
        }
        .table td:last-child, .table th:last-child {
            text-align: center;
        }
        .table .btn {
            color: var(--second-text-color);
            transition: all 0.3s ease-in-out;
        }
        .table .btn:hover {
            color: var(--main-text-color);
        }
        .table-responsive {
            max-height: 400px;
            overflow-y: auto;
        }
        .form-control {
      margin-bottom: 20px;
    }
    label {
      font-weight: bold;
    }
    </style>
    <title>Contact Management App</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">YOUCONTACT</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </nav>
    <?php   include_once('../includes/getData.inc.php');  ?>  
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
