
<?php  if(!empty($posts)): ?>

    <?php
    $c = 1;
    ?>
    <div class="grid_s">
    <?php foreach ($posts as $post): ?>
        <div class="grid">
              <img src="<?=$post['image']; ?>" alt="">
            <h3><a href="<?=$post->id; ?>"><?=$post->title; ?></a></h3>
            <div class="grid_p">
                <p><?=$post->excerpt; ?></p>
                <a  href="news/view/<?=$post['id']; ?>" class="button bg2 grid_btn"><?php __('read more');?></a>
            </div>
        </div>
        <?if ($c % 2 == 0):?>
            </div><div class="grid_s">
        <?endif; ?>
        <?$c++;?>
    <?php endforeach; ?>
    </div>
    <div class="clear"> </div>

    <div class="text-center">
        <p>Статей: <?=count($posts); ?> из <?=$total;?></p>
        <?php if ($pagination->countPages > 1): ?>
            <?=$pagination; ?>
        <?php endif; ?>
    </div>
<?php else: ?>
    <h3>Posts not found...</h3>
<?php endif; ?>






































