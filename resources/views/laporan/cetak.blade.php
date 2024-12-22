<head>
    <style>
        #customers {
            margin-top: 20px;
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;

        }

    </style>
</head>

<body>
    <center>
        <h3>Laporan Tranksaksi Sampah</h3>
        <small>{{ now()->format('d M Y H:i:s') }}</small>
    </center>


    <table class="table table-hover" id="customers">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama Warga</th>
                <th>Jenis Sampah</th>
                <th>Berat</th>
                <th>Deskripsi</th>
                <!-- <th>Gambar</th> -->
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($sampah as $data)
            <tr>
                <td>{{ $data->created_at->format('d M Y') }}</td>
                <td><b>{{ $data->nama }}</b></td>
                <td>{{ $data->jenis_sampah }}</td>
                <td>{{ $data->berat }} kg</td>
                <td>{{ $data->deskripsi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        window.print()

    </script>
</body>
