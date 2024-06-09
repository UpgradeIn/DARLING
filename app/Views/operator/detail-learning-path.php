<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
    Detail Learning Path | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Deskripsi -->
    <section class="w-full mx-auto px-5 mt-12 sm:px-20 sm:mt-24">
      <div class="w-full">
        <div
          class="w-full grid grid-cols-1 md:grid-cols-1 lg:grid-cols-12 lg:gap-5"
        >
          <div class="lg:col-span-3">
            <div class="aspect-w-10 aspect-h-10 lg:aspect-none">
              <img
                class="w-full h-auto object-cover shadow-md rounded-xl"
                src="https://github.com/intern-monitoring/intern-monitoring.github.io/assets/94734096/a0007238-6732-4aa7-a0eb-13bf8af0bc60"
                alt="Image Description"
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
                    Akuntansi
                  </h1>

                  <div class="space-x-2">
                    <button
                      class="py-2 px-3 text-sm font-semibold text-gray-800 bg-green-400 rounded-md shadow-sm hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all dark:bg-green-500 dark:hover:bg-blue-500 dark:focus:ring-blue-500"
                    >
                      Simpan
                    </button>
                    <button
                      class="py-2 px-6 text-sm font-semibold text-gray-800 bg-yellow-400 rounded-md shadow-sm hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition-all dark:bg-yellow-500 dark:hover:bg-blue-500 dark:focus:ring-blue-500"
                      data-hs-overlay="#hs-edit-learning-path"
                    >
                      Edit
                    </button>

                    <button
                      class="py-2 px-4 text-sm font-semibold text-gray-800 bg-red-400 rounded-md shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-all dark:bg-red-500 dark:hover:bg-red-500 dark:focus:ring-red-500"
                    >
                      Hapus
                    </button>
                  </div>

                  <!-- Modal edit Learning Path -->
                  <div
                    id="hs-edit-learning-path"
                    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                  >
                    <div
                      class="flex justify-center items-center hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto"
                    >
                      <div
                        class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-neutral-700/70"
                      >
                        <div class="p-4 overflow-y-auto">
                          <div
                            class="sm:divide-y divide-gray-200 dark:divide-neutral-700"
                          >
                            <div class="py-3 sm:py-6">
                              <!-- Form -->
                              <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
                                <div class="border-b-2 py-5 border-gray-500">
                                  <h2
                                    class="text-xl font-bold text-gray-800 dark:text-neutral-200"
                                  >
                                    Edit Learning Path
                                  </h2>
                                  <p
                                    class="text-sm text-gray-400 md:text-md lg:text-md dark:text-neutral-400"
                                  >
                                    Lengkapi data untuk edit Learning Path
                                  </p>
                                </div>
                                <div class="py-5">
                                  <!-- Form -->
                                  <form>
                                    <div
                                      class="grid gap-4 md:grid lg:gap-6 lg:grid-cols-5"
                                    >
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
                                          ></textarea>
                                        </div>
                                        <!-- End Keterangan -->

                                        <!-- Divisi -->
                                        <div>
                                          <label
                                            for="divisi_learning_path"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white"
                                            >Pilih Divisi</label
                                          >
                                          <select
                                            id="divisi_learning_path"
                                            name="divisi_learning_path"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                          >
                                            <option
                                              value="Pilih Divisi"
                                              disabled
                                              selected
                                            >
                                              Pilih Divisi
                                            </option>
                                            <option value="Finance">
                                              Finance
                                            </option>
                                            <option value="HRD">HRD</option>
                                            <option value="IT">IT</option>
                                            <option value="Marketing">
                                              Marketing
                                            </option>
                                            <option value="Operasional">
                                              Operasional
                                            </option>
                                          </select>
                                        </div>
                                        <!-- End Divisi -->
                                      </div>
                                      <div class="col-span-2">
                                        <!-- Thumbnail Learning Path -->
                                        <div>
                                          <label
                                            for="thumbnail_learning_path"
                                            class="inline-block text-sm font-medium text-gray-800 mb-1 dark:text-neutral-200"
                                          >
                                            Thumbnail Learning Path
                                          </label>

                                          <label
                                            for="thumbnail_learning_path"
                                            class="group p-4 sm:p-7 block cursor-pointer text-center border-2 border-dashed border-gray-200 rounded-lg focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2 dark:border-neutral-700"
                                          >
                                            <input
                                              id="thumbnail_learning_path"
                                              name="thumbnail_learning_path"
                                              type="file"
                                              class="sr-only"
                                            />
                                            <svg
                                              class="size-10 mx-auto text-gray-400 dark:text-neutral-600"
                                              xmlns="http://www.w3.org/2000/svg"
                                              width="16"
                                              height="16"
                                              fill="currentColor"
                                              viewBox="0 0 16 16"
                                            >
                                              <path
                                                fill-rule="evenodd"
                                                d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"
                                              />
                                              <path
                                                d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"
                                              />
                                            </svg>
                                            <span
                                              class="mt-2 block text-sm text-gray-800 dark:text-neutral-200"
                                            >
                                              Browse your device or
                                              <span
                                                class="group-hover:text-blue-700 text-blue-800"
                                                >drag 'n drop'</span
                                              >
                                            </span>
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
                              <!-- Form -->
                            </div>
                          </div>
                        </div>

                        <div
                          class="flex justify-end items-center gap-x-2 p-4 sm:px-7 border-t dark:border-neutral-800"
                        >
                          <button
                            type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800"
                            data-hs-overlay="#hs-edit-learning-path"
                          >
                            Cancel
                          </button>
                          <button
                            class="py-2 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                          >
                            Save
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Modal edit Learning Path -->
                </div>
                <p
                  class="text-md text-gray-600 md:text-lg lg:text-lg dark:text-neutral-400"
                >
                  Learning Path Akuntansi ini memberikan pemahaman komprehensif
                  tentang prinsip dan praktik akuntansi. Peserta akan
                  mempelajari laporan keuangan, analisis keuangan, dan audit.
                  Jalur ini mempersiapkan peserta menghadapi tantangan akuntansi
                  profesional dengan percaya diri.
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
                  1214054
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
                  07/06/24
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
          Dafar Course
        </h1>
        <p
          class="text-sm text-gray-400 md:text-md lg:text-md dark:text-neutral-400"
        >
          Berikut adalah daftar course yang terdapat pada learning path ini.
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
                            Kode Course
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
                        <div class="flex items-center gap-x-2">
                          <span
                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                          >
                            Nama Pemateri
                          </span>
                        </div>
                      </th>

                      <th scope="col" class="px-6 py-3 text-center">
                        <div class="flex justify-center items-center gap-x-2">
                          <span
                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                          >
                            Tangal Pembuatan
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

                      <th scope="col" class="px-6 py-3 text-end"></th>
                    </tr>
                  </thead>

                  <tbody
                    class="divide-y divide-gray-200 dark:divide-neutral-700"
                  >
                    <tr>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >3599311954</span
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
                        <div class="px-6 py-3">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >Budi Sudarsono</span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3 text-center">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >07/06/24</span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >Akutansi</span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                          <div
                            class="hs-dropdown [--placement:bottom-right] relative inline-block"
                          >
                            <button
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
                            </button>
                          </div>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >3599311954</span
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
                        <div class="px-6 py-3">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >Budi Sudarsono</span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3 text-center">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >07/06/24</span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >Akutansi</span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                          <div
                            class="hs-dropdown [--placement:bottom-right] relative inline-block"
                          >
                            <button
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
                            </button>
                          </div>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >3599311954</span
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
                        <div class="px-6 py-3">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >Budi Sudarsono</span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3 text-center">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >07/06/24</span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >Akutansi</span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                          <div
                            class="hs-dropdown [--placement:bottom-right] relative inline-block"
                          >
                            <button
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
                            </button>
                          </div>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >3599311954</span
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
                        <div class="px-6 py-3">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >Budi Sudarsono</span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3 text-center">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >07/06/24</span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            >Akutansi</span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                          <div
                            class="hs-dropdown [--placement:bottom-right] relative inline-block"
                          >
                            <button
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
                            </button>
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