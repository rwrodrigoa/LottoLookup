<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LottoLookup</title>

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#febbc0">

    <!-- FREDOKA FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/fontawesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/brands.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/solid.css') ?>">

    <!-- BULMA -->
    <link rel="stylesheet" href="<?= base_url('assets/bulma/bulma.min.css') ?>">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body>
    <?= $this->renderSection('content') ?>
</body>

</html>