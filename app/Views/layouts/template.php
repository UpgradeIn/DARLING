<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('page_title', true) ?></title>
    <?php
    /*
    <link rel="stylesheet" href="<?= base_url('assets/css/output.css')?>">
    ">
    */
    ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/preline.css')?>">
    <script src="https://cdn.jsdelivr.net/npm/preline@2.3.0/dist/preline.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="<?= base_url('js/script.js') ?>"></script>
    <!-- Add CSS or JS -->
    <?= $this->renderSection('add_css_or_js') ?>
</head>
<body>
    <!-- Navbar -->
    <?= $this->include('layouts/navbar') ?>

    <!-- Content -->
    <?= $this->renderSection('content') ?>

    <!-- Footer -->
    <?= $this->include('layouts/footer') ?>

    <!-- Add Javascript -->
    <?= $this->renderSection('add_js') ?>


</body>
</html>