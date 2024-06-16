<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
Detail Assignment | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="w-full mx-auto min-h-screen px-5 mt-12 sm:px-10 md:px-20 lg:px-30 xl:px-40 sm:mt-20">
    <div class="flex flex-col lg:flex-row items-center bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70 p-5 lg:p-8">
        <img class="inline-block h-[100px] w-[100px] rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Image Description">
        <div class="flex flex-col lg:flex-row justify-between w-full mt-4 lg:mt-0 lg:ml-4">
            <div class="p-4 lg:p-5 text-center">
                <h3 class="text-md text-gray-500 dark:text-white">Kode Penugasan</h3>
                <p class="mt-1 text-gray-800 font-bold dark:text-neutral-400"><?= $detailAssignment['id'] ?></p>
            </div>
            <div class="p-4 lg:p-5 text-center">
                <h3 class="text-md text-gray-500 dark:text-white">Divisi Saat Ini</h3>
                <p class="mt-1 text-gray-800 font-bold dark:text-neutral-400"><?= $detailAssignment['divisi'] ?></p>
            </div>
            <div class="p-4 lg:p-5 text-center">
                <h3 class="text-md text-gray-500 dark:text-white">Jabatan Saat Ini</h3>
                <p class="mt-1 text-gray-800 font-bold dark:text-neutral-400"><?= $detailAssignment['position'] ?></p>
            </div>
            <div class="p-4 lg:p-5 text-center">
                <h3 class="text-md text-gray-500 dark:text-white">Learning Path yang Ditugaskan</h3>
                <p class="mt-1 text-gray-800 font-bold dark:text-neutral-400"><?= $detailAssignment['name'] ?></p>
            </div>
        </div>
    </div>

    <!-- Seksi Biodata -->
    <div class="flex flex-col lg:flex-row justify-start w-full mt-4 lg:mt-6">
        <div class="p-4 lg:p-5 text-start">
            <h3 class="text-lg text-gray-800 font-bold dark:text-white"><?= $detailAssignment['fullname'] ?></h3>
            <p class="mt-1 text-gray-500 dark:text-neutral-400"><?= $detailAssignment['email'] ?></p>
        </div>
        <div class="p-4 lg:p-5 text-start">
            <!-- <p class="mt-1 text-gray-500 dark:text-neutral-400">Bandung, Jawa Barat, Indonesia</p> -->
            <p class="mt-1 text-gray-500 dark:text-neutral-400"><?= $detailAssignment['birthday'] ?></p>
            <p class="mt-1 text-gray-500 dark:text-neutral-400"><?= $detailAssignment['gender'] ?></p>
        </div>
    </div>

    <!-- Seksi Pesan Penugasan -->
    <div class="flex flex-col justify-start w-full mt-4 lg:mt-6">
        <div class="p-4 lg:p-5 text-start">
            <h3 class="text-lg text-gray-800 font-bold dark:text-white">Deskripsi Pengajuan</h3>
            <p class="mt-1 text-gray-500 dark:text-neutral-400"><?= $detailAssignment['message_assignment'] ?></p>
        </div>
    </div>
</section>
<?= $this->endSection() ?>