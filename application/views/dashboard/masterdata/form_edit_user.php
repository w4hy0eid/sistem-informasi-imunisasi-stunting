<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data User</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('dashboard/_partials/css') ?>
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <?php $this->load->view('dashboard/_partials/navbar') ?>
    <!-- Sidebar menu-->
    <?php $this->load->view('dashboard/_partials/sidebar') ?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-laptop"></i>Edit Data User</h1>
                <p>Edit User </p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 ">

                <div class="row">
                    <div class="col-md-6 profile">
                        <div class="card ">
                            <div class="title pt-3">
                                <h4 class="text-primary text-center">Biodata User   </h4>
                                <div class="row pl-3">
                                    <div class="col-11">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputDefault">Username</label>
                                            <input type="hidden" id="id_user" value="<?= $detail->id_user ?>">
                                            <input class="form-control" type="text" id="username" value="<?= $detail->username ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-3">
                                    <div class="col-11">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputDefault">Nama Lengkap</label>
                                            <input class="form-control" type="text" id="nama_lengkap" value="<?= $detail->nama_lengkap ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-3">
                                    <div class="col-11">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputDefault">Password</label>
                                            <input class="form-control" type="password" id="password" value="">
                                            <p>Kosongkan Jika Tidak Ingin Merubah</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-3">
                                    <div class="col-11">
                                        <div class="form-group">
                                            <label for="" class="col-form-label" for="inputDefault">Level</label>
                                            <select class="form-control" name="level" id="level">
                                                <option value="<?= $detail->level ?>"><?= $detail->level ?></option>
                                                <option value="Posyandu">Posyandu</option>
                                                <option value="Puskesmas">Puskesmas</option>
                                                <option value="Dinas">Dinas</option>
                                                <option value="Admin">Admin</option>
                                                </select>
                                        </div>
                                        <button type="bunnton" class="btn btn-primary" onclick="TambahRiwayat();">Simpan</button>
                                    </div>
                                    
                                </div> 
                                           
                                        </div>
                                    </div>
                                </div>
                             
                            </div>
                        </div>
                    </div>

                  
                

    </main>
    <?php $this->load->view('dashboard/_partials/js') ?>
</body>
<script type="text/javascript">

    //Tambah Data Riwayat Imunisasi
    function TambahRiwayat() {
        var id_user = $("#id_user").val();
        var username = $("#username").val();
        var password = $("#password").val();
        var nama_lengkap = $("#nama_lengkap").val();
        var level = $("#level").val();
        if (username.length == 0) {
            swal({
                title: "Perhatian!",
                text: "Pilih data balita terlebih dahulu !",
                icon: "warning",
                button: false,
                timer: 1500,
            });
    
        } else {
            $.ajax({
                type: 'POST',
                url: domain + "proses/simpan_edit_user",
                data: {
                    id_user: id_user,
                    username: username,
                    password: password,
                    nama_lengkap: nama_lengkap,
                    level: level
                },
                success: function(result) {
                    d = JSON.parse(result);
                    swal({
                        text: d.message,
                        icon: d.type,
                        button: false,
                        timer: 1500,
                    });
                }

            });
        }
    }
</script>

</html>