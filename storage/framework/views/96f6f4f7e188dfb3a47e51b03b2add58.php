<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload Event</title>
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="box shadow p-3 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img src="<?php echo e(asset('assets/image/logo.png')); ?>" alt="logo" />
                <img src="<?php echo e(asset('assets/image/evenfy.png')); ?>" alt="logo" class="ms-4" />
            </div>
            <div class="menu d-flex align-items-center">
                <a href="<?php echo e(url("dashboard")); ?>">Dashboard</a>
                <a href="<?php echo e(url("kalender")); ?>">Kalender</a>
                <a href="history">History</a>
                <a href="<?php echo e(url("alamat")); ?>">Alamat</a>
                <a href="<?php echo e(url("Review")); ?>">Ulasan</a>
                <a href="<?php echo e(url("Profile")); ?>"><img src="<?php echo e(asset('assets/image/profile.png')); ?>" alt="profile" width="80%" /></a>
            </div>
        </div>
    </header>

    <div class="container px-5 my-5">
    <h2>Edit Event</h2>
    <form method="POST" action="update">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label class="form-label" for="namaEvent">Nama Event</label>
            <input class="form-control" name="namaEvent" type="text" placeholder="Nama Event" value="<?php echo e($e->namaEvent); ?>"  />
        </div>
        <div class="mb-3">
            <label class="form-label" for="tanggalMulai">Tanggal Mulai</label>
            <div class="row">
                <div class="col">
                    <input type="datetime-local" name="tanggalMulai" class="form-control" value="<?php echo e($e->tanggalMulai); ?>" />
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="tanggalAkhir">Tanggal Akhir</label>
            <div class="row">
                <div class="col">
                    <input type="datetime-local" name="tanggalAkhir" class="form-control" value="<?php echo e($e->tanggalAkhir); ?>"/>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="harga">Harga</label>
            <input class="form-control" name="harga" type="number" placeholder="<Opsional>" value="<?php echo e($e->harga); ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" type="text" style="height: 10rem;"><?php echo e($e->deskripsi); ?></textarea>
        </div>
        <div class="d-grid">
            <button class="btn btn-danger btn-lg" name="submitButton" type="submit">Submit</button>
        </div>
    </form>
</div>

    <footer class="bg-dark text-white text-center py-4">
        <div class="container bg-dark">
            <div class="row">
                <div class="col-md-4">
                    <h5>Social</h5>
                    <p>Follow us on social media</p>
                </div>
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <p>Email: info@evenfy.com<br />Phone: 123-456-7890</p>
                </div>
                <div class="col-md-4">
                    <h5>More Info</h5>
                    <p>About Us<br />Terms and Conditions<br />Privacy Policy</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<?php /**PATH D:\WEBRPO\aplikasi-event-kampus-kelompok-skuyyla\resources\views/EditEvent.blade.php ENDPATH**/ ?>