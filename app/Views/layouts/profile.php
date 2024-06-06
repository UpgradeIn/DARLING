<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
    <?php $role = session('role') ?>
    <p><i>tulisan ini dari layouts/profile.php</i></p>
    <div>
        <a href="<?= base_url("profile/my-profile")?>">Profil Saya</a>
    </div>
    <?php if($role == 'user'): ?>
        <div>
            <a href="<?= base_url('profile/my-activity')?>">Aktivitas Saya</a>
        </div>
    <?php endif; ?>
    <?= $this->renderSection('content') ?>
<?= $this->endSection() ?>