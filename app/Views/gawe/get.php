<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<title>Data Gawe</title>
<?= $this->endSection() ?>



<?= $this->section('content') ?>
<section class="section">
  <div class="section-header">
    <h1>Gawe</h1>

    <div class="section-header-button">
      <a href="<?= site_url('gawe/add') ?>" class="btn btn-primary">Add New</a>
    </div>

  </div>

  <?php if (session()->getFlashdata('success')) { ?>
    <div class="alert alert-success alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>×</span>
        </button>
        <?= session()->getFlashdata('success') ?>
      </div>
    </div>
  <?php } ?>
  
  <?php if (session()->getFlashdata('error')) { ?>
    <div class="alert alert-danger alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>×</span>
        </button>
        <?= session()->getFlashdata('error') ?>
      </div>
    </div>
  <?php } ?>
  

  <div class="section-body">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Simple Table</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-md">
              <tbody>
                <tr>
                  <th>#</th>
                  <th>Name Gawe</th>
                  <th>Date Gawe</th>
                  <th>Info</th>
                  <th>Action</th>
                </tr>
                <?php foreach ($query as $key => $item) { ?>
                  <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $item->name_gawe ?></td>
                    <td><?= date('d M, Y ', strtotime($item->date_gawe)) ?></td>
                    <td>
                      <?= $item->info_gawe ?>
                    </td>
                    <td>
                      <a href="#" class="btn btn-warning btn-sm"> <i class="fas fa-pencil-alt"></i></a>
                      <a href="#" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php } ?>





              </tbody>
            </table>
          </div>
        </div>
        <!-- <div class="card-footer text-right">
          <nav class="d-inline-block">
            <ul class="pagination mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
              </li>
            </ul>
          </nav>
        </div> -->
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>