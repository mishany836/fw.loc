<?php if (!empty($service)): ?>
<div class="grid_ser">
    <h2>our latest services</h2>
    <?
    $c = 1;
    ?>
    <div class="grid">
        <?php foreach ($service as $post): ?>
        <div class="gallery">
            <a href="<?=$post->id; ?>"><img src="<?=$post->image; ?>"></a>
        </div>
        <h3><a href="<?=$post->id; ?>"><?=$post->title; ?></a></h3>
        <div class="grid_p">
            <p><?=$post->excerpt; ?></p>
            <a class="button bg4 grid_btn" href="/detail/view/<?=$post->id; ?>">read more</a>
        </div>
        <?php if ($c % 1 == 0): ?>
    </div><div class="grid">
        <?php endif; ?>

        <? $c++; ?>
        <?php endforeach; ?>
        <?php else:?>
            <h3>Posts not found...</h3>

    </div>
</div>
<?php endif; ?>