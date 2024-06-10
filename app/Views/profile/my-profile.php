<?= $this->extend('layouts/profile') ?>

<?= $this->section('page_title') ?>
Profile Saya | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="col-span-4 px-5 py-4 sm:px-2 sm:py-2">
    <div class="">
        <div class="w-full mx-auto text-3xl font-bold text-center">
            <h1>Welcome, <?= session('fullname') ?></h1>
        </div>
        <div class="w-full mx-auto text-xl text-center">
            <h3>Informasi mengenai profile, divisi, dan jabatan</h3>
        </div>
        <div >
            <!-- Grid -->
             <div class="text-center">
             <div class="relative inline-block">
                <img class="rounded-full size-24 mx-auto mt-2" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80" alt="Image Description">
                <span class="absolute bottom-0 end-0 block size-3.5 rounded-full ring-2 ring-white bg-yellow-400 dark:ring-neutral-900"></span>
            </div>
             </div>
            <div class="space-y-2">
                <label for="af-submit-app-project-name" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                    Nama Lengkap
                </label>

                <input id="af-submit-app-project-name" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Nama Lengkap" value="<?= session('fullname') ?>">
            </div>

            <div class="space-y-2">
                <label for="" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                    Email
                </label>

                <input id="" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="email@mail.com" value="<?= session('email') ?>">
            </div>
            <div class=" grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-4">
                <div>
                    <label for="" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                        Tanggal Lahir
                    </label>
                    <input type="text" class="w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="dd/mm/yyyy" value="<?= session('tanggal_lahir') ?>">
                </div>
                <div>
                    <label for="" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                        Gender
                    </label>
                    <input type="text" class="w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Gender" value="<?= session('gender') ?>">
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-4">
                <div>
                    <label for="" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                        Divisi
                    </label>
                    <input type="text" class="w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Divisi" value="<?= session('divisi') ?>">
                </div>
                <div>
                    <label for="" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                        Jabatan
                    </label>
                    <input type="text" class="w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Jabatan" value="<?= session('jabatan') ?>">
                </div>
            </div>
            <!-- button -->
            <div class="mt-5 flex justify-end gap-x-2">
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    Cancel
                </button>
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Save changes
                </button>
            </div>
            <!-- end button -->
        </div>


</section>

<?= $this->endSection() ?>