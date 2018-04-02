
 <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h4> Upgrade iklan premium</h4><hr>

  <div class="form-group">
    <label for="exampleInputEmail1"><i class="fa fa-check-square-o"></i> ID Iklan: <span class="badge badge-secondary">#<?php echo $id; ?></span></label>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><i class="fa fa-check-square-o"></i> Judul Iklan: <font color="#4a516b"><?php echo substr($jd,0,55); ?>...</font></label>
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1"><i class="fa fa-check-square-o"></i> Harga: <font color="#c92240"><b>Rp 100.000,-</b></font></label>
  </div>

    <small> Masa Aktif: Selamanya.</small>
    <p>&nbsp;</p>
<a href="<?php echo $link;?>"><button type="submit" class="btn btn-dark">Back</button></a> &nbsp;
  <a href="<?php echo base_url('upgrade/bayar/'.$id.'/?m='.$email);?>"><button type="submit" class="btn btn-success">Menuju Pembayaran »</button></a>


</div>
    </div>
      </div>
    </section>