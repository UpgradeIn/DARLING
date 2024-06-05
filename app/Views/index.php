<?php $role = session('role') ?>
<?php if($role == 'user') : ?>
    <?= $this->include('user/home') ?>
<?php elseif($role == 'operator') : ?>
    <?= $this->include('operator/dashboard') ?>
<?php elseif($role == 'operator') : ?>
    <?= $this->include('officials/dashboard') ?>
<?php else : ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/preline.css')?>">
    <script src="https://cdn.jsdelivr.net/npm/preline@2.3.0/dist/preline.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Darling</title>
</head>
<body>
    <!-- Navbar -->
    <header class="shadow-md flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white border-b border-gray-200 text-sm py-3 sm:py-0 dark:bg-neutral-800 dark:border-neutral-700">
        <nav class="relative w-full px-5 sm:flex sm:py-2 sm:items-center sm:justify-between sm:px-20" aria-label="Global">
            <div class="flex items-center justify-between">
            <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">Brand</a>
            <div class="sm:hidden">
                <button type="button" class="hs-collapse-toggle size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                <svg class="hs-collapse-open:hidden size-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
                <svg class="hs-collapse-open:block flex-shrink-0 hidden size-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
                </button>
            </div>
            </div>
            <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between sm:ps-7">
                <div></div>
                <div class="flex flex-col sm:flex-row">
                    <a class="py-3 ps-px sm:px-3 font-medium text-blue-900 dark:text-blue-500" href="#" aria-current="page">Home</a>
                    <a class="py-3 ps-px sm:px-3 font-medium text-gray-500 hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500" href="#">Program</a>
                    <a class="py-3 ps-px sm:px-3 font-medium text-gray-500 hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500" href="#">Berita</a>
                    <a class="py-3 ps-px sm:px-3 font-medium text-gray-500 hover:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500" href="#">Course</a>
                </div>
                <div>
                    <button type="button" class="py-2 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-900 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none lg:mr-2">
                        Login
                    </button>
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-800 text-gray-800 hover:border-gray-500 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:border-white dark:text-white dark:hover:text-neutral-300 dark:hover:border-neutral-300">
                        Register
                    </button>
                </div>
            </div>
            </div>
        </nav>
    </header>
    <!-- End Navbar -->

    <!-- Hero Section -->
    <section class="w-full mx-auto px-5 py-8 sm:px-20 sm:py-10">
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
                    <img class="w-full object-cover rounded-xl sm:h-[550px]" src="https://images.unsplash.com/photo-1587614203976-365c74645e83?q=80&w=480&h=600&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image Description">
                </div>
                <!-- End Col -->
                <!-- Content -->
                <div class="space-y-6 lg:space-y-10">
                    <!-- Icon Block -->
                    <div class="flex">
                        <!-- Icon -->
                        <span class="flex-shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                        <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
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
                        <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
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
                        <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
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
                    <p class="font-semibold text-5xl text-[#FCB924]">30+</p>
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
                    <p class="font-semibold text-5xl text-[#FCB924]">120+</p>
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
                    <p class="font-semibold text-5xl text-[#FCB924]">500+</p>
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
                            <!-- Card -->
                            <a class="group flex-shrink-0 w-full sm:w-1/2 md:w-1/2 lg:w-auto bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#">
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
                            </a>
                            <!-- End Card -->
                            <!-- Card -->
                            <a class="group flex-shrink-0 w-full sm:w-1/2 md:w-1/2 lg:w-auto bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#">
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
                            </a>
                            <!-- End Card -->
                            <!-- Card -->
                            <a class="group flex-shrink-0 w-full sm:w-1/2 md:w-1/2 lg:w-auto bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="#">
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
                            </a>
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
                <!-- Card -->
                <a class="group relative block rounded-xl" href="#">
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
                </a>
                <!-- End Card -->
                <!-- Card -->
                <a class="group relative block rounded-xl" href="#">
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
                </a>
                <!-- End Card -->
                <!-- Card -->
                <a class="group relative block rounded-xl" href="#">
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
                </a>
                <!-- End Card -->
                <!-- Card -->
                <a class="group relative block rounded-xl" href="#">
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
                </a>
                <!-- End Card -->
            </div>
            <!-- End Grid -->
        </div>
    </section>
    <!-- End Berita -->

    <!-- ========== FOOTER ========== -->
    <section class="w-full mx-auto py-8 px-5 bg-[#E8E8E8] sm:px-20 sm:py-10">
        <footer class="mt-auto w-full mx-auto">
        <!-- Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
            <div class="col-span-full hidden lg:col-span-1 lg:block">
                <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">DARLING</a>
            </div>
            <!-- End Col -->

            <div>
                <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Product</h4>

                <div class="mt-3 grid space-y-3 text-sm">
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Pricing</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Changelog</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Docs</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Download</a></p>
                </div>
            </div>
            <!-- End Col -->

            <div>
                <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Company</h4>

                <div class="mt-3 grid space-y-3 text-sm">
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">About us</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Blog</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Careers</a> <span class="inline text-blue-600 dark:text-blue-500">— We're hiring</span></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Customers</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Newsroom</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Sitemap</a></p>
                </div>
            </div>
            <!-- End Col -->

            <div>
                <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Resources</h4>

                <div class="mt-3 grid space-y-3 text-sm">
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Community</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Help & Support</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">eBook</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">What's New</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Status</a></p>
                </div>
            </div>
            <!-- End Col -->

            <div>
                <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Developers</h4>

                <div class="mt-3 grid space-y-3 text-sm">
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Api</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Status</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">GitHub</a> <span class="inline text-blue-600 dark:text-blue-500">— New</span></p>
                </div>

                <h4 class="mt-7 text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Industries</h4>

                <div class="mt-3 grid space-y-3 text-sm">
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Financial Services</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Education</a></p>
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->

        <div class="pt-5 mt-5 border-t border-gray-400 dark:border-neutral-700">
            <div class="sm:flex sm:justify-between sm:items-center">
                <div class="flex items-center gap-x-3">
                    <div class="space-x-4 text-sm ms-4">
                    <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Terms</a>
                    <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Privacy</a>
                    <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Status</a>
                    </div>
                </div>

                <div class="flex justify-between items-center">
                    <div class="mt-3 sm:hidden">
                    <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">Brand</a>
                    <p class="mt-1 text-xs sm:text-sm text-gray-600 dark:text-neutral-400">© 2022 Preline.</p>
                    </div>

                    <!-- Social Brands -->
                    <div class="space-x-4">
                    <a class="inline-block text-gray-500 hover:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200" href="#">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                    </a>
                    <a class="inline-block text-gray-500 hover:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200" href="#">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                    </a>
                    <a class="inline-block text-gray-500 hover:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200" href="#">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
                        </svg>
                    </a>
                    </div>
                    <!-- End Social Brands -->
                </div>
            <!-- End Col -->
            </div>
        </div>
        </footer>
    </section>
    <!-- ========== END FOOTER ========== -->

</body>
</html>
<?php endif; ?>