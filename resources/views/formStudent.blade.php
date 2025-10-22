<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    span{
        display: block;
        color: red;
    }
</style>

<body>
    <form action="/student/store" method="post">
        @csrf
        <div>
            <label for="">Masukkan nama anda</label><br>
            <input type="text" name="name">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="">Masukkan alamat anda</label><br>
            <input type="text" name="address">
            @error('address')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="">Masukkan no telp anda</label><br>
            <input type="text" name="phone">
            @error('phone')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="">Masukkan gender anda</label><br>
            <input type="text" name="gender">
            @error('gender')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="">Masukkan umur anda</label><br>
            <input type="text" name="age">
            @error('age')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="">Masukkan nisn anda</label><br>
            <input type="text" name="nisn">
            @error('nisn')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <input type="submit">
    </form>
</body>

</html>
