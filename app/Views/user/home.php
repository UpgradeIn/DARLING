<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
Home User | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="container mx-auto px-5 py-8 sm:px-20 sm:py-10 mt-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 ">
        <!-- Slider -->
        <div data-hs-carousel='{
    "loadingClasses": "opacity-0",
    "isAutoPlay": true
  }' class="relative">
            <div class="hs-carousel relative overflow-hidden w-full min-h-96 bg-white rounded-lg">
                <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                    <div class="hs-carousel-slide flex-none w-full">
                        <div class="flex justify-center h-full w-full bg-gray-200 dark:bg-neutral-600">
                            <img class="object-cover w-full h-full" src="https://img.freepik.com/free-vector/flat-design-online-college-sale-banner_23-2150548522.jpg?t=st=1717860661~exp=1717864261~hmac=0771fd9e63a470a8e82ce163a60fa4590632c0cb9a18254ec334468ba84b6668&w=1380" alt="">
                        </div>
                    </div>
                    <div class="hs-carousel-slide flex-none w-full">
                        <div class="flex justify-center h-full w-full bg-gray-200 dark:bg-neutral-600">
                            <img class="object-cover w-full h-full" src="https://img.freepik.com/free-vector/flat-design-online-college-sale-banner_23-2150548522.jpg?t=st=1717860661~exp=1717864261~hmac=0771fd9e63a470a8e82ce163a60fa4590632c0cb9a18254ec334468ba84b6668&w=1380" alt="">
                        </div>
                    </div>
                    <div class="hs-carousel-slide flex-none w-full">
                        <div class="flex justify-center h-full w-full bg-gray-200 dark:bg-neutral-600">
                            <img class="object-cover w-full h-full" src="https://img.freepik.com/free-vector/flat-design-online-college-sale-banner_23-2150548522.jpg?t=st=1717860661~exp=1717864261~hmac=0771fd9e63a470a8e82ce163a60fa4590632c0cb9a18254ec334468ba84b6668&w=1380" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 left-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800">
                <span class="text-2xl" aria-hidden="true">
                    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6"></path>
                    </svg>
                </span>
                <span class="sr-only">Previous</span>
            </button>
            <button type="button" class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 right-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 ">
                <span class="sr-only">Next</span>
                <span class="text-2xl" aria-hidden="true">
                    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </span>
            </button>

            <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
                <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"></span>
                <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"></span>
                <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"></span>
            </div>
        </div>
        <!-- End Slider -->
    </div>
</section>
<section class="md:container md:mx-auto px-5 py-8 mt-10 sm:px-20 sm:py-10">
    <div class="md:container md:mx-auto">
        <div class="w-full mx-auto text-3xl font-bold">
            <h1>Course Terakhir Dikerjakan</h1>
        </div>
        <!-- Card Blog -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Card -->
                <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                    <div class="h-52 flex flex-col justify-center items-center bg-[#FBB926] rounded-t-xl">
                        <img src="https://img.freepik.com/free-photo/people-working-call-center_23-2149288184.jpg?t=st=1717836311~exp=1717839911~hmac=6e8159fdbd6575776d5718f8abc25d091d211f9fc1584b9e8814ebaf2c785d8d&w=996" class="rounded-t-lg h-full w-full object-cover" alt="Thumbnail">
                    </div>
                    <div class="p-4 md:p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                            Pelayanan Pelanggan
                        </h3>
                        <h2 class="text-m font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                            Akuntansi
                        </h2>
                        <p class="text-sm mt-2 text-gray-500 dark:text-neutral-500">
                            Progress Saya
                        </p>
                        <!-- Progress -->
                        <div class="flex items-center gap-x-3 whitespace-nowrap">
                            <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <div class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500" style="width: 50%"></div>
                            </div>
                            <div class="w-10 text-end">
                                <span class="text-sm text-gray-800 dark:text-white">50%</span>
                            </div>
                        </div>
                        <!-- End Progress -->
                        <div class="flex justify-center mt-4">
                            <button type="button" class="w-full py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                Lanjut Belajar
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                    <div class="h-52 flex flex-col justify-center items-center bg-rose-500 rounded-t-xl">
                        <img src="https://img.freepik.com/free-photo/professional-car-mechanic-repair-shop_342744-262.jpg?t=st=1717836180~exp=1717839780~hmac=c44709f1de012f4fd001335fd85989d194aab0e3cd024cd3525ce3bb6348eb07&w=996" class="rounded-t-lg h-full w-full object-cover" alt="Thumbnail">
                    </div>
                    <div class="p-4 md:p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                            Perawatan Armada
                        </h3>
                        <h2 class="text-m font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                            Akuntansi
                        </h2>
                        <p class="text-sm mt-2 text-gray-500 dark:text-neutral-500">
                            Progress Saya
                        </p>
                        <!-- Progress -->
                        <div class="flex items-center gap-x-3 whitespace-nowrap">
                            <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <div class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500" style="width: 50%"></div>
                            </div>
                            <div class="w-10 text-end">
                                <span class="text-sm text-gray-800 dark:text-white">50%</span>
                            </div>
                        </div>
                        <!-- End Progress -->
                        <div class="flex justify-center mt-4">
                            <button type="button" class="w-full py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                Lanjut Belajar
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                    <div class="h-52 flex flex-col justify-center items-center bg-amber-500 rounded-t-xl">
                        <img src="https://img.freepik.com/free-photo/colleagues-with-safety-equipment-working-with-blueprints_23-2148908431.jpg?t=st=1717836460~exp=1717840060~hmac=8845f2595ea53eab452ddaf4aa1c15087acda922acd0113bc1b1a100cba0d463&w=996" class="rounded-t-lg h-full w-full object-cover" alt="Thumbnail">
                    </div>
                    <div class="p-4 md:p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                            Keselamatan Kerja
                        </h3>
                        <h2 class="text-m font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                            Akuntansi
                        </h2>
                        <p class="text-sm mt-2 text-gray-500 dark:text-neutral-500">
                            Progress Saya
                        </p>
                        <!-- Progress -->
                        <div class="flex items-center gap-x-3 whitespace-nowrap">
                            <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <div class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500" style="width: 50%"></div>
                            </div>
                            <div class="w-10 text-end">
                                <span class="text-sm text-gray-800 dark:text-white">50%</span>
                            </div>
                        </div>
                        <!-- End Progress -->
                        <div class="flex justify-center mt-4">
                            <button type="button" class="w-full py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                Lanjut Belajar
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                    <div class="h-52 flex flex-col justify-center items-center bg-amber-500 rounded-t-xl">
                        <img src="https://images.unsplash.com/photo-1658203897339-0b8c64a42fba?q=80&w=2062&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="rounded-t-lg h-full w-full object-cover" alt="Thumbnail">
                    </div>
                    <div class="p-4 md:p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                            Microsoft Excel
                        </h3>
                        <h2 class="text-m font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                            Akuntansi
                        </h2>
                        <p class="text-sm mt-2 text-gray-500 dark:text-neutral-500">
                            Progress Saya
                        </p>
                        <!-- Progress -->
                        <div class="flex items-center gap-x-3 whitespace-nowrap">
                            <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <div class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500" style="width: 50%"></div>
                            </div>
                            <div class="w-10 text-end">
                                <span class="text-sm text-gray-800 dark:text-white">50%</span>
                            </div>
                        </div>
                        <!-- End Progress -->
                        <div class="flex justify-center mt-4">
                            <button type="button" class="w-full py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                Lanjut Belajar
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Card Blog -->
    </div>
</section>

</section>
<!-- End Hero Section -->
<?= $this->endSection() ?>