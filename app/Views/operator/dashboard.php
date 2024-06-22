<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
Dashboard | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="w-full min-h-screen mx-auto px-5 mt-12 sm:px-20 sm:mt-24">

    <!-- Start Stat -->

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            Total Pengguna
                        </p>
                        <div class="hs-tooltip">
                            <div class="hs-tooltip-toggle">
                                <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                    <path d="M12 17h.01" />
                                </svg>
                                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                                    Jumlah Pengguna yang Terdaftar di Aplikasi
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-1 flex items-center justify-between">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                            72,540
                        </h3>
                        <span class="ms-1 inline-flex items-center gap-1.5 py-1 px-2 rounded-md text-xs font-medium bg-gray-200 text-gray-800 dark:bg-neutral-800 dark:text-neutral-200">
                            <svg class="inline-block size-3 self-center" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                            </svg>
                            <span class="inline-block">
                                12.5%
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            Sessions
                        </p>
                    </div>

                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                            29.4%
                        </h3>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            Avg. Click Rate
                        </p>
                    </div>

                    <div class="mt-1 flex items-center justify-between">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                            56.8%
                        </h3>
                        <span class="ms-1 inline-flex items-center gap-1.5 py-1 px-2 rounded-md text-xs font-medium bg-gray-200 text-gray-800 dark:bg-neutral-800 dark:text-neutral-200">
                            <svg class="inline-block size-3 self-center" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg>
                            <span class="inline-block">
                                4.4%
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                <div class="p-4 md:p-5">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            Pageviews
                        </p>
                    </div>

                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                            92,913
                        </h3>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>

    <!-- End Stat -->
    <p><?= $test ?></p>

</section>
<?= $this->endSection() ?>