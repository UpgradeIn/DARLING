<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('page_title', true) ?></title>

    <link rel="stylesheet" href="<?= base_url('assets/css/preline.css') ?>">
    <script src="https://cdn.jsdelivr.net/npm/preline@2.3.0/dist/preline.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?= $this->extend('layouts/template') ?>
    <?= $this->section('content') ?>
    <?php $role = session('role') ?>


    <section class="w-full mx-auto py-5 px-4 sm:px-10 lg:px-20 mt-10 sm:mt-14 min-h-screen">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <?php
            // Mendapatkan URI segment untuk menentukan halaman yang aktif
            $uri = service('uri');
            $selectedItem = $uri->getSegment(2); // Mengambil segmen kedua dari URI
            ?>
            <div class="sm:max-w-xs w-full flex flex-col">
                <div class="border border-gray-300 dark:border-neutral-700 rounded-md gap-4">
                    <div class="w-full flex flex-col">
                        <h2 class="text-lg font-semibold px-2 py-2 text-gray-800 dark:text-white">Navigasi Profile</h2>
                        <a class="inline-flex items-center gap-x-3.5 py-3 px-4 text-sm font-medium text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg hover:text-blue-600 focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-600 dark:border-neutral-700 dark:text-white dark:hover:text-blue-600 <?= $selectedItem == 'my-profile' ? 'bg-gray-200 dark:bg-neutral-700' : 'bg-white dark:bg-neutral-900' ?>" href="<?= base_url('profile/my-profile') ?>">
                            Profil Saya
                        </a>
                        <?php if ($role == 'user') : ?>
                            <a class="inline-flex items-center gap-x-3.5 py-3 px-4 text-sm font-medium text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-md hover:text-blue-600 focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-600 dark:border-neutral-700 dark:text-white dark:hover:text-blue-600 <?= $selectedItem == 'my-activity' ? 'bg-gray-200 dark:bg-neutral-700' : 'bg-white dark:bg-neutral-900' ?>" href="<?= base_url('profile/my-activity') ?>">
                                Aktivitas Saya
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="sm:col-span-2">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </section>


    <?= $this->endSection() ?>
</body>

</html>