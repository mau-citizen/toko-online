        <!-- Begin Page Content -->
   <div class="container-fluid">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="<?php echo base_url('assets/images/logo 1.png') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="<?php echo base_url('assets/images/logo 2.png') ?>" class="d-block w-100" alt="...">
            </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
         </a>
      </div>

      <div class="row text-center">
         <?php foreach ($barang as $brg) : ?>
            <!-- <div class="card m-3" style="width: 320px; height:470px;">
               <img src="<?= base_url('assets/uploads/') . $brg['gambar_brg'] ?>" class="card-img-top">
               <div class="card-body">
                  <h5 class="card-title"><?= $brg['nama_brg']; ?></h5>
                  <p class="card-text text-truncate"><?= $brg['keterangan_brg']; ?></p>
                  <small class="badge badge-secondary text-wrap mb-3">Rp <?= number_format($brg['harga_brg'], 0, ",", "."); ?></small><br>

                  <?= anchor('dashboard/addToCart/' . $brg['id_brg'], '<div class="btn btn-block btn-warning font-weight-bold mb-2">Add to cart</div>') ?>
                  <a href="#" class="btn btn-block btn-secondary">Details</a>

               </div>
            </div> -->

            <div class="card ml-3 mt-3" style="width: 16rem;">
               <img src="<?= base_url('assets/uploads/') . $brg['gambar_brg'] ?>" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title mb-1"><?= $brg ['nama_brg']; ?></h5>
                  <small><?= $brg ['keterangan_brg']; ?></small><br>
                  <span class="badge badge_pill badge-success mb-3">Rp. <?php echo number_format($brg ['harga_brg'], 0, ",", ".")  ?></span>
                  <?php echo anchor('dashboard/addToCart/' . $brg['id_brg'], '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                  <a href="#" class="btn btn-sm btn-success">Detail</a>
               </div>
            </div>

         <?php endforeach; ?>
      </div>
   </div>
   <!-- /.container-fluid -->