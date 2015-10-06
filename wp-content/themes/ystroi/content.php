<?php if ($post->post_name == "price_1") { ?>
    <div class="background-wrapper--1">
<?php } ?>

<div class="page__universal-wrapper page__universal-wrapper--inner">
	<h1 class="title--inner title--inner--main"><?= $post->post_title ?></h1>
	<article>
		<?= $post->post_content ?>
	</article>	
</div>


<div class="colored-wrapper colored-wrapper--grey">
	<div class="page__universal-wrapper" style="padding: 0;">
        <?php if (in_array($post->post_name, ["about", "faq"])) { ?>
            <h1 class="title-main_page title--white">Заказать обратный звонок</h1>
            <h2 class="title-main_page title--white" style="width:80%;">Оставьте свои данные, мы с вами обязательно свяжемся <br /> Вы можете позвонить нам по телефону +7(000)000-00-00</h1>
            <div class="page__universal-two_big_cols--wrapper clearfix">
                <form id="callback_form">
                    <div class="universal_line__wrapper universal_line__wrapper--three-cols clearfix">
                        <div class="universal_cell__wrapper universal_cell__wrapper--first">
                            <input type="text" name="callback_form[name]" placeholder="Как вас зовут?" value="" title="Ваше имя " required="">
                        </div>
                        <div class="universal_cell__wrapper universal_cell__wrapper--second">
                            <input type="tel" name="callback_form[phone]" placeholder="Ваш телефон" value="" title="Ваш телефон" required="">
                        </div>
                        <div class="universal_cell__wrapper">
                            <input class="form_submit__button form_submit__button--green" type="submit" name="submit" value="Отправить">
                        </div>
                    </div>
                </form>
            </div>
        <?php } ?>
        
		<div class="main_menu-wrapper main_menu-wrapper--inside-wrapper">
			<div class="main_menu-wrapper--inner">
				<?php wp_nav_menu(['theme_location'=>"inner-menu"]); ?>
			</div>
		</div>
	</div>
</div>

<?php if ($post->post_name == "price_1") { ?>
    </div>
<?php } ?>
