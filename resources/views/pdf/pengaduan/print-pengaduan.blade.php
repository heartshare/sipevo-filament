<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Pengaduan SIPEVO</title>
    <style>
        @page {
            /* Uncomment the size you need */
            /* size: A0; */
            /* size: A1; */
            /* size: A2; */
            /* size: A3; */
            /* size: A4; */
            size: A5;
            /* size: 3.15in; Default size */
            margin: 0;
        }

        body {
            margin: 0;
            padding: 0.2in;
            width: auto;
            line-height: 1.2;
            font-size: 7pt;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        }

        table {
            width: 100%;
            table-layout: fixed;
        }

        th, td {
            padding: 2px 0;
            text-align: left
        }

        .title {
            font-size: 10pt;
            font-weight: bold;
            text-align: center;
            margin-bottom: -5px;
        }

        .subtitle {
            text-align: center;
            color: #71717a;
        }
    </style>
</head>
<body>
<div>
<h1 class="title">{{ config('app.name') }}</h1>
    <p class="subtitle">{{ now()->format('d F Y H:i') }}</p>
    <table>
        <thead>
        <tr>
            <th style="width: 6%;">#</th>
            <th style="width: 60%">Kategori Pengaduan</th>
            <th style="width: 60%">Nama</th>
            <th style="width: 60%; text-align: right;">Lokasi</th>
            <th style="width: 40%; text-align: right;">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($pengaduans as $pengaduan)
            <tr>
                <td style="width: 6%; font-family: monospace">{{ $loop->iteration }}.</td>
                <td style="width: 60%; letter-spacing: -1.5px; text-align: left;font-family: 'monospace'">{{ $pengaduan->category->name }}</td>
                <td style="width: 40%; letter-spacing: -1.5px; text-align: left;font-family: 'monospace'">{{ $pengaduan->title }}</td>
                <td style="width: 40%; letter-spacing: -1.5px; text-align: right;font-family: 'monospace'">{{ $pengaduan->location }}</td>
                <td style="width: 40%; letter-spacing: -1.5px; text-align: right;font-family: 'monospace'">{{ $pengaduan->status }}</td>
            </tr>
        @endforeach

        <tr><td/><td/><td/><td/></tr><tr><td/><td/><td/><td/></tr>
        <tr><td/><td/><td/><td/></tr><tr><td/><td/><td/><td/></tr>

        </tbody>
    </table>
</div>
</body>
</html>
