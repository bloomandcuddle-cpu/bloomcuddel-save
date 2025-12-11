<?php
/**
 * Bloom & Cuddle - Main Template
 * Simple and working version
 */

get_header();
?>

<main class="site-main">
    <div class="container">
        <h1>Welcome to Bloom & Cuddle</h1>
        <p>Mom Blog - Coming Soon</p>
        
        <?php if (have_posts()) : ?>
            <div class="posts-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post-card">
                        <h2><?php the_title(); ?></h2>
                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>">Read More</a>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p>No posts found. Add some posts from WordPress admin.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>