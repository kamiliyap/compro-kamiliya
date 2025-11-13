<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematika Sederhana</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            text-align: center;
            margin: 0;
            padding: 40px 20px;
        }

        h3 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            margin-bottom: 30px;
        }

        a {
            display: inline-block;
            background-color: white;
            color: #2575fc;
            text-decoration: none;
            padding: 12px 25px;
            margin: 10px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        a:hover {
            background-color: #2575fc;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
        }

        footer {
            margin-top: 40px;
            font-size: 14px;
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <h3>Matematika Sederhana</h3>
    <p>Pilih menu aritmatika di bawah ini:</p>

    <a href="{{ url('aritmatika/tambah') }}">Tambah</a>
    <a href="{{ url('aritmatika/kurang') }}">Kurang</a>
    <a href="{{ url('aritmatika/kali') }}">Kali</a>
    <a href="{{ url('aritmatika/bagi') }}">Bagi</a>

    <footer>© {{ date('Y') }} Belajar Laravel</footer>
</body>
</html>
