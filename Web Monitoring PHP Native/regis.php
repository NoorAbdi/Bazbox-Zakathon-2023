<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="regis.css" />
    </head>
    <body>
        <div class="Upper">
            <img src="imgs/BZS.png" />
            <h1>Registration</h1>
        </div>
        <div class="row">
            <div>
                <label for="name">Nama</label><br>
                <input type="text" name="name">
            </div>
            <div>
                <label for="email">E-Mail</label><br>
                <input type="text" name="email">
            </div>
        </div>
        <div class="row">
            <div>
                <label for="Alamat">Alamat</label><br>
                <input type="text" name="alamat">
            </div>
            <div>
              <label for="kota">Kota</label><br>
              <input type="text" name="kota">  
            </div>
        </div>
        <div class="row">
            <div>
                <label for="kecamatan">Kecamatan</label><br>
                <input type="text" name="kecamatan">
            </div>
            <div>
                <label for="kelurahan">Kelurahan</label><br>
                <input type="text" name="kelurahan">
            </div>
        </div>
        <div class="row">
            <div>
                <label for="rtrw">RT/RW</label><br>
                <input type="text" name="rtrw">
            </div>
            <div>
                <label for="kodepos">Kode Pos</label><br>
                <input type="text" name="kodepos">
            </div>
        </div>
        <div class="row">
            <div>
                <label for="passwd">Kata Sandi</label><br>
                <input type="password" name="passwd">
            </div>
            <div>
                <label for="verpasswd">Verifikasi Kata Sandi</label><br>
                <input type="password" name="verpasswd">
            </div>
        </div>
        <a href="index.php">
        <button type="submit" name="btn_login" value="Login">Registrasi</button>
        </a>
    </body>
</html>
