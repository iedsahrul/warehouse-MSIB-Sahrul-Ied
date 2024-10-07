<?php
include_once 'Database.php';
$database = new Database();
$db = $database->getConnection();

$query = "SELECT * FROM gudang";
$stmt = $db->prepare($query);
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Warehouse MSIB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/logo-cgs2.ico">

</head>

<body class="d-flex flex-column min-vh-100">

    <div class="container mt-5 flex-grow-1">
        <div class="d-flex justify-content-between mb-4">
            <h2>Daftar Gudang</h2>
            <h2 class="fw-bold">Warehouse MSIB CGS</h2>
        </div>
        <a href="Create.php" class="btn btn-primary mb-3">Tambah Gudang</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Gudang</th>
                    <th>Lokasi</th>
                    <th>Kapasitas</th>
                    <th>Status</th>
                    <th>Jam Buka</th>
                    <th>Jam Tutup</th>
                    <th>Operasi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['location'] ?></td>
                    <td><?= $row['capacity'] ?></td>
                    <td><?= $row['status'] ?></td>
                    <td><?= $row['opening_hour'] ?></td>
                    <td><?= $row['closing_hour'] ?></td>
                    <td>
                        <a href="Update.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="Delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <footer class="text-center mt-4 py-1 bg-dark w-100 text-white">
        <p>Created with ❤️ by Sahrul Ied</p>
    </footer>

</body>

</html>