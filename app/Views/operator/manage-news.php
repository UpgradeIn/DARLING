<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
    Manage News | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="w-full min-h-screen mx-auto px-5 mt-12 py-8 sm:px-20 sm:py-10 sm:mt-14">
        <div class="pb-5">
        <?php if (session()->has('errors')): ?>
            <div class="mt-2 text-sm text-center text-red-800 bg-red-200 py-2 rounded-lg">
                <?php $errors = session('errors'); echo esc(array_shift($errors))?>
            </div>
        <?php endif; ?>
        <?php if(session()->getFlashdata('msg')):?>
                <div class="mt-2 text-sm text-center text-green-800 bg-green-200 py-2 rounded-lg">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif;?>
        <?php if(session()->getFlashdata('msg-failed')):?>
                <div class="mt-2 text-sm text-center text-red-800 bg-red-200 py-2 rounded-lg">
                    <?= session()->getFlashdata('msg-failed') ?>
                </div>
        <?php endif;?>
            <h1
            class="text-xl font-semibold text-gray-800 md-text-xl lg:text-2xl dark:text-neutral-200"
            >
            Kelola News
            </h1>
            <p
            class="text-sm text-gray-400 md:text-md lg:text-md dark:text-neutral-400"
            >
            Kelola news yang akan ditampilkan pada website
            </p>
        </div>

        <!-- Table News -->
        <div class="w-full">
            <!-- Card -->
            <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                <div
                    class="bg-white border border-gray-200 rounded-md shadow-sm overflow-hidden dark:bg-neutral-900 dark:border-neutral-700"
                >
                    <!-- Header -->
                    <div
                    class="px-6 py-4 grid gap-3 bg-gray-50 lg:flex md:justify-between lg:items-center border-b border-gray-200 dark:border-neutral-700"
                    >
                    <!-- Input -->
                    <div class="sm:col-span-1 sm:w-[400px]">
                        <label
                        for="hs-as-table-product-review-search"
                        class="sr-only"
                        >Search</label
                        >
                        <div class="relative">
                        <input
                            type="text"
                            id="hs-as-table-product-review-search"
                            name="hs-as-table-product-review-search"
                            class="py-2 px-3 ps-11 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-900 focus:ring-blue-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Search"
                        />
                        <div
                            class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4"
                        >
                            <svg
                            class="size-4 text-gray-400 dark:text-neutral-500"
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            viewBox="0 0 16 16"
                            >
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
                            />
                            </svg>
                        </div>
                        </div>
                    </div>
                    <!-- End Input -->

                    <!-- Create News -->
                    <div>
                        <div class="inline-flex gap-x-2">
                        <button
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-800 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                            data-hs-overlay="#hs-create-news"
                        >
                            <svg
                            class="flex-shrink-0 size-4"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            >
                            <path d="M5 12h14" />
                            <path d="M12 5v14" />
                            </svg>
                            News
                        </button>
                        </div>
                    </div>
                    <!-- End Create News -->

                    <!-- Modal Create News -->
                    <div
                        id="hs-create-news"
                        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto">
                            <form
                                action="<?= base_url('create-news'); ?>"
                                method="POST"
                                enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <div
                                    class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-neutral-700/70">
                                    <div
                                        class="py-3 px-4 border-b dark:border-neutral-800">
                                        <h2
                                        class="text-xl font-bold text-gray-800 dark:text-neutral-200"
                                        >
                                        Tambah News
                                        </h2>
                                        <p
                                        class="text-sm text-gray-400 md:text-md lg:text-md dark:text-neutral-400"
                                        >
                                        Lengkapi data untuk tambah news
                                        </p>
                                    </div>
                                    <div class="p-4 overflow-y-auto">
                                        <div
                                            class="sm:divide-y divide-gray-200 dark:divide-neutral-700">
                                            <div class="py-3 sm:py-6">
                                            <!-- Form -->
                                            <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
                                                <!-- Grid -->
                                                <div
                                                    class="grid gap-4 md:grid lg:gap-6 lg:grid-cols-5">
                                                    <div class="col-span-3 space-y-4">
                                                    <!-- Nama Judul -->
                                                    <div>
                                                        <label
                                                        for="title"
                                                        class="block mb-2 text-sm text-gray-700 font-medium dark:text-white"
                                                        >Judul</label
                                                        >
                                                        <textarea
                                                        id="title"
                                                        placeholder="Inputkan judul news"
                                                        name="title"
                                                        rows="4"
                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                        ></textarea>
                                                    </div>
                                                    <!-- End Nama Judul  -->

                                                    <!-- Category -->
                                                    <div class="w-full">
                                                        <label
                                                        for="category_id"
                                                        class="block mb-2 text-sm text-gray-700 font-medium dark:text-white"
                                                        >Kategori News</label>
                                                        <select name="category_id" class="py-3 px-3 pe-9 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                            <option selected disabled value="">Pilih Kategori</option>
                                                            <?php foreach ($categories as $category): ?>
                                                            <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <!-- End Category -->
                                                    

                                                    <!-- News -->
                                                    <div>
                                                        <label
                                                        for="content"
                                                        class="block mb-2 text-sm text-gray-700 font-medium dark:text-white"
                                                        >Konten News</label
                                                        >
                                                        <textarea
                                                        id="content"
                                                        placeholder="Inputkan konten news"
                                                        name="content"
                                                        rows="4"
                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                        ></textarea>
                                                    </div>
                                                    <!-- End News -->
                                                    </div>
                                                    <div class="col-span-2">
                                                        <!-- Thumbnail News -->
                                                        <div>
                                                            <label for="thumbnail_news" class="inline-block text-sm font-medium text-gray-800 mb-1 dark:text-neutral-200">
                                                                Thumbnail News
                                                            </label>
                                                            <label for="thumbnail_news" class="group p-4 sm:p-7 block cursor-pointer text-center border-2 border-dashed border-gray-200 rounded-lg focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2 dark:border-neutral-700">
                                                                <input id="thumbnail_news" name="thumbnail_news" type="file" class="sr-only" onchange="previewImageNews(event)" />
                                                                <div id="thumbnail_container" class="flex flex-col items-center justify-center">
                                                                <img id="thumbnail_preview_news" src="" style="display: none;" class="w-full h-auto object-cover shadow-md rounded-xl" />
                                                                <svg
                                                                    id="svg_thumbnail_news"
                                                                    class="size-10 mx-auto text-gray-400 dark:text-neutral-600"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="16"
                                                                    height="16"
                                                                    fill="currentColor"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                    fill-rule="evenodd"
                                                                    d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"
                                                                    />
                                                                    <path
                                                                    d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"
                                                                    />
                                                                </svg>
                                                                <span id="teks_thumbnail_news" class="mt-2 block text-sm text-gray-800 dark:text-neutral-200">
                                                                    Browse your device
                                                                </span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <!-- End Thumbnail News -->
                                                    </div>
                                                </div>
                                                <!-- End Grid -->
                                            </div>
                                            <!-- Form -->
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                    class="flex justify-end items-center gap-x-2 p-4 sm:px-7 border-t dark:border-neutral-800">
                                        <a
                                            type="button"
                                            class="py-2 px-3 inline-flex items-center cursor-pointer gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800"
                                            data-hs-overlay="#hs-create-news">
                                            Cancel
                                        </a>
                                        <button
                                            type="submit"
                                            class="py-2 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>
                    <!-- End Modal Create News -->
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <table
                    class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700"
                    >
                    <thead class="bg-white dark:bg-neutral-900">
                        <tr>
                        <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                            <span
                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                            >
                                No.
                            </span>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-center">
                            <div class="flex items-center gap-x-2">
                            <span
                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                            >
                                Judul News
                            </span>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-center">
                            <div class="flex items-center gap-x-2">
                            <span
                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                            >
                                Tanggal Publikasi
                            </span>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-center">
                            <div class="flex justify-center items-center gap-x-2">
                            <span
                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                            >
                                Status
                            </span>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-end"></th>
                        </tr>
                    </thead>

                    <tbody
                        class="divide-y divide-gray-200 dark:divide-neutral-700">
                        <?php if (empty($news)): ?>
                        <!-- NO DATA -->
                        <tr>
                            <td colspan="5" class="size-px whitespace-nowrap">
                                <div
                                class="max-w-sm w-full min-h-[300px] flex flex-col justify-center mx-auto px-6 py-4"
                                >
                                <div
                                    class="flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-neutral-800"
                                >
                                    <svg
                                    class="flex-shrink-0 size-6 text-gray-600 dark:text-neutral-400"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    fill="currentColor"
                                    viewBox="0 0 16 16"
                                    >
                                    <path
                                        d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"
                                    />
                                    <path
                                        d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"
                                    />
                                    </svg>
                                </div>

                                <h2
                                    class="mt-5 font-semibold text-gray-800 dark:text-white"
                                >
                                    Tidak ada News
                                </h2>
                                <p
                                    class="mt-2 text-sm text-gray-600 dark:text-neutral-400"
                                >
                                    Tidak ada News yang tersedia saat ini
                                </p>
                                </div>
                            </td>
                        </tr>
                        <!-- END NO DATA -->
                        <?php else: ?>
                        <?php $no = 1; ?>
                        <?php foreach ($news as $news): ?>
                        <tr>
                            <td class="size-px whitespace-nowrap">
                                <div class="px-6 py-3">
                                <span
                                    class="text-sm text-gray-600 dark:text-neutral-400"
                                    ><?= $no++ ?>.</span
                                >
                                </div>
                            </td>
                            <td class="size-px whitespace-nowrap">
                                <div class="px-6 py-3">
                                <span
                                    class="text-sm text-gray-600 dark:text-neutral-400"
                                    ><?= $news['title'] ?></span
                                >
                                </div>
                            </td>
                            <td class="size-px whitespace-nowrap">
                                <div class="px-6 py-3 text-start">
                                <span
                                    class="text-sm text-gray-600 dark:text-neutral-400"
                                    ><?= $news['published_at'] ? date('d/m/Y', strtotime($news['published_at'])) : 'Belum dipublikasi' ?></span
                                >
                                </div>
                            </td>
                            <td class="size-px whitespace-nowrap">
                                <div class="px-6 py-3 text-center">
                                <span
                                    class="text-xs dark:text-neutral-400">
                                    <?php if ($news['status'] === 'publish'): ?>
                                    <span class="text-xs text-green-800 bg-green-100 py-1 px-1.5 rounded-md">Published</span>
                                    <?php elseif ($news['status'] === 'draft'): ?>
                                    <span class="text-xs text-yellow-800 bg-yellow-100 py-1 px-1.5 rounded-md">Draft</span>
                                    <?php else: ?>
                                    <span class="text-xs text-red-800 bg-red-100 py-1 px-1.5 rounded-md">Unpublished</span>
                                    <?php endif; ?>
                                </span>
                                </div>
                            </td>
                            <td class="size-px whitespace-nowrap">
                                <div class="px-6 py-1.5 text-end">
                                <div
                                    class="hs-dropdown [--placement:bottom-right] relative inline-block">
                                    <a href="<?= base_url('detail-news/').$news['slug'] ?>" type="button" class="block">
                                    <span class="px-6 py-1.5">
                                        <span
                                        class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-lg border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                        >
                                        <svg
                                            class="flex-shrink-0 size-4"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            viewBox="0 0 16 16"
                                        >
                                            <path
                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"
                                            />
                                            <path
                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"
                                            />
                                        </svg>
                                        Detail
                                        </span>
                                    </span>
                                    </a>
                                </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                    </table>
                    <!-- End Table -->

                    <!-- Footer -->
                    <div
                    class="px-6 py-4 grid gap-3 md:flex md:justify-end md:items-center border-t border-gray-200 dark:border-neutral-700"
                    >
                    <div>
                        <div class="inline-flex gap-x-2">
                        <button
                            type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                        >
                            <svg
                            class="flex-shrink-0 size-4"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            >
                            <path d="m15 18-6-6 6-6" />
                            </svg>
                            Prev
                        </button>

                        <button
                            type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                        >
                            Next
                            <svg
                            class="flex-shrink-0 size-4"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            >
                            <path d="m9 18 6-6-6-6" />
                            </svg>
                        </button>
                        </div>
                    </div>
                    </div>
                    <!-- End Footer -->
                </div>
                </div>
            </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Table News -->
    </section>
<?= $this->endSection() ?>