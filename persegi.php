<!DOCTYPE html>
<html>
<head>
    <title>Form Aritmatika Luas Persegi</title>
</head>
<body>
    <h1>Form Aritmatika Luas Persegi</h1>
    <form method="post">
        <label for="sisi">Sisi:</label>
        <input type="text" name="sisi" id="sisi" required><br>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $sisi = $_POST['sisi'];
        $luas = $sisi * $sisi;
        echo "<h2>Luas Persegi: $luas</h2>";
    }
    ?>
</body>
</html>