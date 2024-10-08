<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Pemain</title>

    <!-- Include Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f1f3f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card-container {
            max-width: 500px;
            margin: 80px auto;
            padding: 0;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .card-header {
            background-color: #28a745;
            padding: 20px;
            color: white;
            text-align: center;
            font-size: 1.75rem;
            font-weight: bold;
        }
        .card-body {
            padding: 30px;
        }
        h6 {
            font-size: 1.2rem;
            color: #6c757d;
            margin-bottom: 15px;
        }
        .card-text {
            font-size: 1rem;
            color: #343a40;
            margin-bottom: 30px;
          
            font-weight: 500;
        }
        .card-footer {
            padding: 15px;
            text-align: center;
        }
        .card-link {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .card-link:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card-container">
            <div class="card-header">{{ $pemain->nama }}</div>
            <div class="card-body">
                <h6 class="card-subtitle">{{ $pemain->posisi }}</h6>
                <p class="card-text">Nomor Punggung: {{ $pemain->no_punggung }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('pemain.index') }}" class="card-link">Kembali</a>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
