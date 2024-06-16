<?= $this->extend('layouts/template') ?>
<?php $role = session('role') ?>
<?= $this->section('page_title') ?>
    <?php if ($role == 'user') : ?>
        Home User
    <?php elseif ($role == 'operator') : ?>
        Dashboard Operator
    <?php elseif ($role == 'officials') : ?>
        Dashboard Officials
    <?php else : ?>
        Darling | Belajar buat naik jabatan
    <?php endif; ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<?php if ($role == 'user') : ?>
    <?= $this->include('user/home') ?>
<?php elseif ($role == 'operator') : ?>
    <?= $this->include('operator/dashboard') ?>
<?php elseif ($role == 'operator') : ?>
    <?= $this->include('officials/dashboard') ?>
<?php else : ?>
    <!-- Hero Section -->
    <section class="w-full mx-auto px-5 mt-12 py-8 sm:px-20 sm:py-10 sm:mt-20">
        <!-- Hero -->
        <div class="w-full mx-auto">
            <!-- Grid -->
            <div class="grid lg:grid-cols-7 lg:gap-x-8 xl:gap-x-12 lg:items-center">
                <div class="lg:col-span-3">
                    <h1 class="block text-4xl font-bold text-blue-900 sm:text-5xl lg:leading-tight dark:text-white">E-Learning<span class="text-[#FCB924]"> Darling </span></h1>
                    <p class="mt-2 text-xl font-bold text-gray-800 dark:text-neutral-400 sm:text-2xl">Damri Academy for Reliable Learning and Innovation Guidance</p>
                    <p class="mt-2 text-sm text-gray-500 dark:text-neutral-400 sm:text-xl">Merupakan platform Course dengan berbagai materi penunjang yang relevan dengan paradigma permasalahan terkini.</p>

                    <!-- Buttons -->
                    <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-900 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                            Get started
                        </a>
                    </div>
                    <!-- End Buttons -->
                </div>
                <!-- End Col -->

                <div class="lg:col-span-4 mt-10 lg:mt-0">
                    <img class="w-full rounded-xl" src="https://images.unsplash.com/photo-1665686376173-ada7a0031a85?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=900&h=700&q=80" alt="Image Description">
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Hero -->
    </section>
    <!-- End Hero Section -->

    <!-- Program kami -->
    <section class="w-full mx-auto py-8 px-5 sm:px-20 sm:py-10">
        <div class="w-full mx-auto">
            <!-- Title -->
            <div class="w-full mb-5 lg:mb-10">
                <h1 class="flex text-2xl font-bold text-gray-800 sm:text-4xl">Program Kami</h1>
                <p class="mt-3 text-gray-600 dark:text-neutral-400">
                    Kami menawarkan berbagai program yang dirancang khusus untuk kebutuhan pengembangan karir karyawan DAMRI. Dari manajemen hingga teknologi dan inovasi, kami menyediakan kursus yang relevan dan praktis untuk membantu Anda maju dalam karir Anda.
                </p>
            </div>
            <!-- End Title -->

            <!-- Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 lg:items-center">
                <div class="aspect-w-16 aspect-h-9 lg:aspect-none">
                    <img class="w-full object-cover rounded-xl lg:h-[550px]" src="https://images.unsplash.com/photo-1587614203976-365c74645e83?q=80&w=480&h=600&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image Description">
                </div>
                <!-- End Col -->
                <!-- Content -->
                <div class="space-y-6 lg:space-y-10">
                    <!-- Icon Block -->
                    <div class="flex">
                        <!-- Icon -->
                        <span class="flex-shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            </svg>
                        </span>
                        <div class="ms-5 sm:ms-8">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Kursus Manajemen dan Kepemimpinan
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                Mengembangkan keterampilan manajerial dan kepemimpinan untuk mempersiapkan Anda naik jabatan.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                    <!-- Icon Block -->
                    <div class="flex">
                        <!-- Icon -->
                        <span class="flex-shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            </svg>
                        </span>
                        <div class="ms-5 sm:ms-8">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Kursus Teknologi dan Inovasi
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                Mendalami teknologi terbaru dan strategi inovasi untuk mempercepat transformasi digital di DAMRI.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                    <!-- Icon Block -->
                    <div class="flex">
                        <!-- Icon -->
                        <span class="flex-shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            </svg>
                        </span>
                        <div class="ms-5 sm:ms-8">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Kursus Pengembangan Diri
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                Meningkatkan soft skills yang diperlukan untuk karir yang lebih sukses dan berkelanjutan.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                </div>
                <!-- End Content -->
            </div>
            <!-- End Grid -->
        </div>
    </section>
    <!-- End Program kami -->

    <!-- Stats -->
    <section class="w-full mx-auto py-8 px-5 sm:px-20 sm:py-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 items-center border border-neutral-700 divide-y lg:divide-y-0 lg:divide-x divide-neutral-700 rounded-xl">
            <!-- Card -->
            <a class="group relative z-10 p-4 md:p-6 h-full flex flex-col bg-blue-900 first:rounded-t-xl last:rounded-b-xl lg:first:rounded-l-xl lg:first:rounded-tr-none lg:last:rounded-r-xl lg:last:rounded-bl-none before:absolute before:inset-0 before:bg-gradient-to-b before:hover:from-transparent before:hover:via-transparent before:hover:to-[#FCB924]/30 before:via-80% before:-z-[1] before:last:rounded-b-xl lg:before:first:rounded-s-xl lg:before:last:rounded-e-xl lg:before:last:rounded-bl-none before:opacity-0 before:hover:opacity-100" href="#">
                <div class="mb-5">
                    <div class="mt-5">
                        <p class="font-semibold text-5xl text-[#FCB924]"><?= $total_learning_path ?>+</p>
                        <h3 class="mt-5 font-medium text-lg text-white">Learning Path</h3>
                        <p class="mt-1 text-neutral-400">Beragam learning path untuk berbagai bidang.</p>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="group relative z-10 p-4 md:p-6 h-full flex flex-col bg-blue-900 first:rounded-t-xl last:rounded-b-xl lg:first:rounded-l-xl lg:first:rounded-tr-none lg:last:rounded-r-xl lg:last:rounded-bl-none before:absolute before:inset-0 before:bg-gradient-to-b before:hover:from-transparent before:hover:via-transparent before:hover:to-[#FCB924]/30 before:via-80% before:-z-[1] before:last:rounded-b-xl lg:before:first:rounded-s-xl lg:before:last:rounded-e-xl lg:before:last:rounded-bl-none before:opacity-0 before:hover:opacity-100" href="#">
                <div class="mb-5">
                    <div class="mt-5">
                        <p class="font-semibold text-5xl text-[#FCB924]"><?= $total_course ?>+</p>
                        <h3 class="mt-5 font-medium text-lg text-white">Course</h3>
                        <p class="mt-1 text-neutral-400">Beragam kursus yang mencakup berbagai bidang pengetahuan.</p>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="group relative z-10 p-4 md:p-6 h-full flex flex-col bg-blue-900 first:rounded-t-xl last:rounded-b-xl lg:first:rounded-l-xl lg:first:rounded-tr-none lg:last:rounded-r-xl lg:last:rounded-bl-none before:absolute before:inset-0 before:bg-gradient-to-b before:hover:from-transparent before:hover:via-transparent before:hover:to-[#FCB924]/30 before:via-80% before:-z-[1] before:last:rounded-b-xl lg:before:first:rounded-s-xl lg:before:last:rounded-e-xl lg:before:last:rounded-bl-none before:opacity-0 before:hover:opacity-100" href="#">
                <div class="mb-5">
                    <div class="mt-5">
                        <p class="font-semibold text-5xl text-[#FCB924]"><?= $total_video ?>+</p>
                        <h3 class="mt-5 font-medium text-lg text-white">Video Pembelajaran</h3>
                        <p class="mt-1 text-neutral-400">Video pembelajaran berkualitas tinggi untuk menunjang proses belajar Anda.</p>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>
    </section>
    <!-- End Stats -->

    <!-- Top Course -->
    <section class="w-full mx-auto px-5 py-8 sm:px-20 sm:py-10">
        <div class="w-full mx-auto">
            <!-- Grid -->
            <div class="grid lg:grid-cols-7 lg:gap-x-8 xl:gap-x-12 lg:items-center">
                <!-- Col -->
                <div class="lg:col-span-2">
                    <h2 class="text-2xl text-gray-800 font-bold lg:text-4xl dark:text-white">
                        Course Terbaik
                    </h2>
                    <p class="mt-3 text-gray-800 dark:text-neutral-400">
                        Temukan kursus terbaik untuk karir Anda. Tingkatkan keterampilan Anda dengan materi relevan dan inovatif
                    </p>
                    <p class="mt-5">
                        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-900 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                            Mulai Course
                        </a>
                    </p>
                </div>
                <!-- End Col -->

                <!-- Col -->
                <div class="lg:col-span-5 mt-10 lg:mt-0">
                    <!-- Card Blog -->
                    <div class="w-full mx-auto">
                        <div class="overflow-x-auto">
                            <!-- Grid -->
                            <div class="flex lg:grid lg:grid-cols-3 gap-6 mb-10">

                                <!-- START TOP COURSE -->
                                <!-- Card -->
                                <?php foreach ($top_course as $course) : ?>
                                    <a class="group flex-shrink-0 w-full sm:w-1/2 md:w-1/2 lg:w-auto bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#">
                                        <div class="aspect-w-16 aspect-h-9">
                                            <img class="w-full object-cover rounded-t-xl" src="<?= base_url('images-thumbnail/') . $course['thumbnail'] ?>" alt="Image Description">
                                        </div>
                                        <div class="p-4 md:p-5">
                                            <p class="mt-2 text-xs uppercase text-gray-600 dark:text-neutral-400">
                                                Product
                                            </p>
                                            <h3 class="mt-2 text-lg font-medium text-gray-800 group-hover:text-blue-600 dark:text-neutral-300 dark:group-hover:text-white">
                                                <?= $course['name'] ?>
                                            </h3>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                                <!-- End Card -->
                                <!-- END TOP COURSE -->


                                <!-- Card -->
                                <!-- <a class="group flex-shrink-0 w-full sm:w-1/2 md:w-1/2 lg:w-auto bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#">
                                <div class="aspect-w-16 aspect-h-9">
                                    <img class="w-full object-cover rounded-t-xl" src="https://images.unsplash.com/photo-1668869713519-9bcbb0da7171?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=988&q=80" alt="Image Description">
                                </div>
                                <div class="p-4 md:p-5">
                                    <p class="mt-2 text-xs uppercase text-gray-600 dark:text-neutral-400">
                                        Product
                                    </p>
                                    <h3 class="mt-2 text-lg font-medium text-gray-800 group-hover:text-blue-600 dark:text-neutral-300 dark:group-hover:text-white">
                                        Better is when everything works together
                                    </h3>
                                </div>
                            </a> -->
                                <!-- End Card -->
                                <!-- Card -->
                                <!-- <a class="group flex-shrink-0 w-full sm:w-1/2 md:w-1/2 lg:w-auto bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#">
                                <div class="aspect-w-16 aspect-h-9">
                                    <img class="w-full object-cover rounded-t-xl" src="https://images.unsplash.com/photo-1668869713519-9bcbb0da7171?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=988&q=80" alt="Image Description">
                                </div>
                                <div class="p-4 md:p-5">
                                    <p class="mt-2 text-xs uppercase text-gray-600 dark:text-neutral-400">
                                        Product
                                    </p>
                                    <h3 class="mt-2 text-lg font-medium text-gray-800 group-hover:text-blue-600 dark:text-neutral-300 dark:group-hover:text-white">
                                        Better is when everything works together
                                    </h3>
                                </div>
                            </a> -->
                                <!-- End Card -->
                                <!-- Card -->
                                <!-- <a class="group flex-shrink-0 w-full sm:w-1/2 md:w-1/2 lg:w-auto bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#">
                                <div class="aspect-w-16 aspect-h-9">
                                    <img class="w-full object-cover rounded-t-xl" src="https://images.unsplash.com/photo-1668869713519-9bcbb0da7171?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=988&q=80" alt="Image Description">
                                </div>
                                <div class="p-4 md:p-5">
                                    <p class="mt-2 text-xs uppercase text-gray-600 dark:text-neutral-400">
                                        Product
                                    </p>
                                    <h3 class="mt-2 text-lg font-medium text-gray-800 group-hover:text-blue-600 dark:text-neutral-300 dark:group-hover:text-white">
                                        Better is when everything works together
                                    </h3>
                                </div>
                            </a> -->
                                <!-- End Card -->
                            </div>
                            <!-- End Grid -->
                        </div>
                    </div>
                    <!-- End Card Blog -->
                </div>
                <!-- End Col -->

                <!-- End Grid -->
            </div>
            <!-- End Icon Blocks -->
    </section>
    <!-- End Top Course -->

    <!-- Berita -->
    <section class="w-full mx-auto py-8 px-5 pb-20 sm:px-20 sm:pt-10">
        <div class="mx-auto">
            <h1 class="flex text-2xl font-bold pb-3 text-gray-800 sm:text-4xl">Berita Terkini</h1>
            <!-- Grid -->
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                <?php foreach ($news as $data_news) : ?>
                <a class="group relative block rounded-xl" href="<?= base_url('news/').$data_news['slug'] ?>">
                    <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full h-[350px] before:absolute before:inset-x-0 before:z-[1] before:size-full before:bg-gradient-to-t before:from-gray-900/70">
                    <img class="w-full object-cover rounded-t-xl" src="<?= base_url('images-thumbnail/') . $data_news['thumbnail'] ?>" alt="Image Description">
                    </div>

                    <div class="absolute bottom-0 inset-x-0 z-10">
                        <div class="flex flex-col h-full p-4 sm:p-6">
                        <h3 class="text-2xl sm:text-lg font-semibold text-white group-hover:text-white/80">
                            <?= $data_news['title'] ?>
                            </h3>
                            <p class="mt-2 text-xl text-white/80 sm:text-sm">
                            <?= $data_news['category_name'] ?>
                        </p>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>

                <!-- Card -->
                <!-- <a class="group relative block rounded-xl" href="#">
                    <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full h-[350px] before:absolute before:inset-x-0 before:z-[1] before:size-full before:bg-gradient-to-t before:from-gray-900/70">
                        <img class="size-full absolute top-0 start-0 object-cover" src="https://images.unsplash.com/photo-1669828230990-9b8583a877ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1062&q=80" alt="Image Description">
                    </div>

                    <div class="absolute bottom-0 inset-x-0 z-10">
                        <div class="flex flex-col h-full p-4 sm:p-6">
                        <h3 class="text-2xl sm:text-lg font-semibold text-white group-hover:text-white/80">
                            Damri is breaking news
                        </h3>
                        <p class="mt-2 text-xl text-white/80 sm:text-sm">
                            Damri launched the Watch platform in August
                        </p>
                        </div>
                    </div>
                </a> -->
                <!-- End Card -->
                <!-- Card -->
                <!-- <a class="group relative block rounded-xl" href="#">
                    <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full h-[350px] before:absolute before:inset-x-0 before:z-[1] before:size-full before:bg-gradient-to-t before:from-gray-900/70">
                        <img class="size-full absolute top-0 start-0 object-cover" src="https://images.unsplash.com/photo-1669828230990-9b8583a877ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1062&q=80" alt="Image Description">
                    </div>

                    <div class="absolute bottom-0 inset-x-0 z-10">
                        <div class="flex flex-col h-full p-4 sm:p-6">
                        <h3 class="text-2xl sm:text-lg font-semibold text-white group-hover:text-white/80">
                            Damri is breaking news
                        </h3>
                        <p class="mt-2 text-xl text-white/80 sm:text-sm">
                            Damri launched the Watch platform in August
                        </p>
                        </div>
                    </div>
                </a> -->
                <!-- End Card -->
                <!-- Card -->
                <!-- <a class="group relative block rounded-xl" href="#">
                    <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full h-[350px] before:absolute before:inset-x-0 before:z-[1] before:size-full before:bg-gradient-to-t before:from-gray-900/70">
                        <img class="size-full absolute top-0 start-0 object-cover" src="https://images.unsplash.com/photo-1669828230990-9b8583a877ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1062&q=80" alt="Image Description">
                    </div>

                    <div class="absolute bottom-0 inset-x-0 z-10">
                        <div class="flex flex-col h-full p-4 sm:p-6">
                        <h3 class="text-2xl sm:text-lg font-semibold text-white group-hover:text-white/80">
                            Damri is breaking news
                        </h3>
                        <p class="mt-2 text-xl text-white/80 sm:text-sm">
                            Damri launched the Watch platform in August
                        </p>
                        </div>
                    </div>
                </a> -->
                <!-- End Card -->
                <!-- Card -->
                <!-- <a class="group relative block rounded-xl" href="#">
                    <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full h-[350px] before:absolute before:inset-x-0 before:z-[1] before:size-full before:bg-gradient-to-t before:from-gray-900/70">
                        <img class="size-full absolute top-0 start-0 object-cover" src="https://images.unsplash.com/photo-1669828230990-9b8583a877ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1062&q=80" alt="Image Description">
                    </div>

                    <div class="absolute bottom-0 inset-x-0 z-10">
                        <div class="flex flex-col h-full p-4 sm:p-6">
                        <h3 class="text-2xl sm:text-lg font-semibold text-white group-hover:text-white/80">
                            Damri is breaking news
                        </h3>
                        <p class="mt-2 text-xl text-white/80 sm:text-sm">
                            Damri launched the Watch platform in August
                        </p>
                        </div>
                    </div>
                </a> -->
                <!-- End Card -->
            </div>
            <!-- End Grid -->
        </div>
    </section>
    <!-- End Berita -->

<?php endif; ?>
<?= $this->endSection() ?>