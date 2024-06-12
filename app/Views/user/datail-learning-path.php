<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
    Course Page | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Deskripsi -->
    <section class="w-full mx-auto px-5 mt-12 sm:px-20 sm:mt-24">
      <div class="w-full">
        <div class="w-full grid grid-cols-1 md:grid-cols-1 lg:grid-cols-12 lg:gap-5">
          <div class="lg:col-span-3">
            <div class="aspect-w-10 aspect-h-10 lg:aspect-none">
              <img class="w-full h-100 object-cover shadow-md rounded-xl" src="<?= base_url('images-thumbnail/').$learning_path['thumbnail'] ?>" alt="Image Description" />
            </div>
          </div>
          <div class="col-span-9 flex flex-col justify-between h-full py-5">
            <div>
              <div class="space-y-3">
                <div class="flex justify-between">
                  <h1 class="text-2xl font-bold text-gray-800 md:text-3xl lg:text-4xl"><?= $learning_path['name'] ?></h1>

                  <div class="space-x-2">
                    <button
                      class="py-2 px-3 text-sm font-semibold text-gray-800 bg-green-400 rounded-md shadow-sm hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all dark:bg-green-500 dark:hover:bg-blue-500 dark:focus:ring-blue-500"
                    >
                      Ajukan
                    </button>
                  </div>

                  <!-- Modal edit Learning Path -->
                  <div id="hs-edit-learning-path" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                    <div
                      class="flex justify-center items-center hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto"
                    >
                      <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-neutral-700/70">
                        <div class="p-4 overflow-y-auto">
                          <div class="sm:divide-y divide-gray-200 dark:divide-neutral-700">
                            <div class="py-3 sm:py-6">
                              <!-- Form -->
                              <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
                                <div class="border-b-2 py-5 border-gray-500">
                                  <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">Edit Learning Path</h2>
                                  <p class="text-sm text-gray-400 md:text-md lg:text-md dark:text-neutral-400">Lengkapi data untuk edit Learning Path</p>
                                </div>
                                <div class="py-5">
                                  <!-- Form -->
                                  <form>
                                    <div class="grid gap-4 md:grid lg:gap-6 lg:grid-cols-5">
                                      <div class="col-span-3 space-y-4">
                                        <!-- Nama Learning Path -->
                                        <div>
                                          <label for="nama_learning_path" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Nama Learning Path</label>
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
                                          <label for="keterangan_learning_path" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Keterangan Learning Path</label>
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
                                          <label for="divisi_learning_path" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Pilih Divisi</label>
                                          <select
                                            id="divisi_learning_path"
                                            name="divisi_learning_path"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                          >
                                            <option value="Pilih Divisi" disabled selected>Pilih Divisi</option>
                                            <option value="Finance">Finance</option>
                                            <option value="HRD">HRD</option>
                                            <option value="IT">IT</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Operasional">Operasional</option>
                                          </select>
                                        </div>
                                        <!-- End Divisi -->
                                      </div>
                                      <div class="col-span-2">
                                        <!-- Thumbnail Learning Path -->
                                        <div>
                                          <label for="thumbnail_learning_path" class="inline-block text-sm font-medium text-gray-800 mb-1 dark:text-neutral-200"> Thumbnail Learning Path </label>

                                          <label
                                            for="thumbnail_learning_path"
                                            class="group p-4 sm:p-7 block cursor-pointer text-center border-2 border-dashed border-gray-200 rounded-lg focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2 dark:border-neutral-700"
                                          >
                                            <input id="thumbnail_learning_path" name="thumbnail_learning_path" type="file" class="sr-only" />
                                            <svg class="size-10 mx-auto text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                              <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z" />
                                              <path
                                                d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"
                                              />
                                            </svg>
                                            <span class="mt-2 block text-sm text-gray-800 dark:text-neutral-200">
                                              Browse your device or
                                              <span class="group-hover:text-blue-700 text-blue-800">drag 'n drop'</span>
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

                        <div class="flex justify-end items-center gap-x-2 p-4 sm:px-7 border-t dark:border-neutral-800">
                          <button
                            type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800"
                            data-hs-overlay="#hs-edit-learning-path"
                          >
                            Cancel
                          </button>
                          <button class="py-2 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Save
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Modal edit Learning Path -->
                </div>
                <p class="text-md text-gray-600 md:text-lg lg:text-lg dark:text-neutral-400">
                  <?= $learning_path['description'] ?>
                </p>
              </div>
            </div>
            <div class="grid grid-cols-2 gap-2 shadow-md rounded-lg p-4 mt-5 lg:grid-cols-4">
              <div class="text-start lg:border-r lg:border-gray-200 lg:text-center">
                <p class="text-md text-gray-400 md:text-lg lg:text-lg dark:text-neutral-400">Kode Learning Path</p>
                <p class="text-md text-gray-800 md:text-lg lg:text-lg dark:text-neutral-400">1214054</p>
              </div>
              <div class="text-start lg:border-r lg:border-gray-200 lg:text-center">
                <p class="text-md text-gray-400 md:text-lg lg:text-lg dark:text-neutral-400">Jumlah Materi</p>
                <p class="text-md text-gray-800 md:text-lg lg:text-lg dark:text-neutral-400">10</p>
              </div>
              <div class="text-start lg:border-r lg:border-gray-200s lg:text-center">
                <p class="text-md text-gray-400 md:text-lg lg:text-lg dark:text-neutral-400">Tanggal Publish</p>
                <p class="text-md text-gray-800 md:text-lg lg:text-lg dark:text-neutral-400">07/06/24</p>
              </div>
              <div class="text-start lg:text-center">
                <p class="text-md text-gray-400 md:text-lg lg:text-lg dark:text-neutral-400">Divisi</p>
                <p class="text-md text-gray-800 md:text-lg lg:text-lg dark:text-neutral-400">Finance</p>
              </div>
            </div>
          </div>
        </div>

        <div class="w-full h-[1px] my-10 bg-gray-500"></div>
      </div>
    </section>
    <!-- End Deskripsi -->

    <!-- Daftar Course -->
    <section class="w-full mx-auto pb-8 px-5 sm:px-20 sm:pb-10">
      <div class="w-full mx-auto text-3xl font-bold">
        <h1>Daftar Course</h1>
      </div>

      <div class="w-full mx-auto mt-8">
        </div>
        <!-- Card Course -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-0 py-4 mx-auto mt-4">
          <!-- Grid -->
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card -->
            <a class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70" href="#">
              <div class="h-52 flex flex-col justify-center items-center bg-amber-500 rounded-t-xl">
                <img
                  src="https://img.freepik.com/free-photo/leader-authority-boss-coach-director-manager-concept_53876-133859.jpg?t=st=1717953192~exp=1717956792~hmac=4dd5765ea65682eedc1c253d21d25a05e86a8d1d01f85b03b61d1073303b46a5&w=900"
                  class="rounded-t-lg h-full w-full object-cover"
                  alt="Thumbnail"
                />
              </div>
              <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">Kepemimpinan</h3>
                <p class="mt-3 text-gray-500 dark:text-neutral-500"><i class="fas fa-users"></i> 1196 Peserta</p>
                <p class="mt-3 text-gray-500 dark:text-neutral-500"><i class="fas fa-video"></i> 10 Video</p>
              </div>
            </a>
            <!-- End Card -->
            <!-- Card -->
            <a class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70" href="#">
              <div class="h-52 flex flex-col justify-center items-center bg-amber-500 rounded-t-xl">
                <img
                  src="https://img.freepik.com/free-photo/young-network-engineer-working-server-room_23-2148323441.jpg?t=st=1717953355~exp=1717956955~hmac=61ff9810b79c17ca50af24472750ed57cc66c18bccc3fc842b8c287267047f9b&w=996"
                  class="rounded-t-lg h-full w-full object-cover"
                  alt="Thumbnail"
                />
              </div>
              <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">Public Speaking</h3>
                <p class="mt-3 text-gray-500 dark:text-neutral-500"><i class="fas fa-users"></i> 1196 Peserta</p>
                <p class="mt-3 text-gray-500 dark:text-neutral-500"><i class="fas fa-video"></i> 10 Video</p>
              </div>
            </a>
            <!-- End Card -->
            <!-- Card -->
            <a class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70" href="#">
              <div class="h-52 flex flex-col justify-center items-center bg-amber-500 rounded-t-xl">
                <img
                  src="https://img.freepik.com/free-photo/businesspeople-working-finance-accounting-analyze-financi_74952-1399.jpg?t=st=1717957554~exp=1717961154~hmac=69ffad48e03964d64fdbef5e119fdba050d0c94a55900b8eaa843b01de675368&w=996"
                  class="rounded-t-lg h-full w-full object-cover"
                  alt="Thumbnail"
                />
              </div>
              <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">Tableau</h3>
                <p class="mt-3 text-gray-500 dark:text-neutral-500"><i class="fas fa-users"></i> 1196 Peserta</p>
                <p class="mt-3 text-gray-500 dark:text-neutral-500"><i class="fas fa-video"></i> 10 Video</p>
              </div>
            </a>
            <!-- End Card -->
            <!-- Card -->
            <a class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70" href="#">
              <div class="h-52 flex flex-col justify-center items-center bg-amber-500 rounded-t-xl">
                <img
                  src="https://img.freepik.com/free-photo/business-man-working-office-desktop_23-2148194708.jpg?t=st=1717957498~exp=1717961098~hmac=2ce5120caaadfccbb9db0d7f1510f5af9fef71a7739c8b0b4df7cb5bd0710c44&w=996"
                  class="rounded-t-lg h-full w-full object-cover"
                  alt="Thumbnail"
                />
              </div>
              <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">Audit Keuangan</h3>
                <p class="mt-3 text-gray-500 dark:text-neutral-500"><i class="fas fa-users"></i> 1196 Peserta</p>
                <p class="mt-3 text-gray-500 dark:text-neutral-500"><i class="fas fa-video"></i> 10 Video</p>
              </div>
            </a>
            <!-- End Card -->
          </div>
          <!-- End Grid -->
        </div>
        <!-- End Card Course -->
      </div>
    </section>
    <!-- End Daftar Course -->
<?= $this->endSection() ?>