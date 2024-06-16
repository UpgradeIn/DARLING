<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
    Manage Assignment | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="w-full mx-auto min-h-screen px-5 mt-12 py-8 sm:px-20 sm:py-10 sm:mt-14">
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
      <div class="pb-5">
        <h1
          class="text-xl font-semibold text-gray-800 md-text-xl lg:text-2xl dark:text-neutral-200"
        >
          Kelola
        </h1>
        <p
          class="text-sm text-gray-400 md:text-md lg:text-md dark:text-neutral-400"
        >
          Kelola Assignment dan Request Learning Path
        </p>
      </div>

      <div class="border-b border-gray-200 dark:border-neutral-700">
        <nav class="flex space-x-1" aria-label="Tabs" role="tablist">
          <button
            type="button"
            class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active"
            id="tabs-with-underline-item-1"
            data-hs-tab="#tabs-with-underline-1"
            aria-controls="tabs-with-underline-1"
            role="tab"
          >
            Assignment
          </button>
          <button
            type="button"
            class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
            id="tabs-with-underline-item-2"
            data-hs-tab="#tabs-with-underline-2"
            aria-controls="tabs-with-underline-2"
            role="tab"
          >
            Request
          </button>
        </nav>
      </div>

      <div class="mt-5">
        <div
          id="tabs-with-underline-1"
          role="tabpanel"
          aria-labelledby="tabs-with-underline-item-1"
        >
          <!-- Table Assignment -->
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

                      <!-- Create Assignment -->
                      <div>
                        <div class="inline-flex gap-x-2">
                          <button
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-800 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                            data-hs-overlay="#hs-create-assignment"
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
                            Assignment
                          </button>
                        </div>
                      </div>
                      <!-- End Create Assignment -->

                      <!-- Modal Create Assignment -->
                      <div
                        id="hs-create-assignment"
                        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                      >
                        <div
                          class="md:px-4 hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto"
                        >
                          <form
                            action="<?= base_url('assign-learningpath'); ?>"
                            method="POST"
                            enctype="multipart/form-data"
                          >
                            <?= csrf_field(); ?>
                            <div
                              class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-neutral-700/70"
                            >
                              <div
                                class="py-3 px-4 border-b dark:border-neutral-800"
                              >
                                <h2
                                  class="text-xl font-bold text-gray-800 dark:text-neutral-200"
                                >
                                  Tambah Assignment
                                </h2>
                                <p
                                  class="text-sm text-gray-400 md:text-md lg:text-md dark:text-neutral-400"
                                >
                                  Lengkapi data untuk menambahkan assignment
                                  learning path
                                </p>
                              </div>

                              <div class="p-4 overflow-y-auto">
                                <div
                                  class="sm:divide-y divide-gray-200 dark:divide-neutral-700"
                                >
                                  <div class="py-3 sm:py-6">
                                    <!-- form -->
                                    <div>
                                      <div class="col-span-3 space-y-4">
                                        <!-- Nama Pegawai -->
                                        <div>
                                          <label
                                            for="user"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white"
                                            >Nama Pegawai</label
                                          >
                                          <div class="relative">
                                            <input
                                              type="text"
                                              id="user"
                                              name="user"
                                              class="py-2 px-3 ps-11 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
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
                                        <!-- End Nama Pegawai  -->

                                        <!-- Learning Path -->
                                        <div>
                                          <div class="w-full">
                                            <label
                                              for="learning_path"
                                              class="block mb-2 text-sm text-gray-700 font-medium dark:text-white"
                                              >Learning Path</label
                                            >
                                            <select
                                              name="learning_path"
                                              class="py-3 px-3 pe-9 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                              >
                                              <option selected disabled value="">
                                                Pilih Learning Path
                                              </option>
                                              <?php foreach ($learningPaths as $learningPath) : ?>
                                              <option value="<?= $learningPath['id'] ?>">
                                                <?= $learningPath['name']; ?>
                                              </option>
                                              <?php endforeach; ?>
                                            </select>
                                          </div>
                                        </div>
                                        <!-- End Learning Path -->

                                        <!-- Pesan Penugasan -->
                                        <div>
                                          <label
                                            for="message_assignment"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white"
                                            >Pesan Penugasan</label
                                          >
                                          <textarea
                                            id="message_assignment"
                                            placeholder="Inputkan pesan penugasan"
                                            name="message_assignment"
                                            rows="4"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                          ></textarea>
                                        </div>
                                        <!-- End Pesan Penugasan  -->
                                      </div>
                                    </div>
                                    <!-- end form -->
                                  </div>
                                </div>
                              </div>

                              <div
                                class="flex justify-end items-center gap-x-2 p-4 sm:px-7 border-t dark:border-neutral-800"
                              >
                                <a
                                  type="button"
                                  class="cursor-pointer py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800"
                                  data-hs-overlay="#hs-create-assignment"
                                >
                                  Cancel
                                </a>
                                <button
                                  type="submit"
                                  class="py-2 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                >
                                  Save
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <!-- End Modal Assignment -->
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
                                Nama Peserta
                              </span>
                            </div>
                          </th>

                          <th scope="col" class="px-6 py-3 text-center">
                            <div class="flex items-center gap-x-2">
                              <span
                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                              >
                                Tanggal Penugasan
                              </span>
                            </div>
                          </th>

                          <th scope="col" class="px-6 py-3 text-center">
                            <div
                              class="flex justify-center items-center gap-x-2"
                            >
                              <span
                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                              >
                                Learning Path
                              </span>
                            </div>
                          </th>

                          <th scope="col" class="px-6 py-3 text-end"></th>
                        </tr>
                      </thead>

                      <tbody
                        class="divide-y divide-gray-200 dark:divide-neutral-700"
                      >
                        <!-- KONDISI KALAU GAADA COURSE -->
                        <!-- <tr>
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
                                Tidak ada Course
                              </h2>
                              <p
                                class="mt-2 text-sm text-gray-600 dark:text-neutral-400"
                              >
                                Tidak ada Course yang tersedia saat ini
                              </p>
                            </div>
                          </td>
                        </tr> -->
                        <!-- END KONDISI KALAU GAADA COURSE -->
                        <?php foreach ($assign_learning_paths as $key => $assign_learning_path) : ?>
                        <tr>
                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                              <span
                                class="text-sm text-gray-600 dark:text-neutral-400"
                                ><?= $key + 1; ?></span
                              >.
                            </div>
                          </td>
                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                              <span
                                class="text-sm text-gray-600 dark:text-neutral-400"
                                ><?= $assign_learning_path['user_fullname']; ?></span
                              >
                            </div>
                          </td>
                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3 text-start">
                              <span
                                class="text-sm text-gray-600 dark:text-neutral-400"
                                ><?= date('d/m/Y', strtotime($assign_learning_path['created_at'])); ?></span
                              >
                            </div>
                          </td>
                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3 text-center">
                              <span
                                class="text-sm text-gray-600 dark:text-neutral-400"
                                ><?= $assign_learning_path['learning_path_name']; ?></span
                              >
                            </div>
                          </td>
                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-1.5 text-end">
                              <div
                                class="hs-dropdown [--placement:bottom-right] relative inline-block"
                              >
                                <a href="<?= base_url('detail-assignment/').$assign_learning_path['id'] ?>" type="button" class="block">
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
          <!-- End Table Assignment -->
        </div>

        <div
          id="tabs-with-underline-2"
          class="hidden"
          role="tabpanel"
          aria-labelledby="tabs-with-underline-item-2"
        >
          <!-- Table Request -->
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

                          <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                              <span
                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                              >
                                Nama Peserta
                              </span>
                            </div>
                          </th>

                          <th scope="col" class="px-6 py-3 text-center">
                            <div class="flex items-center gap-x-2">
                              <span
                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                              >
                                Tangal Request
                              </span>
                            </div>
                          </th>

                          <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                              <span
                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                              >
                                Learning Path
                              </span>
                            </div>
                          </th>

                          <th scope="col" class="px-6 py-3 text-start">
                            <div
                              class="flex justify-center items-center gap-x-2"
                            >
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
                        class="divide-y divide-gray-200 dark:divide-neutral-700"
                      >
                      <?php foreach ($request_learning_paths as $key => $request_learning_path) : ?>
                        <tr>
                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                              <span
                                class="text-sm text-gray-600 dark:text-neutral-400"
                                ><?= $key + 1 ?>.</span
                              >
                            </div>
                          </td>
                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                              <span
                                class="text-sm text-gray-600 dark:text-neutral-400"
                                ><?= $request_learning_path['user_fullname']; ?></span
                              >
                            </div>
                          </td>
                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                              <span
                                class="text-sm text-gray-600 dark:text-neutral-400"
                                ><?= date('d/m/Y', strtotime($request_learning_path['created_at'])); ?></span
                              >
                            </div>
                          </td>
                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                              <span
                                class="text-sm text-gray-600 dark:text-neutral-400"
                                ><?= $request_learning_path['learning_path_name']; ?></span
                              >
                            </div>
                          </td>
                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3 text-center">
                              <?php if ($request_learning_path['status'] == 'pending') : ?>
                                <span
                                  class="text-xs text-yellow-800 bg-yellow-100 py-1 px-1.5 rounded-md"
                                  >Pending</span
                                >
                              <?php elseif ($request_learning_path['status'] == 'approved') : ?>
                                <span
                                  class="text-xs text-green-800 bg-green-100 py-1 px-1.5 rounded-md"
                                  >Approve</span
                                >
                              <?php else : ?>
                                <span
                                  class="text-xs text-red-800 bg-red-100 py-1 px-1.5 rounded-md"
                                  >Reject</span
                                >
                              <?php endif; ?>
                            </div>
                          </td>
                          <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-1.5 text-end">
                              <div
                                class="hs-dropdown [--placement:bottom-right] relative inline-block"
                              >
                                <a
                                  href="<?= base_url('detail-request/').$request_learning_path['id'] ?>"
                                  type="button"
                                  class="block"
                                  data-hs-overlay="#hs-ai-invoice-modal"
                                >
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
          <!-- End Request -->
        </div>
      </div>
    </section>
<?= $this->endSection() ?>