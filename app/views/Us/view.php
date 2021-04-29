
<div class="about">
    <div class="cont-grid-img img_style">
        <a href="/app/views/layouts/details.php"><img src="/public/blog/images/about_pic.jpg" alt=""></a>
    </div>

    <div class="cont-grid">
        <div class="abt-para">
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
            <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry., Lorem Ipsum  dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit esse when an,Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s,
           There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
        </div>
    </div>
    <div class="clear"></div>
    <div class="about-p">
<?php if (!empty($pages)): ?>
        <?php foreach ($pages as $page): ?>
         <p class="para"><?=$page->text; ?></p>
        <?php endforeach; ?>
<?php endif; ?>
    </div>
</div>
