<?php get_header(); ?>

<main class="full center wrap relative container column-horizontal-pad">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <header class="full center wrap relative container single-header" data-aos="fade-up" data-aos-delay="250">
            <img class="full" src="<?php the_post_thumbnail_url(); ?>" alt="<?php //the_title(); ?>">
        </header>
        <div class="single-header-text center wrap relative" data-aos="fade-up" data-aos-delay="500">
                <h2 class = 'full'><?php the_title(); ?></h2>
                <?php 
                    // Get Architect Name
                    $architect_name = get_field('architect_name'); 
                    if ($architect_name) {
                        echo '<h3 class="architect-name full">' . esc_html($architect_name) . '</h3>';
                } ?>
                <div class="full">
                    <?php
                    // Get Material Type
                    $material_type = get_field('material_type'); 
                    if ($material_type) {
                        echo '<button class="cta-btn">' . esc_html($material_type) . '</button>';
                }?>
                </div>
            </div>
        <article class="full center wrap relative column-vertical-margin" data-aos="fade-up" data-aos-delay="750">
            <div class = 'full center wrap relative text-container'><?php the_content(); ?></div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>