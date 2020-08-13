<!-- start header -->
<?php get_header(); ?>
<!-- end header -->
<script>
        window.onload = function (){
        yaCounter48950435.reachGoal('error404');
    }
    </script>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 page-404">
                <div class="col-lg-6">
			<div class="col-lg-4"><img src="./wp-content/uploads/2016/02/Ballon.png"></div>	
			<div class="col-lg-8"><img src="./wp-content/uploads/2016/02/404.png"></div>
			<div class="clear"></div>
			<p class="noFound-h">Страница не найдена</p>
		</div>
		<div class="col-lg-6">
			<p class="option-info">К сожалению такой страницы нет</p>
			<p class="option-info">Но вы можете с нами связаться</p>
			<p class="option-info phone-404-padding">по телефону <span class="phone-404">+7 (911) 114-88-21</span></p>
			<p class="work-pages">Посетить работающие страницы</p>
			<?php wp_nav_menu(
                        array(
                            "menu" => "main",
                            "menu_class" => "404-menu",
                           )
                    	);
                    	?>
		</div>
		<!--<p class="text-center">
                <h2 class="fortyfour">404</h2>
                <?php echo __('Страница не найдена.', 'whitesquare'); ?>
                </p>-->
            </div>
        </div>
        <!-- divider -->
        <div class="row">
            <div class="col-lg-12">
                <div class="solidline">
                </div>
            </div>
        </div>
        <!-- end divider -->

    </div>
</section>
<?php get_footer(); ?>


