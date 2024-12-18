<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- jQuery and DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .card {
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: white;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 1rem;
        }

        .card-header h5 {
            margin: 0;
        }

        .table thead {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5>Data Mata Kuliah</h5>
                <a href="/create" class="btn btn-success">
                    <i class="fa fa-plus"></i> Tambah Data
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered ">
                        <thead>
                            <tr >
                                <th>#</th>
                                <th>Nama Matkul</th>
                                <th>SKS</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($matkul as $index => $user): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><?= esc($user['matkul']) ?></td>
                                    <td><?= esc($user['sks']) ?></td>
                                    <td>
                                        <a href="/edit/<?= $user['id_matkul'];?>" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <a href="/delete/<?= $user['id_matkul'];?>" onclick="return confirm('Yakin Hapus ta?')" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk menginisialisasi DataTable -->
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                responsive: true,
                autoWidth: false
            });
        });
    </script>

    <!-- Bootstrap JS Bundle (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
