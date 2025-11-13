<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <h3>Matematika sederhana</h3>
    <form action="{{ route('tambah-action') }}" method="post">
        @csrf
        <label>Angka 1</label>
        <input type="text" name="angka1" placeholder="Masukkan angka" required>
        <br><br>
        <label>Angka 2</label>
        <input type="text" name="angka2" placeholder="Masukkan angka" required>
        <br><br>
        <button type="submit">Jumlahkan</button>
    </form>

    @isset($hasil)
        <h2>Jumlahnya adalah: {{ $hasil }}</h2>
    @endisset
</body>
</html>
