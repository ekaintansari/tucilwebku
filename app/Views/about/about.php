<?= $this->include('about/about_header') ?>
<body>
    <center>
    <?php $session = session(); ?>
    <div class="image">
                <img src="<?php echo base_url('themes/dist'); ?>/img/images.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
     <h1><?php echo "Tentang Ku, ";  ?></h1>
     <p>Hello temen-temen semunya...</p>
     <p>Nama Saya Eka Intan Sari, NPM 1817051022</p>
     <p>Disini saya telah membuat Blog Tentang Penjualan T-Shirt</p>
     <p>Semoga dapat bermanfaat buat temen-temen semua... :D</p>
    <p>Terima Kasih</p>
     
     <a href="<?php echo base_url('/dashboard'); ?>" class="btn btn-lg btn-secondary">Home</a>
     
    </center>
</body>
<?= $this->include('about/about_footer') ?>