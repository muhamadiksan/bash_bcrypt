 <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mx-auto">
          <p><font color="blue"><?php echo $this->session->flashdata('pesan'); ?></font></p>
          <div class="card bg-light mb-4" style="max-width: 18rem;">
          <div class="card-header">USER</div>
          <div class="card-body">
   

  <?php echo form_open('user/proses_login', ''); ?>
  <div class="form-group">
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email.."" >
    <?php echo form_error('email', '<div class="text-danger"><small>', '</small></div>');?>
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="password...">
    <?php echo form_error('password', '<div class="text-danger"><small>', '</small></div>');?>
  </div>
 
  <button type="submit" class="btn btn-info">Login</button>
  <?php echo form_close(); ?>
  <div class="form-group" style="padding-top:25px">

    Belum punya akun? <a href="<?php echo base_url('user/daftar');?>">
    <span class="badge badge-success">+ Daftar </span></a>
  </div>
    </div>
      </div>
    </div>
         </div>
      </div>
</section>
   
