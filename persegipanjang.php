<!DOCTYPE html>
<html>
<head>
    <title>Form Aritmatika Luas Persegi Panjang</title>
</head>
<body>
    <h1>Form Aritmatika Luas Persegi Panjang</h1>
    <form method="post">
        <label for="panjang">Panjang:</label>
        <input type="text" name="panjang" id="panjang" required><br>
        <label for="lebar">Lebar:</label>
        <input type="text" name="lebar" id="lebar" required><br>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $luas = $panjang * $lebar;
        echo "<h2>Luas Persegi: $luas</h2>";
    }
    ?>
</body>
</html>