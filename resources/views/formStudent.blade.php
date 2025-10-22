<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Siswa</title>
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
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            width: 100%;
            max-width: 700px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 40px;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #2c3e50;
            font-weight: 600;
            border-bottom: 2px solid #eaeaea;
            padding-bottom: 15px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #2c3e50;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s;
        }
        
        input[type="text"]:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }
        
        select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            background-color: white;
            transition: all 0.3s;
        }
        
        select:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }
        
        .error-message {
            display: block;
            color: #e74c3c;
            font-size: 14px;
            margin-top: 5px;
        }
        
        .btn-submit {
            display: block;
            width: 100%;
            background-color: #3498db;
            color: white;
            padding: 14px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            text-align: center;
            font-size: 16px;
            margin-top: 10px;
        }
        
        .btn-submit:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .form-row {
            display: flex;
            gap: 20px;
        }
        
        .form-row .form-group {
            flex: 1;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 25px;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Formulir Data Siswa</h1>
        
        <form action="/student/store" method="post">
            @csrf
            
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" name="name" id="name" placeholder="Masukkan nama lengkap">
                @error('name')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" name="address" id="address" placeholder="Masukkan alamat lengkap">
                @error('address')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="phone">Nomor Telepon</label>
                    <input type="text" name="phone" id="phone" placeholder="Contoh: 08123456789">
                    @error('phone')
                    <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" id="gender">
                        <option value="" disabled selected>Pilih jenis kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    @error('gender')
                    <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="age">Umur</label>
                    <input type="text" name="age" id="age" placeholder="Contoh: 17">
                    @error('age')
                    <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="text" name="nisn" id="nisn" placeholder="Masukkan NISN">
                    @error('nisn')
                    <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <button type="submit" class="btn-submit">Simpan Data</button>
        </form>
    </div>
</body>

</html>