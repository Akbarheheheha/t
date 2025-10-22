<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 30px;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #2c3e50;
            font-weight: 600;
            border-bottom: 2px solid #eaeaea;
            padding-bottom: 15px;
        }
        
        .table-container {
            overflow-x: auto;
            margin-bottom: 30px;
            border-radius: 8px;
            border: 1px solid #e1e5eb;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }
        
        thead {
            background-color: #3498db;
            color: white;
        }
        
        th {
            padding: 15px 12px;
            text-align: left;
            font-weight: 600;
            border-bottom: 2px solid #2980b9;
        }
        
        tbody tr {
            border-bottom: 1px solid #e1e5eb;
            transition: background-color 0.2s;
        }
        
        tbody tr:hover {
            background-color: #f8f9fa;
        }
        
        tbody tr:nth-child(even) {
            background-color: #f8fafc;
        }
        
        tbody tr:nth-child(even):hover {
            background-color: #f1f3f4;
        }
        
        td {
            padding: 12px;
            color: #555;
        }
        
        .btn-back {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            text-align: center;
        }
        
        .btn-back:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #7f8c8d;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            
            th, td {
                padding: 10px 8px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Data Siswa</h1>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Gender</th>
                        <th>Umur</th>
                        <th>NISN</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>{{ $student ['name']}}</td>
                        <td>{{ $student ['address']}}</td>
                        <td>{{ $student ['phone']}}</td>
                        <td>{{ $student ['gender']}}</td>
                        <td>{{ $student ['age']}}</td>
                        <td>{{ $student ['nisn']}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <a href="/dashboard" class="btn-back">Kembali ke Dashboard</a>
        
        <div class="footer">
            Data siswa terakhir diperbarui: {{ date('d M Y') }}
        </div>
    </div>
</body>
</html>