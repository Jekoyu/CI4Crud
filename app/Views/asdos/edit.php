<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card dan Form Input</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4" style="width: 400px;">
            <h2 class="card-title text-center mb-4">Edit Matkul</h2>
            <?php if (isset($matkul['id_matkul'])): ?>
                <form method="post" action="/update/<?= esc($matkul['id_matkul']) ?>">
                <?php endif; ?> <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Matkul</label>
                    <input type="text" value=" <?= $matkul['matkul'] ?>" class="form-control" name="matkul" id="name" placeholder="Masukkan nama">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Jumlah SKS</label>
                    <input type="number" value="<?= esc($matkul['sks']) ?>" name="sks" class="form-control" id="email" placeholder="Masukkan sks">
                </div>
                <div class="d-grid">
                    <input type="submit" class="btn btn-primary">
                </div>
                </form>
        </div>
    </div>

    <!-- Bootstrap JS Bundle (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>