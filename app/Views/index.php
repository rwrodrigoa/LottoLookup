<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>

<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<section class="hero is-default is-fullheight">
    <!-- Hero head: will stick at the top -->
    <div class="hero-head">
        <header class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <h4 class="navbar-item title is-size-4">LottoLookup</h4>
                </div>

            </div>
        </header>
    </div>

    <div class="hero-body">
        <div class="container has-text-centered">

            <img width="50%" src="<?= base_url('assets/img/LottoLookup_Logo.jpeg') ?>" alt="">

            <p class="title">
                LottoLookup
            </p>
            <p class="subtitle">
                Uma API simples e fácil de usar para consultar resultados de loterias da Caixa Econômica Federal.
            </p>
        </div>
    </div>

    <div class="hero-foot">
        <div class="is-boxed is-fullwidth">
            <div class="container">
                <h4 class="is-size-4 has-text-centered">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    EM BREVE
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </h4>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>