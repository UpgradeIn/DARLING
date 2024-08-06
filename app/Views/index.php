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
        Darling | E-Learning DAMRI
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
    <section id="HOME" class="w-full mx-auto mt-20 px-5 overflow-hidden sm:mt-24 py-8 sm:px-20 sm:py-10">
        <!-- Hero -->
        <div class="w-full mx-auto">
            <!-- Grid -->
            <div class="grid lg:grid-cols-12 items-center lg:gap-x-8 xl:gap-x-12">
                <div class="lg:col-span-7">
                    <h1   
                        data-aos="fade-right"
                        data-aos-once="true"
                        class="block text-4xl font-bold text-center text-blue-900 sm:text-5xl lg:text-start lg:leading-tight">Learn and Growth <br>with<span class="text-[#FBB926]"> Darling </span>
                    </h1>
                    <div  
                        data-aos="fade-down"
                        data-aos-once="true"
                        data-aos-delay="300">
                        <p class="mt-2 text-xl font-semibold text-gray-800 text-center sm:text-3xl lg:text-start">Damri Academy for Reliable Learning and Innovation Guidance</p>
                        <p class="mt-2 text-sm text-gray-500 text-center sm:text-xl lg:text-start">Merupakan platform Course dengan berbagai materi penunjang yang relevan dengan paradigma permasalahan terkini.</p>
                    </div>
                  

                    <!-- Buttons -->
                    <div
                        data-aos="fade-up"
                        data-aos-once="true"
                        data-aos-delay="700" 
                        class="flex justify-center mt-7 gap-3 w-full lg:justify-start">
                        <a href="#PROGRAM" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-md font-semibold rounded-lg border border-transparent bg-blue-900 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                            Get started
                        </a>
                    </div>
                    <!-- End Buttons -->
                </div>
                <!-- End Col -->

                <div class="lg:col-span-5 mt-10 lg:mt-0">
                    <img 
                        data-aos="fade-up"
                        data-aos-once="true"
                        class="w-full rounded-lg drop-shadow-xl sm:w-11/12" 
                        src="<?= base_url('assets/images/hero-section.png'); ?>" 
                        alt="Image Description"
                    >
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Hero -->
    </section>
    <!-- End Hero Section -->

    <!-- Program kami -->
    <section id="PROGRAM" class="w-full mx-auto pt-10 px-5 overflow-hidden sm:px-20 sm:pt-20">
        <div class="w-full mx-auto pb-10 px-5 overflow-hidden sm:px-20 sm:pb-20">
            <!-- Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 lg:items-center">
                <div data-aos="fade-right">
                    <img 
                        class="w-full object-cover rounded-xl lg:h-[550px]" 
                        src="<?= base_url('assets/images/program-section.png'); ?>"  
                        alt="Image Description"
                    >
                </div>
                <!-- End Col -->
                <!-- Content -->
                <div data-aos="fade-left" class="space-y-6 lg:space-y-10">
                    <!-- Icon Block -->
                    <h1 class="flex text-2xl font-bold text-blue-900 sm:text-3xl">Program <span class="mx-2 text-[#FBB926]">Kami</span></h1>
                    <div class="flex">
                        <!-- Icon -->
                        <span class="flex-shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                            <svg
                                class="w-4 h-4"
                                viewBox="0 0 27 26"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="11.8182" height="11.8182" rx="2" fill="#004899" />
                                <rect
                                y="14.1816"
                                width="11.8182"
                                height="11.8182"
                                rx="2"
                                fill="#004899"
                                />
                                <rect
                                x="14.7727"
                                width="11.8182"
                                height="11.8182"
                                rx="2"
                                fill="#004899"
                                />
                                <rect
                                x="14.7727"
                                y="14.1816"
                                width="11.8182"
                                height="11.8182"
                                rx="2"
                                fill="#FBB926"
                                />
                            </svg>
                        </span>
                        <div class="ms-5 sm:ms-8">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Kursus Manajemen dan Kepemimpinan
                            </h3>
                            <p class="mt-1 text-gray-500 dark:text-neutral-400">
                                Mengembangkan keterampilan manajerial dan kepemimpinan untuk mempersiapkan Anda naik jabatan.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                    <!-- Icon Block -->
                    <div class="flex">
                        <!-- Icon -->
                        <span class="flex-shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                            <svg
                                class="w-4 h-4"
                                viewBox="0 0 28 26"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <rect
                                x="8"
                                y="6"
                                width="20"
                                height="20"
                                rx="2"
                                fill="#004899"
                                />
                                <rect width="21.2245" height="21.2245" rx="2" fill="#FBB926" />
                            </svg>
                        </span>
                        <div class="ms-5 sm:ms-8">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Kursus Teknologi dan Inovasi
                            </h3>
                            <p class="mt-1 text-gray-500 dark:text-neutral-400">
                                Mendalami teknologi terbaru dan strategi inovasi untuk mempercepat transformasi digital di DAMRI.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                    <!-- Icon Block -->
                    <div class="flex">
                        <!-- Icon -->
                        <span class="flex-shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                            <svg
                                class="w-4 h-4"
                                viewBox="0 0 30 26"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                d="M4.5 11.375C6.15469 11.375 7.5 9.91758 7.5 8.125C7.5 6.33242 6.15469 4.875 4.5 4.875C2.84531 4.875 1.5 6.33242 1.5 8.125C1.5 9.91758 2.84531 11.375 4.5 11.375ZM25.5 11.375C27.1547 11.375 28.5 9.91758 28.5 8.125C28.5 6.33242 27.1547 4.875 25.5 4.875C23.8453 4.875 22.5 6.33242 22.5 8.125C22.5 9.91758 23.8453 11.375 25.5 11.375ZM27 13H24C23.175 13 22.4297 13.3605 21.8859 13.9445C23.775 15.0668 25.1156 17.093 25.4062 19.5H28.5C29.3297 19.5 30 18.7738 30 17.875V16.25C30 14.4574 28.6547 13 27 13ZM15 13C17.9016 13 20.25 10.4559 20.25 7.3125C20.25 4.16914 17.9016 1.625 15 1.625C12.0984 1.625 9.75 4.16914 9.75 7.3125C9.75 10.4559 12.0984 13 15 13ZM18.6 14.625H18.2109C17.2359 15.1328 16.1531 15.4375 15 15.4375C13.8469 15.4375 12.7688 15.1328 11.7891 14.625H11.4C8.41875 14.625 6 17.2453 6 20.475V21.9375C6 23.2832 7.00781 24.375 8.25 24.375H21.75C22.9922 24.375 24 23.2832 24 21.9375V20.475C24 17.2453 21.5812 14.625 18.6 14.625ZM8.11406 13.9445C7.57031 13.3605 6.825 13 6 13H3C1.34531 13 0 14.4574 0 16.25V17.875C0 18.7738 0.670312 19.5 1.5 19.5H4.58906C4.88438 17.093 6.225 15.0668 8.11406 13.9445Z"
                                fill="#004899"
                                />
                            </svg>
                        </span>
                        <div class="ms-5 sm:ms-8">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Kursus Pengembangan Diri
                            </h3>
                            <p class="mt-1 text-gray-500 dark:text-neutral-400">
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

        <!-- Stats -->
        <div class="w-full mx-auto pb-10 px-5 overflow-hidden sm:px-20 sm:pb-20">
            <div data-aos="flip-up" class="max-w-xl mx-auto text-center">
                <h1 class="font-bold text-blue-900 my-3 text-2xl sm:text-3xl">
                    Jalur<span class="mx-2 text-[#FBB926]">Pembelajaran</span>
                </h1>
                <p class="leading-relaxed text-gray-500">
                    Temukan berbagai jalur pembelajaran yang dirancang untuk mengembangkan keterampilan dan pengetahuan yang relevan dengan kebutuhan Anda di Damri.
                </p>
            </div>
            <!-- card -->
            <div class="grid md:grid-cols-3 gap-14 md:gap-5 mt-20">
                <div data-aos="fade-up" class="bg-white shadow-xl p-6 text-center rounded-xl">
                    <div class="bg-[#5b72ee] rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                        <p class="w-6 h-6 text-white text-lg"><?= $total_learning_path ?>+</p>
                    </div>
                    <h1 class="font-base text-xl mb-3 lg:px-14 text-blue-900">
                        Learning Path
                    </h1>
                    <p class="px-4 text-gray-500">
                        Beragam learning path untuk membantu anda memberikan arah dan tujuan dalam proses belajar.
                    </p>
                </div>
                <div data-aos="fade-up"data-aos-delay="150" class="bg-white shadow-xl p-6 text-center rounded-xl">
                    <div class="bg-[#FBB926] rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                        <p class="w-6 h-6 text-white text-lg"><?= $total_course ?>+</p>
                    </div>
                    <h1 class="font-base text-xl mb-3 lg:px-14 text-blue-900">
                        Course
                    </h1>
                    <p class="px-4 text-gray-500">
                        Beragam kursus yang mencakup berbagai bidang pengetahuan dan keterampilan yang relevan.
                    </p>
                </div>
                <div data-aos="fade-up" data-aos-delay="300" class="bg-white shadow-xl p-6 text-center rounded-xl">
                    <div class="bg-[#29b9e7] rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                        <p class="w-6 h-6 text-white text-lg"><?= $total_video ?>+</p>
                    </div>
                    <h1 class="font-base text-xl mb-3 lg:px-14 text-blue-900">
                        Video Pembelajaran
                    </h1>
                    <p class="px-4 text-gray-500">
                        Video pembelajaran berkualitas tinggi dan mudah dipahami untuk mendukung proses belajar.
                    </p>
                </div>
            </div>
        </div>
        <!-- End Stats -->
    </section>
    <!-- End Program kami -->

    <!-- Top Course -->
    <section id="COURSE" class="w-full mx-auto px-5 overflow-hidden py-10 sm:px-20 sm:py-20">
        <div class="w-full mx-auto">
            <!-- Grid -->
            <div class="grid lg:grid-cols-7 lg:gap-x-8 xl:gap-x-12 lg:items-center">
                <!-- Col -->
                <div data-aos="fade-right" class="lg:col-span-2">
                    <div class="bg-[#FBB926] rounded-full absolute w-12 h-12 z-0 -left-4 -top-3 animate-pulse"></div>
                    <h2 class="relative text-2xl text-blue-900 z-10 font-bold sm:text-3xl dark:text-white">
                        Course <span class="text-[#FBB926]">Terbaik</span>
                    </h2>
                    <p class="mt-3 text-gray-500 dark:text-neutral-400">
                        Temukan kursus terbaik untuk karir Anda. Tingkatkan keterampilan Anda dengan materi relevan dan inovatif
                    </p>
                    <p class="mt-5">
                        <a href="<?= base_url('auth/login') ?>" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-900 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Mulai Course
                        </a>
                    </p>
                </div>
                <!-- End Col -->

                <!-- Col -->
                <div class="lg:col-span-5 mt-10 lg:mt-0">
                    <!-- Card Blog -->
                    <div class="w-full mx-auto">
                        <!-- Grid -->
                        <div class="space-y-5 lg:grid lg:grid-cols-3 lg:gap-x-5 lg:space-y-0">
                            <!-- START TOP COURSE -->
                            <!-- Card -->
                            <?php foreach ($top_course as $course) : ?>
                                <a data-aos="fade-up" class="flex flex-col group bg-white border shadow-sm rounded-xl overflow-hidden hover:shadow-lg transition dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70" href="#">
                                    <div class="relative pt-[50%] sm:pt-[60%] lg:pt-[80%] rounded-t-xl overflow-hidden">
                                        <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-t-xl" 
                                            src="<?= base_url('images-thumbnail/') . $course['thumbnail'] ?>" 
                                            alt="Course Image"
                                        >
                                    </div>
                                    <div class="p-4 md:p-5">
                                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                            <?= $course['name'] ?>
                                        </h3>
                                        <div class="flex gap-x-2">
                                            <svg class="lex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"/><rect x="2" y="6" width="16" height="16" rx="2"/>
                                            </svg>
                                            <p class="text-sm text-gray-500 dark:text-neutral-400">
                                                10 Video
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                            <!-- End Card -->
                            <!-- END TOP COURSE -->
                        </div>
                        <!-- End Grid -->
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
    <section id="BERITA" class="w-full mx-auto py-10 px-5 pb-20 overflow-hidden sm:px-20 sm:pt-20">
        <div class="mx-auto">
            <div data-aos="fade-down" data-aos-easing="linear" class="mx-auto text-center max-w-xl pb-10">
                <h1 class="text-2xl font-bold pb-2 text-blue-900 sm:text-3xl">Berita <span class="mx-2 text-[#FBB926]">Terkini</span></h1>
                <p class="text-gray-500">Berita terkini seputar perkembangan terbaru di Damri Course. Dapatkan informasi terbaru seputar kursus, learning path, dan berbagai informasi menarik lainnya.</p>
            </div>
            <!-- Grid -->
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                <?php foreach ($news as $data_news) : ?>
                <a data-aos="fade-up" class="group relative block rounded-xl" href="<?= base_url('news/').$data_news['slug'] ?>">
                    <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full h-[350px] before:absolute before:inset-x-0 before:z-[1] before:size-full before:bg-gradient-to-t before:from-gray-900/70">
                    <img class="w-full h-full object-cover rounded-t-xl" src="<?= base_url('images-thumbnail/') . $data_news['thumbnail'] ?>" alt="Image Description">
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
            </div>
            <!-- End Grid -->
            <!-- Card -->
            <div class="text-center pt-10">
                <div class="inline-block bg-white border shadow-sm rounded-full dark:bg-neutral-900 dark:border-neutral-800">
                <div class="py-3 px-4 flex items-center gap-x-2">
                    <p class="text-gray-500 dark:text-neutral-400">
                        Lihat berita lainnya
                    </p>
                    <a href="<?= base_url('news') ?>" class="inline-flex items-center gap-x-1.5 text-blue-800 decoration-2 hover:underline font-medium dark:text-blue-500" href="../docs/index.html">
                        Lihat semua
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                    </a>
                </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
    </section>
    
    <!-- Button to scroll to top -->
    <button id="scrollToTopBtn" class="hidden fixed bottom-5 right-5 p-3 bg-blue-800 text-white rounded-lg shadow-lg hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-900 focus:ring-opacity-50">
        <svg 
            xmlns="http://www.w3.org/2000/svg" 
            width="24" 
            height="24" 
            viewBox="0 0 24 24" 
            fill="none" 
            stroke="currentColor" 
            stroke-width="2" 
            stroke-linecap="round" 
            stroke-linejoin="round" 
            class="lucide lucide-chevron-up">
            <path d="m18 15-6-6-6 6"/>
        </svg>
    </button>

    <!-- End Berita -->

<?php endif; ?>
<?= $this->endSection() ?>