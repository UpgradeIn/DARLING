<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
    Course Page | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="w-full mx-auto px-2 sm:px-4 md:px-8 lg:px-16 xl:px-20 mt-6 sm:mt-12 md:mt-16 lg:mt-20 xl:mt-24">
      <div class="w-full">
        <div class="container mx-auto pb-10 px-2 sm:px-3 md:px-4 lg:px-5 xl:px-6 py-5">
          <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-5">
            <!-- Content Section -->
            <?php if ($type == "test"): ?>
                <?= $this->include('user/content-test') ?>
            <?php elseif ($type == "video"): ?>
                <?= $this->include('user/content-video') ?>
            <?php else: ?>
                <?= $this->include('user/content-written') ?>
            <?php endif; ?>
            <!-- SubCourse List Section -->
            <div class="lg:col-span-4 flex flex-col justify-between">
              <!-- Checklist Section -->
              <div class="p-5 bg-white rounded-xl shadow-md mb-5">
                <ul class="space-y-2">
                  <li>
                    <input type="checkbox" id="pre-test" name="pre-test" class="mr-2" />
                    <label for="pre-test">Pre - test</label>
                  </li>
                  <li>
                    <input type="checkbox" id="video" name="video" class="mr-2" checked />
                    <label for="video">Video</label>
                  </li>
                  <li>
                    <input type="checkbox" id="teks" name="teks" class="mr-2" />
                    <label for="teks">Teks</label>
                  </li>
                  <li>
                    <input type="checkbox" id="post-test" name="post-test" class="mr-2" />
                    <label for="post-test">Post - test</label>
                  </li>
                </ul>
              </div>
              <!-- Result Section -->
              <div class="p-5 bg-white rounded-xl shadow-md">
                <h3 class="text-lg font-semibold text-center">Hasil Pengerjaan</h3>
                <div class="flex items-center justify-between mt-3 px-6 sm:px-8 md:px-10 lg:px-12 xl:px-14">
                  <div class="text-center">
                    <div class="text-2xl font-bold text-green-500">70%</div>
                    <div class="text-gray-700">Pre Test</div>
                    <div class="text-sm text-gray-500">7-10</div>
                  </div>
                  <div class="text-center">
                    <div class="text-2xl font-bold text-gray-500">0</div>
                    <div class="text-gray-700">Post Test</div>
                    <div class="text-sm text-gray-500">0-10</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Deskripsi -->

    <!-- Daftar Course -->
    <section class="w-full mx-auto pt-8 pb-8 px-5 sm:px-20 sm:pb-10 bg-slate-200">
      <h1 class="text-2xl font-semibold">Microsoft Excel</h1>
      <p class="text-gray-700 mb-2">Budi Wati - Pemateri</p>
      <p class="text-gray-600">
        Materi Microsoft Excel ini mencakup segala hal dari dasar hingga tingkat lanjutan, termasuk pembuatan dan pengelolaan spreadsheet, penggunaan formula dan fungsi, analisis data, serta visualisasi data dengan grafik dan tabel pivot.
      </p>

      <div class="flex flex-wrap items-center mt-6">
        <!-- Benefit Section -->
        <div class="w-full sm:w-auto flex items-center mb-4 sm:mb-0 sm:mr-6">
          <span class="text-gray-700 font-semibold mr-2">Benefit:</span>
          <span class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md mr-2">Sertifikat</span>
          <span class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md">Modul</span>
        </div>

        <!-- Progress Course Section -->
        <div class="w-full sm:w-auto flex flex-col mb-4 sm:mb-0 sm:mr-6">
          <span class="text-gray-700 font-semibold mb-1">Progress Course</span>
          <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 100%"></div>
          </div>
          <span class="text-gray-700 mt-1">100%</span>
        </div>

        <!-- Batas Waktu Belajar Section -->
        <div class="w-full sm:w-auto flex flex-col">
          <span class="text-gray-700 font-semibold mb-1">Batas Waktu Belajar</span>
          <span class="text-gray-700">Jun 25 - 2024 23:59</span>
          <span class="text-gray-500 text-sm">1 Bulan 1 Hari 1 Jam</span>
        </div>
      </div>
    </section>
<?= $this->endSection() ?>