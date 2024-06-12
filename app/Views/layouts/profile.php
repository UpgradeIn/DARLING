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

    <section class="w-full mx-auto py-5 px-10 mt-20 -h-screen">
        <div class="grid grid-cols-3 gap-2">
            <div class="max-w-xs flex flex-col">
                <div class="border border-gray-300 dark:border-neutral-700 rounded-md">
                    <h2 class="text-lg font-semibold px-2 py-2 text-gray-800 dark:text-white">Navigasi Profile</h2>
                    <ul class="max-w-xs flex flex-col ">
                        <li class="inline-flex items-center gap-x-2 py-3 px-4 text-m font-medium odd:bg-gray-100 bg-white border border-gray-200 text-gray-800 -mt-px  dark:odd:bg-neutral-800 dark:bg-neutral-900 dark:border-neutral-700 dark:text-white">
                            <a href="<?= base_url("profile/my-profile") ?>">Profil Saya</a>
                        </li>
                        <?php if ($role == 'user') : ?>
                            <div class="text-m inline-flex items-center gap-x-2 py-3 px-4 text-m font-medium odd:bg-gray-100 bg-white border border-gray-200 text-gray-800 -mt-px  dark:odd:bg-neutral-800 dark:bg-neutral-900 dark:border-neutral-700 dark:text-white">
                                <a href="<?= base_url('profile/my-activity') ?>">Aktivitas Saya</a>
                            </div>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-span-2">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </section>
    <?= $this->endSection() ?>
</body>

</html>