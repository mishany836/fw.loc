
        <div class="about">
<?php if (!empty($pages)): ?>
    <?php foreach ($pages as $newsCompany): ?>
            <div class="cont-grid-img img_style">
                <a href="/public/blog/images"><img src="<?=$newsCompany->image; ?>" alt=""></a>
            </div>
            <div class="cont-grid">
                <div class="abt-para">
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                    <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.,
                        Lorem Ipsum dummy text ever since dummy text of the printing and usings 1500s,
                        Duis aute irure dolor in reprehenderit in voluptate velit esse when an,
                        Lorem Ipsum has been the indus
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.,
                        Lorem Ipsum dummy text ever since dummy text of the printing and usings 1500s,
                        Duis aute irure dolor in reprehenderit in voluptate velit esse when an,
                        Lorem Ipsum has been the indus
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.,
                        Lorem Ipsum dummy text ever since dummy text of the printing and usings 1500s,
                        Duis aute irure dolor in reprehenderit in voluptate velit esse when an,Lorem Ipsum has been the indus
                    </p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
           <div class="about-p">

               <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since dummy text of the printing and usings 1500s,Duis aute irure dolor in reprehenderit in voluptate velit</p>
                <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                <div class="read_more">
                    <a class="btn" href="/Us/view/">read more</a>
                </div>
            </div>
            <?php endforeach; ?>
<?php endif; ?>
        </div>


