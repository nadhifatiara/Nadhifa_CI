    <main role="main" class="container">
      <?php if($this->session->userdata('logged_in')) : ?>
      <a href="<?php echo base_url("index.php/Blog/add_view") ?>" class="btn btn-primary mb-3">Tambah Blog</a>
      <?php endif; ?>
        <div class="row">
          <?php foreach ($records as $key => $value): ?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo base_url() ?>uploads/<?php echo $value['image_file'] ?>" alt="" width="348" height="225">
                <div class="card-body">
                  <h5 class="mt-0 mb-1"><?php echo $value['title'] ?></h5>
                  <p><?php echo $value['content'] ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="<?php echo base_url('index.php/Blog/byId/'.$value['id']) ?>" class="btn btn-sm btn-outline-secondary">View </a>
                    </div>
                    <small class="text-muted"><?php echo $value['date'] ?></small>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
        <?php 
        if(isset($links)){
          echo $links;
        } ?>
    </main>