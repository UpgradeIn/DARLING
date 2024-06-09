<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
    Learning Path Page | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="w-full mx-auto px-5 mt-12 py-8 sm:px-20 sm:py-10 sm:mt-20">
    <div class="flex flex-col sm:flex-row justify-between items-center w-full mx-auto text-3xl font-bold space-y-4 sm:space-y-0">
        <h1 class="w-full sm:w-auto text-center sm:text-left">Daftar Learning Path</h1>
        <div class="w-full sm:w-1/4">
            <label for="icon" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                    <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                </div>
                <input type="text" id="searchInput" name="icon" class="py-2 px-4 ps-11 block w-full bg-transparent border-gray-300 shadow-sm rounded-lg text-sm text-gray-700 focus:z-10 focus:border-gray-900 focus:ring-gray-600 placeholder:text-gray-500 dark:border-neutral-700 dark:text-neutral-500 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Cari Learning Path" onkeyup="filterCards()">
            </div>
        </div>
    </div>
    <!-- Card Learning Path -->
    <div class="h-full mt-4 bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div id="cardContainer" class="p-4 md:p-6 grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-3 sm:gap-6">
            <a class="group flex flex-row bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#" data-title="Akuntansi">
                <img src="https://img.freepik.com/free-photo/professional-car-mechanic-repair-shop_342744-262.jpg?t=st=1717836180~exp=1717839780~hmac=c44709f1de012f4fd001335fd85989d194aab0e3cd024cd3525ce3bb6348eb07&w=996" alt="Deskripsi Gambar" class="w-1/4 object-cover rounded-l-xl" />
                <div class="p-4 md:p-5 w-3/4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl group-hover:text-xl text-black font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                Akuntansi
                            </h3>
                            <p class="text-sm dark:text-neutral-500">
                                12 Courses
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a class="group flex flex-row bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#" data-title="IT">
                <img src="https://img.freepik.com/free-photo/professional-car-mechanic-repair-shop_342744-262.jpg?t=st=1717836180~exp=1717839780~hmac=c44709f1de012f4fd001335fd85989d194aab0e3cd024cd3525ce3bb6348eb07&w=996" alt="Deskripsi Gambar" class="w-1/4 object-cover rounded-l-xl" />
                <div class="p-4 md:p-5 w-3/4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl group-hover:text-xl text-black font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                IT
                            </h3>
                            <p class="text-sm dark:text-neutral-500">
                                12 Courses
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a class="group flex flex-row bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#" data-title="Manajemen">
                <img src="https://img.freepik.com/free-photo/professional-car-mechanic-repair-shop_342744-262.jpg?t=st=1717836180~exp=1717839780~hmac=c44709f1de012f4fd001335fd85989d194aab0e3cd024cd3525ce3bb6348eb07&w=996" alt="Deskripsi Gambar" class="w-1/4 object-cover rounded-l-xl" />
                <div class="p-4 md:p-5 w-3/4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl group-hover:text-xl text-black font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                Manajemen
                            </h3>
                            <p class="text-sm dark:text-neutral-500">
                                12 Courses
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a class="group flex flex-row bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#" data-title="Manajemen">
                <img src="https://img.freepik.com/free-photo/professional-car-mechanic-repair-shop_342744-262.jpg?t=st=1717836180~exp=1717839780~hmac=c44709f1de012f4fd001335fd85989d194aab0e3cd024cd3525ce3bb6348eb07&w=996" alt="Deskripsi Gambar" class="w-1/4 object-cover rounded-l-xl" />
                <div class="p-4 md:p-5 w-3/4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl group-hover:text-xl text-black font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                Manajemen
                            </h3>
                            <p class="text-sm dark:text-neutral-500">
                                12 Courses
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a class="group flex flex-row bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#" data-title="Manajemen">
                <img src="https://img.freepik.com/free-photo/professional-car-mechanic-repair-shop_342744-262.jpg?t=st=1717836180~exp=1717839780~hmac=c44709f1de012f4fd001335fd85989d194aab0e3cd024cd3525ce3bb6348eb07&w=996" alt="Deskripsi Gambar" class="w-1/4 object-cover rounded-l-xl" />
                <div class="p-4 md:p-5 w-3/4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl group-hover:text-xl text-black font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                Manajemen
                            </h3>
                            <p class="text-sm dark:text-neutral-500">
                                12 Courses
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a class="group flex flex-row bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#" data-title="Manajemen">
                <img src="https://img.freepik.com/free-photo/professional-car-mechanic-repair-shop_342744-262.jpg?t=st=1717836180~exp=1717839780~hmac=c44709f1de012f4fd001335fd85989d194aab0e3cd024cd3525ce3bb6348eb07&w=996" alt="Deskripsi Gambar" class="w-1/4 object-cover rounded-l-xl" />
                <div class="p-4 md:p-5 w-3/4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl group-hover:text-xl text-black font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                Manajemen
                            </h3>
                            <p class="text-sm dark:text-neutral-500">
                                12 Courses
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- End Card Learning Path -->
</section>

<?= $this->endSection() ?>