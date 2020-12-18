<?php
    function rupiah($angka){
        $hasil_rupiah = "Rp" . number_format($angka,0,',','.');
        return $hasil_rupiah;
    }

    function angka_arab($data){
        $data = str_replace("0", "٠", $data);
        $data = str_replace("1", "١", $data);
        $data = str_replace("2", "٢", $data);
        $data = str_replace("3", "٣", $data);
        $data = str_replace("4", "٤", $data);
        $data = str_replace("5", "٥", $data);
        $data = str_replace("6", "٦", $data);
        $data = str_replace("7", "٧", $data);
        $data = str_replace("8", "٨", $data);
        $data = str_replace("9", "٩", $data);

        return $data;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    

    <!-- Custom fonts for this template-->
    <link href="<?= base_url()?>assets/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- <link href="<?= base_url()?>assets/css/simple-sidebar.css" rel="stylesheet"> -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/css/style3.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="<?= base_url()?>assets/js/script.js"></script>

    <title><?= $title?></title>
</head>

<body style="background-color: #265D5A">
    
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="list-group list-group-flush mt-3">
            <div class="col-12 mb-3 text-center">
                <img src="<?= base_url()?>assets/img/logo.png" width="75" class="img-fluid img-shadow">
            </div>
            <a href="<?= base_url()?>profil" class="list-group-item list-group-item-action <?php if($title == 'Profil'){echo 'bg-primary text-light';}else{echo 'bg-light text-dark';}?>"><i class="fa fa-user mr-3"></i>Profil</a>
            <a href="<?= base_url()?>kelas" class="list-group-item list-group-item-action <?php if($title == 'List Kelas'){echo 'bg-primary text-light';}else{echo 'bg-light text-dark';}?>"><i class="fa fa-book mr-3"></i>Kelas</a>
            <a href="<?= base_url()?>setting" class="list-group-item list-group-item-action <?php if($title == 'Pengaturan'){echo 'bg-primary text-light';}else{echo 'bg-light text-dark';}?>"><i class="fa fa-cog mr-3"></i>Pengaturan</a>
            <a href="<?= base_url()?>login/logout_user" class="list-group-item list-group-item-action" onclick="return confirm('Yakin akan keluar?')"><i class="fa fa-sign-out-alt mr-3"></i>Logout</a>
        </div>
    </nav>

    <!-- Page Content  -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top navbar-ku">
            <div class="container">
                <a id="sidebarCollapse" class="btn btn-sm"><img src="<?= base_url()?>assets/img/logo.png" width="25"><span class="text-light ml-2"><b><?= $title?></b></span></span></a>
            </div>
        </nav>

<script>
    $(".MateriFullTime1").hide();
    $(".MateriFullTime2").hide();
      
    $('#btnMateriFullTime1').on('click', function() {
        $('.MateriFullTime1').fadeToggle(300);
    });
    
    $('#btnMateriFullTime2').on('click', function() {
        $('.MateriFullTime2').fadeToggle(300);
    });
</script>
