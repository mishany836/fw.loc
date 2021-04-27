
    <?php if (!empty($posts)): ?>
    <div class="title">
    <h2 style="text-align: center"><?= $posts['title']; ?></h2>
</div>
 <div class="blog_detail">
    <div class="row justify-content-center">
        <img class="img_detail" src="<?= $posts['image']; ?>" style="width: 500px; height: 350px;" alt="" />
        <p style="width: 800px; padding-top: 50px;"><?=$posts['text']; ?></p>
    </div>
 </div>
    <?php else:?>
    <h3>Posts not found ...</h3>
    <?php endif; ?>



