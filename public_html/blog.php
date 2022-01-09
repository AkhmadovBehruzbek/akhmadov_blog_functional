<?php
session_start();
include('./layouts/header.php');
include('./functions.php');

// get data
$data = getPostsAll();
?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('/assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php foreach ($data as $post) { ?>
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="post.php?<?=$post['slug']?>">
                        <h2 class="post-title"><?= $post['title'] ?></h2>
                        <h3 class="post-subtitle"><?= $post['subtitle'] ?></h3>
                    </a>
                    <p class="post-meta">
                        Yangilandi:
                        <!--                    <a href="#!">Start Bootstrap</a>-->
                        <?= $post['updated_at'] ?>
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
            <?php } ?>
        </div>
    </div>
</div>


<?php include('./layouts/footer.php'); ?>
