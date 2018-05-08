<?php $this->load->view('header') ?>

    <main role="main" class="container">
      <div class="jumbotron">
        <h1>Nadhifa Tiara Putri</h1>
        <p class="lead">1641720071.</p>
      </div>
      <div class="row">
        <div class="col-6">
          <h4>Biodata Menggunakan Query dengan Array</h4>
          <table class="table">
            <?php foreach ($biodata_query_array as $key => $value) { ?>
              <tr>
                <td><?php echo $value['id'] ?></td>
              </tr>
              <tr>
                <td><?php echo $value['nama'] ?></td>
              </tr>
              <tr>
                <td><?php echo $value['nim'] ?></td>
              </tr>
              <tr>
                <td><?php echo $value['alamat'] ?></td>
              </tr>
           <?php } ?>
          </table>
        </div>
        <div class="col-6">
          <h4>Biodata Menggunakan Query dengan Object</h4>
          <table class="table">
            <?php foreach ($biodata_query_object as $key => $value) { ?>
              <tr>
                <td><?php echo $value->id ?></td>
              </tr>
              <tr>
                <td><?php echo $value->nama ?></td>
              </tr>
              <tr>
                <td><?php echo $value->nim ?></td>
              </tr>
              <tr>
                <td><?php echo $value->alamat ?></td>
              </tr>
           <?php } ?>
          </table>
        </div>
        <div class="col-6">
          <h4>Biodata Menggunakan Builder dengan Array</h4>
          <table class="table">
            <?php foreach ($biodata_builder_array as $key => $value) { ?>
              <tr>
                <td><?php echo $value['id'] ?></td>
              </tr>
              <tr>
                <td><?php echo $value['nama'] ?></td>
              </tr>
              <tr>
                <td><?php echo $value['nim'] ?></td>
              </tr>
              <tr>
                <td><?php echo $value['alamat'] ?></td>
              </tr>
           <?php } ?>
          </table>
        </div>
        <div class="col-6">
          <h4>Biodata Menggunakan Builder dengan Object</h4>
          <table class="table">
            <?php foreach ($biodata_builder_object as $key => $value) { ?>
              <tr>
                <td><?php echo $value->id ?></td>
              </tr>
              <tr>
                <td><?php echo $value->nama ?></td>
              </tr>
              <tr>
                <td><?php echo $value->nim ?></td>
              </tr>
              <tr>
                <td><?php echo $value->alamat ?></td>
              </tr>
           <?php } ?>
          </table>
        </div>
        </div>
      </div>
    </main>															
<?php $this->load->view('footer') ?>