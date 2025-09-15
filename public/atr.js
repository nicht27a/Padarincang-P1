// Initialize attraction dropdown functionality
document.addEventListener('DOMContentLoaded', function() {
  const attractionItems = document.querySelectorAll('.attraction-item');
  
  attractionItems.forEach(item => {
    const header = item.querySelector('.attraction-header');
    const content = item.querySelector('.attraction-content');
    const arrow = item.querySelector('.dropdown-arrow');
    
    header.addEventListener('click', function() {
      const isActive = item.classList.contains('active');
      
      // Close all other items
      attractionItems.forEach(otherItem => {
        if (otherItem !== item) {
          otherItem.classList.remove('active');
        }
      });
      
      // Toggle current item
      if (isActive) {
        item.classList.remove('active');
      } else {
        item.classList.add('active');
        
        // Smooth scroll to the opened item after a short delay
        setTimeout(() => {
          item.scrollIntoView({ 
            behavior: 'smooth', 
            block: 'nearest' 
          });
        }, 200);
      }
    });
    
    // Add keyboard accessibility
    header.addEventListener('keydown', function(e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        header.click();
      }
    });
    
    // Make header focusable for keyboard navigation
    header.setAttribute('tabindex', '0');
    header.setAttribute('role', 'button');
    header.setAttribute('aria-expanded', 'false');
    
    // Update aria-expanded when item is toggled
    const observer = new MutationObserver(function(mutations) {
      mutations.forEach(function(mutation) {
        if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
          const isActive = item.classList.contains('active');
          header.setAttribute('aria-expanded', isActive.toString());
        }
      });
    });
    
    observer.observe(item, { attributes: true });
  });
  
  // Add smooth entrance animation
  attractionItems.forEach((item, index) => {
    item.style.opacity = '0';
    item.style.transform = 'translateY(20px)';
    
    setTimeout(() => {
      item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
      item.style.opacity = '1';
      item.style.transform = 'translateY(0)';
    }, index * 100);
  });
});

// Add rating star hover effects
document.addEventListener('DOMContentLoaded', function() {
  const starContainers = document.querySelectorAll('.stars');
  
  starContainers.forEach(container => {
    const stars = container.querySelectorAll('.star');
    
    stars.forEach((star, index) => {
      star.addEventListener('mouseenter', function() {
        // Add subtle scale effect to filled stars on hover
        if (star.classList.contains('filled')) {
          star.style.transform = 'scale(1.1)';
          star.style.transition = 'transform 0.2s ease';
        }
      });
      
      star.addEventListener('mouseleave', function() {
        star.style.transform = 'scale(1)';
      });
    });
  });
});