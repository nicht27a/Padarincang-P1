// GSAP Setup
gsap.registerPlugin(ScrollTrigger);

// Header scroll effect
const header = document.getElementById('header');
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const mobileMenu = document.getElementById('mobileMenu');

// Variables untuk navbar hide/show
let lastScrollTop = 0;

// Handle scroll effect for header dengan hide/show
window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    // Tambahkan class scrolled untuk styling
    if (scrollTop > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
    
    if (scrollTop < lastScrollTop) {
        gsap.to(header, {
            y: 0,
            duration: 0.3,
            ease: 'power2.out'
        });
    }
    
    lastScrollTop = scrollTop;
});

// Mobile menu toggle
mobileMenuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('active');
    const icon = mobileMenuBtn.querySelector('i');
    
    if (mobileMenu.classList.contains('active')) {
        icon.className = 'fas fa-times';
    } else {
        icon.className = 'fas fa-bars';
    }
});

// Close mobile menu when clicking on a link
const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
mobileNavLinks.forEach(link => {
    link.addEventListener('click', () => {
        mobileMenu.classList.remove('active');
        mobileMenuBtn.querySelector('i').className = 'fas fa-bars';
    });
});

// Smooth scrolling for navigation links
const navLinks = document.querySelectorAll('a[href^="#"]');
navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const targetId = link.getAttribute('href');
        const targetSection = document.querySelector(targetId);
        
        if (targetSection) {
            const headerHeight = header.offsetHeight;
            const targetPosition = targetSection.offsetTop - headerHeight;
            
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// ===== GSAP ANIMATIONS =====

// Hero Section Animations
gsap.from('.hero-content', {
    duration: 1.5,
    y: 100,
    opacity: 0,
    ease: 'power3.out',
    delay: 0.5
});

gsap.from('.hero-title', {
    duration: 1.2,
    scale: 0.8,
    opacity: 0,
    ease: 'back.out(1.7)',
    delay: 1
});

gsap.from('.hero-description', {
    duration: 1,
    y: 30,
    opacity: 0,
    ease: 'power2.out',
    delay: 1.5
});

gsap.from('.hero-buttons', {
    duration: 1,
    y: 30,
    opacity: 0,
    ease: 'power2.out',
    delay: 1.8
});

gsap.from('.scroll-indicator', {
    duration: 1,
    y: 20,
    opacity: 0,
    ease: 'power2.out',
    delay: 2.5
});

// Parallax effect for hero video
gsap.to('.hero-bg video', {
    scrollTrigger: {
        trigger: '.hero',
        start: 'top top',
        end: 'bottom top',
        scrub: true
    },
    y: 100,
    scale: 1.1
});

// ===== SCROLL TRIGGER ANIMATIONS - HIDE/SHOW ELEMENTS =====

// Semua section titles dengan animasi yang sama
const sectionTitles = document.querySelectorAll('.section-title, .mission-title, .sustainability-title, .form-title');
sectionTitles.forEach(title => {
    gsap.fromTo(title, 
        { y: 50, opacity: 0 },
        {
            scrollTrigger: {
                trigger: title,
                start: 'top 90%',
                end: 'bottom 10%',
                toggleActions: 'play reverse play reverse'
            },
            duration: 0.8,
            y: 0,
            opacity: 1,
            ease: 'power2.out'
        }
    );
});

// Semua section descriptions
const sectionDescriptions = document.querySelectorAll('.section-description, .sustainability-text');
sectionDescriptions.forEach(desc => {
    gsap.fromTo(desc, 
        { y: 30, opacity: 0 },
        {
            scrollTrigger: {
                trigger: desc,
                start: 'top 90%',
                end: 'bottom 10%',
                toggleActions: 'play reverse play reverse'
            },
            duration: 0.8,
            y: 0,
            opacity: 1,
            ease: 'power2.out',
            delay: 0.2
        }
    );
});

// Mission text paragraphs
const missionTexts = document.querySelectorAll('.mission-text');
missionTexts.forEach((text, index) => {
    gsap.fromTo(text, 
        { y: 30, opacity: 0 },
        {
            scrollTrigger: {
                trigger: text,
                start: 'top 90%',
                end: 'bottom 10%',
                toggleActions: 'play reverse play reverse'
            },
            duration: 0.8,
            y: 0,
            opacity: 1,
            ease: 'power2.out',
            delay: index * 0.1
        }
    );
});

// Feature Cards Animation
gsap.fromTo('.feature-card', 
    { y: 60, opacity: 0 },
    {
        scrollTrigger: {
            trigger: '.features-grid',
            start: 'top 80%',
            end: 'bottom 20%',
            toggleActions: 'play reverse play reverse'
        },
        duration: 0.8,
        y: 0,
        opacity: 1,
        stagger: 0.2,
        ease: 'power2.out'
    }
);

// Activity Cards Animation
gsap.fromTo('.activity-card', 
    { y: 60, opacity: 0 },
    {
        scrollTrigger: {
            trigger: '.activities-grid',
            start: 'top 80%',
            end: 'bottom 20%',
            toggleActions: 'play reverse play reverse'
        },
        duration: 0.8,
        y: 0,
        opacity: 1,
        stagger: 0.15,
        ease: 'power2.out'
    }
);

// Accommodation Cards Animation
gsap.fromTo('.accommodation-card', 
    { y: 60, opacity: 0 },
    {
        scrollTrigger: {
            trigger: '.accommodations-grid',
            start: 'top 80%',
            end: 'bottom 20%',
            toggleActions: 'play reverse play reverse'
        },
        duration: 0.8,
        y: 0,
        opacity: 1,
        stagger: 0.2,
        ease: 'power2.out'
    }
);

// Gallery Items Animation
gsap.fromTo('.gallery-item', 
    { scale: 0.8, opacity: 0 },
    {
        scrollTrigger: {
            trigger: '.gallery-grid',
            start: 'top 80%',
            end: 'bottom 20%',
            toggleActions: 'play reverse play reverse'
        },
        duration: 0.6,
        scale: 1,
        opacity: 1,
        stagger: 0.1,
        ease: 'back.out(1.7)'
    }
);

// Contact Section Animation
gsap.fromTo('.contact-item', 
    { x: -50, opacity: 0 },
    {
        scrollTrigger: {
            trigger: '.contact-info',
            start: 'top 80%',
            end: 'bottom 20%',
            toggleActions: 'play reverse play reverse'
        },
        duration: 0.8,
        x: 0,
        opacity: 1,
        stagger: 0.2,
        ease: 'power2.out'
    }
);

gsap.fromTo('.contact-form-container', 
    { y: 50, opacity: 0 },
    {
        scrollTrigger: {
            trigger: '.contact-form-container',
            start: 'top 80%',
            end: 'bottom 20%',
            toggleActions: 'play reverse play reverse'
        },
        duration: 1,
        y: 0,
        opacity: 1,
        ease: 'power2.out'
    }
);

// Mission Section Animation
gsap.fromTo('.mission-section', 
    { y: 50, opacity: 0 },
    {
        scrollTrigger: {
            trigger: '.mission-section',
            start: 'top 80%',
            end: 'bottom 20%',
            toggleActions: 'play reverse play reverse'
        },
        duration: 1,
        y: 0,
        opacity: 1,
        ease: 'power2.out'
    }
);

// Sustainability Banner Animation
gsap.fromTo('.sustainability-banner', 
    { y: 50, opacity: 0 },
    {
        scrollTrigger: {
            trigger: '.sustainability-banner',
            start: 'top 80%',
            end: 'bottom 20%',
            toggleActions: 'play reverse play reverse'
        },
        duration: 1,
        y: 0,
        opacity: 1,
        ease: 'power2.out'
    }
);

// Gallery CTA Animation
gsap.fromTo('.gallery-cta', 
    { y: 30, opacity: 0 },
    {
        scrollTrigger: {
            trigger: '.gallery-cta',
            start: 'top 80%',
            end: 'bottom 20%',
            toggleActions: 'play reverse play reverse'
        },
        duration: 0.8,
        y: 0,
        opacity: 1,
        ease: 'power2.out'
    }
);

// Footer Animation
gsap.fromTo('.footer', 
    { y: 50, opacity: 0 },
    {
        scrollTrigger: {
            trigger: '.footer',
            start: 'top 80%',
            end: 'bottom 20%',
            toggleActions: 'play reverse play reverse'
        },
        duration: 1,
        y: 0,
        opacity: 1,
        ease: 'power2.out'
    }
);

// Hover animations for cards
const cards = document.querySelectorAll('.feature-card, .activity-card, .accommodation-card');
cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        gsap.to(card, {
            duration: 0.3,
            y: -10,
            scale: 1.02,
            ease: 'power2.out'
        });
    });
    
    card.addEventListener('mouseleave', () => {
        gsap.to(card, {
            duration: 0.3,
            y: 0,
            scale: 1,
            ease: 'power2.out'
        });
    });
});

