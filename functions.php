<?php
/**
 * Bloom & Cuddle Theme Functions
 *
 * @package BloomCuddle
 */

// ========== 1. الأمان ==========
defined('ABSPATH') || exit;

// ========== 2. إعدادات القالب ==========
function bloomcuddle_setup() {
    // العناوين التلقائية
    add_theme_support('title-tag');
    
    // الصور المميزة
    add_theme_support('post-thumbnails');
    
    // حجم الصور المخصص
    add_image_size('blog-thumb', 400, 250, true);
    add_image_size('report-large', 800, 500, true);
    
    // دعم HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // القوائم
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'bloomcuddle'),
        'footer'  => __('Footer Menu', 'bloomcuddle'),
    ));
    
    // Logo مخصص
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // دعم الـ widgets
    add_theme_support('widgets');
}
add_action('after_setup_theme', 'bloomcuddle_setup');

// ========== 3. تحميل CSS و JavaScript ==========
function bloomcuddle_scripts() {
    // CSS الرئيسي (style.css)
    wp_enqueue_style('bloomcuddle-style', get_stylesheet_uri());
    
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600&display=swap');
    
    // الجافاسكريبت الرئيسي
    wp_enqueue_script('bloomcuddle-script', get_template_directory_uri() . '/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'bloomcuddle_scripts');

// ========== 4. الـ Widgets ==========
function bloomcuddle_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'bloomcuddle'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here for sidebar.', 'bloomcuddle'),
        'before_widget' => '<section class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widgets', 'bloomcuddle'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here for footer.', 'bloomcuddle'),
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'bloomcuddle_widgets_init');

// ========== 5. وظائف خاصة بالمدونة ==========

// وقت القراءة المقدر
function bloomcuddle_reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200);
    
    if ($reading_time == 1) {
        return '1 min read';
    } else {
        return $reading_time . ' mins read';
    }
}

// إضافة class لصفحات الأفلييت
function bloomcuddle_body_class($classes) {
    if (has_category('reports')) {
        $classes[] = 'affiliate-page';
    }
    return $classes;
}
add_filter('body_class', 'bloomcuddle_body_class');

// إظهار الفئات
function bloomcuddle_post_categories() {
    $categories = get_the_category();
    if (!empty($categories)) {
        echo '<div class="post-categories">';
        foreach ($categories as $category) {
            echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . $category->name . '</a>';
        }
        echo '</div>';
    }
}

// ========== 6. تنظيف head ==========
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');

// ========== 7. وظيفة مساعدة للقائمة الافتراضية ==========
function bloomcuddle_default_menu() {
    echo '<ul class="nav-links">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
    echo '<li><a href="' . esc_url(home_url('/guides')) . '">Guides</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about')) . '">About</a></li>';
    echo '</ul>';
}