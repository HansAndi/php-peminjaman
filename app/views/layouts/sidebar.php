<?php
$url = $_SERVER['REQUEST_URI'];
$urlParts = explode('/', $url);
$urlIndex = array_search('public', $urlParts);
if ($url !== false && isset($urlParts[$urlIndex + 1])) {
    $active = $urlParts[$urlIndex + 1];
} else {
    $active = '';
}
?>

<div id="sidebar">
    <?= $active; ?>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <!-- <div class="logo">
                    <a href="#"><img src="<?= BASE_URL; ?>/assets/compiled/svg/logo.svg" alt="Logo" srcset=""></a>
                </div> -->
                <div class="sidebar-toggler  x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item <?php if ($active == '') {
                                            echo 'active';
                                        } else {
                                            echo '';
                                        } ?>">
                    <a href="<?= BASE_URL; ?>/" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li class="sidebar-item <?php if ($active == 'book') {
                                            echo 'active';
                                        } else {
                                            echo '';
                                        } ?>">
                    <a href="<?= BASE_URL; ?>/book" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Book</span>
                    </a>
                </li>

                <li class="sidebar-item <?php if ($active == 'peminjaman') {
                                            echo 'active';
                                        } else {
                                            echo '';
                                        } ?>">
                    <a href="<?= BASE_URL; ?>/peminjaman" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Peminjaman</span>
                    </a>
                </li>

                <li class="sidebar-item <?php if ($active == 'penerbit') {
                                            echo 'active';
                                        } else {
                                            echo '';
                                        } ?>">
                    <a href="<?= BASE_URL; ?>/penerbit" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Penerbit</span>
                    </a>
                </li>

                <li class="sidebar-item <?php if ($active == 'kategori') {
                                            echo 'active';
                                        } else {
                                            echo '';
                                        } ?>">
                    <a href="<?= BASE_URL; ?>/kategori" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Kategori</span>
                    </a>
                </li>



                <!-- <li class="sidebar-item">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-collection-fill"></i>
                        <span>Sub Kriteria</span>
                    </a>
                </li>

                <li class="sidebar-item ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Alternatif</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-calculator"></i>
                        <span>Perhitungan</span>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</div>