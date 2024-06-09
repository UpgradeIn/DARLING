<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
    Detail Course | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1>ini detail course</h1>
    <p><?= $course['id'] ?></p>
    <form action="<?= base_url('update-courses').$course['slug']; ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="grid gap-4 md:grid lg:gap-6 lg:grid-cols-5">
            <div class="col-span-3 space-y-4">
                <!-- Nama Course -->
                <div>
                    <label for="course_name" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Nama Course</label>
                    <input type="text" name="course_name" id="course_name" placeholder="Inputkan nama Course" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                </div>
                <!-- End Nama Course  -->

                <!-- Keterangan -->
                <div>
                    <label for="course_description" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Keterangan Course</label>
                    <textarea id="course_description" placeholder="Inputkan keterangan learning path" name="course_description" rows="4" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"></textarea>
                </div>
                <!-- End Keterangan -->

                <!-- Learning Path -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- <div>
                        <label for="learning_path" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Pilih Learning Path</label>
                        <select id="learning_path" name="learning_path" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <option value="Pilih Learning Path" disabled selected>Pilih Learning Path</option>
                            <option value="Finance">Finance</option>
                            <option value="HRD">HRD</option>
                            <option value="IT">IT</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Operasional">Operasional</option>
                        </select>
                    </div> -->
                    <div>
                        <label for="module" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Module</label>
                        <form>
                            <label for="module" class="sr-only">Pilih File</label>
                            <input type="file" name="module" id="module" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                            file:bg-gray-300 file:border-0
                            file:me-4
                            file:py-3 file:px-4
                            dark:file:bg-neutral-700 dark:file:text-neutral-400">
                        </form>
                    </div>
                </div>
                <!-- End Learning Path -->
            </div>
            <div class="col-span-2">
                <!-- Thumbnail Course -->
                <div>
                    <label for="course_thumbnail" class="inline-block text-sm font-medium text-gray-800 mb-1 dark:text-neutral-200">
                        Thumbnail Course
                    </label>

                    <label for="course_thumbnail" class="group p-4 sm:p-7 block cursor-pointer text-center border-2 border-dashed border-gray-200 rounded-lg focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2 dark:border-neutral-700">
                    <input id="course_thumbnail" name="course_thumbnail" type="file" class="sr-only">
                        <svg class="size-10 mx-auto text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                        </svg>
                        <span class="mt-2 block text-sm text-gray-800 dark:text-neutral-200">
                            Browse your device or <span class="group-hover:text-blue-700 text-blue-800">drag 'n drop'</span>
                        </span>
                    </label>
                </div>
                <!-- End Thumbnail Course -->
            </div>
            <div class="flex justify-end items-center gap-x-2 p-4 sm:px-7 border-t dark:border-neutral-800">
                <button class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800" data-hs-overlay="#hs-create-course">
                Cancel
                </button>
                <button type="submit" class="py-2 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Saveddswd
                </button>
            </div>
        </div>
        <!-- End Grid -->
    </form>
<?= $this->endSection() ?>