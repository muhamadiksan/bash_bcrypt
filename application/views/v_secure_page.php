 <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto"> 
            <p><font color="blue"><?php echo $this->session->flashdata('pesan'); ?></font></p>
            <div class="card border-success mb-8">
            <div class="card-header"><b>DASHBOARD</b></div>
            <div class="card text-dark mb-8">
            <div class="card-body">
             <h4> Hallo, <?php echo $this->session->userdata('is_nama'); ?></h4>
            Ini adalah halaman secure / aman yang di lindingi oleh session & <u>hash BCRYPT</u> .
            <p style="padding-top:35px">
              <?php echo anchor('logout', 'Log Out', 'class="btn btn-danger"'); ?>
            </p>
 
           </div>
           </div>
           </div>
        </div>
      </div>
   </div>
</section>
   
