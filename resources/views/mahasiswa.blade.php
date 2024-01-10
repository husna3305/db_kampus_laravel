<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Mahasiswa</title>
</head>

<body>
    <a href="{{ route('tambahMahasiswa') }}">Tambah Data</a>

    <table border="1" style="width: 800px;">
        <thead>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Program Studi</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($result as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->nama_mahasiswa }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->program_studi }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                        <a href="{{ route('ubahMahasiswa', ['id' => $item->nim]) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
