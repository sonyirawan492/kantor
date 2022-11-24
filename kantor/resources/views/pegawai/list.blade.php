<!DOCTYPE html>
<html>
    <head><title>Tambah Pegawai</title></head>
<body>
<a href="{{ url('pegawai/add') }}">Tambah Pegawai</a><br/><br/>
<table border='1'>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        <th>Aksi</th>
    </tr>
@php
    $no = 0;
@endphp

@foreach($query as $row)
    @php
        $no++;
    @endphp
    <tr>
        <td>{{  $no }}</td>
        <td>{{ $row['Nama'] }}</td>
        <td>{{ $row['Alamat'] }}</td>
        <td>{{ $optjabatan[$row['Jabatan']] }}</td>
        <td><a href={{ url('pegawai/edit/'.$row['ID_Pegawai']) }}>Edit</a> 
            <a href={{ url('pegawai/delete/'.$row['ID_Pegawai']) }} onclick="return confirm('Yakin?')">Delete</a>
        </td>
    </tr>
@endforeach
</table>
</body>
</html>