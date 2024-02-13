   <!--Basic Modal -->
   <div class="modal fade" id="AddPosyandu" tabindex="-1" role="dialog" aria-labelledby="AddPosyandu" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="AddPosyandu">Tambah Data Posyandu</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <form id="formtambahdataposyandu" autocomplete="off">
                       <div class="form-group">
                           <label class="control-label">Nama Posyandu</label>
                           <input class="form-control" type="text" name="nama_posyandu" id="nama_posyandu" placeholder="Nama Posyandu">
                       </div>
                   </form>

               </div>
               <div class="modal-footer">
                   <button type="button" class="tambah-posyandu btn btn-info" onclick="TambahDataPosyandu();">Simpan</button>
               </div>
           </div>
       </div>
   </div>

   <!--Basic Modal -->