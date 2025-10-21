// Intelica Soft Theme JavaScript
import AOS from 'aos';

// Initialize AOS (Animate On Scroll)
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 800,
        easing: 'ease-out',
        once: true,
        offset: 50,
        delay: 0,
    });
});

// Dark/Light Mode Toggle
function initializeThemeToggle() {
    const themeToggleBtn = document.getElementById('theme-toggle');
    const htmlElement = document.documentElement;

    // Check for saved theme preference or default to 'light'
    const currentTheme = localStorage.getItem('theme') || 'light';

    // Apply saved theme
    if (currentTheme === 'dark') {
        htmlElement.classList.add('dark');
    } else {
        htmlElement.classList.remove('dark');
    }

    // Toggle theme when button is clicked
    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', function() {
            if (htmlElement.classList.contains('dark')) {
                htmlElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                htmlElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        });
    }
}

// Floating orbs animation
function createFloatingOrbs() {
    const orbContainer = document.querySelector('.intelica-orbs-container');
    if (!orbContainer) return;

    for (let i = 0; i < 3; i++) {
        const orb = document.createElement('div');
        orb.className = `intelica-floating-orb orb-${i + 1}`;
        orb.style.cssText = `
            position: fixed;
            border-radius: 50%;
            filter: blur(40px);
            opacity: 0.3;
            z-index: 0;
            pointer-events: none;
            animation: float ${8 + i * 2}s ease-in-out infinite;
        `;

        // Set different colors and positions for each orb
        switch(i) {
            case 0:
                orb.style.width = '300px';
                orb.style.height = '300px';
                orb.style.background = 'radial-gradient(circle, rgba(0, 180, 255, 0.8), transparent)';
                orb.style.top = '-100px';
                orb.style.right = '-100px';
                break;
            case 1:
                orb.style.width = '200px';
                orb.style.height = '200px';
                orb.style.background = 'radial-gradient(circle, rgba(0, 255, 136, 0.6), transparent)';
                orb.style.bottom = '-50px';
                orb.style.left = '-50px';
                orb.style.animationDirection = 'reverse';
                break;
            case 2:
                orb.style.width = '250px';
                orb.style.height = '250px';
                orb.style.background = 'radial-gradient(circle, rgba(100, 150, 255, 0.5), transparent)';
                orb.style.top = '50%';
                orb.style.left = '5%';
                break;
        }

        orbContainer.appendChild(orb);
    }
}

// Smooth scrolling for navigation links
function initializeSmoothScrolling() {
    const navLinks = document.querySelectorAll('a[href^="#"]');

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Navbar scroll effect
function initializeNavbarScrollEffect() {
    const navbar = document.querySelector('.intelica-navbar');
    if (!navbar) return;

    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
}

// Typing animation effect
function initializeTypingAnimation() {
    const typingElements = document.querySelectorAll('.typing-animation');

    typingElements.forEach(element => {
        const text = element.textContent;
        element.textContent = '';

        let i = 0;
        const typeWriter = () => {
            if (i < text.length) {
                element.textContent += text.charAt(i);
                i++;
                setTimeout(typeWriter, 100);
            }
        };

        // Start typing when element comes into view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    typeWriter();
                    observer.unobserve(entry.target);
                }
            });
        });

        observer.observe(element);
    });
}

// Initialize all theme features
document.addEventListener('DOMContentLoaded', function() {
    initializeThemeToggle();
    createFloatingOrbs();
    initializeSmoothScrolling();
    initializeNavbarScrollEffect();
    initializeTypingAnimation();
});

// Export functions for use in other files
export {
    initializeThemeToggle,
    createFloatingOrbs,
    initializeSmoothScrolling,
    initializeNavbarScrollEffect,
    initializeTypingAnimation
};
