<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('page_title', true) ?></title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/preline.css') ?>">

    <!-- Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/preline@2.3.0/dist/preline.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js"></script>

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

    <script src="<?= base_url('assets/js/sortable.js') ?>"></script>
    <script src="<?= base_url('assets/js/preview-thumbnail.js') ?>"></script>
    <script src="<?= base_url('assets/js/search-learningpath.js') ?>"></script>
    <script src="<?= base_url('assets/js/test-materials.js') ?>"></script>
    <script src="<?= base_url('assets/js/scroll.js') ?>"></script>
    <script src="<?= base_url('assets/js/dashboard.js') ?>"></script>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <script src="https://cdn.jsdelivr.net/npm/lodash/lodash.min.js"></script>
    <script src="./node_modules/apexcharts/dist/apexcharts.min.js"></script>
   
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>

</html>