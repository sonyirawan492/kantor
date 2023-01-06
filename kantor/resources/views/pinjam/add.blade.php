<!Doctype html>
<html>
    <head><title>Pinjam Kendaraan</title></head>
<body>
<h2>Form Pinjam Kendaraan</h2>
<form action="{{ url('pinjam/save') }}" method="post" accept-charset="utf-8">
@csrf
    Pegawai : <select name="ID_Pegawai">
        <option value="">-Pilih Pegawai-</option>
    @foreach ($optpegawai as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
    <br/><br/>Kendaraan : <select name="No">
        <option value="">-Pilih Kendaraan</option>
        @foreach ($optkendaraan as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
    <br/><br/>Tgl.Pinjam : <input type="date" name="tgl_pinjam" value="" />
    <br/><br/>Tgl.Kembali : <input type="date" name="tgl_kembali" value="" />
    <br/><br/><input type="submit" name="btn_simpan" value="Simpan" />
    <input type="reset" name="btn_batal" value="Batal" />
</form>
<br/><a href="{{ url('kantor') }}">Kembali</a>
</body>
</html>