<?php
/**
 * Template Name: About Page Template
 * Description: قالب صفحة About المخصص
 */
?>

<?php get_header(); ?>

<main>
    <!-- ===== HERO SECTION ===== -->
    <section class="about-hero section-light">
        <?php 
        // استبدل هذا برفع الصورة عبر وسائط ووردبريس
        // يمكنك رفع الصورة عبر لوحة التحكم ثم وضع رابطها هنا
        ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/about-hero.jpg" alt="Mom and newborn smiling together" />
        <h1>Hi Mama — Welcome to Bloom & Cuddle 💜</h1>
        <p>A trusted guide for new moms (0–6 months)</p>
    </section>

    <!-- ===== INTRO SHORT TEXT ===== -->
    <section class="about-intro section">
        <p>Bloom & Cuddle is a warm, community-centered space for new moms. We share simple, research-aware newborn tips — plus real recommendations from moms and pediatric-friendly sources. Everything here is designed to help you feel calm, confident, and supported during your baby's earliest months.</p>
    </section>

    <!-- ===== THREE CARDS SECTION ===== -->
    <section class="section section-light">
        <div class="cards-grid">
            <div class="about-card">
                <h3>Warm Support</h3>
                <p>Because early motherhood is emotional, overwhelming, and full of questions — you deserve a calm, gentle space.</p>
            </div>

            <div class="about-card">
                <h3>Community Stories</h3>
                <p>We gather what <em>real moms</em> tried — what worked, what didn't, and what made early motherhood easier.</p>
            </div>

            <div class="about-card">
                <h3>Trusted, Safe Info</h3>
                <p>We simplify pediatric-friendly guidance and evidence-aware newborn tips — with zero exaggeration.</p>
            </div>
        </div>
    </section>

    <!-- ===== HOW WE CREATE CONTENT ===== -->
    <section class="content-creation section">
        <h2>📚 How We Create Our Content</h2>
        <ul>
            <li>• Real mom experiences</li>
            <li>• Research-aware newborn guidance</li>
            <li>• Pediatric safety-aligned recommendations</li>
            <li>• Practical tips tested by the mom community</li>
            <li>• Transparent product insights (never exaggerated)</li>
        </ul>
    </section>

    <!-- ===== SOFT IMAGE + MESSAGE ===== -->
    <section class="about-soft-section section-light">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about-soft.jpg" alt="Mom gently holding baby's hand" />
        <h2>You're doing amazing, Mama.</h2>
        <p>We're here to support you gently, honestly, and with zero overwhelm — through every tiny milestone.</p>
    </section>
</main>

<?php get_footer(); ?>