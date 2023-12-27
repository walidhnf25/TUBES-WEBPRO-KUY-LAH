<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo e(asset('assets/css/search.css')); ?>" rel="stylesheet" />    <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>

    <link href="<?php echo e(asset('assets/css/footer.css')); ?>" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <nav>
        <div class="white-box">
            <label class="logo">Evenfy</label>
            <ul>
                <li><a href="dashboard">Dashboard</a></li>
                <li><a href="kalender">Kalender</a></li>
                <li><a href="history">History</a></li>
                <li><a href="alamat">Alamat</a></li>
                <li><a href="Review">Ulasan</a></li>
                <li><a href="Profile"><img src="<?php echo e(asset('assets/image/profile.png')); ?>" alt="" /></a></li>
            </ul>
        </div>
        <div class="searching">
            <form action="<?php echo e(route('event.search')); ?>" method="GET">
                <?php echo csrf_field(); ?>
                <table class="search-container">
                    <tr>
                        <td>
                            <input type="text" placeholder="Search" class="search" name="search">
                        </td>
                        <td>
                            <button type="submit"><i class="material-icons">search</i></button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </nav>
    <main>
        <div class="searching">
            <form action="<?php echo e(route('event.search')); ?>" method="GET">
                <?php echo csrf_field(); ?>
                <table class="search-container">
                    <tr>
                        <td>
                            <input type="text" placeholder="Search" class="search" name="search">
                        </td>
                        <td>
                            <button type="submit"><i class="material-icons">search</i></button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <div class="card-container">
            <?php if(isset($events) && count($events) > 0): ?>
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="cards">
                        <img src="<?php echo e(asset('assets/image/Event1.jpg')); ?>" alt="" />
                        <div class="card-content">
                            <h2><?php echo e($event->namaEvent); ?></h2>
                            <p><?php echo e($event->deskripsi); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <p>Tidak ada hasil pencarian.</p>
            <?php endif; ?>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#about us">about us</a></li>
                        <li><a href="#services">our services</a></li>
                        <li><a href="#ppolicy">privacy policy</a></li>
                        <li><a href="#addiliate">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#FAQ">FAQ</a></li>
                        <li><a href="#Helps">Helps</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>
</body>

</html>
<?php /**PATH D:\aplikasi-event-kampus-kelompok-skuyyla\resources\views/search.blade.php ENDPATH**/ ?>