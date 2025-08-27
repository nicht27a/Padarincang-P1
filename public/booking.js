// GSAP Setup
gsap.registerPlugin(ScrollTrigger);

// Initialize booking system
document.addEventListener('DOMContentLoaded', function() {
    // Initialize guest counters
    window.guestCount = 2;
    window.attractionGuestCount = 1;
    
    // Add event listeners to booking pills
    const bookingPills = document.querySelectorAll('.booking-pill');
    
    bookingPills.forEach(pill => {
        pill.addEventListener('click', function(e) {
            e.preventDefault();
            const type = this.dataset.type;
            selectBookingType(type);
        });
    });
    
    // Initialize header functionality
    initializeHeader();
    
    // Initialize GSAP animations
    initializeAnimations();
    
    // Initialize date validation
    initializeDateValidation();
    
    // Initialize custom select for Wahana
    initializeCustomSelect();
});

// Function to select booking type
function selectBookingType(type) {
    const pills = document.querySelectorAll('.booking-pill');
    const accommodationForm = document.getElementById('accommodationForm');
    const attractionForm = document.getElementById('attractionForm');
    const mainPills = document.getElementById('bookingPills');
    
    // Remove active class from all pills
    pills.forEach(pill => pill.classList.remove('active'));
    
    // Hide all forms first
    accommodationForm.style.display = 'none';
    attractionForm.style.display = 'none';
    mainPills.style.display = 'none';
    
    // Show selected form
    if (type === 'accommodation') {
        document.querySelector('[data-type="accommodation"]').classList.add('active');
        accommodationForm.style.display = 'block';
        gsap.fromTo(accommodationForm, 
            { opacity: 0, y: 20 },
            { opacity: 1, y: 0, duration: 0.5, ease: 'power2.out' }
        );
    } else if (type === 'attraction') {
        document.querySelector('[data-type="attraction"]').classList.add('active');
        attractionForm.style.display = 'block';
        gsap.fromTo(attractionForm, 
            { opacity: 0, y: 20 },
            { opacity: 1, y: 0, duration: 0.5, ease: 'power2.out' }
        );
    }
}

// Function to show main pills again
function showMainPills() {
    const accommodationForm = document.getElementById('accommodationForm');
    const attractionForm = document.getElementById('attractionForm');
    const mainPills = document.getElementById('bookingPills');
    
    // Animate forms out
    gsap.to([accommodationForm, attractionForm], {
        opacity: 0,
        y: -20,
        duration: 0.3,
        ease: 'power2.in',
        onComplete: () => {
            accommodationForm.style.display = 'none';
            attractionForm.style.display = 'none';
            
            // Show main pills
            mainPills.style.display = 'flex';
            gsap.fromTo(mainPills, 
                { opacity: 0, y: 20 },
                { opacity: 1, y: 0, duration: 0.5, ease: 'power2.out' }
            );
        }
    });
    
    // Remove active class from pills
    document.querySelectorAll('.booking-pill').forEach(pill => {
        pill.classList.remove('active');
    });
}

// Function to change guest count for accommodation
function changeGuests(change) {
    const newCount = window.guestCount + change;
    if (newCount >= 1 && newCount <= 10) {
        window.guestCount = newCount;
        const guestElement = document.getElementById('guestCount');
        
        // Animate the number change
        gsap.to(guestElement, {
            scale: 1.2,
            duration: 0.1,
            onComplete: () => {
                guestElement.textContent = newCount;
                gsap.to(guestElement, {
                    scale: 1,
                    duration: 0.1
                });
            }
        });
    }
}

// Function to change guest count for attractions
function changeAttractionGuests(change) {
    const newCount = window.attractionGuestCount + change;
    if (newCount >= 1 && newCount <= 20) {
        window.attractionGuestCount = newCount;
        const guestElement = document.getElementById('attractionGuestCount');
        
        // Animate the number change
        gsap.to(guestElement, {
            scale: 1.2,
            duration: 0.1,
            onComplete: () => {
                guestElement.textContent = newCount;
                gsap.to(guestElement, {
                    scale: 1,
                    duration: 0.1
                });
            }
        });
    }
}

// Header functionality
function initializeHeader() {
    const header = document.getElementById('header');
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (!header || !mobileMenuBtn || !mobileMenu) {
        return;
    }
    
    // Header scroll effect
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
    
    // Mobile menu toggle
    mobileMenuBtn.addEventListener('click', function() {
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
        link.addEventListener('click', function() {
            mobileMenu.classList.remove('active');
            mobileMenuBtn.querySelector('i').className = 'fas fa-bars';
        });
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!header.contains(event.target)) {
            mobileMenu.classList.remove('active');
            mobileMenuBtn.querySelector('i').className = 'fas fa-bars';
        }
    });
}

