<body>
<h1> Form Pembelian <h1>

<table border="1" cellspacing="0">
<tr>
    <th>Id<th>
    <th>Produk<th>
    <th>No<th>
    <th>Harga<th>
    <th>Jumlah<th>
    <th>Total_harga<th>
    
@forEach ($pembelian as $pembelian)
        <tr>
        <td>{{ $pembelian -> Id }} <td>
        <td>{{ $pembelian -> Produk }} <td>
        <td>{{ $pembelian -> No }} <td>
        <td>{{ $pembelian -> Harga }} <td>
        <td>{{ $pembelian -> jumlah }} <td>
        <td>{{ $pembelian -> Total_harga}} <td>
        <tr>
@endforEach
        </table>
    </body>

<form action="{{ route('pembelian.destroy', $pembelian->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>