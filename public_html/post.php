<?php
session_start();
include('./layouts/header.php');
include('./functions.php');

if ($_SERVER["REQUEST_URI"]) {
    $url = explode("?", $_SERVER["REQUEST_URI"])[1];
    $slug = str_replace('%20', ' ', $url);
    $data = getBlog($slug);
?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?= $data['title'] ?></h1>
                    <h2 class="subheading"><?= $data['subtitle'] ?></h2>
                    <span class="meta">
                                Yangilandi:  <?= $data['updated_at'] ?>
                            </span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <?= $data['body'] ?>
            </div>
        </div>
    </div>
</article>
<?php } ?>
<?php include('./layouts/footer.php'); ?>