// GSAP Animations
function initializeAnimations() {
    // Hero section animations
    gsap.from('.booking-card', {
        duration: 1.2,
        y: 50,
        opacity: 0,
        ease: 'power3.out',
        delay: 0.3
    });
    
    gsap.from('.booking-title', {
        duration: 1,
        scale: 0.8,
        opacity: 0,
        ease: 'back.out(1.7)',
        delay: 0.5
    });
    
    gsap.from('.booking-subtitle', {
        duration: 0.8,
        y: 20,
        opacity: 0,
        ease: 'power2.out',
        delay: 0.8
    });
    
    gsap.from('.booking-pill', {
        duration: 0.8,
        y: 30,
        opacity: 0,
        ease: 'power2.out',
        stagger: 0.2,
        delay: 1
    });
    
    // Pill hover animations
    const pills = document.querySelectorAll('.booking-pill');
    pills.forEach(pill => {
        pill.addEventListener('mouseenter', () => {
            gsap.to(pill, {
                duration: 0.3,
                scale: 1.05,
                ease: 'power2.out'
            });
        });
        
        pill.addEventListener('mouseleave', () => {
            gsap.to(pill, {
                duration: 0.3,
                scale: 1,
                ease: 'power2.out'
            });
        });
    });
    
    // Button hover animations
    const buttons = document.querySelectorAll('.search-btn, .back-btn');
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
    
    // Guest button animations
    const guestBtns = document.querySelectorAll('.guest-btn');
    guestBtns.forEach(btn => {
        btn.addEventListener('mouseenter', () => {
            gsap.to(btn, {
                duration: 0.2,
                scale: 1.1,
                ease: 'power2.out'
            });
        });
        
        btn.addEventListener('mouseleave', () => {
            gsap.to(btn, {
                duration: 0.2,
                scale: 1,
                ease: 'power2.out'
            });
        });
    });
}

// Form submission handling
function initializeFormSubmission() {
    const searchBtns = document.querySelectorAll('.search-btn');
    
    searchBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Simple button animation
            gsap.to(this, {
                scale: 0.95,
                duration: 0.1,
                onComplete: () => {
                    gsap.to(this, {
                        scale: 1,
                        duration: 0.1
                    });
                }
            });
        });
    });
}

// Date validation for accommodation
function initializeDateValidation() {
    const checkinInput = document.querySelector('.accommodation-form input[type="date"]:first-of-type');
    const checkoutInput = document.querySelector('.accommodation-form input[type="date"]:last-of-type');
    
    if (checkinInput && checkoutInput) {
        // Set minimum date to today
        const today = new Date().toISOString().split('T')[0];
        checkinInput.min = today;
        checkoutInput.min = today;
        
        // Update checkout minimum date when checkin changes
        checkinInput.addEventListener('change', function() {
            checkoutInput.min = this.value;
            if (checkoutInput.value && checkoutInput.value <= this.value) {
                checkoutInput.value = '';
            }
        });
    }
}

// Custom select for Wahana
function initializeCustomSelect() {
    const wrapper = document.getElementById('wahanaSelect');
    if (!wrapper) return;
    const toggle = wrapper.querySelector('.custom-select-toggle');
    const valueEl = wrapper.querySelector('.custom-select-value');
    const panel = wrapper.querySelector('.custom-select-panel');
    const options = wrapper.querySelectorAll('.custom-option');

    const close = () => {
        wrapper.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
    };
    const open = () => {
        wrapper.classList.add('open');
        toggle.setAttribute('aria-expanded', 'true');
    };

    toggle.addEventListener('click', (e) => {
        e.stopPropagation();
        if (wrapper.classList.contains('open')) close(); else open();
    });

    options.forEach(opt => {
        opt.addEventListener('click', (e) => {
            e.stopPropagation();
            const text = opt.querySelector('.option-title').textContent;
            valueEl.textContent = text;
            valueEl.dataset.placeholder = '';
            valueEl.classList.add('selected');
            close();
        });
    });

    document.addEventListener('click', () => close());
}

// Initialize form submission when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    initializeFormSubmission();
});

// Parallax effect for hero background
gsap.to('.booking-hero-bg img', {
    scrollTrigger: {
        trigger: '.booking-hero',
        start: 'top top',
        end: 'bottom top',
        scrub: true
    },
    y: 100,
    scale: 1.1
});