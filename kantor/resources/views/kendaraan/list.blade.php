<!DOCTYPE html>
<html>
    <head><title>Tambah Kendaraan</title></head>
<body>
<a href="{{ url('kendaraan/add') }}">Tambah Kendaraan</a><br/><br/>
<table border='1'>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Merk</th>
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
        <td>{{ $row['Jenis'] }}</td>
        <td>{{ $optmerk[$row['Merk']] }}</td>
        <td><a href={{ url('kendaraan/edit/'.$row['No']) }}>Edit</a> 
            <a href={{ url('kendaraan/delete/'.$row['No']) }} onclick="return confirm('Yakin?')">Delete</a>
        </td>
    </tr>
@endforeach
</table>
<p>{{ $query->links('vendor.pagination.mypage') }} </p>
<br/><a href="{{ url('kantor') }}">Kembali</a>
</body>
</html>