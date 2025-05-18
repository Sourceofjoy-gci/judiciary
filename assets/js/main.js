/**
 * Main JavaScript file for Judiciary of Eswatini website
 * Handles navigation, search functionality, and interactive elements
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initMobileMenu();
    initDropdownMenu();
    initSearchToggle();
    initBackToTop();
    initSmoothScroll();
});

/**
 * Mobile Menu Toggle
 * Handles mobile menu opening/closing and overlay
 */
function initMobileMenu() {
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-navigation');
    const body = document.body;
    
    if (!menuToggle || !mainNav) return;
    
    let overlay = document.createElement('div');
    overlay.className = 'mobile-menu-overlay';
    overlay.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;  /* Lower than mobile menu z-index */
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    `;
    body.appendChild(overlay);
    
    // Toggle menu function
    const toggleMenu = () => {
        const isActive = mainNav.classList.contains('active');
        
        // Toggle active class
        mainNav.classList.toggle('active');
        menuToggle.classList.toggle('active');
        
        // Manipulate toggle button appearance
        const spans = menuToggle.querySelectorAll('span');
        if (isActive) {
            // Return to hamburger
            spans[0].style.transform = 'rotate(0) translateY(0)';
            spans[1].style.opacity = '1';
            spans[2].style.transform = 'rotate(0) translateY(0)';
            
            // Hide overlay
            overlay.style.opacity = '0';
            overlay.style.visibility = 'hidden';
            
            // Enable scrolling
            body.style.overflow = '';
        } else {
            // Change to X
            spans[0].style.transform = 'rotate(45deg) translateY(8px)';
            spans[1].style.opacity = '0';
            spans[2].style.transform = 'rotate(-45deg) translateY(-8px)';
            
            // Show overlay
            overlay.style.opacity = '1';
            overlay.style.visibility = 'visible';
            
            // Disable scrolling
            body.style.overflow = 'hidden';
        }
    };

    // Close menu when clicking on a navigation link
    const navLinks = document.querySelectorAll('.nav-menu a');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 768 && mainNav.classList.contains('active')) {
                toggleMenu();
            }
        });
    });
    
    // Event listeners
    menuToggle.addEventListener('click', toggleMenu);
    overlay.addEventListener('click', toggleMenu);
    
    // Close menu on window resize (if desktop view)
    window.addEventListener('resize', () => {
        if (window.innerWidth > 768 && mainNav.classList.contains('active')) {
            toggleMenu();
        }
    });
}

/**
 * Dropdown Menu Handler for mobile
 * Allows dropdown menus to be opened/closed on mobile
 */
function initDropdownMenu() {
    const dropdownItems = document.querySelectorAll('.has-dropdown');
    
    if (dropdownItems.length === 0) return;
    
    // Only apply for mobile view
    const isMobile = () => window.innerWidth <= 768;
    
    dropdownItems.forEach(item => {
        const link = item.querySelector('a');
        
        // Create dropdown toggle button for mobile
        if (isMobile()) {
            const toggle = document.createElement('button');
            toggle.className = 'dropdown-toggle';
            toggle.innerHTML = '<svg viewBox="0 0 24 24" width="24" height="24"><path fill="currentColor" d="M7 10l5 5 5-5z"></path></svg>';
            toggle.style.cssText = `
                background: transparent;
                border: none;
                color: inherit;
                padding: 0;
                margin-left: 8px;
                cursor: pointer;
            `;
            link.appendChild(toggle);
            
            toggle.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                item.classList.toggle('active');
            });
        }
        
        // For mobile view, only prevent navigation when clicking the toggle button
        if (isMobile()) {
            link.addEventListener('click', (e) => {
                // Only prevent default if clicking the toggle button (not the link itself)
                if (e.target !== link && e.target.closest('.dropdown-toggle')) {
                    e.preventDefault();
                    e.stopPropagation();
                    item.classList.toggle('active');
                }
            });
        }
    });
    
    // Reinitialize on window resize
    window.addEventListener('resize', () => {
        // Remove all toggle buttons
        const toggles = document.querySelectorAll('.dropdown-toggle');
        toggles.forEach(toggle => toggle.remove());
        
        // Reset active classes
        dropdownItems.forEach(item => item.classList.remove('active'));
        
        // Reinitialize if mobile
        if (isMobile()) {
            initDropdownMenu();
        }
    });
}

/**
 * Search Toggle
 * Handles showing/hiding the search form
 */
function initSearchToggle() {
    const searchToggle = document.querySelector('.search-toggle');
    const searchForm = document.querySelector('.search-form');
    
    if (!searchToggle || !searchForm) return;
    
    searchToggle.addEventListener('click', () => {
        // Toggle the form visibility
        const isVisible = searchForm.style.opacity === '1';
        
        if (isVisible) {
            searchForm.style.opacity = '0';
            searchForm.style.visibility = 'hidden';
            searchForm.style.transform = 'translateY(10px)';
        } else {
            searchForm.style.opacity = '1';
            searchForm.style.visibility = 'visible';
            searchForm.style.transform = 'translateY(0)';
            
            // Focus the search input
            const searchInput = searchForm.querySelector('input');
            if (searchInput) {
                searchInput.focus();
            }
        }
    });
    
    // Close search form when clicking outside
    document.addEventListener('click', (e) => {
        if (!searchToggle.contains(e.target) && !searchForm.contains(e.target)) {
            searchForm.style.opacity = '0';
            searchForm.style.visibility = 'hidden';
            searchForm.style.transform = 'translateY(10px)';
        }
    });
}

/**
 * Back to Top Button
 * Shows/hides the back to top button based on scroll position
 */
function initBackToTop() {
    const backToTopBtn = document.querySelector('.back-to-top');
    
    if (!backToTopBtn) return;
    
    // Show button when scrolled down enough
    window.addEventListener('scroll', () => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > 500) {
            backToTopBtn.classList.add('visible');
        } else {
            backToTopBtn.classList.remove('visible');
        }
    });
    
    // Scroll to top when clicked
    backToTopBtn.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

/**
 * Smooth Scroll for Anchor Links
 * Makes internal anchor links scroll smoothly to their targets
 */
function initSmoothScroll() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]:not([href="#"])');
    
    anchorLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            // Get the target element
            const targetId = link.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                e.preventDefault();
                
                // Scroll to target
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Update URL hash without jumping
                history.pushState(null, null, targetId);
            }
        });
    });
}

/**
 * AJAX Search Function
 * Performs search without page reload
 * @param {string} query - The search query
 * @param {function} callback - Function to handle search results
 */
function ajaxSearch(query, callback) {
    // Create AJAX request
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `api/search.php?q=${encodeURIComponent(query)}`, true);
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                try {
                    const response = JSON.parse(xhr.responseText);
                    callback(null, response);
                } catch (error) {
                    callback('Failed to parse search results', null);
                }
            } else {
                callback('Search request failed', null);
            }
        }
    };
    
    xhr.onerror = function() {
        callback('Network error occurred', null);
    };
    
    xhr.send();
}

/**
 * Form Validation
 * Generic form validation function
 * @param {HTMLFormElement} form - The form to validate
 * @returns {boolean} - Whether the form is valid
 */
function validateForm(form) {
    const inputs = form.querySelectorAll('input, select, textarea');
    let isValid = true;
    
    inputs.forEach(input => {
        // Skip submit buttons and hidden fields
        if (input.type === 'submit' || input.type === 'hidden') return;
        
        // Check required fields
        if (input.hasAttribute('required') && !input.value.trim()) {
            markInvalid(input, 'This field is required');
            isValid = false;
            return;
        }
        
        // Check email format
        if (input.type === 'email' && input.value.trim()) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(input.value.trim())) {
                markInvalid(input, 'Please enter a valid email address');
                isValid = false;
                return;
            }
        }
        
        // Clear any previous validation messages
        clearValidation(input);
    });
    
    return isValid;
}

/**
 * Mark a form field as invalid
 * @param {HTMLElement} input - The input element to mark
 * @param {string} message - The error message to display
 */
function markInvalid(input, message) {
    // Remove any existing error message
    clearValidation(input);
    
    // Add error class to input
    input.classList.add('invalid');
    
    // Create error message element
    const errorMessage = document.createElement('div');
    errorMessage.className = 'error-message';
    errorMessage.textContent = message;
    errorMessage.style.cssText = `
        color: #d9534f;
        font-size: 0.875rem;
        margin-top: 4px;
    `;
    
    // Insert error message after input
    input.parentNode.insertBefore(errorMessage, input.nextSibling);
    
    // Add event listener to clear validation on input
    input.addEventListener('input', function onInput() {
        clearValidation(input);
        input.removeEventListener('input', onInput);
    });
}

/**
 * Clear validation message for an input
 * @param {HTMLElement} input - The input element to clear
 */
function clearValidation(input) {
    // Remove invalid class
    input.classList.remove('invalid');
    
    // Remove error message
    const errorMessage = input.nextElementSibling;
    if (errorMessage && errorMessage.classList.contains('error-message')) {
        errorMessage.remove();
    }
}

/**
 * Show Notification Message
 * Displays a temporary notification to the user
 * @param {string} message - The message to display
 * @param {string} type - The type of message (success, error, info)
 * @param {number} duration - How long to show the message (ms)
 */
function showNotification(message, type = 'info', duration = 3000) {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    
    // Style the notification
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        max-width: 300px;
        padding: 10px 15px;
        border-radius: 4px;
        color: white;
        font-size: 14px;
        z-index: 9999;
        opacity: 0;
        transform: translateY(-20px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    `;
    
    // Set background color based on type
    if (type === 'success') {
        notification.style.backgroundColor = '#28a745';
    } else if (type === 'error') {
        notification.style.backgroundColor = '#dc3545';
    } else {
        notification.style.backgroundColor = '#17a2b8';
    }
    
    // Add to document
    document.body.appendChild(notification);
    
    // Trigger animation
    setTimeout(() => {
        notification.style.opacity = '1';
        notification.style.transform = 'translateY(0)';
    }, 10);
    
    // Remove after duration
    setTimeout(() => {
        notification.style.opacity = '0';
        notification.style.transform = 'translateY(-20px)';
        
        // Remove from DOM after transition
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, duration);
}