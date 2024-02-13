   <!--Basic Modal -->
   <div class="modal fade" id="AddEdukasi" tabindex="-1" role="dialog" aria-labelledby="AddEdukasi" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="AddEdukasi">Tambah Data Edukasi</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <form id="formtambahdatabalita" autocomplete="off">
                       <div class="form-group">
                           <label class="control-label">Nama Edukasi</label>
                           <input class="form-control" type="text" name="nama_edukasi" id="nama_edukasi" placeholder="Nama Edukasi">
                       
                        </div>
                       <div class="form-group">
                           <label class="control-label">Link Referensi</label>
                           <input class="form-control" type="text" name="link_youtube" id="link_youtube" placeholder="Link">
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