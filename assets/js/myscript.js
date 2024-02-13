function getDomain(url){
    var parts = url.split('.');
    if (parts[0] === 'www' && parts[1] !== 'com'){
        parts.shift()
    }
    var ln = parts.length
      , i = ln
      , minLength = parts[parts.length-1].length
      , part

    // iterate backwards
    while(part = parts[--i]){
        // stop when we find a non-TLD part
        if (i === 0                    // 'asia.com' (last remaining must be the SLD)
            || i < ln-2                // TLDs only span 2 levels
            || part.length < minLength // 'www.cn.com' (valid TLD as second-level domain)
            || TLDs.indexOf(part) < 0  // officialy not a TLD
        ){
            return part
        }
    }
}

//GET DOMAIN 
var domain = "http://" + getDomain(location.host) + "/sipenting/";


 //Login
 function SavePost() {
    event.preventDefault();
    var username = $("#username").val();
    var password = $("#password").val();
    if (username.length == 0 || password.length == 0) {
        swal({
            title: "Perhatian!",
            text: "Form tidak boleh kosong !",
            icon: "warning",
            button: false,
            timer: 1500,
        });
    } else {
        
        let formData = new FormData($('#loginform')[0]);
        $.ajax({
            type: 'POST',
            url: domain + "proses/login",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(result) {
                d = JSON.parse(result);
                swal({
                    text: d.message,
                    icon: d.type,
                    button: false,
                    timer: 1500,
                });
                if (d.type == "success") {
                    setTimeout(function() {
                        window.location = domain;
                    }, 2000); //will call the function after 2 secs.
                }
            }
        });
    } 
}



//Tambah Data Balita
function TambahDataBalita() {
    event.preventDefault();
    var nama_lengkap = $("#nama_lengkap").val();
    var nama_ibu = $("#nama_ibu").val();
    var nama_ayah = $("#nama_ayah").val();
    var jenis_kelamin = $("#jenis_kelamin").val();
    var tanggal_lahir = $("#tanggal_lahir").val();
    var alamat = $("#alamat").val();
    if (nama_lengkap.length == 0 || nama_ibu.length == 0 || nama_ayah.length == 0 || jenis_kelamin.length == 0 || tanggal_lahir.length == 0 || alamat.length == 0) {
        swal({
            title: "Perhatian!",
            text: "Form tidak boleh kosong !",
            icon: "warning",
            button: false,
            timer: 1500,
        });
    } else {
        let formData = new FormData($('#formtambahdatabalita')[0]);
        $.ajax({
            type: 'POST',
            url: domain + "proses/simpan_data_balita",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(result) {
                d = JSON.parse(result);
                swal({
                    text: d.message,
                    icon: d.type,
                    button: false,
                    timer: 1500,
                });

                $("#nama_lengkap").val("");
                $("#nama_ibu").val("");
                $("#nama_ayah").val("");
                $("#alamat").val("");
                $('#AddBalita').modal("hide");
                $('#listdatabalita').DataTable({
                    "bDestroy": true,
                    "processing": true,
                    "serverSide": true,
                    "order": [],

                    "ajax": {
                        url: domain + "serverside/list_data_balita",
                        type: "POST",
                        data: {
                        }
                    },
                    "initComplete": function(settings, json) {
                        $("#csrfHash").val(json.error_code);
                    },
                    "columnDefs": [{
                        "targets": [0],
                        "orderable": false,
                    }, ],


                }); 
            }

        });
    } 




//Serverside List Data Balita
var table;
$(document).ready(function() {
    table = $('#listdatalengkap').DataTable({
        "bDestroy": true,
        "processing": true,
        "serverSide": true,
        "order": [],

        "ajax": {
            url: domain + "serverside/list_data_lengkap",
            type: "POST",
            data: {
            }
        },
        "initComplete": function(settings, json) {
            $("#csrfHash").val(json.error_code);
        },
        "columnDefs": [{
            "targets": [0],
            "orderable": false,
        }, ],


    });

});


}