<?php get_header();?>
        <!-- Hero  -->
        <header class="full flex relative hero-section container">
            <div class="container flex relative column-full-pad">
                <h1 class="full center-text" data-aos="fade-up" data-aos-delay="250">ARCHITECTURE for EVERYONE</h1>
            </div>
        </header>
        <!-- MAIN -->
        <section class="full flex relative container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <a class="third flex relative stretch flex-responsive column-right-pad" data-aos="fade-up" href="<?php echo esc_url(get_permalink()); ?>">
                <div class="full flex relative flex-responsive">
                    <img class="full" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <h4 class="full column-vertical-pad"><?php the_title()?></h4>
                    <?php 
                    // Get Architect Name
                    $architect_name = get_field('architect_name'); 
                    if ($architect_name) {
                        echo '<p class="architect-name full">' . esc_html($architect_name) . '</p>';
                    } ?>
                    <?php
                    // Get Material Type
                    $material_type = get_field('material_type'); 
                    if ($material_type) {
                        echo '<button class="cta-btn">' . esc_html($material_type) . '</button>';
                }?>
                </div>
            </a>
        <?php endwhile; endif; ?>
        </section>

        <!-- Footer -->
        <?php get_footer() ?>
        
    </div>
</body>