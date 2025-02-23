<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Produk</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #2d3a4b;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .form-container h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            text-align: left;
            margin-top: 10px;
            font-weight: 500;
        }

        select, input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: #2d3a4b;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            background-color: #1b2838;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Edit Pembelian Produk</h2>
        <form action="{{ route('pembelian.update', $pembelian->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="product">Produk</label>
            <select id="product" name="produk">
                <option value="Kerang Dara" data-price="65000">Kerang Dara - Rp65.000/Kg</option>
                <option value="Cumi-Cumi" data-price="57000">Cumi-Cumi - Rp57.000/Kg</option>
                <option value="Kepiting" data-price="60000">Kepiting - Rp60.000/Kg</option>
                <option value="Udang" data-price="35000">Udang - Rp35.000/Kg</option>
            </select>

            <label for="jumlah">Jumlah (Kg)</label>
            <input type="number" id="jumlah" name="jumlah" value="{{ $pembelian->jumlah }}" min="1">

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
