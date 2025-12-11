// ===== Bloom & Cuddle - Main JavaScript =====

document.addEventListener('DOMContentLoaded', function() {
    
    // ===== 1. نظام القائمة المتنقلة للهاتف =====
    function setupMobileMenu() {
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        
        if (!hamburger || !navLinks) return;
        
        hamburger.addEventListener('click', function(e) {
            e.stopPropagation();
            navLinks.classList.toggle('active');
            this.classList.toggle('active');
            
            // تأثيرات الهامبرغر
            const spans = this.querySelectorAll('span');
            if (navLinks.classList.contains('active')) {
                spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
                
                // إضافة خلفية معتمة
                const overlay = document.createElement('div');
                overlay.className = 'nav-overlay';
                document.body.appendChild(overlay);
                
                overlay.addEventListener('click', function() {
                    navLinks.classList.remove('active');
                    hamburger.classList.remove('active');
                    spans[0].style.transform = 'none';
                    spans[1].style.opacity = '1';
                    spans[2].style.transform = 'none';
                    this.remove();
                });
            } else {
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
                
                const overlay = document.querySelector('.nav-overlay');
                if (overlay) overlay.remove();
            }
        });
        
        // إغلاق القائمة عند النقر على رابط
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function() {
                navLinks.classList.remove('active');
                hamburger.classList.remove('active');
                hamburger.querySelectorAll('span')[0].style.transform = 'none';
                hamburger.querySelectorAll('span')[1].style.opacity = '1';
                hamburger.querySelectorAll('span')[2].style.transform = 'none';
                
                const overlay = document.querySelector('.nav-overlay');
                if (overlay) overlay.remove();
            });
        });
    }
    
    // ===== 2. تأثيرات الهيدر عند التمرير =====
    function setupHeaderEffects() {
        const header = document.querySelector('.main-header');
        if (!header) return;
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                header.style.backgroundColor = 'rgba(250, 249, 247, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.backgroundColor = '';
                header.style.backdropFilter = '';
            }
        });
    }
    
    // ===== 3. تأثيرات الروابط =====
    function setupLinkEffects() {
        document.querySelectorAll('.nav-links a, .footer-section a').forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.transform = '';
            });
        });
    }
    
    // ===== 4. تحديث السنة في الفوتر =====
    function updateFooterYear() {
        const yearElement = document.querySelector('.footer-bottom p');
        if (yearElement && yearElement.textContent.includes('2025')) {
            const currentYear = new Date().getFullYear();
            yearElement.innerHTML = yearElement.innerHTML.replace('2025', currentYear);
        }
    }
    
    // ===== 5. تهيئة كل الوظائف =====
    function initAll() {
        setupMobileMenu();
        setupHeaderEffects();
        setupLinkEffects();
        updateFooterYear();
        
        console.log('✅ Bloom & Cuddle JavaScript loaded successfully');
    }
    
    // بدء التشغيل
    initAll();
});