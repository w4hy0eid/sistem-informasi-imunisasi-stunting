elseif ($cari_cengkareng == 1){
                $kecamatan =  $field->kecamatan;
            }elseif ($cari_grogol == 1){
                $kecamatan =  $field->kecamatan;
            }elseif ($cari_taman == 1){
                $kecamatan =  $field->kecamatan;
            }elseif ($cari_tambora == 1){
                $kecamatan =  $field->kecamatan;
            }elseif ($cari_kebon == 1){
                $kecamatan =  $field->kecamatan;
            }elseif ($cari_kalideres == 1){
                $kecamatan =  $field->kecamatan;
            }elseif ($cari_palmerah == 1){
                $kecamatan =  $field->kecamatan;
            }elseif ($cari_kembangan == 1){
                $kecamatan =  $field->kecamatan;
            }

            str_replace("Cengkareng", "Nemu", $field->kecamatan, $cari_cengkareng);
            str_replace("Grogol", "Nemu", $field->kecamatan, $cari_grogol);
            str_replace("Taman", "Nemu", $field->kecamatan, $cari_taman);
            str_replace("Tambora", "Nemu", $field->kecamatan, $cari_tambora);
            str_replace("Kebon", "Nemu", $field->kecamatan, $cari_kebon);
            str_replace("Kalideres", "Nemu", $field->kecamatan, $cari_kalideres);
            str_replace("Palmerah", "Nemu", $field->kecamatan, $cari_palmerah);
            str_replace("Kembangan", "Nemu", $field->kecamatan, $cari_kembangan);


            <button class="edit btn btn-success btn-sm" id="' . $field->id_balita . '" type="button"><i class="fa fa-pencil"></i>


            <a href="' . site_url() . 'edit_user/' . $field->id_posyandu . '" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>

            <button class="edit btn btn-success btn-sm" id="' . $field->id_posyandu . '" type="button"><i class="fa fa-pencil"></i></button> 

            <button class="edit btn btn-success btn-sm" id="' . $field->id_user . '" type="button"><i class="fa fa-pencil"></i></button>



            $data_input['status'] = 'Gizi Buruk (Severely Wasted)';
            } else if ($hasil >= -3 && $hasil < -2) {
                $data_input['status'] = 'Gizi Kurang (Wasted)';
            } else if ($hasil >= -2 && $hasil <= 1) {
                $data_input['status'] = 'Gizi Baik (Normal)';
            } else if ($hasil > 1 && $hasil <= 2) {
                $data_input['status'] = 'Beresiko Overweight';
            } else if ($hasil > 2 && $hasil <= 3) {
                $data_input['status'] = 'Gizi Lebih (Overweight)';
            } else if ($hasil > 3) {
                $data_input['status'] = 'Obesitas';