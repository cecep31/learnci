<?= $this->extend('/layouts/base') ?>
<?= $this->section('content') ?>
<div class="mx-auto px-5 pt-2">
    <?php foreach ($newes as $news) : ?>
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $news['title'] ?></h5>
                <p class="card-text"><?= $news['content'] ?></p>
                <a href="news/<?= $news['id'] ?>" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    <?php endforeach ?>
</div>
<?= $this->endSection() ?>