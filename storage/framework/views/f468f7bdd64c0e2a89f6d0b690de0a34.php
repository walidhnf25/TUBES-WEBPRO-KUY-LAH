<!-- Cuma untuk tes doang -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row justify-content-center" style="margin-top:13%">
    <div class="col-4">
        <table class="table table-bordered table-striped">
        <tr>
        <th>Nama Event</th>
        <th>Tanggal Mulai</th>
        <th>Tanggal Akhir</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        </tr>
        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <td><?php echo e($d->namaEvent); ?></td>
        <td><?php echo e($d->tanggalMulai); ?></td>
        <td><?php echo e($d->tanggalAkhir); ?></td>
        <td><?php echo e($d->harga); ?></td>
        <td><?php echo e($d->deskripsi); ?></td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    </div>
</body>
</html><?php /**PATH D:\Tugas Kuliah Semester 5\aplikasi-event-kampus-kelompok-skuyyla\resources\views/listEvent.blade.php ENDPATH**/ ?>