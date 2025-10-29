<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e0e6ed;
        }

        .header h1 {
            color: #2c3e50;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .header p {
            color: #7f8c8d;
            font-size: 16px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            margin-bottom: 30px;
        }

        .card-header {
            background-color: #3498db;
            color: white;
            padding: 15px 20px;
            font-weight: 600;
            font-size: 18px;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background-color: #f8f9fa;
        }

        th {
            padding: 16px 15px;
            text-align: left;
            font-weight: 600;
            color: #2c3e50;
            border-bottom: 2px solid #e0e6ed;
            font-size: 15px;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #eef1f5;
            color: #4a5568;
        }

        tbody tr {
            transition: background-color 0.2s;
        }

        tbody tr:hover {
            background-color: #f8fafc;
        }

        .badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .badge-male {
            background-color: #e1f0fa;
            color: #2980b9;
        }

        .badge-female {
            background-color: #fce4ec;
            color: #c2185b;
        }

        .age-badge {
            background-color: #e8f5e9;
            color: #2e7d32;
            font-weight: 600;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 13px;
        }

        .nisn {
            font-family: monospace;
            font-weight: 600;
            color: #2c3e50;
        }

        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: #7f8c8d;
        }

        .empty-state i {
            font-size: 48px;
            margin-bottom: 15px;
            color: #bdc3c7;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #7f8c8d;
            font-size: 14px;
        }

        @media (max-width: 768px) {

            th,
            td {
                padding: 12px 10px;
                font-size: 14px;
            }

            .header h1 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Data Siswa</h1>
            <p>Informasi detail mengenai data siswa terdaftar</p>
        </div>

        <div class="card">
            <div class="card-header">
                Detail Siswa
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Jenis Kelamin</th>
                            <th>Usia</th>
                            <th>NISN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$student['name']}}</td>
                            <td>{{$student['address']}}</td>
                            <td>{{$student['phone']}}</td>
                            <td>{{$student['gender']}}</td>
                            <td>{{$student['age']}}</td>
                            <td>{{$student['nisn']}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="footer">
            <p>&copy; 2023 Sistem Informasi Sekolah. Data diperbarui secara real-time.</p>
        </div>
    </div>
</body>

</html>