   <!--Basic Modal -->
   <div class="modal fade" id="AddBalita" tabindex="-1" role="dialog" aria-labelledby="AddBalita" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="AddBalita">Tambah Data Balita</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <form id="formtambahdatabalita" autocomplete="off">
                       <div class="form-group">
                           <label class="control-label">Nama Balita</label>
                           <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
                       </div>
                       <div class="form-group">
                           <label class="control-label">Nama Ibu</label>
                           <input class="form-control" type="text" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu">
                       </div>
                       <div class="form-group">
                           <label class="control-label">Nama Ayah</label>
                           <input class="form-control" type="text" name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah">
                       </div>
                       <div class="form-group">
                           <label class="control-label">Jenis Kelamin</label>
                           <div class="form-check">
                               <label class="form-check-label pr-5">
                                   <input class="form-check-input" type="radio" value="Laki-Laki" name="jenis_kelamin" id="jenis_kelamin">Laki-Laki
                               </label>
                               <label class="form-check-label">
                                   <input class="form-check-input" type="radio" value="Perempuan" name="jenis_kelamin" id="jenis_kelamin">Perempuan
                               </label>
                           </div>
                       </div>
                       <div class="form-group">
                           <label class="control-label">Tempat Lahir</label>
                           <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir">
                       </div>

                       <div class="form-group">
                           <label class="control-label">Tanggal Lahir</label>
                           <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir">
                       </div>
                       <div class="form-group">
                           <label for="kecamatan">Kecamatan</label>
                           <select class="form-control" name="kecamatan" id="kecamatan">
                               <?php foreach ($kecamatan as $nama_kecamatan) : ?>
                                   <option value="<?= $nama_kecamatan->kecamatan ?>"><?= $nama_kecamatan->kecamatan ?></option>
                               <?php endforeach; ?>
                           </select>
                       </div>
                       <div class="form-group">
                           <label for="kategori_posyandu">Posyandu</label>
                           <select class="form-control" name="kategori_posyandu" id="kategori_posyandu">
                               <?php foreach ($posyandu as $nama_posyandu) : ?>
                                   <option value="<?= $nama_posyandu->nama_posyandu ?>"><?= $nama_posyandu->nama_posyandu ?></option>
                               <?php endforeach; ?>
                           </select>
                       </div>
                       <div class="form-group">
                           <label class="control-label">Nomor Handphone</label>
                           <input class="form-control" type="tel" name="no_hp" id="no_hp" maxlength="13" placeholder="628XXXXXXXXXX">
                       </div>
                       <div class="form-group">
                           <label class="control-label">Alamat</label>
                           <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat....."></textarea>
                       </div>
                   </form>

               </div>
               <div class="modal-footer">
                   <button type="button" class="tambah-balita btn btn-info" onclick="TambahDataBalita();">Simpan</button>
               </div>
           </div>
       </div>
   </div>

   <!--Basic Modal -->