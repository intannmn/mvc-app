<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa Universitas Islam Nusantara</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nim</th>
                <th>Prodi</th>
                <th>Fakultas</th>
                <th>IPK</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td>{{ $mhs->fakultas }}</td>
                    <td>{{ $mhs->ipk }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
