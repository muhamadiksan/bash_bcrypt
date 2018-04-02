 <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mx-auto">
          <div class="card bg-light mb-4" style="max-width: 18rem;">
          <div class="card-header">DAFTAR</div>
          <div class="card-body">
           <font color="green"><?php echo $this->session->flashdata('pesan'); ?></font>

  <?php echo form_open('user/proses_daftar', ''); ?>
    <div class="form-group">
    <input type="text" name="nama" class="form-control" placeholder="Nama.." >
    <?php echo form_error('nama', '<div class="text-danger"><small>', '</small></div>');?>
  </div>
  <div class="form-group">
    <input type="email" name="email" class="form-control" placeholder="Email...">
   <?php echo form_error('email', '<div class="text-danger"><small>', '</small></div>');?>
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Password...">
   <?php echo form_error('password', '<div class="text-danger"><small>', '</small></div>');?>
  </div>
   <a href="<?php echo base_url('');?>">
  <button type="button" class="btn btn-dark">Back</button></a> &nbsp; &nbsp;
  <button type="submit" class="btn btn-primary">Register</button>
  <?php echo form_close(); ?>
        </div> 
      </div>
        </div>
        </div>
      </div>
</section>