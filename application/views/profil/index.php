<!-- Modal -->
<div class="modal fade" id="daftarIsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="daftarIsiTitle">Daftar Materi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
            <div class="listGroup"></div>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

        <div class="container">
            <?php if( $this->session->flashdata('pesan') ) : ?>
                <div class="row">
                    <div class="col-12">
                        <?=$this->session->flashdata('pesan')?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-12 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item"><i class="fa fa-user mr-2"></i><?= $user['nama_civitas']?></li>
                        <li class="list-group-item"><i class="fa fa-birthday-cake mr-2"></i><?= $user['t4_lahir'].", ".date("d-m-Y", strtotime($user['tgl_lahir']))?></li>
                        <li class="list-group-item"><i class="fa fa-phone mr-2"></i><?= $user['no_hp']?></li>
                        <li class="list-group-item"><i class="fa fa-map-marker-alt mr-2"></i><?= $user['alamat']?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>
<script>
    $(".btnMulai").click(function(){
        let html = "";
        let data = $(this).data("id");
        data = data.split("|")
        if(data[1] == "Full Time 1"){
            html = `
                <li class="list list-group-item d-flex justify-content-between">1. Mufrodat Full Time 1 <span><a href="<?= base_url()?>ft_1/mufrodat" class="btn btn-sm btn-info img-shadow">mulai</a></span></li>
                <li class="list list-group-item d-flex justify-content-between">2. Qowaid Full Time 1 <span><a href="<?= base_url()?>ft_1/qowaid" class="btn btn-sm btn-info img-shadow">mulai</a></span></li>
                <li class="list list-group-item d-flex justify-content-between">3. Ibarah Jilid 1 <span><a href="<?= base_url()?>ibarah/awwal" class="btn btn-sm btn-info img-shadow">mulai</a></span></li>
            `;
        } else if(data[1] == "Full Time 2"){
            html = `
                <li class="list list-group-item d-flex justify-content-between">1. Mufrodat Full Time 2 <span><a href="<?= base_url()?>ft_2/mufrodat" class="btn btn-sm btn-info img-shadow">mulai</a></span></li>
            `;
        }

        $("#daftarIsiTitle").html(data[0])
        $(".listGroup").html(html);
    })
</script>