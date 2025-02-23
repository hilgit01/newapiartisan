<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian - Sagara Tungkal</title>
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
        }

        .header {
            background: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            position: relative;
        }

        .header h1 {
            font-size: 24px;
        }

        .nav {
            display: flex;
            gap: 15px;
        }

        .nav a {
            text-decoration: none;
            color: #2d3a4b;
            font-weight: 500;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            max-width: 90%;
            margin: 20px auto;
            text-align: center;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #2d3a4b;
            color: white;
        }

        button {
            background: #2d3a4b;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            justify-content: start;
        }

        .btn-edit {
            background: #f0ad4e;
        }

        .btn-delete {
            background: #d9534f;
        }

        .btn-edit, .btn-delete {
            padding: 5px 10px;
            border-radius: 3px;
            border: none;
            cursor: pointer;
            color: white;
        }

        /* Modal Styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 90%;
            max-width: 400px;
            text-align: center;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .close {
            cursor: pointer;
            font-size: 20px;
        }

        .form-group {
            margin-bottom: 10px;
            text-align: left;
        }

        label {
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .nav {
                flex-direction: column;
                gap: 10px;
                margin-top: 10px;
            }

            table {
                font-size: 14px;
            }

            th, td {
                padding: 8px;
            }

            button {
                padding: 8px 12px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Sagara Tungkal</h1>
        <div class="nav">
            <a href="{{route('dashboard')}}">Halaman Utama</a>
            <a href="{{route('produk')}}">Daftar Produk</a>
            <a href="{{route('pembelian.index')}}">Pembelian</a>
        </div>
    </div>

    <div class="container">

        

        <h2>Daftar Pembelian</h2>
        <div style="display: flex; justify-content: flex-end;">
            <button onclick="openModal()">Tambah Produk</button>
        </div>

        <!-- Modal -->
        <div id="product-modal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span>Tambah Produk</span>
                    <span class="close" onclick="closeModal()">&times;</span>
                </div>
                <form id="purchase-form" action="{{route('pembelian.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="product">Produk</label>
                        <select id="product" name="produk">
                            <option value="Kerang Dara" data-price="65000">Kerang Dara - Rp65.000/Kg</option>
                            <option value="Cumi-Cumi" data-price="57000">Cumi-Cumi - Rp57.000/Kg</option>
                            <option value="Kepiting" data-price="60000">Kepiting - R60.000/Kg</option>
                            <option value="Udang" data-price="35000">Udang - R35.000/Kg</option>
                        
                        
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Jumlah (Kg)</label>
                        <input name="jumlah" type="number" id="quantity" min="1" required>
                    </div>
                    <button type="submit">Tambah</button>
                </form>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Harga (Rp/Kg)</th>
                    <th>Jumlah (Kg)</th>
                    <th>Total Harga (Rp)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="purchase-list">
                <!-- Data akan ditampilkan di sini -->
                @foreach ($pembelian as $beli)
                <tr>
                    <td>{{$beli -> id}}</td>
                    <td>{{$beli -> produk}}</td>
                    <td>{{$beli -> harga}}</td>
                    <td>{{$beli -> jumlah}}</td>
                    <td>{{$beli -> total_harga}}</td>
                    <td>
                        <form action="{{ route('pembelian.edit',$beli->id)}}" method="GET">
                        @csrf
                        
                        <button class="btn-edit">Edit</button>
                        </form>
                        <form action="{{route('pembelian.destroy', $beli->id)}}" method="POST">
                            @csrf
                            @method ('DELETE')
                            <button class="btn-delete" onclick="deletePurchase(${index})">Hapus</button>
                        </form>
                    </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>

    </div>

    <script>
        let purchases = [];
        const form = document.getElementById('purchase-form');
        const purchaseList = document.getElementById('purchase-list');

        function openModal() {
            document.getElementById('product-modal').style.display = "flex";
        }

        function closeModal() {
            document.getElementById('product-modal').style.display = "none";
        }

        
    </script>

</body>
</html>
