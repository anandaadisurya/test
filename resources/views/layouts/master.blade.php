<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Tambahkan link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .btnhd {
            display: inline-black;
            padding: 10px 20px;
            background-color: #8B0000;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btnhd:hover {
            background-color: #E9967A;
        }

        /* Kustom CSS */
        body {
            padding: 20px;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
        }

        table {
            margin-top: 20px;
        }

        .form-label {
            margin-top: 10px;
        }


    </style>
   
</head>
<body>
    <div class="header">
        <a href="/read" class="btnhd"> Home </a> &nbsp; 
        <a href="/about" class="btnhd"> About </a> &nbsp;  
        <a href="/contact" class="btnhd"> Contact </a>
    </div>
    <hr>

    <main>@yield('content')</main>

    <!-- Bootstrap JS (opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>