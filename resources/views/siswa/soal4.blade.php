<!DOCTYPE html>
<html>
<head>
    <title>Soal 4</title>
</head>
<body>
    <h3>Data Siswa (Tempat & Tanggal Lahir Digabung)</h3>
    <table border="1" style="border-collapse: collapse; width: 80%;">
        <tr>
            <th>Nama Lengkap</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
        </tr>
        @foreach ($siswa as $s)
        <tr>
            <td>{{ $s['nama_lengkap'] }}</td>
            <td>{{ $s['tempat_tanggal_lahir'] }}</td>
            <td>{{ $s['jenis_kelamin'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
