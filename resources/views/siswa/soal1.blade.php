<!DOCTYPE html>
<html>
<head>
    <title>Soal 1</title>
</head>
<body>
    <h3>Data Siswa</h3>
    <table border="1" style="border-collapse: collapse; width: 80%;">
        <tr>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
        </tr>
        @foreach ($siswa as $s)
        <tr>
            <td>{{ $s->nama_depan }}</td>
            <td>{{ $s->nama_belakang }}</td>
            <td>{{ $s->tempat_lahir }}</td>
            <td>{{ $s->tanggal_lahir }}</td>
            <td>{{ $s->jenis_kelamin }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
