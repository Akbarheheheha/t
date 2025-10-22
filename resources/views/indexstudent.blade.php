<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No telp</th>
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
    <a href="/dashboard">kembali ke dashboard</a>
</body>
</html>
