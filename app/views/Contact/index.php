<div class="content_bg">
    <div class="wrap">
        <div class="wrapper">
            <div class="main">
                <div class="section group">
                    <div class="col span_1_of_2">
                        <div class="company_address">
                            <h2>Company Address </h2>
                            <p>500 Lorem Ipsum Dolor Sit,</p>
                            <p>22-56-2-9 Sit Amet, Lorem,</p>
                            <p>USA</p>
                            <p>Phone:(00) 222 666 444</p>
                            <p>Fax: (000) 000 00 00 0</p>
                            <p>Email: <span><a href="mailto:info@example.com">mail@example.com</a></span></p>
                            <p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
                        </div>
                        <div class="contact_info">
                            <h2>Find Us Here</h2>
                            <div class="map">
                                <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color: #685399;text-align:left;font-size:13px">View Larger Map</a></small>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="col span_2_of_4">
                        <div class="contact-form">
                            <h2>Contact Us</h2>

                            <?php if (isset($_SESSION['error'])): ?>
                            <div class="alert alert-danger">
                                <?=$_SESSION['error']; unset($_SESSION['error']) ?>
                            </div>
                            <?php endif; ?>

                            <?php if (isset($_SESSION['success'])): ?>
                                <div class="alert alert-success">
                                    <?=$_SESSION['success']; unset($_SESSION['success']) ?>
                                </div>
                            <?php endif; ?>
                            <form method="post" action="/contact/index">
                                <div>
                                    <span><label>ИМЯ</label></span>
                                    <span><input name="name" type="text" id="name" class="textbox" value="<?=isset($_SESSION['form_data']['name']) ? h($_SESSION['form_data']['name']) : '';?>"></span>
                                </div>
                                <div>
                                    <span><label>E-MAIL</label></span>
                                    <span><input name="email" type="text" id="email" class="textbox" value="<?=isset($_SESSION['form_data']['email']) ? h($_SESSION['form_data']['email']) : '';?>"></span>
                                </div>
                                <div>
                                    <span><label>ТЕЛЕФОН</label></span>
                                    <span><input name="phone" type="text" id="phone" class="textbox" value="<?=isset($_SESSION['form_data']['phone']) ? h($_SESSION['form_data']['phone']) : '';?>"></span>
                                </div>
                                <div>
                                    <span><label>ВАШИ ПОЖЕЛАНИЯ</label></span>
                                    <span><textarea name="textarea" id="textarea" value="<?=isset($_SESSION['form_data']['textarea']) ? h($_SESSION['form_data']['textarea']) : '';?>"> </textarea></span>
                                </div>
                                <div>
                                    <span><input type="submit" class="btn btn-primary" value="Отправить"></span>
                                </div>
                            </form>
                            <?php if (isset($_SESSION['form_data'])) unset($_SESSION['form_data'])?>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
    </div>
</div>