// Button hover animations
const buttons = document.querySelectorAll('.btn, .book-btn, .reserve-btn');
buttons.forEach(button => {
    button.addEventListener('mouseenter', () => {
        gsap.to(button, {
            duration: 0.2,
            scale: 1.05,
            ease: 'power2.out'
        });
    });
    
    button.addEventListener('mouseleave', () => {
        gsap.to(button, {
            duration: 0.2,
            scale: 1,
            ease: 'power2.out'
        });
    });
});

// Form submission
const contactForm = document.querySelector('.contact-form');
contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    
    // Get form data
    const formData = new FormData(contactForm);
    const data = Object.fromEntries(formData);
    
    // Simple validation
    if (!data.firstName || !data.lastName || !data.email || !data.message) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Simulate form submission
    const submitBtn = contactForm.querySelector('.submit-btn');
    const originalText = submitBtn.innerHTML;
    
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> <span>Sending...</span>';
    submitBtn.disabled = true;
    
    setTimeout(() => {
        alert('Thank you for your message! We\'ll get back to you soon.');
        contactForm.reset();
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    }, 2000);
});

// Gallery modal with GSAP
const galleryItems = document.querySelectorAll('.gallery-item');
galleryItems.forEach(item => {
    item.addEventListener('click', () => {
        const img = item.querySelector('img');
        const modal = document.createElement('div');
        modal.className = 'gallery-modal';
        modal.innerHTML = `
            <div class="gallery-modal-content">
                <img src="${img.src}" alt="${img.alt}">
                <button class="gallery-modal-close">&times;</button>
            </div>
        `;
        
        document.body.appendChild(modal);
        document.body.style.overflow = 'hidden';
        
        // Animate modal in
        gsap.fromTo(modal, 
            { opacity: 0 },
            { opacity: 1, duration: 0.3, ease: 'power2.out' }
        );
        
        gsap.fromTo(modal.querySelector('.gallery-modal-content'), 
            { scale: 0.8, opacity: 0 },
            { scale: 1, opacity: 1, duration: 0.4, ease: 'back.out(1.7)' }
        );
        
        // Close modal
        const closeBtn = modal.querySelector('.gallery-modal-close');
        const closeModal = () => {
            gsap.to(modal, {
                opacity: 0,
                duration: 0.3,
                ease: 'power2.out',
                onComplete: () => {
                    document.body.removeChild(modal);
                    document.body.style.overflow = 'auto';
                }
            });
        };
        
        closeBtn.addEventListener('click', closeModal);
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeModal();
            }
        });
    });
});

// Add gallery modal styles
const modalStyles = `
.gallery-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2000;
    padding: 2rem;
}

.gallery-modal-content {
    position: relative;
    max-width: 90vw;
    max-height: 90vh;
}

.gallery-modal-content img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    border-radius: 0.5rem;
}

.gallery-modal-close {
    position: absolute;
    top: -1rem;
    right: -1rem;
    width: 3rem;
    height: 3rem;
    background: white;
    border: none;
    border-radius: 50%;
    font-size: 1.5rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
}

.gallery-modal-close:hover {
    background: #f3f4f6;
    transform: scale(1.1);
}
`;

const styleSheet = document.createElement('style');
styleSheet.textContent = modalStyles;
document.head.appendChild(styleSheet);