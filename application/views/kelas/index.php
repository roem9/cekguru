
        <div class="container">
            <?php if( $this->session->flashdata('pesan') ) : ?>
                <div class="row">
                    <div class="col-12">
                        <?=$this->session->flashdata('pesan')?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row" id="dataKelas">
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>

<!-- modal kelas -->
    <div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalBodyDetail">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a href="#" class='nav-link' id="btn-form-1"><i class="fas fa-clock"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class='nav-link active' id="btn-form-2"><i class="fas fa-tasks"></i></a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="#" class='nav-link' id="btn-form-2"><i class="fas fa-users"></i></a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="card-body cus-font">
                        <div id="form-1">
                            <div class="msgListPertemuan"></div>
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info">List Pertemuan</li>
                            </ul>
                            <form id="formListPertemuan">
                                <input type="hidden" name="id_kelas">
                                <ul class="list-group">
                                    <div id="list-pertemuan"></div>
                                </ul>
                            </form>
                        </div>

                        <div class="card" id="form-2">
                            <div class="msgListUjian"></div>
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info">List Ujian</li>
                            </ul>
                            <form id="formListUjian">
                                <input type="hidden" name="id_kelas">
                                <ul class="list-group">
                                    <div id="list-ujian"></div>
                                </ul>
                            </form>
                        </div>

                        <div class="card" id="form-3">
                            <div class="card-header text-primary">
                                <strong>List Peserta <span class="badge badge-info" id="jumPeserta">0</span></strong>
                            </div>
                            <div class="card-body">
                                <div class="msgHapusPeserta"></div>
                                <form action="kelas/delete_peserta" method="post" id="formDeletePeserta">
                                    <input type="hidden" name="id_kelas">
                                    <ul class="list-group">
                                        <div id="list-peserta"></div>
                                    </ul>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-sm btn-danger mt-3" id="btnPeserta">Hapus Peserta (<span id="select1">0</span>)</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
<!-- modal kelas -->

<!-- modal sertifikat-->
    <div class="modal fade" id="modalSertifikat" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSertifikatTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body cus-font">
                        <div id="form-1">
                            <div class="msgListSertifikat"></div>
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info">List Sertifikat</li>
                            </ul>
                            <form id="formListSertifikat">
                                <ul class="list-group">
                                    <div id="list-sertifikat"></div>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
<!-- modal sertifikat-->

