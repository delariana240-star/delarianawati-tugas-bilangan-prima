<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cek Bilangan Prima</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f7;
            margin: 40px;
        }
        h2 {
            color: #2c3e50;
        }
        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            width: 300px;
        }
        input {
            width: 90%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 8px 12px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9;
        }
        .hasil {
            margin-top: 20px;
            padding: 15px;
            background: #ecf0f1;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<h2>Cek Bilangan Prima dengan PHP</h2>

<form method="post">
    <label>Masukkan Angka:</label><br>
    <input type="number" name="angka" required><br>
    <button type="submit" name="cek">Cek Bilangan</button>
</form>

<?php
// Fungsi untuk menentukan apakah angka prima
function cekPrima($angka) {
    if ($angka <= 1) return false;
    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) return false;
    }
    return true;
}

// Proses hasil setelah tombol ditekan
if (isset($_POST['cek'])) {
    $angka = $_POST['angka'];
    echo "<div class='hasil'>";
    if (cekPrima($angka)) {
        echo "<b>$angka</b> adalah bilangan prima ✅";
    } else {
        echo "<b>$angka</b> bukan bilangan prima ❌";
    }
    echo "</div>";
}
?>

</body>
</html>
