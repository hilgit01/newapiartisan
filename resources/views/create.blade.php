<body>
    <form action="{{ route('pembelian.store') }}" method="POST">
        @csrf

        <label for="produk">Produk:</label>
        <input type="text" id="produk" name="produk">

        <br><br>

        <label for="no">No:</label>
        <input type="number" id="no" name="no">

        <br><br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah">

        <br><br>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga">

        <br><br>

        <label for="total_harga">Total_harga:</label>
        <input type="number" id="total_harga" name="total_harga">

        <br><br>

        <button type="submit">Submit</button>

    </form>
</body>