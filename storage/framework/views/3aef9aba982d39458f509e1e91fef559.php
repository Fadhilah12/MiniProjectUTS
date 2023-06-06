<?php $__env->startSection('content'); ?>
    <!--Welcome-->
    <section id="welcome" class="text-center">
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-md-5 order-md-2">
                    <img class="img-fluid" src="<?php echo e(Vite::asset('images/welcome.png')); ?>" alt="main welcome">
                </div>
                <div class="col-md-7 order-md-1">
                    <h1 class="mt-4 display-3">W E L C O M E</h1>
                    <p class="fs-5 mt-3">This is Home page!</p>
                    <div class="row text center">
                        <div class="flex-md-row">
                            <a class=" btn-grad btn-grad-hover btn btn-primary fw-bold" href="#image" role="button">My
                                Biodata</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Akhir Welcome-->
    <!--biodata-->
    <!--jumbotron-->
    <section id="image" class="jumbotron text-center ">
        <img src="<?php echo e(Vite::asset('images/biodata.png')); ?>" class="rounded-circle position-middle border border-3"
            alt="image" width=20%>
        <h2 class="fw-bold">SITI NUR FADHILAH</h2>
        <p class="lead fw-semibold">Sistem Informasi | 1204210047</p>
        <!--gelombang-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#146C94" fill-opacity="1"
                d="M0,128L34.3,144C68.6,160,137,192,206,213.3C274.3,235,343,245,411,224C480,203,549,149,617,122.7C685.7,96,754,96,823,117.3C891.4,139,960,181,1029,181.3C1097.1,181,1166,139,1234,128C1302.9,117,1371,139,1406,149.3L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
        <!--akhir gelombang-->
    </section>
    <!--akhir jumbotron-->
    <!--about me-->
    <section class="jumbotron2 text-light" id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2 class="fw-bold">About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p>Assalamualaikum warahmataullahi wabarakatuh, perkenalkan saya Siti Nur Fadhilah dan biasa
                        dipanggil Dhila atau Fadhilah.
                        Saya adalah mahasiswa Prodi Sistem Informasi angkatan 2021 di Institut Teknologi Telkom
                        Surabaya. Saat ini saya menempuh semester 4
                        dan sedang menjalankan Ujian Tengah Semester (UTS). Website yang saya buat ini adalah mini
                        project dari mata kuliah Pemrograman Framework.
                        Website database produk sepatu ini dibuat untuk memenuhi Ujian Tengah Semester Pemrograman
                        Framework dari Prodi Sistem Informasi.
                    </p>
                </div>
                <div class="col-md-6">
                    <p>Sebagai mahasiswa yang aktif, saya mengikuti banyak kegiatan di kampus seperti kepantitiaan, UKM
                        dan Organisasi Himpunan Mahasiswa Sistem Informasi.
                        Dengan mengikuti banyak kegiatan ORMAWA di kampus dapat memberikan banyak ilmu dan pengalaman
                        yang lebih luas. Namun, terkadang kegiatan ORMAWA
                        dapat mengganggu waktu untuk belajar dan mengerjakan tugas. Oleh karena itu saya harus bisa
                        memanajeman waktu dengan baik dan mengerjakan tugas secara maksimal.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--akhir about me-->

    <!--my bio-->
    <section class="jumbotron3" style="background-color: #cde6fc">
        <!--gelombang-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#146C94" fill-opacity="1"
                d="M0,160L40,144C80,128,160,96,240,117.3C320,139,400,213,480,256C560,299,640,309,720,293.3C800,277,880,235,960,218.7C1040,203,1120,213,1200,197.3C1280,181,1360,139,1400,117.3L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
            </path>
            <!--akhir gelombang-->
            <div class="container">
                <div class="row text-center mb-3 fw-bold">
                    <div class="col">
                        <h2 class="fw-bold">Biodata</h2>
                    </div>
                </div>
                <div class="row justify-content-center fw-bold">
                    <div class="col-md-2 fw-semibold">
                        <p>Nama
                        </p>
                    </div>
                    <div class="col-md-10">
                        <div class="border rounded-pill border-dark p-2 mb-2">Siti Nur Fadhilah</div>
                    </div>
                    <div class="col-md-2 fw-semibold">
                        <p>Tempat, Tanggal Lahir
                        </p>
                    </div>
                    <div class="col-md-10">
                        <div class="border rounded-pill border-dark p-2 mb-2">Kediri, 21 Desember 2002</div>
                    </div>
                    <div class="col-md-2 fw-semibold">
                        <p>Alamat
                        </p>
                    </div>
                    <div class="col-md-10">
                        <div class="border rounded-pill border-dark p-2 mb-2">Dsn. Kedungsari Ds. Sebet Kec. Plemahan
                            Kab.Kediri</div>
                    </div>
                    <div class="col-md-2 fw-semibold">
                        <p>Agama
                        </p>
                    </div>
                    <div class="col-md-10">
                        <div class="border rounded-pill border-dark p-2 mb-2">Islam</div>
                    </div>
                    <div class="col-md-2 fw-semibold">
                        <p>Jenis Kelamin
                        </p>
                    </div>
                    <div class="col-md-10">
                        <div class="border rounded-pill border-dark p-2 mb-2">Perempuan</div>
                    </div>
                    <div class="col-md-2 fw-semibold">
                        <p>Hobi
                        </p>
                    </div>
                    <div class="col-md-10">
                        <div class="border rounded-pill border-dark p-2 mb-2">Desain</div>
                    </div>
                </div>
            </div>
            <!--gelombang-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#146C94" fill-opacity="1"
                    d="M0,32L40,58.7C80,85,160,139,240,154.7C320,171,400,149,480,138.7C560,128,640,128,720,112C800,96,880,64,960,80C1040,96,1120,160,1200,176C1280,192,1360,160,1400,144L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
                </path>
            </svg>
            <!--akhir gelombang-->
    </section>
    <!--akhir my bio-->
    <!--akhir biodata-->

    <!--my product-->
    <section class="jumbotron4 text-light" style="background-color: #146C94">
        <div class="container">
            <div class="row text-center md-3 fw-bold">
                <div class="col">
                    <h2 class="fw-bold">My Product</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="<?php echo e(Vite::asset('images/produk1.jpg')); ?>" class="card-img-top" alt="project">
                        <div class="card-body">
                            <p class="card-text">Kyunggie shoes special edition! Sepatu modern bergaya retro yang cocok
                                dipakai untuk sekolah, kuliah, kerja dan jalan-jalan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="<?php echo e(Vite::asset('images/produk2.jpg')); ?>" class="card-img-top" alt="project">
                        <div class="card-body">
                            <p class="card-text">Kyunggie shoes special edition! Sepatu modern dengan gaya casual yang
                                cocok dipadankan dengan berbagai pakaian.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="<?php echo e(Vite::asset('images/produk3.jpg')); ?>" class="card-img-top" alt="project">
                        <div class="card-body">
                            <p class="card-text">Kyunggie shoes special edition! Sepatu modern bergaya feminim yang
                                keren. Segera dapatkan di toko kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--akhir my product-->

    <!--footer-->
    <footer class="footer text-center mt-3 fw-bold" style="background-color: #cde6fc">
        <p> Copyright 2023 by <a href="https://github.com/Fadhilah12">Siti Nur Fadhilah</a></p>
    </footer>
    <!--akhir footer-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dell\Documents\TUGAS KULIAH\SMT 4\Pemrograman Framework\MiniProject\masterBarangUts\resources\views/home.blade.php ENDPATH**/ ?>