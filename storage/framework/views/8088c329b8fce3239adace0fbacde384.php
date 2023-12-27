<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="<?php echo e(asset('assets/css/Registrasi.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="" />

    <title>Form Registrasi</title>
</head>
<body>

    <div class="container bg-light">
        <div class="row g-3">
            <div class="card-body">
                <form method="get" action="Login">
                    <h2 class="card-title text-center">R e g i s t r a s i</h2>
                    <hr />
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama lengkap" placeholder="Masukkan Nama Lengkap Anda" />
                    </div>

                    <div class="mb-3">
                        <label>Alamat Email</label>
                        <input type="text" class="form-control" id="alamat lengkap" placeholder="Masukkan Alamat Email Anda" />
                    </div>

                    <div class="mb-3">
                        <label>Tempat/Tanggal Lahir</label>
                        <input type="date" class="form-control" id="ttl" placeholder="Masukkan Tempat/Tanggal Lahir" />
                    </div>

                    <div class="mb-3">
                        <label>No Handphone</label>
                        <input type="text" class="form-control" id="no handphone" placeholder="Masukkan No Handphone" />
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan Password" />
                    </div>

                    <button type="submit" class="btn btn-primary">Registrasi</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <hr />
                    <small id="text" class="form-text text-muted">Sudah punya Akun? <a href="Login">Klik Login</small>
                </form>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>
<?php /**PATH D:\aplikasi-event-kampus-kelompok-skuyyla\resources\views/Registrasi.blade.php ENDPATH**/ ?>