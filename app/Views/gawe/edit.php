<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Edit ata Gawe</title>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<section class="section">
  <div class="section-header">
    <h1>Gawe</h1>

  </div>

  <div class="section-body">
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">


        <div class="card-header">
          <h4>Add Data Gawe</h4>
        </div>
        <div class="card-body">
          <form action="<?= site_url('gawe/edit/' .$gawe->id_gawe ) ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PUT" >
            <div class="form-group">
              <label for="nama_gawe">Name Acara</label>
              <input type="text" name="name_gawe" class="form-control" value="<?= $gawe->name_gawe ?>" placeholder="Name Gawe" id="nama_gawe" required >
            </div>
            <div class="form-group">
              <label for="date_acara">Date Gawe</label>
              <input type="date" name="date_gawe" class="form-control" value="<?= $gawe->date_gawe ?>" placeholder="Date Gawe" id="date_gawe" required >
            </div>

            <div class="form-group">
              <label for="info_gawe">Info Gawe</label>
              <textarea name="info_gawe" class="form-control"  p placeholder="Info Gawe" id="info_gawe"><?= $gawe->info_gawe ?> </textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add New</button>
            <button type="reset" class="btn btn-secondary">Add New</button>

          </form>
        </div>

      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>