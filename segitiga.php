<!DOCTYPE html>
<html>
<head>
    <title>Form Aritmatika Luas Segitiga</title>
</head>
<body>
    <h1>Form Aritmatika Luas Segitiga</h1>
    <form method="post">
        <label for="tinggi">Tinggi:</label>
        <input type="text" name="tinggi" id="tinggi" required><br>
        <label for="alas">Alas:</label>
        <input type="text" name="alas" id="alas" required><br>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $luas = 0.5 * $alas * $tinggi;
        echo "<h2>Luas Segitiga: $luas</h2>";
    }
    ?>
</body>
</html>