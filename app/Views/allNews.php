<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
    Berita | Darling
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <section class="w-full mx-auto px-5 mt-12 py-8 sm:px-20 sm:py-10 sm:mt-20">
        <!-- Card Blog -->
        <div class="w-full">
            <!-- Title -->
            <div class="max-w-2xl text-center mx-auto mb-10 lg:mb-14">
                <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Berita Damri</h2>
                <p class="mt-1 text-gray-600 dark:text-neutral-400">Temukan berita terbaru dan terpenting Damri, dari inovasi layanan hingga pengumuman penting, untuk tetap terinformasi dan terhubung.</p>
            </div>
            <!-- End Title -->
            <!-- Grid -->
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                <?php foreach ($news as $data_news) : ?>
                <a class="group relative block rounded-xl" href="<?= base_url('news/').$data_news['slug'] ?>">
                    <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full h-[350px] before:absolute before:inset-x-0 before:z-[1] before:size-full before:bg-gradient-to-t before:from-gray-900/70">
                    <img class="w-full h-full object-cover rounded-t-xl" src="<?= base_url('images-thumbnail/') . $data_news['thumbnail'] ?>" alt="Image Description">
                    </div>

                    <div class="absolute bottom-0 inset-x-0 z-10">
                        <div class="flex flex-col h-full p-4 sm:p-6">
                        <h3 class="text-2xl sm:text-lg font-semibold text-white group-hover:text-white/80">
                            <?= $data_news['title'] ?>
                            </h3>
                            <p class="mt-2 text-xl text-white/80 sm:text-sm">
                            <?= $data_news['published_at'] ?>
                        </p>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Card Blog -->
    </section>

<?= $this->endSection() ?>