<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-..."></script>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/sb-admin-2.min.css'); ?>">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .card {
            width: 100%;
            border: none;
            transition: transform 0.2s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card img {
            height: 200px;
            object-fit: cover;
            border-radius: 0.5rem 0.5rem 0 0;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-text {
            color: #6c757d;
        }

        .card-footer {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
            padding: 0.75rem;
            border-radius: 0 0 0.5rem 0.5rem;
        }

        .btn-tambah {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            background-color: #F190B7;
            border-color: #F190B7;
            color: #ffffff;
            border-radius: 50%;
            padding: 10px 14px;
            font-size: 1.2rem;
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }

        .btn-tambah:hover {
            background-color: #FFC5C5;
            border-color: #FFC5C5;
            color: #ffffff;
        }

        .modal-content {
            max-width: 600px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            border-bottom: none;
            padding: 1rem;
            text-align: center;
        }

        .modal-body {
            padding: 1rem;
        }

        .modal-body .row {
            align-items: center;
        }

        .modal-body img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            border-radius: 0.5rem;
        }

        .modal-body .col-md-8 {
            text-align: left;
            padding-left: 5rem;
        }

        .modal-body .col-md-8 {
            padding-left: 5rem;
        }

        .btn-pink {
        background-color: #E6A4B4; /* Warna pink */
        border-color: #E6A4B4; /* Warna pinggiran pink */
        color: #ffffff; /* Warna teks putih */
        }

        .btn-pink:hover {
            background-color:#E6A4B4; /* Warna pink saat hover */
            border-color: #E6A4B4; /* Warna pinggiran pink saat hover */
            color: #ffffff; /* Warna teks putih saat hover */
        }
    </style>
</head>

<body>
    <?php $albumid = $this->uri->segment('3'); ?>

    <!-- judul (card) -->
    <div class="container mt-4">
        <h2 class="text-center">Data Foto</h2>
        <br>
        <button type="button" class="btn btn-tambah" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-plus"></i>
        </button>
       <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #E6A4B4; color: #fff;">
                <h5 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Foto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="fotoForm" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="judulfoto" class="form-label">Judul Foto</label>
                        <input type="text" class="form-control" id="judulfoto" name="judulfoto" placeholder="Masukkan Judul Foto">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsifoto" class="form-label">Deskripsi Foto</label>
                        <textarea class="form-control" id="deskripsifoto" name="deskripsifoto" rows="3" placeholder="Masukkan Deskripsi Foto"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalunggah" class="form-label">Tanggal Unggah</label>
                        <input type="date" class="form-control" id="tanggalunggah" name="tanggalunggah">
                    </div>
                    <div class="mb-3">
                        <label for="lokasifile" class="form-label">Pilih Foto</label>
                        <input type="file" class="form-control" id="lokasifile" name="lokasifile">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-pink" onclick="submitForm()">Simpan</button>
                    </div>
                </form>
                <div id="pesan" class="alert" style="display: none;"></div>
            </div>
        </div>
    </div>
</div>


        <!-- tabel -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php if (!empty($DataFoto)) {
                foreach ($DataFoto as $ReadDS) {
                    // Retrieve like count for current photo
                    $likeCount = $this->MSudi->hitung_like($ReadDS->userid, $ReadDS->fotoid)->jumlah;
            ?>
                    <div class="col-md-3 mb-4">
                        <div class="card h-100">
                            <img src="<?= base_url('/assets/img/' . $ReadDS->lokasifile) ?>" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#photoModal<?= $ReadDS->fotoid ?>">
                            <div class="card-body p-6">
                                <h5 class="card-title">
                                    <?= $ReadDS->judulfoto ?>
                                    <button type="button" class="btn btn-danger ms-auto" onclick="deletePhoto(<?= $ReadDS->fotoid ?>)">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Detail Foto -->
                    <div class="modal fade" id="photoModal<?= $ReadDS->fotoid ?>" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #E6A4B4; color: #fff;">
                                    <h5 class="modal-title" id="photoModalLabel">Detail Foto</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="<?= base_url('/assets/img/' . $ReadDS->lokasifile) ?>" class="img-fluid" alt="Detail Foto">
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="modal-title small-title"><?= $ReadDS->judulfoto ?></h5>
                                            <p>Deskripsi Foto: <?= $ReadDS->deskripsifoto ?></p>
                                            <p>Userid: <small><?= $ReadDS->userid ?></small></p>
                                            <!-- Tampilkan jumlah like yang telah didefinisikan -->
                                            <p>Jumlah Like: <?= $likeCount ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } ?>
        </div>
    </div>

    <!-- Sweet Alert Script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function deletePhoto(photoId) {
            // Tampilkan Sweet Alert untuk konfirmasi penghapusan
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "GET",
                        url: "<?php echo site_url('Welcome/deleteDataFoto/'); ?>" + photoId,
                        success: function(response) {
                            Swal.fire(
                                'Terhapus!',
                                'Foto telah dihapus.',
                                'success'
                            ).then((result) => {
                                location.reload(); // Refresh halaman setelah menghapus data
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            Swal.fire(
                                'Gagal!',
                                'Terjadi kesalahan saat menghapus data.',
                                'error'
                            );
                        }
                    });
                }
            });
        }

        function submitForm() {
            var form = $('#fotoForm')[0];
            var formData = new FormData(form);

            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "<?php echo site_url('Welcome/addDataFoto/' . $albumid); ?>",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 600000,
                success: function(data) {
                    Swal.fire(
                        'Sukses!',
                        'Data Foto berhasil ditambahkan.',
                        'success'
                    ).then((result) => {
                        location.reload(); // Refresh halaman setelah menambahkan data
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    Swal.fire(
                        'Gagal!',
                        'Terjadi kesalahan saat menambahkan data.',
                        'error'
                    );
                }
            });
        }
    </script>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript -->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>
