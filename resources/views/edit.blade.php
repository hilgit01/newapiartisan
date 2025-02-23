<body>
    <form action="{{ route('pembelian.update', $pembelian->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="produk">Produk:</label>
        <input type="text" id="produk" name="produk" value="{{ $pembelian->produk }}">
        <br><br>

        <label for="no">No:</label>
        <input type="number" id="no" name="no" value="{{ $pembelian->no }}">
        <br><br>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" value="{{ $pembelian->harga }}">
        <br><br>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" value="{{ $pembelian->harga }}">
        <br><br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" value="{{ $pembelian->jumlah }}">
        <br><br>

        <label for="total_harga">Total_harga:</label>
        <input type="number" id="total_harga" name="total_harga" value="{{ $pembelian->total_harga }}">
        <br><br>

        <button type="submit">Submit</button>

    </form>
</body>