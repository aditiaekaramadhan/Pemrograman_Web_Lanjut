<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nama dan NIM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="POST">
            <div class="form-row">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-row">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" required>
            </div>
            <div class="button-container">
                <button type="submit">Simpan</button>
                <button type="button" onclick="resetForm()">Reset</button>
            </div>
        </form>
        
        <div id="output">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nama = $_POST["nama"];
                    $nim = $_POST["nim"];
                    echo "<p><strong>Nama:</strong> $nama</p><p><strong>NIM:</strong> $nim</p>";
                }
            ?>
        </div>
    </div>

    <script> //Fungsi mengosongkan nilai
        function resetForm() {
            document.getElementById("nama").value = "";
            document.getElementById("nim").value = "";
            document.getElementById("output").innerHTML = "";
        }
    </script>
</body>
</html>