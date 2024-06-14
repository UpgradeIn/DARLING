<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
    Detail Learning Path | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Deskripsi -->
    <section class="w-full mx-auto px-5 mt-12 sm:px-20 sm:mt-24">
      <div class="w-full">
        <div
          class="w-full grid grid-cols-1 md:grid-cols-1 lg:grid-cols-12 lg:gap-7"
        >
          <div class="lg:col-span-3">
            <div class="aspect-w-10 aspect-h-10 lg:aspect-none">
              <img
                class="w-full h-auto object-cover shadow-md rounded-xl"
                src="<?= base_url('images-thumbnail/').$learningPaths['thumbnail'] ?>"
                alt="Thumbnail Learning Path"
              />
            </div>
          </div>
          <div class="col-span-9 flex flex-col justify-between h-full py-5">
            <div>
              <div class="space-y-3">
                <div class="flex justify-between">
                  <h1
                    class="text-2xl font-bold text-gray-800 md:text-3xl lg:text-4xl"
                  >
                  <?= $learningPaths['name'] ?>
                  </h1>

                  <div class="space-x-2 flex">
                      <button
                        class="py-2 px-4 text-sm font-semibold text-gray-800 bg-green-400 rounded-md shadow-sm hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all dark:bg-green-500 dark:hover:bg-green-500 dark:focus:ring-green-500"
                        data-hs-overlay="#hs-publish-course"
                      >
                        Publish
                      </button>
                      <button
                        class="py-2 px-6 text-sm font-semibold text-gray-800 bg-yellow-400 rounded-md shadow-sm hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition-all dark:bg-yellow-500 dark:hover:bg-blue-500 dark:focus:ring-blue-500"
                        data-hs-overlay="#hs-edit-learning-path"
                      >
                        Edit
                      </button>
                      <!-- Modal edit Learning Path -->
                      <div
                        id="hs-edit-learning-path"
                        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                        <div
                          class="flex justify-center items-center hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto">
                          <div
                              class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-neutral-700/70">
                              <div
                                class="py-3 px-4 border-b dark:border-neutral-800"
                              >
                                <h2
                                  class="text-xl font-bold text-gray-800 dark:text-neutral-200"
                                >
                                  Edit Learning Path
                                </h2>
                                <p
                                  class="text-sm text-gray-400 md:text-md lg:text-md dark:text-neutral-400"
                                >
                                  Lengkapi data untuk mengedit learning path
                                </p>
                              </div>

                              <div class="p-4 overflow-y-auto">
                                <div
                                  class="sm:divide-y divide-gray-200 dark:divide-neutral-700"
                                >
                                  <div class="py-3 sm:py-6">
                                    <!-- Form -->
                                    <form>
                                      <div class="grid gap-4 md:grid lg:gap-6 lg:grid-cols-5">
                                        <div class="col-span-3 space-y-4">
                                          <!-- Nama Learning Path -->
                                          <div>
                                            <label
                                              for="nama_learning_path"
                                              class="block mb-2 text-sm text-gray-700 font-medium dark:text-white"
                                              >Nama Learning Path</label
                                            >
                                            <input
                                              type="text"
                                              value=" <?= $learningPaths['name'] ?>"
                                              name="nama_learning_path"
                                              id="nama_learning_path"
                                              placeholder="Inputkan nama learning path"
                                              class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                            />
                                          </div>
                                          <!-- End Nama Learning Path  -->

                                          <!-- Keterangan -->
                                          <div>
                                            <label
                                              for="keterangan_learning_path"
                                              class="block mb-2 text-sm text-gray-700 font-medium dark:text-white"
                                              >Keterangan Learning Path</label
                                            >
                                            <textarea
                                              id="keterangan_learning_path"
                                              placeholder="Inputkan keterangan learning path"
                                              name="keterangan_learning_path"
                                              rows="4"
                                              class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                            ><?= $learningPaths['description'] ?></textarea>
                                          </div>
                                          <!-- End Keterangan -->

                                          <!-- Periode -->
                                          <div class="sm:grid grid-cols-2 gap-4">
                                            <div>
                                              <label
                                                for="period"
                                                class="block mb-2 text-sm text-gray-700 font-medium dark:text-white"
                                                >Periode</label
                                              >
                                              <form>
                                                <label for="period" class="sr-only"
                                                  >Periode</label
                                                >
                                                <input
                                                  type="number"
                                                  name="period"
                                                  id="period"
                                                  value="<?= $learningPaths['period'] ?>"
                                                  class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 file:bg-gray-300 file:border-0 file:me-4 file:py-3 file:px-4 dark:file:bg-neutral-700 dark:file:text-neutral-400"
                                                />
                                              </form>
                                            </div>
                                          </div>
                                          <!-- End Periode -->

                                        </div>
                                        <div class="col-span-2">
                                          <!-- Thumbnail Learning Path -->
                                          <div>
                                            <label for="thumbnail_learning_path" class="inline-block text-sm font-medium text-gray-800 mb-1 dark:text-neutral-200">
                                              Thumbnail Learning Path
                                            </label>
                                            <label for="thumbnail_learning_path" class="group p-4 sm:p-7 block cursor-pointer text-center border-2 border-dashed border-gray-200 rounded-lg focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2 dark:border-neutral-700">
                                              <input id="thumbnail_learning_path" name="thumbnail_learning_path" type="file" class="sr-only" onchange="previewImageLearningPath(event)" />
                                              <div id="thumbnail_container" class="flex flex-col items-center justify-center">
                                                <?php if(isset($learningPaths['thumbnail'])): ?>
                                                  <img id="thumbnail_preview_lp" src="<?= base_url('images-thumbnail/').$learningPaths['thumbnail'] ?>" class="w-full h-auto object-cover shadow-md rounded-xl" />
                                                <?php else: ?>
                                                  <img id="thumbnail_preview_lp" src="" style="display: none;" class="w-full h-auto object-cover shadow-md rounded-xl" />
                                                <?php endif; ?>
                                              </div>
                                            </label>
                                          </div>
                                          <!-- End Thumbnail Learning Path -->
                                        </div>
                                      </div>
                                      <!-- End Grid -->
                                    </form>
                                    <!-- End Form -->
                                  </div>
                                </div>
                              </div>

                              <div
                                class="flex justify-end items-center gap-x-2 p-4 sm:px-7 border-t dark:border-neutral-800"
                              >
                                <a
                                  type="button"
                                  class="cursor-pointer py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800"
                                  data-hs-overlay="#hs-edit-learning-path"
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
                        </div>
                      </div>
                      <!-- End Modal edit Learning Path -->

                      <button
                        class="py-2 px-4 text-sm font-semibold text-gray-800 bg-red-400 rounded-md shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-all dark:bg-red-500 dark:hover:bg-red-500 dark:focus:ring-red-500"
                        data-hs-overlay="#delete_learning_path"
                      >
                        Hapus
                      </button>
                      
                      <!-- Modal Hapus -->
                      <div id="delete_learning_path" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
                        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                          <div class="relative flex flex-col bg-white shadow-lg rounded-xl dark:bg-neutral-900">
                            <div class="absolute top-2 end-2">
                              <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-transparent dark:hover:bg-neutral-700" data-hs-overlay="#delete_learning_path">
                                <span class="sr-only">Close</span>
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                              </button>
                            </div>

                            <div class="p-4 sm:p-10 text-center overflow-y-auto">
                              <!-- Icon -->
                              <span class="mb-4 inline-flex justify-center items-center size-[62px] rounded-full border-4 border-red-50 bg-red-100 text-red-500 dark:bg-red-700 dark:border-red-600 dark:text-red-100">
                                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                              </span>
                              <!-- End Icon -->

                              <h3 class="mb-2 text-2xl font-bold text-gray-800 dark:text-neutral-200">
                                Hapus Learning Path
                              </h3>
                              <p class="text-gray-500 dark:text-neutral-500">
                                Apakah Anda yakin ingin menghapus learning path ini? Semua data yang terkait dengan learning path ini akan dihapus secara permanen. Tindakan ini tidak dapat dibatalkan.
                              </p>

                              <div class="mt-6 flex justify-center gap-x-4">
                              <form action="<?= base_url('delete-learningpaths/').$learningPaths['id']; ?>" method="POST" class="flex">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                  <button class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border bg-red-200 border-red-200 text-red-800 shadow-sm hover:bg-red-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-red-200 dark:border-red-800 dark:text-red-800 dark:hover:bg-red-300">
                                    Hapus
                                  </button>
                                </form>
                                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800" data-hs-overlay="#delete_learning_path"">
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
                <p
                  class="text-md text-gray-600 md:text-lg lg:text-lg dark:text-neutral-400"
                >
                  <?= $learningPaths['description'] ?>
                </p>
              </div>
            </div>
            <div
              class="grid grid-cols-2 gap-2 shadow-md rounded-lg p-4 mt-5 lg:grid-cols-4"
            >
              <div
                class="text-start lg:border-r lg:border-gray-200 lg:text-center"
              >
                <p
                  class="text-md text-gray-400 md:text-lg lg:text-lg dark:text-neutral-400"
                >
                  Kode Learning Path
                </p>
                <p
                  class="text-md text-gray-800 md:text-lg lg:text-lg dark:text-neutral-400"
                >
                  <?= $learningPaths['id'] ?>
                </p>
              </div>
              <div
                class="text-start lg:border-r lg:border-gray-200 lg:text-center"
              >
                <p
                  class="text-md text-gray-400 md:text-lg lg:text-lg dark:text-neutral-400"
                >
                  Jumlah Materi
                </p>
                <p
                  class="text-md text-gray-800 md:text-lg lg:text-lg dark:text-neutral-400"
                >
                  20
                </p>
              </div>
              <div
                class="text-start lg:border-r lg:border-gray-200s lg:text-center"
              >
                <p
                  class="text-md text-gray-400 md:text-lg lg:text-lg dark:text-neutral-400"
                >
                  Tanggal Publish
                </p>
                <p
                  class="text-md text-gray-800 md:text-lg lg:text-lg dark:text-neutral-400"
                >
                  <?= $learningPaths['published_at'] ? $learningPaths['published_at'] : 'Belum dipublikasi' ?>
                </p>
              </div>
              <div class="text-start lg:text-center">
                <p
                  class="text-md text-gray-400 md:text-lg lg:text-lg dark:text-neutral-400"
                >
                  Divisi
                </p>
                <p
                  class="text-md text-gray-800 md:text-lg lg:text-lg dark:text-neutral-400"
                >
                  Finance
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="w-full h-[1px] my-10 bg-gray-500"></div>
      </div>
    </section>
    <!-- End Deskripsi -->

    <!-- Tabel Course -->
    <section class="w-full mx-auto pb-8 px-5 sm:px-20 sm:pb-10">
      <div class="pb-5">
        <h1
          class="text-xl font-semibold text-gray-800 md-text-xl lg:text-2xl dark:text-neutral-200"
        >
          Kelola Course
        </h1>

        <p
          class="text-sm text-gray-400 md:text-md lg:text-md dark:text-neutral-400"
        >
          Kelola course yang ada pada learning path ini
        </p>
      </div>
      <!-- Table Course -->
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
                  <div class="sm:w-[400px]">
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
                  <div class="space-x-2">
                    <button
                      class="py-2 px-3 text-sm font-semibold text-gray-800 bg-green-400 rounded-md shadow-sm hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all dark:bg-green-500 dark:hover:bg-blue-500 dark:focus:ring-blue-500"
                    >
                      Simpan
                    </button>
                    <button
                      class="py-2 px-3 text-sm font-semibold text-gray-800 bg-blue-400 rounded-md shadow-sm hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all dark:bg-blue-500 dark:hover:bg-blue-500 dark:focus:ring-blue-500"
                      data-hs-overlay="#modal_tambah_course"
                    >
                      Tambah Course
                    </button>

                    <!-- Modal Tambah Course -->
                    <div
                      id="modal_tambah_course"
                      class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                    >
                      <div
                        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto"
                      >
                        <div
                          class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-neutral-700/70"
                        >
                          <div
                            class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-800"
                          >
                            <h3
                              class="font-bold text-gray-800 dark:text-neutral-200"
                            >
                              Tambah Course
                            </h3>

                            <button
                              type="button"
                              class="flex justify-center items-center size-7 text-sm font-semibold rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-transparent dark:hover:bg-neutral-700"
                              data-hs-overlay="#modal_tambah_course"
                            >
                              <span class="sr-only">Close</span>
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
                                <path d="M18 6 6 18" />
                                <path d="m6 6 12 12" />
                              </svg>
                            </button>
                          </div>

                          <div class="p-4 overflow-y-auto">
                            <div
                              class="sm:divide-y divide-gray-200 dark:divide-neutral-700"
                            >
                              <div class="py-3 sm:py-6">
                                <!-- Table -->
                                <table
                                  class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700"
                                >
                                  <thead class="bg-gray-50 dark:bg-neutral-800">
                                    <tr>
                                      <th
                                        scope="col"
                                        class="ps-6 py-3 text-start"
                                      >
                                        <label
                                          for="hs-at-with-checkboxes-main"
                                          class="flex"
                                        >
                                          <input
                                            disabled
                                            type="checkbox"
                                            class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                            id="hs-at-with-checkboxes-main"
                                          />
                                          <span class="sr-only">Checkbox</span>
                                        </label>
                                      </th>

                                      <th
                                        scope="col"
                                        class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start"
                                      >
                                        <div class="flex items-center gap-x-2">
                                          <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                                          >
                                            Nama Course
                                          </span>
                                        </div>
                                      </th>
                                      <th
                                        scope="col"
                                        class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start"
                                      >
                                        <div class="flex items-center gap-x-2">
                                          <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                                          >
                                            Tipe Skill
                                          </span>
                                        </div>
                                      </th>
                                      <th
                                        scope="col"
                                        class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start"
                                      >
                                        <div class="flex items-center gap-x-2">
                                          <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                                          >
                                            Tipe Course
                                          </span>
                                        </div>
                                      </th>
                                    </tr>
                                  </thead>

                                  <tbody
                                    class="divide-y divide-gray-200 dark:divide-neutral-700"
                                  >
                                    <tr class="hover:bg-blue-100">
                                      <td class="size-px whitespace-nowrap">
                                        <div class="ps-6 py-3">
                                          <label
                                            for="hs-at-with-checkboxes-1"
                                            class="flex"
                                          >
                                            <input
                                              type="checkbox"
                                              class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                              id="hs-at-with-checkboxes-1"
                                            />
                                            <span class="sr-only"
                                              >Checkbox</span
                                            >
                                          </label>
                                        </div>
                                      </td>
                                      <td class="size-px whitespace-nowrap">
                                        <div
                                          class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3"
                                        >
                                          <div
                                            class="flex items-center gap-x-3"
                                          >
                                            <span
                                              class="block text-sm font-semibold text-gray-800 dark:text-neutral-200"
                                              >Microsoft Word</span
                                            >
                                          </div>
                                        </div>
                                      </td>
                                      <td class="size-px whitespace-nowrap">
                                        <div
                                          class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3"
                                        >
                                          <div
                                            class="flex items-center gap-x-3"
                                          >
                                            <span
                                              class="block text-sm font-semibold text-gray-800 dark:text-neutral-200"
                                              >Soft Skill</span
                                            >
                                          </div>
                                        </div>
                                      </td>
                                      <td class="size-px whitespace-nowrap">
                                        <div
                                          class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3"
                                        >
                                          <div
                                            class="flex items-center gap-x-3"
                                          >
                                            <span
                                              class="block text-sm font-semibold text-gray-800 dark:text-neutral-200"
                                              >Mandatory</span
                                            >
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr class="hover:bg-blue-100">
                                      <td class="size-px whitespace-nowrap">
                                        <div class="ps-6 py-3">
                                          <label
                                            for="hs-at-with-checkboxes-1"
                                            class="flex"
                                          >
                                            <input
                                              type="checkbox"
                                              class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                              id="hs-at-with-checkboxes-1"
                                            />
                                            <span class="sr-only"
                                              >Checkbox</span
                                            >
                                          </label>
                                        </div>
                                      </td>
                                      <td class="size-px whitespace-nowrap">
                                        <div
                                          class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3"
                                        >
                                          <div
                                            class="flex items-center gap-x-3"
                                          >
                                            <span
                                              class="block text-sm font-semibold text-gray-800 dark:text-neutral-200"
                                              >Microsoft Word</span
                                            >
                                          </div>
                                        </div>
                                      </td>
                                      <td class="size-px whitespace-nowrap">
                                        <div
                                          class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3"
                                        >
                                          <div
                                            class="flex items-center gap-x-3"
                                          >
                                            <span
                                              class="block text-sm font-semibold text-gray-800 dark:text-neutral-200"
                                              >Hard Skill</span
                                            >
                                          </div>
                                        </div>
                                      </td>
                                      <td class="size-px whitespace-nowrap">
                                        <div
                                          class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3"
                                        >
                                          <div
                                            class="flex items-center gap-x-3"
                                          >
                                            <span
                                              class="block text-sm font-semibold text-gray-800 dark:text-neutral-200"
                                              >Opsional</span
                                            >
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr class="hover:bg-blue-100">
                                      <td class="size-px whitespace-nowrap">
                                        <div class="ps-6 py-3">
                                          <label
                                            for="hs-at-with-checkboxes-1"
                                            class="flex"
                                          >
                                            <input
                                              type="checkbox"
                                              class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                              id="hs-at-with-checkboxes-1"
                                            />
                                            <span class="sr-only"
                                              >Checkbox</span
                                            >
                                          </label>
                                        </div>
                                      </td>
                                      <td class="size-px whitespace-nowrap">
                                        <div
                                          class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3"
                                        >
                                          <div
                                            class="flex items-center gap-x-3"
                                          >
                                            <span
                                              class="block text-sm font-semibold text-gray-800 dark:text-neutral-200"
                                              >Microsoft Word</span
                                            >
                                          </div>
                                        </div>
                                      </td>
                                      <td class="size-px whitespace-nowrap">
                                        <div
                                          class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3"
                                        >
                                          <div
                                            class="flex items-center gap-x-3"
                                          >
                                            <span
                                              class="block text-sm font-semibold text-gray-800 dark:text-neutral-200"
                                              >Soft Skill</span
                                            >
                                          </div>
                                        </div>
                                      </td>
                                      <td class="size-px whitespace-nowrap">
                                        <div
                                          class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3"
                                        >
                                          <div
                                            class="flex items-center gap-x-3"
                                          >
                                            <span
                                              class="block text-sm font-semibold text-gray-800 dark:text-neutral-200"
                                              >Mandatory</span
                                            >
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <!-- End Table -->
                              </div>
                            </div>
                          </div>

                          <div
                            class="flex justify-end items-center gap-x-2 p-4 sm:px-7 border-t dark:border-neutral-800"
                          >
                            <a
                              type="button"
                              class="cursor-pointer py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800"
                              data-hs-overlay="#modal_tambah_course"
                            >
                              Cancel
                            </a>
                            <button
                              type="submit"
                              class="py-2 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                            >
                              Tambah
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal Tambah Course -->
                  </div>
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
                            Nama Course
                          </span>
                        </div>
                      </th>

                      <th scope="col" class="px-6 py-3">
                        <div
                          class="flex justify-end items-center gap-x-2"
                        ></div>
                      </th>
                    </tr>
                  </thead>

                  <tbody
                    id="sortable"
                    class="divide-y divide-gray-200 dark:divide-neutral-700"
                  >
                    <tr class="hover:bg-gray-100 cursor-move">
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span
                            id="sequence"
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >1</span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >Microsoft Office</span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5 text-end">
                          <div
                            class="hs-dropdown [--placement:bottom-right] relative inline-block"
                          >
                            <a
                              href=""
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
                    <tr class="hover:bg-gray-100 cursor-move">
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span
                            id="sequence"
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >2</span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >Microsoft Excel</span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5 text-end">
                          <div
                            class="hs-dropdown [--placement:bottom-right] relative inline-block"
                          >
                            <a
                              href=""
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
      <!-- End Table Course -->
    </section>
    <!-- End Table Course -->
<?= $this->endSection() ?>