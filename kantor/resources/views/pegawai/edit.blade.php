<!DOCTYPE html>
<html>
    <head><title>Edit Buku</title></head>
<body>
    <form action="{{ url('pegawai/save') }}" method="post" accept-charset="utf-8">
@csrf
    <input type="hidden" name="id" value="{{ $query->ID_Pegawai }}" />
    <input type="hidden" name="is_update" value="{{ $is_update }}" />
    Nama : <input type="text" name="Nama" value="{{ $query->Nama }}" size='50' maxlength='100' />
        <br/><br/>Alamat : <input type="text" name="Alamat" value="{{ $query->Alamat }}" size='50' maxlength='150' />
        <br/><br/>Jabatan : <select name="Jabatan">
            @foreach ($optjabatan as $key => $value)
                @if ($query->Jabatan == $key)
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