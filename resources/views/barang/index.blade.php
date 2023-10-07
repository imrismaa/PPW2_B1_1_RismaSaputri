<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tfoot tr {
            background-color: #e0e0e0;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <h4>DAFTAR BARANG</h4>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>id_suplier</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_barang as $barang)
            <tr>
                <td>{{ $barang->id }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ "Rp ".number_format($barang->harga, 2, ',', '.') }}</td>
                <td>{{ $barang->stok }}</td>
                <td>{{ $barang->id_suplier }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>