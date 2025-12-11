</main> <!-- نهاية main من header.php -->

<footer class="main-footer">
    <div class="footer-content">
        <div class="footer-section">
            <h3>Bloom & Cuddle</h3>
            <p>Evidence-informed tips, real-mom experience, and honest product recommendations for newborns 0–6 months.</p>
        </div>
        
        <div class="footer-section">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/guides')); ?>">Guides</a></li>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
            </ul>
        </div>
        
        <div class="footer-section">
            <h4>Legal</h4>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a></li>
                <li><a href="<?php echo esc_url(home_url('/terms-of-use')); ?>">Terms of Use</a></li>
                <li><a href="<?php echo esc_url(home_url('/affiliate-disclosure')); ?>">Affiliate Disclosure</a></li>
            </ul>
        </div>
    </div>
    
    <div class="footer-bottom">
        <p>We may earn commissions from Amazon at no extra cost to you. We only recommend products we genuinely trust.</p>
        <p>&copy; <?php echo date('Y'); ?> Bloom & Cuddle — Built by moms, informed by experts.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>