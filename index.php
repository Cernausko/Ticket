<?php

$skrydziai = array(
    array("KP001", "Londonas", "Paryžius"),
    array("PL202", "Paryžius", "Londonas"),
    array("RB303", "Roma", "Barcelona"),
    array("LM704", "Vilnius", "Madridas"),
    array("RF103", "Riga", "Fuerteventura")

);

echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skrydžio bilieto forma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center mt-3">Skrydžio bilieto forma</h1>
    <form method="post" action="ticket.php" class="container mt-5">
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Skrydžio nr:</label>
            <div class="col-sm-10">
                <select name="skrydzio_nr" class="form-select">
HTML;
foreach ($skrydziai as $skrydis) {
    echo '<option value="' . $skrydis[0] . '">' . $skrydis[0] . '</option>';
}
echo <<<HTML
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Asmens kodas:</label>
            <div class="col-sm-10">
                <input type="text" name="asmens_kodas" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Vardas, pavardė:</label>
            <div class="col-sm-10">
                <input type="text" name="vardas_pavarde" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Iš kur skrenda:</label>
            <div class="col-sm-10">
                <select name="iskur_skrenda" class="form-select">
HTML;
foreach ($skrydziai as $skrydis) {
    echo '<option value="' . $skrydis[1] . '">' . $skrydis[1] . '</option>';
}
echo <<<HTML
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Į kur skrenda:</label>
            <div class="col-sm-10">
                <select name="ikur_skrenda" class="form-select">
HTML;
foreach ($skrydziai as $skrydis) {
    echo '<option value="' . $skrydis[2] . '">' . $skrydis[2] . '</option>';
}
echo <<<HTML
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Kaina:</label>
            <div class="col-sm-10">
                <input type="text" name="kaina" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Bagažas:</label>
            <div class="col-sm-10">
                <input type="text" name="bagazas" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Pastabos:</label>
            <div class="col-sm-10">
                <input type="text" name="pastabos" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <input type="submit" value="Spausdinti bilietą" class="btn btn-primary">
            </div>
        </div>
    </form>

</body>
</html>
HTML;
?>
