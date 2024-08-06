<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
Detail Request | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="w-full mx-auto min-h-screen px-5 mt-12 sm:px-10 md:px-20 lg:px-30 xl:px-40 sm:mt-20">
    <?php if (session()->has('errors')): ?>
        <div class="text-sm text-center text-red-800 bg-red-200 py-2 rounded-lg mb-5">
            <?php $errors = session('errors'); echo esc(array_shift($errors))?>
        </div>
    <?php endif; ?>
    <?php if(session()->getFlashdata('msg')):?>
            <div class="text-sm text-center text-green-800 bg-green-200 py-2 rounded-lg mb-5">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif;?>
    <?php if(session()->getFlashdata('msg-failed')):?>
            <div class="text-sm text-center text-red-800 bg-red-200 py-2 rounded-lg mb-5">
                <?= session()->getFlashdata('msg-failed') ?>
            </div>
    <?php endif;?>
    <div class="flex flex-col lg:flex-row items-center bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70 p-5 lg:p-8">
        <img class="inline-block h-[100px] w-[100px] rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Image Description">
        <div class="flex flex-col lg:flex-row justify-between w-full mt-4 lg:mt-0 lg:ml-4">
            <div class="p-4 lg:p-5 text-center">
                <h3 class="text-md text-gray-500 dark:text-white">Kode Penugasan</h3>
                <p class="mt-1 text-gray-800 font-bold dark:text-neutral-400"><?= $detailRequest['id'] ?></p>
            </div>
            <div class="p-4 lg:p-5 text-center">
                <h3 class="text-md text-gray-500 dark:text-white">Divisi Saat Ini</h3>
                <p class="mt-1 text-gray-800 font-bold dark:text-neutral-400"><?= $detailRequest['divisi'] ?></p>
            </div>
            <div class="p-4 lg:p-5 text-center">
                <h3 class="text-md text-gray-500 dark:text-white">Jabatan Saat Ini</h3>
                <p class="mt-1 text-gray-800 font-bold dark:text-neutral-400"><?= $detailRequest['position'] ?></p>
            </div>
            <div class="p-4 lg:p-5 text-center">
                <h3 class="text-md text-gray-500 dark:text-white">Learning Path yang Ditugaskan</h3>
                <p class="mt-1 text-gray-800 font-bold dark:text-neutral-400"><?= $detailRequest['name'] ?></p>
            </div>
            <div class="p-4 lg:p-5 text-center">
                <h3 class="text-md text-gray-500 dark:text-white">Status</h3>
                <?php if ($detailRequest['status'] == 'pending') : ?>
                    <p class="mt-1 px-2 py-1 text-yellow-800 font-bold bg-yellow-400 rounded-md dark:text-neutral-400">pending</p>
                <?php elseif ($detailRequest['status'] == 'approved') : ?>
                    <p class="mt-1 px-2 py-1 text-green-800 font-bold bg-green-400 rounded-md dark:text-neutral-400">approved</p>
                <?php else : ?>
                    <p class="mt-1 px-2 py-1 text-red-800 font-bold bg-red-400 rounded-md dark:text-neutral-400">rejected</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Seksi Biodata -->
    <div class="flex flex-col lg:flex-row justify-start w-full mt-4 lg:mt-6">
        <div class="p-4 lg:p-5 text-start">
            <h3 class="text-lg text-gray-800 font-bold dark:text-white"><?= $detailRequest['fullname'] ?></h3>
            <p class="mt-1 text-gray-500 dark:text-neutral-400"><?= $detailRequest['email'] ?></p>
        </div>
        <div class="p-4 lg:p-5 text-start">
            <!-- <p class="mt-1 text-gray-500 dark:text-neutral-400">Bandung, Jawa Barat, Indonesia</p> -->
            <p class="mt-1 text-gray-500 dark:text-neutral-400"><?= $detailRequest['birthday'] ?></p>
            <p class="mt-1 text-gray-500 dark:text-neutral-400"><?= $detailRequest['gender'] ?></p>
        </div>
        <?php if ($detailRequest['status'] == 'pending') : ?>
        <div class="p-4 lg:p-5 text-start lg:ml-auto flex">
            <form action="<?= base_url('response-request-learningpath/').$detailRequest['id'] ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="status" value="approved">
                <button type="submit" class="mr-3 py-1 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-blue-600 text-blue-600 hover:border-blue-500 hover:text-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:border-blue-500 dark:text-blue-500 dark:hover:text-blue-400 dark:hover:border-blue-400">
                    Terima
                </button>
            </form>
            <form action="<?= base_url('response-request-learningpath/').$detailRequest['id'] ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="status" value="rejected">
                <button type="submit" class="py-1 px-6 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-red-500 text-red-500 hover:border-red-400 hover:text-red-400 disabled:opacity-50 disabled:pointer-events-none">
                    Tolak
                </button>
            </form>
        </div>
        <?php endif; ?>
    </div>

    <!-- Seksi Pesan Penugasan -->
    <div class="flex flex-col justify-start w-full mt-4 lg:mt-6">
        <div class="p-4 lg:p-5 text-start">
            <h3 class="text-lg text-gray-800 font-bold dark:text-white">Deskripsi Pengajuan</h3>
            <p class="mt-1 text-gray-500 dark:text-neutral-400"><?= $detailRequest['message'] ?></p>
        </div>
    </div>
</section>
<?= $this->endSection() ?>