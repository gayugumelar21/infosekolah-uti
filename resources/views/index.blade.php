<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Sekolah UTI | {{$title}}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: #7D0A0A;
            color: #fff;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .table {
            margin-top: 30px;
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            margin-top: auto;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Info Sekolah | Universitas Teknokrat Indonesia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <br>
        <h4>Daftar Provinsi di - {{$title}}</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Provinsi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($dafprovinsi as $dprovinsi)
                <tr>
                  <td><a href="/{{$dprovinsi->nm_provinsi}}">{{$dprovinsi->nama_provinsi}}</a></td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>

    <footer>
        &copy; 2024 Info Sekolah | Universitas Teknokrat Indonesia
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"