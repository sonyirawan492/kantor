<!Doctype html>
<html>
    <head><title>Tambah Kendaraan</title></head>
<body>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ url('kendaraan/save') }}" method="post" accept-charset="utf-8">
@csrf
    <input type="hidden" name="id" value="" />
    <input type="hidden" name="is_update" value="{{ $is_update }}" />
    Nama : <input type="text" name="Nama" value="" size='50' maxlength='100' />
    <br/><br/>Jenis : <input type="text" name="Jenis" value="" size='50' maxlength='150' />
    <br/><br/>Merk : <select name="Merk">
        @foreach ($optmerk as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
    <br/><br/><input type="submit" name="btn_simpan" value="Simpan" />
</form>
<br/><a href="{{ url('kendaraan') }}">Kembali</a>
</body>
</html>