<?= $this->extend('layouts/profile') ?>

<?= $this->section('page_title') ?>
    Profile Saya | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1>Ini Profil Saya</h1>
    <div>
        <p><?= session('email') ?></p>
        <p><?= session('nama_lengkap') ?></p>
        <p><?= session('tanggal_lahir') ?></p>
        <p><?= session('gender') ?></p>
        <p><?= session('divisi') ?></p>
        <p><?= session('jabatan') ?></p>
    </div>
<?= $this->endSection() ?>