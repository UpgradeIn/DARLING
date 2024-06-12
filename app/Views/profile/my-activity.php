<?= $this->extend('layouts/profile') ?>

<?= $this->section('page_title') ?>
Aktivitas Saya | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="w-full mx-auto text-3xl font-bold">
    <h1>Lanjut Belajar</h1>
</div>
<div class="w-full mx-auto text-l">
    <h3>Yuk lanjut progress belajarmu untuk segera mendapatkan sertifikat</h3>
    <div class="bg-white border border-gray-200 text-gray-800 dark:odd:bg-neutral-800 dark:bg-neutral-900 dark:border-neutral-700  rounded-md">
        <div class="grid grid-cols-3 gap-4 px-2 py-2 mt-2">
            <div class="row-span-3 mt-5 px-10">
                <img src="https://via.placeholder.com/150" alt="Placeholder" class="w-32 h-32 rounded-md">
            </div>
            <div class="col-span-2 col-span-2 mt-4">
                <h3 class="text-xl font-semibold">Nama Learning Path</h3>
                <p class="text-sm">Progress Belajar</p>
                <div class="flex items-center gap-2">
                    <div class="w-1/2">
                        <div class="relative w-full bg-gray-200 rounded-full">
                            <div class="h-2 bg-blue-500 rounded-full" style="width: 50%"></div>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <p class="text-sm">50%</p>
                    </div>
                </div>
                <div class="mt-5 flex justify-start">
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Lanjut Belajar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="border-b border-gray-200 dark:border-neutral-700">
        <nav class="flex space-x-1" aria-label="Tabs" role="tablist">
            <button type="button" class="hs-tab-active:font-bold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active" id="tabs-with-underline-item-1" data-hs-tab="#tabs-with-underline-1" aria-controls="tabs-with-underline-1" role="tab">
                Course Berlangsung
            </button>
            <button type="button" class="hs-tab-active:font-bold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="tabs-with-underline-item-2" data-hs-tab="#tabs-with-underline-2" aria-controls="tabs-with-underline-2" role="tab">
                Course Selesai
            </button>
        </nav>
    </div>
</div>
<?= $this->endSection() ?>