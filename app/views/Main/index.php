    <div class="container">

        <?php if (!empty($posts)):?>
        <?php foreach ($posts as $post): ?>
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #c5d7f2" text align="center"><?=$post['title'] ?></div>
                <div class="panel-body" style="background-color: #e9ecef" text align="center">
                    <?=$post['text'] ?>
                </div>
            </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>






