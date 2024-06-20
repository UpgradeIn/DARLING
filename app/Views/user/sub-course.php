<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
Course Page | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="w-full mx-auto px-2 sm:px-4 md:px-8 lg:px-16 xl:px-20 mt-6 sm:mt-12 md:mt-16 lg:mt-20 xl:mt-24">
  <div class="w-full">
    <div class="container mx-auto pb-10 px-2 sm:px-3 mt-16 md:px-4 lg:px-5 xl:px-6 py-5">
      <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-5">
        <!-- Content Section -->
        <div class="lg:col-span-8">
          <?php if ($type == "test") : ?>
            <?= $this->include('user/test-material') ?>
          <?php elseif ($type == "video") : ?>
            <?= $this->include('user/video-material') ?>
          <?php else : ?>
            <?= $this->include('user/written-material') ?>
          <?php endif; ?>
        </div>

        <!-- SubCourse List Section -->
        <div class="lg:col-span-4 flex flex-col justify-between mt-8 lg:mt-0">
          <!-- Checklist Section -->
          <div class="space-y-2 p-5 bg-white rounded-xl shadow-md mb-5">
            <h1 class="text-lg font-semibold text-start">Materi</h1>
            <div class="bg-white hover:bg-gray-50 dark:bg-neutral-900 dark:hover:bg-neutral-800">
              <ul class="divide-y divide-gray-200 dark:divide-neutral-700">
                <?php foreach ($allSubcourse as $subcourse) : ?>
                  <li class="group flex items-center justify-between p-3 transition-colors duration-200 ease-in-out bg-white hover:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800">
                    <a href="<?= base_url('course/' . $slug . '/sub/' . $subcourse['id']) ?>" class="flex items-center flex-grow">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-play w-6 h-6 group-hover:text-blue-600 dark:text-neutral-300 mr-2">
                        <circle cx="12" cy="12" r="10" />
                        <polygon points="10 8 16 12 10 16 10 8" />
                      </svg>
                      <span class="text-gray-800 dark:text-neutral-200 group-hover:text-blue-600"><?= $subcourse['sequence'] ?>. <?= $subcourse['title'] ?></span>
                    </a>
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600 dark:text-neutral-300">
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <!-- Result Section -->
          <div class="p-5 bg-white rounded-xl shadow-md">
            <h3 class="text-lg font-semibold text-center">Hasil Pengerjaan</h3>
            <div class="flex items-center justify-between mt-3 px-4">
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