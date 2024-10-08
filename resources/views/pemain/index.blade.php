<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Pemain Random</title>
    <!-- Include Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .table {
            margin-top: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            text-align: center;
        }
        th {
            background-color: #343a40;
            color: white;
        }
        .btn {
            margin-right: 5px;
        }
        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table tr:hover {
            background-color: #e9ecef;
        }
        .container {
            margin-top: 50px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .summary {
            margin-top: 20px;
            font-weight: bold;
            font-size: 1.2rem;
        }
        .float-end {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center mb-4">Daftar Pemain Random</h1>

    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Nomor Punggung</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @foreach ($data_pemain as $index => $pemain)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $pemain->nama }}</td>
                    <td>{{ $pemain->posisi }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>
                        <a href="{{ route('pemain.show', $pemain->id) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('pemain.edit', $pemain->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pemain.destroy', $pemain->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin mau dihapus?')" type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="summary">
        <p>Total Pemain: {{ $total_pemain }}</p>
    </div>

    <!-- Tombol tambah pemain -->
    <a href="{{ route('pemain.create') }}" class="btn btn-primary float-end">Tambah Pemain</a>
</div>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
