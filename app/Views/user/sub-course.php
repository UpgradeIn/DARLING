<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
Course Page | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Menu Sub Course -->
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
          <div class="space-y-2 py-5 bg-white rounded-xl shadow-md mb-5">
            <h1 class="ms-5 text-lg font-semibold text-start">Materi</h1>
            <div class="bg-white hover:bg-gray-50 dark:bg-neutral-900 dark:hover:bg-neutral-800">
              <ul class="divide-y divide-gray-200 dark:divide-neutral-700">
                <?php foreach ($allSubcourse as $subcourse) : ?>
                  <?php $isActive = $id == $subcourse['id']; ?>
                  <li class="group flex items-center justify-between py-3 px-5 transition-colors duration-200 ease-in-out <?php echo $isActive ? 'bg-gray-200 hover:bg-gray-300' : 'bg-white hover:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800' ?>">
                    <a href="<?= base_url('course/' . $slug . '/sub/' . $subcourse['id']) ?>" class="flex items-center flex-grow">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-play w-6 h-6 group-hover:text-blue-800 dark:text-neutral-300 mr-2">
                        <circle cx="12" cy="12" r="10" />
                        <polygon points="10 8 16 12 10 16 10 8" />
                      </svg>
                      <span class="text-gray-800 dark:text-neutral-200 group-hover:text-blue-800"><?= $subcourse['sequence'] ?>. <?= $subcourse['title'] ?></span>
                    </a>
                    <svg id="statusBadge" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-check <?php echo $isActive ? 'text-green-500' : 'text-slate-300' ?>">
                      <path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" />
                      <path d="m9 12 2 2 4-4" />
                    </svg>
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
<!-- End Menu Sub Course -->

<!-- Deskripsi Course -->
<section class="w-full mx-auto pt-8 pb-8 px-5 sm:px-10 md:px-20 sm:pb-10 bg-slate-200">
  <h1 class="text-2xl font-semibold mb-2">Microsoft Excel</h1>
  <p class="text-gray-700 mb-2">Budi Wati - Pemateri</p>
  <p class="text-gray-600 mb-6">
    Materi Microsoft Excel ini mencakup segala hal dari dasar hingga tingkat lanjutan, termasuk pembuatan dan pengelolaan spreadsheet, penggunaan formula dan fungsi, analisis data, serta visualisasi data dengan grafik dan tabel pivot.
  </p>

  <div class="flex flex-col sm:flex-row sm:space-x-4 space-y-4 sm:space-y-0 justify-between">
    <!-- Benefit Section -->
    <div class="flex flex-col sm:w-1/3 mb-4 sm:mb-0">
      <span class="text-gray-700 font-semibold mb-2">Benefit</span>
      <div class="flex space-x-2">
        <button type="button" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-300 text-gray-800 hover:bg-gray-400 disabled:opacity-50 disabled:pointer-events-none dark:bg-white/10 dark:hover:bg-white/20 dark:text-white dark:hover:text-white">
          Sertifikat
        </button>
        <button type="button" class="py-2 px-6 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-300 text-gray-800 hover:bg-gray-400 disabled:opacity-50 disabled:pointer-events-none dark:bg-white/10 dark:hover:bg-white/20 dark:text-white dark:hover:text-white">
          Modul
        </button>
      </div>
    </div>

    <!-- Progress Course Section -->
    <div class="flex flex-col sm:w-1/3 mb-4 sm:mb-0">
      <span class="text-gray-700 font-semibold mb-2">Progress Course</span>
      <div class="w-full bg-gray-200 rounded-full h-2.5">
        <div class="bg-blue-800 h-2.5 rounded-full" style="width: 75%"></div>
      </div>
      <span class="text-gray-700 mt-1">75%</span>
    </div>

    <!-- Batas Waktu Belajar Section -->
    <div class="flex flex-col sm:w-1/3">
      <span class="text-gray-700 font-semibold mb-2">Batas Waktu Belajar</span>
      <span class="text-gray-700">Jun 25 - 2024 23:59</span>
      <span class="text-gray-500 text-sm">1 Bulan 1 Hari 1 Jam</span>
    </div>
  </div>
</section>
<!-- End Deskripsi Course -->

<?= $this->endSection() ?>