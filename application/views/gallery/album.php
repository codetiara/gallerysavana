<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Sertakan pustaka Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        /* Gaya tambahan untuk tombol Tambah */
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
            /* Warna latar belakang saat tombol dihover */
            border-color: #FFC5C5;
            /* Warna border saat tombol dihover */
            color: #ffffff;
            /* Warna teks saat tombol dihover */
        }

        /* Gaya tambahan untuk kartu album */
        .card {
            border: none;
            transition: transform 0.2s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Gaya untuk tombol dropdown aksi */
        .dropdown-toggle::after {
            display: none !important;
        }

        .dropdown-toggle {
            border-radius: 50%;
            padding: 0;
            width: 30px;
            height: 30px;
            line-height: 0.5;
            text-align: center;
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
    <div class="container mt-4">
        <h2 class="text-center">Data Album</h2>
        <br>
        <!-- Tombol Tambah -->
        <button type="button" class="btn btn-tambah" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-plus"></i>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header" style="background-color: #E6A4B4; color: #fff;">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Album</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo site_url('Welcome/addDataAlbum'); ?>" method="post" id="albumForm">
                            <div class="mb-3">
                                <label for="albumid" class="form-label" hidden>Album ID</label>
                                <input type="text" class="form-control" id="albumid" name="albumid" placeholder="Masukkan Album ID" hidden>
                            </div>
                            <div class="mb-3">
                                <label for="namaalbum" class="form-label">Nama Album</label>
                                <input type="text" class="form-control" id="namaalbum" name="namaalbum" placeholder="Masukkan Nama Album">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi">
                            </div>
                            <div class="mb-3">
                                <label for="tanggaldibuat" class="form-label">Tanggal Dibuat</label>
                                <input type="date" class="form-control" id="tanggaldibuat" name="tanggaldibuat" placeholder="Masukkan Tanggal Dibuat">
                            </div>
                            <div class="mb-3">
                                <input type="hidden" class="form-control" id="userid" name="userid" value="<?php $userid = $this->session->userdata('userid');
                                                                                                                echo $userid; ?>" placeholder="Masukkan Tanggal Dibuat">
                            </div>
                            <button type="button" class="btn btn-pink" onclick="submitForm()">Simpan</button>
                        </form>
                        <div id="pesan" class="alert" style="display: none;"></div>
                    </div>
                </div>
            </div>
        </div>

       <!-- Modal Update -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header" style="background-color: #E6A4B4; color: #fff;">
                <h5 class="modal-title" id="updateModalLabel">Update Data Album</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('Welcome/updateDataAlbum'); ?>" method="post">
                    <input type="hidden" id="update_albumid" name="albumid">
                    <div class="mb-3">
                        <label for="update_namaalbum" class="form-label">Nama Album</label>
                        <input type="text" class="form-control" id="update_namaalbum" name="namaalbum" placeholder="Masukkan Nama Album">
                    </div>
                    <div class="mb-3">
                        <label for="update_deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="update_deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi">
                    </div>
                    <div class="mb-3">
                        <label for="update_tanggaldibuat" class="form-label">Tanggal Dibuat</label>
                        <input type="date" class="form-control" id="update_tanggaldibuat" name="tanggaldibuat" placeholder="Masukkan Tanggal Dibuat">
                    </div>
                    <!-- Perubahan: Ubah type menjadi button -->
                    <button type="button" class="btn btn-pink" onclick="updateAlbum()">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Daftar album -->
<div class="row row-cols-1 row-cols-md-4 g-4">
    <?php
    if (!empty($DataAlbum)) {
        foreach ($DataAlbum as $ReadDS) {
    ?>
           <div class="col mb-4">
            <div class="card shadow-sm" style="max-width: 300px;">
                <!-- Header card -->
                <div class="card-header text-center" style="background-color: #E6A4B4; font-size: 1.2rem; color: white;">
                    <?php echo $ReadDS->namaalbum; ?>
                </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="card-text"><?php echo $ReadDS->deskripsi; ?></p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <!-- Icon titik tiga -->
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li><button class="dropdown-item" onclick="updateModal('<?php echo $ReadDS->albumid; ?>', '<?php echo $ReadDS->namaalbum; ?>', '<?php echo $ReadDS->deskripsi; ?>', '<?php echo $ReadDS->tanggaldibuat; ?>')">Update</button></li>
                                    <li><button class="dropdown-item" onclick="deleteAlbum('<?php echo $ReadDS->albumid; ?>')">Delete</button></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a href="<?php echo site_url('Welcome/foto/' . $ReadDS->albumid); ?>" class="btn btn-sm btn-outline-primary">Detail</a>
                            </div>
                            <small class="text-muted"><?php echo $ReadDS->tanggaldibuat; ?></small>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
</div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-..."></script>

    <script>
        function updateModal(albumid, namaalbum, deskripsi, tanggaldibuat) {
            document.getElementById('update_albumid').value = albumid;
            document.getElementById('update_namaalbum').value = namaalbum;
            document.getElementById('update_deskripsi').value = deskripsi;
            document.getElementById('update_tanggaldibuat').value = tanggaldibuat;
            $('#updateModal').modal('show');
        }
        function updateAlbum() {
    
                // Lakukan update data dan tampilkan Sweet Alert setelah berhasil
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Welcome/updateDataAlbum'); ?>",
                    data: $('#updateModal form').serialize(),
                    success: function(response) {
                        Swal.fire(
                            'Sukses!',
                            'Data Album berhasil diperbarui.',
                            'success'
                        ).then((result) => {
                            $('#updateModal').modal('hide'); // Sembunyikan modal setelah sukses
                            location.reload(); // Refresh halaman setelah update
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        Swal.fire(
                            'Gagal!',
                            'Terjadi kesalahan saat mengupdate data.',
                            'error'
                        );
                    }
                });
            }
        
    

        function deleteAlbum(albumid) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus saja!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Lakukan penghapusan data dan tampilkan notifikasi
                    $.ajax({
                        type: "GET",
                        url: "<?php echo site_url('Welcome/deleteDataAlbum/'); ?>" + albumid,
                        success: function(response) {
                            Swal.fire(
                                'Terhapus!',
                                'Album telah dihapus.',
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
            // Lakukan validasi formulir di sini
            // Jika valid, kirim formulir menggunakan AJAX
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Welcome/addDataAlbum'); ?>",
                data: $('#albumForm').serialize(),
                success: function(response) {
                    Swal.fire(
                        'Sukses!',
                        'Data Album berhasil ditambahkan.',
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
</body>

</html>
