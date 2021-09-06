<?= $this->extend('/layouts/base') ?>
<?= $this->section('content') ?>
<div class="mx-auto px-5 pt-2">

    <div class="card">
        <div class="card-header">
            <?= $newes['title'] ?>
        </div>
        <div class="card-body">
            <p class="card-text"><?= substr($newes['content'], 0, 120) ?></p>
        </div>
    </div>

</div>
<?= $this->endSection() ?>