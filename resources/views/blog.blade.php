<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
        }

        article {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }

    
    </style>
</head>
<body>
@extends('layouts.main')
@section('content')
    <header>
        <h1>Blog Otomotif Erico</h1>
    </header>
    <main>
        <article>
            <h2>TENTANG OTOMOTIF</h2>
            <p>Otomotif adalah bidang yang berkaitan dengan kendaraan bermotor, yang melibatkan perancangan, produksi, penggunaan, dan pemeliharaan kendaraan seperti mobil, sepeda motor, truk, dan sejenisnya. Ini adalah industri yang luas dan beragam yang mencakup berbagai aspek, termasuk teknologi, manufaktur, penjualan, dan pemeliharaan kendaraan </p>
        </article>

        <article>
            <h2>Judul Artikel Kedua</h2>
            <p>Teks artikel kedua...</p>
        </article>
    </main>

    @endsection
</body>
</html>