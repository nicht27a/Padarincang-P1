// Enhanced flip card functionality for touch devices
document.addEventListener('DOMContentLoaded', function() {
    const flipCards = document.querySelectorAll('.flip-card');
    
    // Handle touch devices
    if ('ontouchstart' in window) {
        flipCards.forEach(card => {
            let isFlipped = false;
            
            card.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Reset other cards
                flipCards.forEach(otherCard => {
                    if (otherCard !== card) {
                        otherCard.classList.remove('flipped');
                    }
                });
                
                // Toggle current card
                isFlipped = !isFlipped;
                if (isFlipped) {
                    card.classList.add('flipped');
                } else {
                    card.classList.remove('flipped');
                }
            });
        });
        
        // Close flipped cards when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.flip-card')) {
                flipCards.forEach(card => {
                    card.classList.remove('flipped');
                });
            }
        });
    }
    
    // Keyboard navigation
    flipCards.forEach(card => {
        card.setAttribute('tabindex', '0');
        card.setAttribute('role', 'button');
        card.setAttribute('aria-label', 'Kartu budaya - tekan untuk melihat detail');
        
        card.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                
                // For touch devices
                if ('ontouchstart' in window) {
                    card.click();
                } else {
                    // For desktop, just focus will trigger hover
                    card.focus();
                }
            }
        });
    });
    
    // Smooth scroll reveal animation
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, observerOptions);
    
    flipCards.forEach(card => {
        card.style.animationPlayState = 'paused';
        observer.observe(card);
    });
    
    // Add ripple effect on click
    flipCards.forEach(card => {
        card.addEventListener('click', function(e) {
            const ripple = document.createElement('div');
            const rect = card.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 215, 0, 0.3);
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                transform: scale(0);
                animation: ripple 0.6s linear;
                pointer-events: none;
                z-index: 1;
            `;
            
            card.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
    
    // Performance optimization: Reduce animations on low-end devices
    if (navigator.hardwareConcurrency && navigator.hardwareConcurrency < 4) {
        document.body.classList.add('reduced-motion');
    }
    
    // Preload images for better performance
    const images = document.querySelectorAll('img');
    images.forEach(img => {
        const imageLoader = new Image();
        imageLoader.src = img.src;
    });
});

// Add CSS for ripple animation
const rippleCSS = `
@keyframes ripple {
    to {
        transform: scale(4);
        opacity: 0;
    }
}

.flip-card {
    position: relative;
    overflow: hidden;
}

.reduced-motion * {
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
}
`;

const style = document.createElement('style');
style.textContent = rippleCSS;
document.head.appendChild(style);

// Add smooth entrance animation
window.addEventListener('load', function() {
    document.body.style.opacity = '1';
    document.body.style.transform = 'translateY(0)';
});

// Initialize body styles for entrance animation
document.body.style.cssText += `
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.6s ease;
`;

// Enhanced accessibility
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        // Close all flipped cards on escape
        document.querySelectorAll('.flip-card.flipped').forEach(card => {
            card.classList.remove('flipped');
        });
    }
});

// Add focus management
let focusedCardIndex = -1;
const cards = document.querySelectorAll('.flip-card');

document.addEventListener('keydown', function(e) {
    if (e.key === 'ArrowRight' || e.key === 'ArrowLeft') {
        e.preventDefault();
        
        if (e.key === 'ArrowRight') {
            focusedCardIndex = (focusedCardIndex + 1) % cards.length;
        } else {
            focusedCardIndex = focusedCardIndex <= 0 ? cards.length - 1 : focusedCardIndex - 1;
        }
        
        cards[focusedCardIndex].focus();
    }
});

// Add visual feedback for interactions
cards.forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-10px) scale(1.02)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
    });
    
    card.addEventListener('focus', function() {
        this.style.boxShadow = '0 0 0 3px rgba(255, 215, 0, 0.5)';
    });
    
    card.addEventListener('blur', function() {
        this.style.boxShadow = '';
    });
});