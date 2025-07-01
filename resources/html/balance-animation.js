// Secure balance animation script
(function() {
  'use strict';
  
  // Animation configuration
  const CONFIG = {
    startValue: 0.80000000,
    endValue: 1.0830059,
    duration: 1500, // 8 seconds in milliseconds
    decimalPlaces: 8
  };
  
  // Easing function for smooth animation (ease-out)
  function easeOutCubic(t) {
    return 1 - Math.pow(1 - t, 3);
  }
  
  // Format number to specified decimal places
  function formatBalance(value) {
    return value.toFixed(CONFIG.decimalPlaces);
  }
  
  // Main animation function
  function animateBalance() {
    const balanceElement = document.querySelector('.card-amount');
    
    // Validate element exists
    if (!balanceElement) {
      console.warn('Card amount element not found');
      return;
    }
    
    const startTime = performance.now();
    
    function updateBalance(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / CONFIG.duration, 1);
      
      // Apply easing function for smooth animation
      const easedProgress = easeOutCubic(progress);
      
      // Calculate current value
      const currentValue = CONFIG.startValue + (CONFIG.endValue - CONFIG.startValue) * easedProgress;
      
      // Safely update the text content (prevents XSS)
      balanceElement.textContent = formatBalance(currentValue) + ' ₿';
      
      // Continue animation if not complete
      if (progress < 1) {
        requestAnimationFrame(updateBalance);
      }
    }
    
    // Start the animation
    requestAnimationFrame(updateBalance);
  }
  
  // Initialize animation when DOM is ready
  function init() {
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', animateBalance);
    } else {
      animateBalance();
    }
  }
  
  // Start initialization
  init();
})();