<script>
    reload_data();
    
    let a = [];
    let b = [];

    $("#dataKelas").on("click", ".detail", function(){
        a = [];
        $("#select1").html(0);
        const id = $(this).data('id');
        detail(id)
        btn_1();
        delete_msg();
    })
    
    $("#dataKelas").on("click", ".sertifikat", function(){
        const id = $(this).data('id');
        // delete_msg();
        sertifikat(id);
    })

    // sertifikat 
        $('#formListSertifikat').on('click', '#onSertifikat', function(){
            let id = $(this).data("id");
            $.ajax({
                type : "POST",
                url : "<?= base_url()?>kelas/add_sertifikat",
                dataType : "JSON",
                data : {id_sertifikat: id},
                success : function(data){
                    sertifikat(data);
                }
            })
        });
        
        $('#formListSertifikat').on('click', '#offSertifikat', function(){
            let id = $(this).data("id");
            if(confirm('Yakin akan menghapus sertifkat?')){
                $.ajax({
                    type : "POST",
                    url : "<?= base_url()?>kelas/delete_sertifikat",
                    dataType : "JSON",
                    data : {id_sertifikat: id},
                    success : function(data){
                        sertifikat(data);
                    }
                })
            }
        });
    // sertifikat 

    // pertemuan 
        $('#formListPertemuan').on('click', '#onPertemuan', function(){
            let data = $(this).data("id");
            data = data.split("|")
            $.ajax({
                type : "POST",
                url : "<?= base_url()?>kelas/add_pertemuan",
                dataType : "JSON",
                data : {pertemuan:data[0], id_kelas:data[1]},
                success : function(data){
                    detail(data);
                    reload_data();
                }
            })
        });
        
        $('#formListPertemuan').on('click', '#offPertemuan', function(){
            let data = $(this).data("id");
            data = data.split("|")
            if(confirm('Yakin akan menghapus '+data[0]+'?')){
                $.ajax({
                    type : "POST",
                    url : "<?= base_url()?>kelas/delete_pertemuan",
                    dataType : "JSON",
                    data : {pertemuan:data[0], id_kelas:data[1]},
                    success : function(data){
                        detail(data);
                        reload_data();
                    }
                })
            }
        });
    // pertemuan 
    
    // ujian 
        $('#formListUjian').on('click', '#onPertemuan', function(){
            let data = $(this).data("id");
            data = data.split("|")
            $.ajax({
                type : "POST",
                url : "<?= base_url()?>kelas/add_ujian",
                dataType : "JSON",
                data : {pertemuan:data[0], id_kelas:data[1]},
                success : function(data){
                    detail(data);
                    reload_data();
                }
            })
        });
        
        $('#formListUjian').on('click', '#offPertemuan', function(){
            let data = $(this).data("id");
            data = data.split("|")
            if(confirm('Yakin akan menghapus '+data[0]+'?')){
                $.ajax({
                    type : "POST",
                    url : "<?= base_url()?>kelas/delete_ujian",
                    dataType : "JSON",
                    data : {pertemuan:data[0], id_kelas:data[1]},
                    success : function(data){
                        detail(data);
                        reload_data();
                    }
                })
            }
        });
    // ujian 
    
    // presensi 
        $('#formListPertemuan').on('click', '#onAbsen', function(){
            let data = $(this).data("id");
            data = data.split("|")
            $.ajax({
                type : "POST",
                url : "<?= base_url()?>kelas/on_absen",
                dataType : "JSON",
                data : {pertemuan:data[0], id_kelas:data[1]},
                success : function(data){
                    detail(data);
                    reload_data();
                }
            })
        });

        $('#formListPertemuan').on('click', '#offAbsen', function(){
            let data = $(this).data("id");
            data = data.split("|")
            $.ajax({
                type : "POST",
                url : "<?= base_url()?>kelas/off_absen",
                dataType : "JSON",
                data : {pertemuan:data[0], id_kelas:data[1]},
                success : function(data){
                    detail(data);
                    reload_data();
                }
            })
        });
    // presensi

    // detail
        $("#btn-form-1").click(function(){
            btn_1();
            delete_msg();
        })
        
        $("#btn-form-2").click(function(){
            btn_2();
            delete_msg();
        })
        
        $("#btn-form-3").click(function(){
            btn_3();
            delete_msg();
        })
    // detail

    // function
        function reload_data(){
            $.ajax({
                type : "GET",
                url : "<?= base_url()?>kelas/ajax_list",
                dataType : "JSON",
                success : function(data){
                    let html = "";
                    if(data.length != 0){
                        data.kelas.forEach(kelas => {
                            html += `<div class="col-12 col-md-4 mb-2">
                                        <ul class="list-group shadow">
                                            <li class="list-group-item list-group-item-success"><i class="fa fa-book mr-2"></i><strong>`+kelas.nama_kelas+`</strong></li>
                                            <li class="list-group-item"><i class="fa fa-users mr-2"></i>`+kelas.peserta+` Orang</li>
                                            <li class="list-group-item">Pertemuan `+kelas.pertemuan+`</li>
                                            <li class="list-group-item d-flex justify-content-between">
                                                <div class="">
                                                    <a href="#modalSertifikat" data-id="`+kelas.id_kelas+`" data-toggle="modal" class="btn btn-sm btn-secondary sertifikat mr-1"><i class="fa fa-award"></i></a>
                                                    <a href="#modalDetail" data-id="`+kelas.id_kelas+`" data-toggle="modal" class="btn btn-sm btn-success detail"><i class="fa fa-flag"></i></a>
                                                </div>
                                                <a href="<?= base_url()?>kelas/detail/`+kelas.link+`" class="btn btn-sm btn-info">detail</a>
                                            </li>
                                        </ul>
                                    </div>`;
                        });
                    } else {
                        html = `<div class="col-12">
                                    <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning mr-2"></i>List kelas kosong</div>
                                </div>`;
                    }

                    $("#dataKelas").html(html);
                }
            })
        }

        function sertifikat(id){
            $.ajax({
                method: "POST",
                url: "<?= base_url()?>kelas/get_sertifikat",
                dataType: "JSON",
                data: {id_kelas: id},
                success: function(data){
                    // console.log(data);
                    $("#modalSertifikatTitle").html(data.kelas.nama_kelas);
                    let html = "";
                    let sertifikat = "";
                    let button = "";

                    data.peserta.forEach(peserta => {
                        if(peserta.sertifikat == "0"){
                            sertifikat = "onSertifikat";
                            button = "btn-outline-warning";
                        } else {
                            sertifikat = "offSertifikat";
                            button = "btn-warning";
                        }

                        html += `
                            <li class="list-group-item d-flex justify-content-between">
                                `+peserta.nama+`
                                <a href="#" class="btn btn-sm `+button+`" id="`+sertifikat+`" data-id="`+peserta.id_sertifikat+`"><i class="fa fa-award"></i></a>
                            </li>
                        `;
                    });

                    $("#list-sertifikat").html(html)
                }
            })
        }

        function detail(id){
            $.ajax({
                url : "<?=base_url()?>kelas/get_detail_kelas",
                method : "POST",
                data : {id : id},
                async : true,
                dataType : 'json',
                success : function(data){
                    // console.log(data.pertemuan)
                    $("#modalDetailTitle").html(data.nama_kelas);
                    $("input[name='id_kelas']").val(data.id_kelas);
                    
                    pert = [];
                    absen = [];
                    if(data.pertemuan){
                        data.pertemuan.forEach((materi, i) => {
                            pert[i] = materi.materi;
                            if(materi.absen == 1)
                                absen[i] = materi.materi;
                        });
                    }

                    let html = "";
                    let check = "";

                    for (let i = 1; i < 26; i++) {
                        if(pert.includes("Pertemuan "+i)){
                            html += `<li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <label for="per`+i+`">Pertemuan `+i+`</label>
                                            <div class="">
                                                <a href="#" class="btn btn-sm btn-primary mr-2" data-id="Pertemuan `+i+`|`+data.id_kelas+`" id="offPertemuan"><i class="fa fa-book"></i></a>`;
                            if(absen.includes("Pertemuan "+i)){
                                html += `<a href="#" class="btn btn-sm btn-primary" data-id="Pertemuan `+i+`|`+data.id_kelas+`" id="offAbsen"><i class="fa fa-user-check"></i></a>`;
                            } else {
                                html += `<a href="#" class="btn btn-sm btn-outline-info" data-id="Pertemuan `+i+`|`+data.id_kelas+`" id="onAbsen"><i class="fa fa-user-check"></i></a>`;
                            }
                            
                            html += `
                                            </div>
                                        </div>
                                    </li>`;
                        } else {
                            html += `<li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <label for="per`+i+`">Pertemuan `+i+`</label>
                                            <div class="">
                                                <a href="#" class="btn btn-sm btn-outline-info mr-2" data-id="Pertemuan `+i+`|`+data.id_kelas+`" id="onPertemuan"><i class="fa fa-book"></i></a>
                                            </div>
                                        </div>
                                    </li>`;
                        }
                    }

                    $("#list-pertemuan").html(html);

                    html = "";

                    
                    ujian = [];
                    if(data.ujian){
                        data.ujian.forEach((materi, i) => {
                            ujian[i] = materi.materi;
                        });
                    }

                    for (let i = 1; i < 5; i++) {
                        if(ujian.includes("Ujian Pekan "+i)){
                            html += `<li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <label for="per`+i+`">Ujian Pekan `+i+`</label>
                                            <div class="">
                                                <a href="#" class="btn btn-sm btn-primary mr-2" data-id="Ujian Pekan `+i+`|`+data.id_kelas+`" id="offPertemuan"><i class="fa fa-book"></i></a>
                                            </div>
                                        </div>
                                    </li>`;
                        } else {
                            html += `<li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <label for="per`+i+`">Ujian Pekan `+i+`</label>
                                            <div class="">
                                                <a href="#" class="btn btn-sm btn-outline-info mr-2" data-id="Ujian Pekan `+i+`|`+data.id_kelas+`" id="onPertemuan"><i class="fa fa-book"></i></a>
                                            </div>
                                        </div>
                                    </li>`;
                        }
                    }
                    
                    if(ujian.includes("Ujian Akhir")){
                        html += `<li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <label for="per">Ujian Akhir</label>
                                        <div class="">
                                            <a href="#" class="btn btn-sm btn-primary mr-2" data-id="Ujian Akhir|`+data.id_kelas+`" id="offPertemuan"><i class="fa fa-book"></i></a>
                                        </div>
                                    </div>
                                </li>`;
                    } else {
                        html += `<li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <label for="per">Ujian Akhir</label>
                                        <div class="">
                                            <a href="#" class="btn btn-sm btn-outline-info mr-2" data-id="Ujian Akhir|`+data.id_kelas+`" id="onPertemuan"><i class="fa fa-book"></i></a>
                                        </div>
                                    </div>
                                </li>`;
                    }
                    
                    $("#list-ujian").html(html);
                }
            })
        }
        
        function btn_1(){
            $("#btn-form-1").addClass('active');
            $("#btn-form-2").removeClass('active');
            $("#btn-form-3").removeClass('active');
            
            $("#form-1").show();
            $("#form-2").hide();
            $("#form-3").hide();
        }

        function btn_2(){ 
            $("#btn-form-1").removeClass('active');
            $("#btn-form-2").addClass('active');
            $("#btn-form-3").removeClass('active');
            
            $("#form-1").hide();
            $("#form-2").show();
            $("#form-3").hide();
        }
        
        function btn_3(){
            $("#id_kelas_add").val("");
            $("#btn-form-1").removeClass('active');
            $("#btn-form-2").removeClass('active');
            $("#btn-form-3").addClass('active');
            
            $("#form-1").hide();
            $("#form-2").hide();
            $("#form-3").show();
        }
        
        function delete_msg(){
            $('.msgHapusPeserta').html("");
            $('.msgEditKelas').html("");
            $('.msg-add-data').html("");
            $('.msgListPertemuan').html("");
        }
    // function 
</script>