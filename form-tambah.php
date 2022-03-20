<!DOCTYPE html>
<html>
<head>
    <title>Toko Maju Sejahtera Bersinar Jaya Abadi</title>
</head>

<body>
    <header>
        <h3>Formulir Penambahan Barang</h3>
    </header>

    <form action="proses-penambahan.php" method="POST">

        <p>
            <label for="jenis">Jenis: </label>
            <input type="text" name="jenis" placeholder="masukkan jenis barang" />
        </p>
        <p>
            <label for="merk">Merk: </label>
            <input type="text" name="merk" placeholder="masukkan merk barang" />
        </p>
        <p>
            <label for="warna">Warna: </label>
            <input type="text" name="warna" placeholder="masukkan warna barang" />
        </p>
        <p>
            <input type="submit" value="Tambahkan" name="daftar" />
        </p>

    </form>

    </body>
</html>