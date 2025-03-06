<!DOCTYPE html>
<html>
    <head>
        <title>Request dengan Input Laravel</title>
    </head>

    <body>

    <form action="{{ route('formulir.proses') }}" method="POST">
        @csrf
        Nama    : <input type="text" name="nama" placeholder="Masukkan Nama"><br/>
        Alamat  : <input type="text" name="alamat" placeholder="Masukkan Alamat"><br/>
        <button type="submit">Kirim</button>
    </form>
    </form>
    </body>
</html>
