<?= $this->extend('layouts/profile') ?>

<?= $this->section('page_title') ?>
Aktivitas Saya | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="w-full mx-auto ">
    <div class="text-3xl font-bold mt-5">
        <h1>Lanjut Belajar</h1>
    </div>
    <div class="text-lg mt-2">
        <h3>Yuk lanjut progress belajarmu untuk segera mendapatkan sertifikat</h3>
        <div class="bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700 rounded-md mt-4 p-4">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="sm:row-span-3 flex justify-center sm:justify-center mt-5">
                    <img src="https://via.placeholder.com/150" alt="Placeholder" class="w-32 h-32 rounded-md">
                </div>
                <div class="sm:col-span-2 mt-4">
                    <h3 class="text-xl font-semibold">Nama Learning Path</h3>
                    <p class="text-sm">Progress Belajar</p>
                    <div class="flex items-center gap-2 mt-2">
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

        <div class="border-b border-gray-200 dark:border-neutral-700 mt-4">
            <nav class="flex space-x-1 justify-start" aria-label="Tabs" role="tablist">
                <button type="button" class="hs-tab-active:font-bold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-400 dark:hover:text-blue-500 active" id="tabs-with-underline-item-1" data-hs-tab="#tabs-with-underline-1" aria-controls="tabs-with-underline-1" role="tab">
                    Course Berlangsung
                </button>
                <button type="button" class="hs-tab-active:font-bold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-400 dark:hover:text-blue-500" id="tabs-with-underline-item-2" data-hs-tab="#tabs-with-underline-2" aria-controls="tabs-with-underline-2" role="tab">
                    Course Selesai
                </button>
            </nav>
        </div>

        <div class="mt-5">
            <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1">
                <!-- Card Course -->
                <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-0 py-4 mx-auto">
                    <!-- Grid -->
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Card -->
                        <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                            <div class="h-52 flex flex-col justify-center items-center bg-[#FBB926] rounded-t-xl">
                                <img src="https://img.freepik.com/free-photo/people-working-call-center_23-2149288184.jpg?t=st=1717836311~exp=1717839911~hmac=6e8159fdbd6575776d5718f8abc25d091d211f9fc1584b9e8814ebaf2c785d8d&w=996" class="rounded-t-lg h-full w-full object-cover" alt="Thumbnail">
                            </div>
                            <div class="p-4 md:p-6">
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                                    Pelayanan Pelanggan
                                </h3>
                                <h2 class="text-md font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                                    Akuntansi
                                </h2>
                                <p class="text-sm mt-2 text-gray-500 dark:text-neutral-500">
                                    Progress Saya
                                </p>
                                <!-- Progress -->
                                <div class="flex items-center gap-x-3 whitespace-nowrap">
                                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="flex flex-col justify-center rounded-full overflow-hidden bg-[#FBB926] text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500" style="width: 50%"></div>
                                    </div>
                                    <div class="w-10 text-end">
                                        <span class="text-sm text-gray-800 dark:text-white">50%</span>
                                    </div>
                                </div>
                                <!-- End Progress -->
                                <!-- Button Lanjut Belajar -->
                                <div class="flex justify-center mt-4">
                                    <button class="w-full px-4 py-2 bg-blue-900 text-white rounded-md hover:shadow-lg">Lanjut Belajar</button>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                            <div class="h-52 flex flex-col justify-center items-center bg-rose-500 rounded-t-xl">
                                <img src="https://img.freepik.com/free-photo/professional-car-mechanic-repair-shop_342744-262.jpg?t=st=1717836180~exp=1717839780~hmac=c44709f1de012f4fd001335fd85989d194aab0e3cd024cd3525ce3bb6348eb07&w=996" class="rounded-t-lg h-full w-full object-cover" alt="Thumbnail">
                            </div>
                            <div class="p-4 md:p-6">
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                                    Perawatan Armada
                                </h3>
                                <h2 class="text-md font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                                    Akuntansi
                                </h2>
                                <p class="text-sm mt-2 text-gray-500 dark:text-neutral-500">
                                    Progress Saya
                                </p>
                                <!-- Progress -->
                                <div class="flex items-center gap-x-3 whitespace-nowrap">
                                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="flex flex-col justify-center rounded-full overflow-hidden bg-[#FBB926] text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500" style="width: 50%"></div>
                                    </div>
                                    <div class="w-10 text-end">
                                        <span class="text-sm text-gray-800 dark:text-white">50%</span>
                                    </div>
                                </div>
                                <!-- End Progress -->
                                <!-- Button Lanjut Belajar -->
                                <div class="flex justify-center mt-4">
                                    <button class="w-full px-4 py-2 bg-blue-900 text-white rounded-md hover:shadow-lg">Lanjut Belajar</button>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                            <div class="h-52 flex flex-col justify-center items-center bg-amber-500 rounded-t-xl">
                                <img src="https://img.freepik.com/free-photo/colleagues-with-safety-equipment-working-with-blueprints_23-2148908431.jpg?t=st=1717836460~exp=1717840060~hmac=8845f2595ea53eab452ddaf4aa1c15087acda922acd0113bc1b1a100cba0d463&w=996" class="rounded-t-lg h-full w-full object-cover" alt="Thumbnail">
                            </div>
                            <div class="p-4 md:p-6">
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                                    Keselamatan Kerja
                                </h3>
                                <h2 class="text-md font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                                    Akuntansi
                                </h2>
                                <p class="text-sm mt-2 text-gray-500 dark:text-neutral-500">
                                    Progress Saya
                                </p>
                                <!-- Progress -->
                                <div class="flex items-center gap-x-3 whitespace-nowrap">
                                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="flex flex-col justify-center rounded-full overflow-hidden bg-[#FBB926] text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500" style="width: 50%"></div>
                                    </div>
                                    <div class="w-10 text-end">
                                        <span class="text-sm text-gray-800 dark:text-white">50%</span>
                                    </div>
                                </div>
                                <!-- End Progress -->
                                <!-- Button Lanjut Belajar -->
                                <div class="flex justify-center mt-4">
                                    <button class="w-full px-4 py-2 bg-blue-900 text-white rounded-md hover:shadow-lg">Lanjut Belajar</button>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Grid -->
                    <!-- Pagination -->
                    <div class="flex justify-center mt-10">
                        <nav aria-label="Pagination">
                            <ul class="inline-flex items-center gap-4">
                                <li>
                                    <button class="px-3 py-1 border border-gray-200 rounded-md text-sm text-gray-500 dark:text-neutral-300 dark:border-neutral-700 hover:bg-gray-100 dark:hover:bg-neutral-800 focus:outline-none focus:ring focus:ring-blue-300 flex items-center gap-2" aria-label="Previous">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left">
                                            <path d="m15 18-6-6 6-6" />
                                        </svg>
                                        <span aria-hidden="true">Sebelumnya</span>
                                    </button>
                                </li>
                                <li>
                                    <button class="px-3 py-1 border border-gray-200 rounded-md text-sm text-gray-500 dark:text-neutral-300 dark:border-neutral-700 hover:bg-gray-100 dark:hover:bg-neutral-800 focus:outline-none focus:ring focus:ring-blue-300 flex items-center gap-2" aria-label="Next">
                                        <span aria-hidden="true">Selanjutnya</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                            <path d="m9 18 6-6-6-6" />
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- End Pagination -->
                </div>
                <!-- End Card Course -->
            </div>

            <div id="tabs-with-underline-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-2">
                <!-- Card Course -->
                <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-0 py-4 mx-auto">
                    <!-- Grid -->
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Card -->
                        <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                            <div class="h-52 flex flex-col justify-center items-center bg-blue-900 rounded-t-xl">
                                <img src="https://img.freepik.com/free-photo/portrait-successful-mid-adult-businessman-with-arms-crossed_662251-1617.jpg?t=st=1717836691~exp=1717840291~hmac=97e18e05a1d749c278abb8b83eaa2b4d0f5b7cdd8a2477423cb44da31cf43342&w=996" class="rounded-t-lg h-full w-full object-cover" alt="Thumbnail">
                            </div>
                            <div class="p-4 md:p-6">
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                                    Kepemimpinan
                                </h3>
                                <h2 class="text-md font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                                    Akuntansi
                                </h2>
                                <p class="text-sm mt-2 text-gray-500 dark:text-neutral-500">
                                    Progress Saya
                                </p>
                                <!-- Progress -->
                                <div class="flex items-center gap-x-3 whitespace-nowrap">
                                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        <div class="flex flex-col justify-center rounded-full overflow-hidden bg-[#FBB926] text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500" style="width: 100%"></div>
                                    </div>
                                    <div class="w-10 text-end">
                                        <span class="text-sm text-gray-800 dark:text-white">100%</span>
                                    </div>
                                </div>
                                <!-- End Progress -->
                                <!-- Button Lanjut Belajar -->
                                <div class="flex justify-center mt-4">
                                    <button class="w-full px-4 py-2 bg-blue-900 text-white rounded-md hover:shadow-lg">Lihat Sertifikat</button>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Grid -->
                </div>
                <!-- End Card Course -->
                <!-- Pagination -->
                <div class="flex justify-center mt-10">
                    <nav aria-label="Pagination">
                        <ul class="inline-flex items-center gap-4">
                            <li>
                                <button class="px-3 py-1 border border-gray-200 rounded-md text-sm text-gray-500 dark:text-neutral-300 dark:border-neutral-700 hover:bg-gray-100 dark:hover:bg-neutral-800 focus:outline-none focus:ring focus:ring-blue-300 flex items-center gap-2" aria-label="Previous">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left">
                                        <path d="m15 18-6-6 6-6" />
                                    </svg>
                                    <span aria-hidden="true">Sebelumnya</span>
                                </button>
                            </li>
                            <li>
                                <button class="px-3 py-1 border border-gray-200 rounded-md text-sm text-gray-500 dark:text-neutral-300 dark:border-neutral-700 hover:bg-gray-100 dark:hover:bg-neutral-800 focus:outline-none focus:ring focus:ring-blue-300 flex items-center gap-2" aria-label="Next">
                                    <span aria-hidden="true">Selanjutnya</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- End Pagination -->
            </div>
        </div>


</section>

<?= $this->endSection() ?>

<!-- JavaScript for Tabs -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabButtons = document.querySelectorAll('[role="tab"]');
        const tabPanels = document.querySelectorAll('[role="tabpanel"]');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                tabButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                const tabPanelId = button.getAttribute('data-hs-tab');
                tabPanels.forEach(panel => {
                    panel.classList.add('hidden');
                    if (panel.getAttribute('id') === tabPanelId.substring(1)) {
                        panel.classList.remove('hidden');
                    }
                });
            });
        });
    });
</script>