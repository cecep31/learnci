<?= $this->extend('/layouts/base') ?>
<?= $this->section('content') ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Tambah Data - santriKoding.com</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <?php echo $validation->listErrors() ?>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url('news-add') ?>" method="POST">
                            <div class="form-group">
                                <label>TITLE</label>
                                <input type="text" class="form-control" name="title" placeholder="Masukkan Title">
                            </div>
                            <div class="form-group">
                                <label>KONTEN</label>
                                <textarea class="form-control" name="content" rows="4" placeholder="Masukkan Konten"></textarea>
                            </div>
                            <div class="form-group">
                                <label>author</label>
                                <input type="text" class="form-control" name="author" placeholder="Masukkan Title">
                            </div>
                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>
<?= $this->endSection() ?>