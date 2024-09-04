<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <h3>Register Pegawai</h3>
    <form action="proses_register.php" method="post">
        Nik :
        <input type="text" name="Nik" value="" class="form-control">
        Nama :
        <input type="text" name="Nama" value="" class="form-control">
        Gender :
        <select name="Gender" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        Alamat :
        <textarea name="Alamat" class="form-control" rows="4"></textarea>
        Nomor telfon:
        <input type="text" name="No_tlp" value="" class="form-control" rows="4"></input>
        Jabatan :
        <select name="id_jabatan" class="form-control">
            <option></option>
            <option value="Manajer">Manajer</option>
            <option value="Pegawai">Pegawai</option>


        </select>
        username :
        <input type="text" name="username" value="" class="form-control">
        Password :
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="" class="btn btn-primary">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>