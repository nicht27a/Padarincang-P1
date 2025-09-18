// Initialize attraction dropdown functionality
document.addEventListener('DOMContentLoaded', function() {
  const attractionItems = document.querySelectorAll('.attraction-item');
  
  attractionItems.forEach(item => {
    const header = item.querySelector('.attraction-header');
    const content = item.querySelector('.attraction-content');
    
    header.addEventListener('click', function() {
      const isActive = item.classList.contains('active');
      
      // Toggle current item only
      if (isActive) {
        item.classList.remove('active');
        content.style.maxHeight = null;
      } else {
        item.classList.add('active');
        content.style.maxHeight = content.scrollHeight + "px";
      }
    });
    
    // Keyboard accessibility
    header.addEventListener('keydown', function(e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        header.click();
      }
    });
    
    // Make header focusable
    header.setAttribute('tabindex', '0');
    header.setAttribute('role', 'button');
    header.setAttribute('aria-expanded', 'false');
    
    // Observer to update aria-expanded
    const observer = new MutationObserver(function() {
      const isActive = item.classList.contains('active');
      header.setAttribute('aria-expanded', isActive.toString());
    });
    observer.observe(item, { attributes: true });
  });

  // 🔽 Tambahan tombol close all
  document.getElementById('closeAllBtn').addEventListener('click', function () {
  const attractionItems = document.querySelectorAll('.attraction-item');
  let adaYangKebuka = false;

  attractionItems.forEach(item => {
    if (item.classList.contains('active')) {
      adaYangKebuka = true;
      item.classList.remove('active');
      const content = item.querySelector('.attraction-content');
      if (content) content.style.maxHeight = null;
    }
  });

  const warningMsg = document.getElementById('warningMsg');

  if (!adaYangKebuka) {
    warningMsg.style.display = 'block';
  } else {
    warningMsg.style.display = 'none';
  }
});
});

