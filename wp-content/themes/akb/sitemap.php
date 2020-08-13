<?php
/*
Template Name: sitemap
*/
?>
<?php get_header(); ?>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h2>Карта сайта</h2>
                    <ul>
                        <?php
                            wp_list_pages(array(
                                'exclude' => 86,
                                'post_status'  => 'publish',
                                'post_type'    => 'page',
                                'title_li'     => '',
                                'sort_column'   => 'post_date',
                                'sort_order'   => 'ASC',
                            ));
                        ?>
                    </ul>
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