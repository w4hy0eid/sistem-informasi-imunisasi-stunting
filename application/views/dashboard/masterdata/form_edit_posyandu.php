<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data Posyandu</title>
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
                <h1><i class="fa fa-laptop"></i>Edit Data Posyandu</h1>
                <p>Edit Posyandu </p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 ">

                <div class="row">
                    <div class="col-md-6 profile">
                        <div class="card ">
                            <div class="title pt-3">
                                <h4 class="text-primary text-center">Data Posyandu   </h4>
                                <div class="row pl-3">
                                    <div class="col-11">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputDefault">Nama Posyandu</label>
                                            <input type="hidden" id="id_posyandu" value="<?= $detail->id_posyandu ?>">
                                            <input class="form-control" type="text" id="nama_posyandu" value="<?= $detail->nama_posyandu ?>" >
                                        </div>
                                    </div>
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
        var id_posyandu = $("#id_posyandu").val();
        var nama_posyandu = $("#nama_posyandu").val();
        if (nama_posyandu.length == 0) {
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
                url: domain + "proses/simpan_edit_posyandu",
                data: {
                    id_posyandu: id_posyandu,
                    nama_posyandu: nama_posyandu
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