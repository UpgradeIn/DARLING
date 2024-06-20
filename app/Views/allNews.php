<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
    Berita | Darling
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <section class="w-full min-h-screen mx-auto px-5 mt-12 sm:px-20 sm:mt-24">
        <?php foreach ($news as $data_news) : ?>
            <img src="<?= base_url('images-thumbnail/' . $data_news['thumbnail']) ?>">
            <h1><?= $data_news['title'] ?></h1>
            <p><?= $data_news['category_name'] ?></p>
            <p><?= $data_news['published_at'] ?></p>
            <a href="<?= base_url('news/').$data_news['slug'] ?>">selengkapnya</a>
            <br>
            <br>
            <br>
        <?php endforeach; ?>
    </section>

<?= $this->endSection() ?>