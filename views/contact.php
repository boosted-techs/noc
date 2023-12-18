<?php
include "parts/header.php";
?>
<section class="page-header @@extraClassName">
    <div class="page-header__bg" style="background-image: url('/assets/images/backgrounds/page-header-bg-1-1.jpg');"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Contact Us</h2>
        <ul class="cleenhearts-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="/">Home</a></li>
            <li><span>Contact Us</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<section class="contact-one section-space @@extraClassName">
    <div class="container">
        <div class="row gutter-y-30">
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="contact-one__map">
                    <div class="google-map contact-one__google__map">
                        <iframe title="template google map" src="https://maps.app.goo.gl/tMV77R2Y4JjE3Mmp6" class="map__contact-one__google__map" allowfullscreen></iframe>
                    </div>
                    <!-- /.google-map -->
                    <div class="contact-one__info">
                        <div class="contact-one__info__item">
                            <div class="contact-one__info__icon">
                                <span class="icon-location"></span>
                            </div><!-- /.contact-one__info__icon -->
                            <div class="contact-one__info__content">
                                <h4 class="contact-one__info__title">Mailing Address</h4>
                                <address class="contact-one__info__text">Luwero, Ssambwe, Kiyana Village. Off Bombo Rd, Ndejje University Rd</address>
                            </div><!-- /.contact-one__info__content -->
                        </div><!-- /.contact-one__info__item -->
                        <div class="contact-one__info__item">
                            <div class="contact-one__info__icon">
                                <span class="icon-phone"></span>
                            </div><!-- /.contact-one__info__icon -->
                            <div class="contact-one__info__content">
                                <h4 class="contact-one__info__title">Quick Contact</h4>
                                <a href="tel:(256)759834655" class="contact-one__info__text contact-one__info__text--link">(256)759834655</a>
                            </div><!-- /.contact-one__info__content -->
                        </div><!-- /.contact-one__info__item -->
                        <div class="contact-one__info__item">
                            <div class="contact-one__info__icon">
                                <span class="icon-envelope"></span>
                            </div><!-- /.contact-one__info__icon -->
                            <div class="contact-one__info__content">
                                <h4 class="contact-one__info__title">support email</h4>
                                <a href="mailto:info@nambiorphanagecentre.org" class="contact-one__info__text contact-one__info__text--link">info@nambiorphanagecentre.org</a>
                            </div><!-- /.contact-one__info__content -->
                        </div><!-- /.contact-one__info__item -->
                    </div><!-- /.contact-one__info -->
                </div><!-- /.contact-one__map -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                <div class="contact-one__form">
                    <div class="contact-one__form__bg" style="background-image: url('assets/images/backgrounds/contact-bg-1-1.png');"></div><!-- /.contact-one__form__bg -->
                    <h2 class="contact-one__title">Leave us a Message</h2>
                    <form class="contact-one__form__inner contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms" action="">
                        <div class="row gutter-y-20">
                            <div class="col-12">
                                <div class="form-one__control">
                                    <input type="text" name="name" id="name" placeholder="enter your name" class="form-one__control__input">
                                </div><!-- /.form-one__control -->
                            </div><!-- /.col-12 -->
                            <div class="col-12">
                                <div class="form-one__control">
                                    <input type="text" name="email" id="email" placeholder="your email" class="form-one__control__input">
                                </div><!-- /.form-one__control -->
                            </div><!-- /.col-12 -->
                            <div class="col-12">
                                <div class="form-one__control">
                                    <input type="tel" name="phone" id="phone" placeholder="phone no" class="form-one__control__input">
                                </div><!-- /.form-one__control -->
                            </div><!-- /.col-12 -->
                            <div class="col-12">
                                <div class="form-one__control">
                                    <select class="selectpicker" aria-label="Default select example">
                                        <option selected="">subject</option>
                                        <option value="1">Volunteer</option>
                                        <option value="2">Donations</option>
                                        <option value="3">Foods Support</option>
                                        <option value="4">Education Support</option>
                                        <option value="4">Medical Support</option>
                                        <option value="4">Sports Support</option>
                                    </select>
                                </div><!-- /.form-one__control -->
                            </div><!-- /.col-12 -->
                            <div class="col-12">
                                <div class="form-one__control">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="write message . . ." class="form-one__control__input form-one__control__message"></textarea>
                                </div><!-- /.form-one__control -->
                            </div><!-- /.col-12 -->
                            <div class="col-12">
                                <div class="contact-one__btn-box form-one__control">
                                    <button type="submit" class="cleenhearts-btn @@extraClassNameBtn">
                                                <span class="cleenhearts-btn__icon-box">
                                                    <span class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></span>
                                                </span>
                                        <span class="cleenhearts-btn__text">send message</span>
                                    </button>
                                </div><!-- /.form-one__control -->
                            </div><!-- /.col-12 -->
                        </div><!-- /.row -->
                    </form><!-- /.contact-one__form__inner -->
                </div><!-- /.contact-one__form -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->

<?php
include "parts/footer.php";
?>
