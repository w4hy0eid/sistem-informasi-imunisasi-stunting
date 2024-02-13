   <!--Basic Modal -->
   <div class="modal fade" id="AddUser" tabindex="-1" role="dialog" aria-labelledby="AddUser" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="AddUser">Tambah Data Balita</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <form id="formtambahdatabalita" autocomplete="off">
                       <div class="form-group">
                           <label class="control-label">Username</label>
                           <input class="form-control" type="text" name="username" id="username" placeholder="Username">
                           <div id="pesan_error"></div>
                        </div>
                       <div class="form-group">
                           <label class="control-label">Nama Lengkap</label>
                           <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
                       </div>
                       <div class="form-group">
                           <label class="control-label">Password</label>
                           <input class="form-control" type="password" name="password" id="password" placeholder="">
                       </div>
                       <div class="form-group">
                            <label for="" class="col-form-label" for="inputDefault">Jenis Kelamin</label>
                                            <select class="form-control" name="level" id="level">
                                                <option value="-">Pilih Level</option>
                                                <option value="Posyandu">Posyandu</option>
                                                <option value="Puskesmas">Puskesmas</option>
                                                <option value="Dinas">Dinas</option>
                                                <option value="Admin">Admin</option>
                                                </select>
                                        </div>
                     
                   </form>

               </div>
               <div class="modal-footer">
                   <button type="button" class="tambah-balita btn btn-info" onclick="TambahDataPosyandu();">Simpan</button>
               </div>
           </div>
       </div>
   </div>

   <!--Basic Modal -->