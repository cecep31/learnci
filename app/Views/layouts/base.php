<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('semantic/semantic.css') ?>">

</head>
<body>
    
    <?= $this->include('layouts/header') ?>
    <?= $this->renderSection('content') ?>

    <script src="<?= base_url('semantic/semantic.js') ?>"></script>
    
</body>
</html>