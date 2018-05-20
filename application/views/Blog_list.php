<?php $this->load->view('header') ?>

    <main role="main" class="container">
      <a href="<?php echo base_url("index.php/Blog/add_view") ?>" class="btn btn-primary mb-3">Tambah Blog</a>
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
                      <a href="<?php echo base_url('index.php/Blog/update_view/'.$value['id']) ?>" class="btn btn-sm btn-outline-secondary">Edit </a>
                      <a href="<?php echo base_url('index.php/Blog/delete_action/'.$value['id']) ?>" class="btn btn-outline-danger">Delete</a>
                    </div>
                    <small class="text-muted"><?php echo $value['date'] ?></small>
                  </div>
                </div>
              </div>
            </div>
  <?php endforeach ?>
        <?php 
        if(isset($links)){
          echo $links;
        } ?>
    </main>
    <?php $this->load->view('footer') ?>