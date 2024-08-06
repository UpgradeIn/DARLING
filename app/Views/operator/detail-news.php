<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
Detail News | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="w-full min-h-screen mx-auto px-5 mt-12 py-8 sm:px-20 sm:py-10 sm:mt-14">
    <!-- Blog Article -->
    <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-2xl">
            <!-- Avatar Media -->
            <div class="flex justify-between items-center mb-6">
                <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                    <div class="flex-shrink-0">
                        <img class="size-12 rounded-full" src="https://images.unsplash.com/photo-1669837401587-f9a4cfe3126e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Image Description" />
                    </div>

                    <div class="grow">
                        <div class="flex justify-between items-center gap-x-2">
                            <div>
                                <!-- Tooltip -->
                                <div class="hs-tooltip [--trigger:hover] [--placement:bottom] inline-block">
                                    <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                                        <span class="font-semibold text-gray-800 dark:text-neutral-200"> Admin Darling </span>
                                    </div>
                                </div>
                                <!-- End Tooltip -->

                                <ul class="text-xs text-gray-500 dark:text-neutral-500">
                                    <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                        <?= date('d/m/Y', strtotime($news['published_at'])) ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="space-x-2 flex">
                                <?php if ($news['status'] != 'publish') : ?>
                                <button class="py-2 px-4 text-sm font-semibold text-gray-800 bg-green-400 rounded-md shadow-sm hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all dark:bg-green-500 dark:hover:bg-green-500 dark:focus:ring-green-500" data-hs-overlay="#hs-publish-news">
                                    Publish
                                </button>
                                <?php else : ?>
                                    <button class="py-2 px-4 text-sm font-semibold text-gray-800 bg-neutral-200 rounded-md shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition-all dark:bg-neutral-200 dark:hover:bg-gray-500 dark:focus:ring-gray-500" data-hs-overlay="#hs-publish-news">
                                        Unpublish News
                                    </button>
                                <?php endif; ?>
                                <!-- Modal Publish News-->
                                <div id="hs-publish-news" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
                                    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                        <div class="relative flex flex-col bg-white shadow-lg rounded-xl dark:bg-neutral-900">
                                            <div class="absolute top-2 end-2">
                                                <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-transparent dark:hover:bg-neutral-700" data-hs-overlay="#hs-publish-news">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M18 6 6 18" />
                                                        <path d="m6 6 12 12" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <div class="p-4 sm:p-10 text-center overflow-y-auto">
                                                <!-- Icon -->
                                                <span class="mb-4 inline-flex justify-center items-center size-[62px] rounded-full border-4 <?php if ($news['status'] == 'publish') : ?>border-gray-50 bg-gray-100 text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100<?php else : ?>border-green-50 bg-green-100 text-green-500 dark:bg-green-700 dark:border-green-600 dark:text-green-100<?php endif; ?>">
                                                    <?php if ($news['status'] == 'publish') : ?>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 size-5" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M3.22 3.22a.75.75 0 011.06 0L8 6.94l3.72-3.72a.75.75 0 011.06 1.06L9.06 8l3.72 3.72a.75.75 0 01-1.06 1.06L8 9.06l-3.72 3.72a.75.75 0 01-1.06-1.06L6.94 8 3.22 4.28a.75.75 0 010-1.06z"></path>
                                                        </svg>
                                                    <?php else : ?>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 size-5" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                            <path d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
                                                        </svg>
                                                    <?php endif; ?>
                                                </span>
                                                <!-- End Icon -->

                                                <h3 class="mb-2 text-2xl font-bold text-gray-800 dark:text-neutral-200">
                                                    <?php if ($news['status'] == 'publish') : ?>
                                                        Unpublish Course
                                                    <?php else : ?>
                                                        Publish Course
                                                    <?php endif; ?>
                                                </h3>
                                                <p class="text-gray-500 dark:text-neutral-500">
                                                    Apakah Anda yakin ingin melakakukan publikasi pada course ini?
                                                </p>

                                                <div class="mt-6 flex justify-center gap-x-4">
                                                    <?php if ($news['status'] == 'publish') : ?>
                                                        <form action="<?= base_url('unpublish-news/') . $news['id']; ?>" method="POST" class="flex">
                                                            <button class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border bg-gray-200 border-gray-200 text-gray-800 shadow-sm hover:bg-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-200 dark:border-gray-800 dark:text-gray-800 dark:hover:bg-gray-300">
                                                                Unpublish news
                                                            </button>
                                                        </form>
                                                    <?php else : ?>
                                                        <form action="<?= base_url('publish-news/') . $news['id']; ?>" method="POST" class="flex">
                                                            <button class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border bg-green-200 border-green-200 text-green-800 shadow-sm hover:bg-green-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-green-200 dark:border-green-800 dark:text-green-800 dark:hover:bg-green-300">
                                                                Publish news
                                                            </button>
                                                        </form>
                                                    <?php endif; ?>
                                                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800" data-hs-overlay="#hs-publish-news">
                                                        Batal
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Publish -->


                                <button class="py-2 px-6 text-sm font-semibold text-gray-800 bg-yellow-400 rounded-md shadow-sm hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition-all dark:bg-yellow-500 dark:hover:bg-blue-500 dark:focus:ring-blue-500" data-hs-overlay="#hs-edit-news">
                                    Edit
                                </button>

                                <!-- Modal edit News -->
                                <div id="hs-edit-news" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                                    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto">
                                        <form action="<?= base_url('update-news'); ?>" method="POST" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>
                                            <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-neutral-700/70">
                                                <div class="py-3 px-4 border-b dark:border-neutral-800">
                                                    <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                                                        Edit News
                                                    </h2>
                                                    <p class="text-sm text-gray-400 md:text-md lg:text-md dark:text-neutral-400">
                                                        Lengkapi data untuk edit News
                                                    </p>
                                                </div>
                                                <div class="p-4 overflow-y-auto">
                                                    <div class="sm:divide-y divide-gray-200 dark:divide-neutral-700">
                                                        <div class="py-3 sm:py-6">
                                                            <!-- Form -->
                                                            <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
                                                                <!-- Grid -->
                                                                <div class="grid gap-4 md:grid lg:gap-6 lg:grid-cols-5">
                                                                    <div class="col-span-3 space-y-4">
                                                                        <!-- Nama Judul -->
                                                                        <div>
                                                                            <label for="title" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Judul</label>
                                                                            <textarea id="title" placeholder="Inputkan judul news" name="title" rows="4" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"><?= $news['title'] ?></textarea>
                                                                        </div>
                                                                        <!-- End Nama Judul  -->

                                                                        <!-- Category -->
                                                                        <div class="w-full">
                                                                            <label for="category_id" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Kategori News</label>
                                                                            <select name="category_id" class="py-3 px-3 pe-9 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                                                <option disabled value="">Pilih Kategori</option>
                                                                                <?php foreach ($categories as $category) : ?>
                                                                                    <option <?= $news['category_id'] == $category['id'] ? 'selected' : '' ?> value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <!-- End Category -->


                                                                        <!-- News -->
                                                                        <div>
                                                                            <label for="content" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Konten News</label>
                                                                            <textarea id="content" placeholder="Inputkan konten news" name="content" rows="4" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"><?= $news['content'] ?></textarea>
                                                                        </div>
                                                                        <!-- End News -->
                                                                    </div>
                                                                    <div class="col-span-2">
                                                                        <!-- NewsCourse -->
                                                                        <div>
                                                                            <label for="thumbnail_news" class="inline-block text-sm font-medium text-gray-800 mb-1 dark:text-neutral-200">
                                                                                Thumbnail Course
                                                                            </label>
                                                                            <label for="thumbnail_news" class="group p-4 sm:p-7 block cursor-pointer text-center border-2 border-dashed border-gray-200 rounded-lg focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2 dark:border-neutral-700">
                                                                                <input id="thumbnail_news" name="thumbnail_news" type="file" class="sr-only" onchange="previewImageNews(event)" />
                                                                                <div id="thumbnail_container" class="flex flex-col items-center justify-center">
                                                                                    <?php if (isset($news['thumbnail'])) : ?>
                                                                                        <img id="thumbnail_preview_news" src="<?= base_url('images-thumbnail/') . $news['thumbnail'] ?>" class="w-full h-auto object-cover shadow-md rounded-xl" />
                                                                                    <?php else : ?>
                                                                                        <img id="thumbnail_preview_news" src="" style="display: none;" class="w-full h-auto object-cover shadow-md rounded-xl" />
                                                                                    <?php endif; ?>
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                        <!-- End Thumbnail Course -->
                                                                    </div>
                                                                </div>
                                                                <!-- End Grid -->
                                                            </div>
                                                            <!-- Form -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="flex justify-end items-center gap-x-2 p-4 sm:px-7 border-t dark:border-neutral-800">
                                                    <a type="button" class="py-2 px-3 inline-flex items-center cursor-pointer gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800" data-hs-overlay="#hs-edit-news">
                                                        Cancel
                                                    </a>
                                                    <button type="submit" class="py-2 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                        Save
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Modal edit News -->

                                <button class="py-2 px-4 text-sm font-semibold text-gray-800 bg-red-400 rounded-md shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-all dark:bg-red-500 dark:hover:bg-red-500 dark:focus:ring-red-500" data-hs-overlay="#delete_news">
                                    Hapus
                                </button>

                                <!-- Modal Hapus -->
                                <div id="delete_news" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
                                    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                        <div class="relative flex flex-col bg-white shadow-lg rounded-xl dark:bg-neutral-900">
                                            <div class="absolute top-2 end-2">
                                                <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-transparent dark:hover:bg-neutral-700" data-hs-overlay="#delete_news">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M18 6 6 18" />
                                                        <path d="m6 6 12 12" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <div class="p-4 sm:p-10 text-center overflow-y-auto">
                                                <!-- Icon -->
                                                <span class="mb-4 inline-flex justify-center items-center size-[62px] rounded-full border-4 border-red-50 bg-red-100 text-red-500 dark:bg-red-700 dark:border-red-600 dark:text-red-100">
                                                    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                    </svg>
                                                </span>
                                                <!-- End Icon -->

                                                <h3 class="mb-2 text-2xl font-bold text-gray-800 dark:text-neutral-200">
                                                    Hapus News
                                                </h3>
                                                <p class="text-gray-500 dark:text-neutral-500">
                                                    Apakah Anda yakin ingin menghapus news ini? Semua data yang terkait dengan news ini akan dihapus secara permanen. Tindakan ini tidak dapat dibatalkan.
                                                </p>

                                                <div class="mt-6 flex justify-center gap-x-4">
                                                    <form action="<?= base_url('delete-news/') . $news['id']; ?>" method="POST" class="flex">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border bg-red-200 border-red-200 text-red-800 shadow-sm hover:bg-red-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-red-200 dark:border-red-800 dark:text-red-800 dark:hover:bg-red-300">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800" data-hs-overlay="#delete_news">
                                                        Batal
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Hapus -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Avatar Media -->

            <!-- Content -->
            <div class="space-y-5 md:space-y-8">
                <div class="space-y-3">
                    <h2 class="text-3xl font-bold md:text-3xl dark:text-white"><?= $news['title'] ?></h2>
                </div>

                <figure>
                    <img class="w-full object-cover rounded-xl" src="<?= base_url('images-thumbnail/') . $news['thumbnail'] ?>" alt="Thumbnail News" />
                </figure>

                <p class="text-lg text-gray-800 dark:text-neutral-200">
                    <?= $news['content'] ?>
                </p>

                <div>
                    <a class="m-1 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-200" href="#"> <?= $category_news ?> </a>
                </div>
            </div>
            <!-- End Content -->
        </div>
    </div>
    <!-- End Blog Article -->
</section>
<?= $this->endSection() ?>