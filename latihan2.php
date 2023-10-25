<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan 2 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center" style="color: white; background-color: blue;">WAD Project 2</h1>
    <p class="lead">
        <h3>Tugas 2 - Pengenalan Server Side & Dasar PHP</h3>
        <h6>Mutiara Fanny Maulida</h6>
        <h6>1202213104 | SI-45-02</h6>
        <hr>

    </p>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <form method="post" action="proses.php" class="row g-3">
        <div class="col-md-6">
            <label for="input_angka" class="form-label">Input Angka:</label>
            <input type="number" class="form-control" name="input_angka" id="input_angka" required>
        </div>

        <div class="col-md-4">
            <label for="input_dropdown" class="form-label">Pilih Opsi:</label>
            <select name="input_dropdown" id="input_dropdown" class="form-select">
                <option value="Opsi 1">Opsi 1</option>
                <option value="Opsi 2">Opsi 2</option>
                <option value="Opsi 3">Opsi 3</option>
                <option value="Opsi 4">Opsi 4</option>
                <option value="Opsi 5">Opsi 5</option>
            </select>
        </div>

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Apakah Anda yakin?
                </label>
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary" input type="submit" name="hitung" value="Hitung">Hitung</button>
        </div>

        <?php
            if (isset($_POST['hitung'])) {
                $angka = $_POST['input_angka'];
                $dropdown = $_POST['input_dropdown'];
                
                // Detailing
                echo "Angka yang dimasukkan: " . $angka . "<br>";
                echo "Opsi yang dipilih: " . $dropdown;
            }
        ?>
    </form>
</body>

</html>