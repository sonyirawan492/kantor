<!Doctype html>
<html>
    <head><title>Tambah Pegawai</title></head>
<body>
<form action="{{ url('pegawai/save') }}" method="post" accept-charset="utf-8">
@csrf
    <input type="hidden" name="id" value="" />
    <input type="hidden" name="is_update" value="{{ $is_update }}" />
    Nama : <input type="text" name="Nama" value="" size='50' maxlength='100' />
    <br/><br/>Alamat : <input type="text" name="Alamat" value="" size='50' maxlength='150' />
    <br/><br/>Jabatan : <select name="Jabatan">
        @foreach ($optjabatan as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
    <br/><br/><input type="submit" name="btn_simpan" value="Simpan" />
</form>
<br/><a href="{{ url('pegawai') }}">Kembali</a>
</body>
</html>