<!DOCTYPE html>
<html>
    <head><title>Edit Kendaraan</title></head>
<body>
    <form action="{{ url('kendaraan/save') }}" method="post" accept-charset="utf-8">
@csrf
    <input type="hidden" name="id" value="{{ $query->No }}" />
    <input type="hidden" name="is_update" value="{{ $is_update }}" />
    Nama : <input type="text" name="Nama" value="{{ $query->Nama }}" size='50' maxlength='100' />
        <br/><br/>Jenis : <input type="text" name="Jenis" value="{{ $query->Jenis }}" size='50' maxlength='150' />
        <br/><br/>Merk : <select name="Merk">
            @foreach ($optmerk as $key => $value)
                @if ($query->Merk == $key)
                <option value="{{ $key }}" selected>{{ $value}}</option>
                @else
                <option value="{{ $key }}">{{ $value}}</option>
                @endif
            @endforeach
    </select>
    <br/><br/><input type="submit" name="btn_simpan" value="Simpan" />
</form>
</body>
</html>