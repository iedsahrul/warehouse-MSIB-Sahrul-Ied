<?php
include_once 'Database.php';
$database = new Database();
$db = $database->getConnection();

if ($_POST) {
    $query = "INSERT INTO gudang (name, location, capacity, status, opening_hour, closing_hour) 
              VALUES (:name, :location, :capacity, :status, :opening_hour, :closing_hour)";
    $stmt = $db->prepare($query);

    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':location', $_POST['location']);
    $stmt->bindParam(':capacity', $_POST['capacity']);
    $stmt->bindParam(':status', $_POST['status']);
    $stmt->bindParam(':opening_hour', $_POST['opening_hour']);
    $stmt->bindParam(':closing_hour', $_POST['closing_hour']);

    if ($stmt->execute()) {
        header("Location: Index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Gudang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Tambah Gudang</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Gudang</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Lokasi Gudang</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>
            <div class="mb-3">
                <label for="capacity" class="form-label">Kapasitas Gudang</label>
                <input type="number" class="form-control" id="capacity" name="capacity" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status">
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="opening_hour" class="form-label">Jam Buka</label>
                <input type="time" class="form-control" id="opening_hour" name="opening_hour">
            </div>
            <div class="mb-3">
                <label for="closing_hour" class="form-label">Jam Tutup</label>
                <input type="time" class="form-control" id="closing_hour" name="closing_hour">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Gudang</button>
        </form>
    </div>
</body>

</html>