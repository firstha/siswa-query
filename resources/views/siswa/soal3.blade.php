<!DOCTYPE html>
<html>
<head>
    <title>Soal 3</title>
</head>
<body>
    <h3>Data Siswa Yg Lahir Tahun 2000</h3>
    <table border="1" style="border-collapse: collapse; width: 80%;">
        <tr>
            <th>Nama Lengkap</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th> <!-- Sekarang formatnya dd-mm-yyyy -->
            <th>Jenis Kelamin</th>
        </tr>
        @foreach ($siswa as $s)
        <tr>
            <td>{{ $s['nama_lengkap'] }}</td>
            <td>{{ $s['tempat_lahir'] }}</td>
            <td>{{ $s['tanggal_lahir'] }}</td>
            <td>{{ $s['jenis_kelamin'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
