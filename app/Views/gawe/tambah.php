<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Tambah Acara &mdash; Nikah</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1> Tambah Acara </h1>
        <div class="section-header-back">
            <a href="<?php echo site_url('gawe') ?>" class="fas fa-arrow-left mb-3"></a>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Buat Acara </h4>
            </div>
            <div class="card-body col-md-6">
                <?php $validation = \Config\Services::validation(); ?>
                <form action="<?php echo base_url('gawe/store') ?>" method="POST" autocomplete="off">
                    <?php echo csrf_field() ?>
                    <div class="form-group">
                        <label>Nama Acara</label>
                        <input type="text" name="name_gawe" value="<?php echo old('name_gawe') ?>" class="form-control <?php echo $validation->hasError('name_gawe') ? 'is-invalid' : null ?>" autofocus>
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('name_gawe')  ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Acara</label>
                        <input type="date" name="date_gawe" value="<?php echo old('date_gawe') ?>" class="form-control <?php echo $validation->hasError('date_gawe') ? 'is-invalid' : null ?>">
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('date_gawe')  ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Info</label>
                        <textarea name="info_gawe" class="form-control" rows="5"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>