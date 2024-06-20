<?= $this->extend('layouts/profile') ?>

<?= $this->section('page_title') ?>
Profile Saya | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="col-span-4 px-5 py-4 sm:px-2 sm:py-2">
    <div>
        <div class="w-full mx-auto text-3xl font-bold text-center">
            <h1>Welcome, <?= session('fullname') ?></h1>
        </div>
        <div class="w-full mx-auto text-xl text-center mt-2">
            <h3>Informasi mengenai profile, divisi, dan jabatan</h3>
        </div>
        <div class="mt-6">
            <!-- Profile Picture -->
            <div class="text-center">
                <div class="relative inline-block">
                    <img class="rounded-full w-24 h-24 mx-auto mt-2" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80" alt="Image Description">
                    <button class="absolute bottom-0 right-0 block rounded-full ring-2 ring-white bg-yellow-400 dark:ring-neutral-900" data-hs-overlay="#hs-ganti-foto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil">
                            <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                            <path d="m15 5 4 4"></path>
                        </svg>
                    </button>
                    <!-- Modal edit Foto Profile -->
                    <div id="hs-ganti-foto" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                        <div class="flex justify-center items-center hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto">
                            <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-neutral-700/70">
                                <div class="py-3 px-4 border-b dark:border-neutral-800">
                                    <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                                        Ganti Foto Profile
                                    </h2>
                                </div>
                                <div class="col-span-2">
                                    <!-- Ganti Foto Profile -->
                                    <div>
                                        <label for="foto_profile" class="block text-sm font-medium text-gray-800 mb-1 dark:text-neutral-200">Foto Profile Baru</label>
                                        <label for="foto_profile" class="group p-4 sm:p-7 block cursor-pointer text-center border-2 border-dashed border-gray-200 rounded-lg focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2 dark:border-neutral-700">
                                            <input id="foto_profile" name="foto_profile" type="file" class="sr-only" onchange="previewImage(event)" />
                                            <div id="thumbnail_container" class="flex flex-col items-center justify-center">
                                                <?php if (isset($course['thumbnail'])) : ?>
                                                    <img id="thumbnail_preview" src="<?= base_url('images-thumbnail/') . $course['thumbnail'] ?>" class="w-full h-auto object-cover shadow-md rounded-xl" alt="Preview Thumbnail" />
                                                <?php else : ?>
                                                    <img id="thumbnail_preview" src="" style="display: none;" class="w-full h-auto object-cover shadow-md rounded-xl" alt="Preview Thumbnail" />
                                                <?php endif; ?>
                                            </div>
                                        </label>
                                    </div>
                                    <!-- End Ganti Foto Profile -->
                                </div>

                                <div class="flex justify-end items-center gap-x-2 p-4 sm:px-7 border-t dark:border-neutral-800">
                                    <a type="button" class="cursor-pointer py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800" data-hs-overlay="#hs-ganti-foto">
                                        Cancel
                                    </a>
                                    <button type="submit" class="py-2 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal edit Foto Profile -->
                </div>
            </div>

            <!-- Form Fields -->
            <div class="mt-6 space-y-4">
                <div class="space-y-2">
                    <label for="af-submit-app-project-name" class="block text-sm font-medium text-gray-800 dark:text-neutral-200">
                        Nama Lengkap
                    </label>
                    <input id="af-submit-app-project-name" type="text" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Nama Lengkap" value="<?= session('fullname') ?>">
                </div>

                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-gray-800 dark:text-neutral-200">
                        Email
                    </label>
                    <input id="email" type="text" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="email@mail.com" value="<?= session('email') ?>">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label for="birthdate" class="block text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Tanggal Lahir
                        </label>
                        <input id="birthdate" type="text" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="dd/mm/yyyy" value="<?= session('tanggal_lahir') ?>">
                    </div>
                    <div class="space-y-2">
                        <label for="gender" class="block text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Gender
                        </label>
                        <input id="gender" type="text" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Gender" value="<?= session('gender') ?>">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label for="division" class="block text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Divisi
                        </label>
                        <input id="division" type="text" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Divisi" value="<?= session('divisi') ?>">
                    </div>
                    <div class="space-y-2">
                        <label for="position" class="block text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Jabatan
                        </label>
                        <input id="position" type="text" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Jabatan" value="<?= session('jabatan') ?>">
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="mt-5 flex justify-end gap-x-2">
                <button type="button" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    Cancel
                </button>
                <button type="button" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</section>


<?= $this->endSection() ?>