<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Barang</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('inventaris/store') ?>">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="nama_brg">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_brg" name="nama_brg" value="<?= old('nama_brg'); ?>">
                </div>

                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= old('jumlah'); ?>">
                </div>

                <div class="form-group">
                    <label for="kondisi">Kondisi</label>
                    <input type="text" class="form-control" id="kondisi" name="kondisi" value="<?= old('kondisi') ?>" />
                </div>

                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>