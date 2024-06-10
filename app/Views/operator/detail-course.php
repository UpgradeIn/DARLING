<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
    Detail Course | Damri Course
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
                src="<?= base_url('images-thumbnail/').$course['thumbnail'] ?>"
                alt="Thumbnail Course"
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
                    <?= $course['name'] ?>
                  </h1>

                  <div class="space-x-2 flex">
                    <form id="updateSubcourseSequenceForm" action="<?= base_url('update-subcourses-sequence') ?>" method="POST" class="flex">
                      <?= csrf_field(); ?>
                      <input type="hidden" name="result" id="resultInput">
                      <button id="saveSubcourseSequence"
                        class="py-2 px-3 text-sm font-semibold text-gray-800 bg-green-400 rounded-md shadow-sm hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all dark:bg-green-500 dark:hover:bg-blue-500 dark:focus:ring-blue-500"
                      >
                        Simpan
                      </button>
                    </form>
                    <button
                      class="py-2 px-6 text-sm font-semibold text-gray-800 bg-yellow-400 rounded-md shadow-sm hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition-all dark:bg-yellow-500 dark:hover:bg-blue-500 dark:focus:ring-blue-500"
                      data-hs-overlay="#hs-edit-learning-path"
                    >
                      Edit
                    </button>
                    <form action="<?= base_url('delete-courses/').$course['id']; ?>" method="POST" class="flex">
                      <?= csrf_field(); ?>
                      <input type="hidden" name="_method" value="DELETE">
                      <button
                        class="py-2 px-4 text-sm font-semibold text-gray-800 bg-red-400 rounded-md shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-all dark:bg-red-500 dark:hover:bg-red-500 dark:focus:ring-red-500"
                      >
                        Hapus
                      </button>
                    </form>
                  </div>

                  <!-- Modal edit Learning Path -->
                  <div
                    id="hs-edit-learning-path"
                    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                    <div
                      class="flex justify-center items-center hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto">
                      <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-neutral-700/70">
                        <div class="p-4 overflow-y-auto">
                          <div class="sm:divide-y divide-gray-200 dark:divide-neutral-700">
                            <div class="py-3 sm:py-6">
                              <!-- Form -->
                              <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
                                <div class="border-b-2 py-5 border-gray-500">
                                  <h2
                                    class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                                    Edit Learning Path
                                  </h2>
                                  <p
                                    class="text-sm text-gray-400 md:text-md lg:text-md dark:text-neutral-400">
                                    Lengkapi data untuk edit Learning Path
                                  </p>
                                </div>
                                <div class="py-5">
                                  <!-- Form -->
                                  <form>
                                    <div
                                      class="grid gap-4 md:grid lg:gap-6 lg:grid-cols-5">
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
                                            >Keterangan Learning Path</label>
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
                                            >Pilih Divisi</label>
                                          <select
                                            id="divisi_learning_path"
                                            name="divisi_learning_path"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                            <option
                                              value="Pilih Divisi"
                                              disabled
                                              selected>
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
                                            class="inline-block text-sm font-medium text-gray-800 mb-1 dark:text-neutral-200">
                                            Thumbnail Learning Path
                                          </label>

                                          <label
                                            for="thumbnail_learning_path"
                                            class="group p-4 sm:p-7 block cursor-pointer text-center border-2 border-dashed border-gray-200 rounded-lg focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2 dark:border-neutral-700">
                                            <input
                                              id="thumbnail_learning_path"
                                              name="thumbnail_learning_path"
                                              type="file"
                                              class="sr-only"/>
                                            <svg
                                              class="size-10 mx-auto text-gray-400 dark:text-neutral-600"
                                              xmlns="http://www.w3.org/2000/svg"
                                              width="16"
                                              height="16"
                                              fill="currentColor"
                                              viewBox="0 0 16 16">
                                              <path
                                                fill-rule="evenodd"
                                                d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                                              <path
                                                d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                                            </svg>
                                            <span
                                              class="mt-2 block text-sm text-gray-800 dark:text-neutral-200">
                                              Browse your device or
                                              <span
                                                class="group-hover:text-blue-700 text-blue-800"
                                                >drag 'n drop'</span>
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
                          class="flex justify-end items-center gap-x-2 p-4 sm:px-7 border-t dark:border-neutral-800">
                          <button
                            type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800"
                            data-hs-overlay="#hs-edit-learning-path">
                            Cancel
                          </button>
                          <button
                            class="py-2 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Save
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Modal edit Learning Path -->
                </div>
                <p
                  class="text-md text-gray-600 md:text-lg lg:text-lg dark:text-neutral-400">
                  <?= $course['description'] ?>
                </p>
              </div>
            </div>
            <div
              class="grid grid-cols-2 gap-2 shadow-md rounded-lg p-4 mt-5 lg:grid-cols-3"
            >
              <div
                class="text-start lg:border-r lg:border-gray-200 lg:text-center"
              >
                <p
                  class="text-md text-gray-400 md:text-lg lg:text-lg dark:text-neutral-400"
                >
                  Kode Course
                </p>
                <p
                  class="text-md text-gray-800 md:text-lg lg:text-lg dark:text-neutral-400"
                >
                    <?= $course['id'] ?>
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
              <div class="text-start lg:text-center">
                <p
                  class="text-md text-gray-400 md:text-lg lg:text-lg dark:text-neutral-400"
                >
                  Tanggal Publish
                </p>
                <p
                  class="text-md text-gray-800 md:text-lg lg:text-lg dark:text-neutral-400"
                >
                    <?= $course['published_at'] ? $course['published_at'] : 'Belum dipublikasi' ?>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="w-full h-[1px] my-10 bg-gray-500"></div>
      </div>
    </section>
    <!-- End Deskripsi -->

    <!-- Tabel Sub Course -->
    <section class="w-full mx-auto pb-8 px-5 sm:px-20 sm:pb-10">
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
          Kelola Sub Materi
        </h1>
        <p
          class="text-sm text-gray-400 md:text-md lg:text-md dark:text-neutral-400"
        >
          Kelola sub materi yang ada pada course ini
        </p>
      </div>
      <!-- Table Sub Course -->
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
                  <div class="flex space-x-2">
                    <!-- Create Pre Test -->
                    <button
                      class="py-1 px-2 bg-blue-800 text-white rounded-md hover:bg-blue-900"
                    >
                      + Pre Test
                    </button>
                    <!-- End Create Pre Test -->

                    <!-- Create Video -->
                    <button
                      class="py-1 px-2 bg-blue-800 text-white rounded-md hover:bg-blue-900"
                      data-hs-overlay="#hs-create-video"
                    >
                      + Video
                    </button>

                    <!-- Modal Create Video -->
                    <div
                      id="hs-create-video"
                      class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                    >
                      <div
                        class="md:px-4 hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto"
                      >
                        <form
                          action="<?= base_url('create-subcourses'); ?>"
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
                                Tambah Video
                              </h2>
                              <p
                                class="text-sm text-gray-400 md:text-md lg:text-md dark:text-neutral-400"
                              >
                                Lengkapi data untuk menambahkan video sub materi
                              </p>
                            </div>

                            <div class="p-4 overflow-y-auto">
                              <div
                                class="sm:divide-y divide-gray-200 dark:divide-neutral-700"
                              >
                                <div class="py-3 sm:py-5">
                                  <!-- form -->
                                  <div class="space-y-4">
                                    <!-- Judul Sub Materi Video -->
                                    <input type="hidden" name="type" value="video">
                                    <input type="hidden" name="course_id" value="<?= $course['id']; ?>">
                                    <input type="hidden" name="sequence" value="<?= count($subcourses) + 1 ?>">
                                    <div>
                                      <label
                                        for="title"
                                        class="block mb-2 text-sm text-gray-700 font-medium dark:text-white"
                                        >Judul Sub Materi</label
                                      >
                                      <input
                                        type="text"
                                        name="title"
                                        id="title"
                                        placeholder="Inputkan judul sub materi"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                      />
                                    </div>
                                    <!-- End Judul Sub Materi Video  -->

                                    <!-- Link Video -->
                                    <div>
                                      <label
                                        for="content"
                                        class="block mb-2 text-sm text-gray-700 font-medium dark:text-white"
                                        >Link Video</label
                                      >
                                      <input
                                        type="text"
                                        name="content"
                                        id="content"
                                        placeholder="Inputkan link video"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                      />
                                    </div>
                                    <!-- End Link Video  -->
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
                                data-hs-overlay="#hs-create-video"
                              >
                                Cancel
                              </a>
                              <button
                                type="submit"
                                class="py-2 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-800 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                              >
                                Save
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- End Modal Create Video -->

                    <!-- End Create Video -->

                    <!-- Create Teks -->
                    <button
                      class="py-1 px-2 bg-blue-800 text-white rounded-md hover:bg-blue-900"
                      data-hs-overlay="#hs-create-teks"
                    >
                      + Teks
                    </button>

                    <!-- Modal Create Materi Teks -->
                    <div
                      id="hs-create-teks"
                      class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                    >
                      <div
                        class="md:px-4 hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto"
                      >
                        <form
                          action="<?= base_url('create-subcourses'); ?>"
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
                                Tambah Materi Teks
                              </h2>
                              <p
                                class="text-sm text-gray-400 md:text-md lg:text-md dark:text-neutral-400"
                              >
                                Lengkapi data untuk menambahkan materi teks
                              </p>
                            </div>

                            <div class="p-4 overflow-y-auto">
                              <div
                                class="sm:divide-y divide-gray-200 dark:divide-neutral-700"
                              >
                                <div class="py-3 sm:py-5">
                                  <!-- form -->
                                  <div class="space-y-4">
                                    <!-- Judul Materi Teks -->
                                    <input type="hidden" name="type" value="written">
                                    <input type="hidden" name="course_id" value="<?= $course['id']; ?>">
                                    <input type="hidden" name="sequence" value="<?= count($subcourses) + 1 ?>">
                                    <div>
                                      <label
                                        for="title"
                                        class="block mb-2 text-sm text-gray-700 font-medium dark:text-white"
                                        >Judul Materi Teks</label
                                      >
                                      <input
                                        type="text"
                                        name="title"
                                        id="title"
                                        placeholder="Inputkan judul materi teks"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                      />
                                    </div>
                                    <!-- End Judul Materi Teks  -->

                                    <!-- Content Materi -->
                                    <div>
                                      <label
                                        for="content"
                                        class="block mb-2 text-sm text-gray-700 font-medium dark:text-white"
                                        >Content Materi Teks</label
                                      >
                                      <textarea
                                        id="content"
                                        placeholder="Inputkan content materi teks"
                                        name="content"
                                        rows="4"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                      ></textarea>
                                    </div>
                                    <!-- End Content Materi -->
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
                                data-hs-overlay="#hs-create-teks"
                              >
                                Cancel
                              </a>
                              <button
                                type="submit"
                                class="py-2 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-800 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                              >
                                Save
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- End Modal Create Materi Teks -->

                    <!-- End Create Teks -->

                    <!-- Create Post Test -->
                    <button
                      class="py-1 px-2 bg-blue-800 text-white rounded-md hover:bg-blue-900"
                    >
                      + Post Test
                    </button>
                    <!-- End Create Post Test -->

                    <!-- Create Module -->
                    <button
                      class="py-1 px-2 bg-blue-800 text-white rounded-md hover:bg-blue-900"
                      data-hs-overlay="#hs-create-module"
                    >
                      + Module
                    </button>

                    <!-- Modal Create Module -->
                    <div
                      id="hs-create-module"
                      class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                    >
                      <div
                        class="md:px-4 hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto"
                      >
                        <form
                          action="<?= base_url('create-module'); ?>"
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
                                Tambah Module
                              </h2>
                              <p
                                class="text-sm text-gray-400 md:text-md lg:text-md dark:text-neutral-400"
                              >
                                Lengkapi data untuk menambahkan module sub
                                materi
                              </p>
                            </div>

                            <div class="p-4 overflow-y-auto">
                              <div
                                class="sm:divide-y divide-gray-200 dark:divide-neutral-700"
                              >
                                <div class="py-3 sm:py-5">
                                  <!-- form -->
                                  <div class="space-y-4">
                                    <!-- Judul Module -->
                                    <div>
                                      <label
                                        for="module"
                                        class="block mb-2 text-sm text-gray-700 font-medium dark:text-white"
                                        >Judul Module</label
                                      >
                                      <input
                                        type="text"
                                        name="module"
                                        id="module"
                                        placeholder="Inputkan judul module"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                      />
                                    </div>
                                    <!-- End Judul Materi Teks  -->

                                    <!-- Upload Module -->
                                    <div>
                                      <label
                                        for="module"
                                        class="block mb-2 text-sm text-gray-700 font-medium dark:text-white"
                                        >Upload Module</label
                                      >
                                      <label for="upload_module" class="sr-only"
                                        >Choose file</label
                                      >
                                      <input
                                        type="file"
                                        name="upload_module"
                                        id="upload_module"
                                        class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 file:bg-gray-50 file:border-0 file:me-4 file:py-2 file:px-4 dark:file:bg-neutral-700 dark:file:text-neutral-400"
                                      />
                                    </div>
                                    <!-- End Upload Module -->
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
                                data-hs-overlay="#hs-create-module"
                              >
                                Cancel
                              </a>
                              <button
                                type="submit"
                                class="py-2 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-800 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                              >
                                Save
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- End Modal Create Module -->

                    <!-- End Create Module -->
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
                            Sub Materi
                          </span>
                        </div>
                      </th>

                      <th scope="col" class="px-6 py-3 text-start">
                        <div class="flex justify-center items-center gap-x-2">
                          <span
                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                          >
                            Detail
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
                    <?php foreach ($subcourses as $subcourse): ?>
                    <tr class="hover:bg-gray-100 cursor-move" id="<?= $subcourse['id'] ?>">
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span
                            id="sequence"
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            ><?= $subcourse['sequence'] ?></span
                          >.
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            ><?= $subcourse['title'] ?></span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="flex justify-center px-6 py-3">
                          <span
                            class="text-sm text-gray-600 dark:text-neutral-400"
                            ><?= $subcourse['type'] ?></span
                          >
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="flex justify-end space-x-2 px-6 py-3">
                          <button
                            type="button"
                            class="flex flex-shrink-0 justify-center items-center gap-2 size-[38px] text-sm font-semibold rounded-full border border-transparent bg-yellow-400 text-gray-800 hover:bg-yellow-500 disabled:opacity-50 disabled:pointer-events-none"
                          >
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
                              class="flex-shrink-0 size-4"
                            >
                              <path
                                d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"
                              />
                            </svg>
                          </button>
                          <button
                            type="button"
                            class="flex flex-shrink-0 justify-center items-center gap-2 size-[38px] text-sm font-semibold rounded-full border border-transparent bg-red-400 text-gray-800 hover:bg-red-500 disabled:opacity-50 disabled:pointer-events-none"
                          >
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
                              class="flex-shrink-0 size-4"
                            >
                              <path d="M3 6h18" />
                              <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                              <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                              <line x1="10" x2="10" y1="11" y2="17" />
                              <line x1="14" x2="14" y1="11" y2="17" />
                            </svg>
                          </button>
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
      <!-- End Table Sub Course -->
    </section>
    <!-- End Table Sub Course -->
<?= $this->endSection() ?>


<?= $this->section('add_js') ?>
    <script src="<?= base_url('assets/js/update-sequence-subcourse.js') ?>"></script>
<?= $this->endSection() ?>