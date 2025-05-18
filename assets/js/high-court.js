/**
 * JavaScript for High Court page of Judiciary of Eswatini website
 * Handles interactive elements, tab navigation, and form submission
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initSidebarNavigation();
    initTabsNavigation();
    initContactForm();
    addSmoothScrolling();
    initAnimations();
});

/**
 * Sidebar Navigation
 * Handles the highlighting of current section in sidebar
 */
function initSidebarNavigation() {
    const sidebarLinks = document.querySelectorAll('#high-court-nav a');
    const sections = document.querySelectorAll('.high-court-section-content');
    
    if (!sidebarLinks.length || !sections.length) return;
    
    // Update active link based on scroll position
    function updateActiveLink() {
        let found = false;
        
        // Check sections in reverse order to handle the case when sections overlap
        for (let i = sections.length - 1; i >= 0; i--) {
            const section = sections[i];
            const rect = section.getBoundingClientRect();
            
            // If section is in view
            if (rect.top <= 100 && rect.bottom >= 100) {
                const id = section.getAttribute('id');
                
                // Remove active class from all links
                sidebarLinks.forEach(link => {
                    link.classList.remove('active');
                });
                
                // Add active class to corresponding link
                const activeLink = document.querySelector(`#high-court-nav a[href="#${id}"]`);
                if (activeLink) {
                    activeLink.classList.add('active');
                    found = true;
                }
                
                break;
            }
        }
        
        // If no section is in view, activate the first link
        if (!found && sections.length > 0) {
            sidebarLinks[0].classList.add('active');
        }
    }
    
    // Initial call
    updateActiveLink();
    
    // Listen for scroll events
    window.addEventListener('scroll', updateActiveLink);
}

/**
 * Tabs Navigation
 * Handles the tab switching for jurisdictions and procedures
 */
function initTabsNavigation() {
    const tabsContainers = document.querySelectorAll('.jurisdiction-tabs, .procedure-tabs');
    
    tabsContainers.forEach(container => {
        const tabBtns = container.querySelectorAll('.tab-btn');
        const tabPanels = container.querySelectorAll('.tab-panel');
        
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const tabId = btn.getAttribute('data-tab');
                
                // Update button active state
                tabBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                // Update panel visibility
                tabPanels.forEach(panel => {
                    panel.classList.remove('active');
                    if (panel.id === `${tabId}-panel`) {
                        panel.classList.add('active');
                    }
                });
            });
        });
    });
}

/**
 * Contact Form
 * Handles the validation and submission of contact form
 */
function initContactForm() {
    const form = document.getElementById('high-court-inquiry-form');
    
    if (!form) return;
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Check form validity using the global validateForm function
        if (typeof validateForm === 'function' && validateForm(form)) {
            // Here you would normally send the form data to the server
            // For demonstration, we'll just show a success message
            
            // Simulate form submission (would be AJAX in production)
            setTimeout(() => {
                if (typeof showNotification === 'function') {
                    showNotification('Your inquiry has been submitted successfully!', 'success');
                } else {
                    alert('Your inquiry has been submitted successfully!');
                }
                
                // Reset form
                form.reset();
            }, 1000);
        }
    });
}

/**
 * Smooth Scrolling
 * Adds smooth scrolling to sidebar navigation links
 */
function addSmoothScrolling() {
    const sidebarLinks = document.querySelectorAll('#high-court-nav a');
    
    sidebarLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            
            const targetId = link.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                // Scroll to target with offset for header
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
                
                // Update URL hash without jumping
                history.pushState(null, null, targetId);
                
                // Update active link
                sidebarLinks.forEach(l => l.classList.remove('active'));
                link.classList.add('active');
            }
        });
    });
}

/**
 * Animations
 * Adds fade-in animations for content sections when scrolled into view
 */
function initAnimations() {
    const animatedElements = document.querySelectorAll('.glass-card, .division-card, .judge-card, .process-step, .term-card, .location-item');
    
    if (!animatedElements.length) return;
    
    // Add initial styles
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    });
    
    // Create intersection observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target); // Stop observing once animated
            }
        });
    }, {
        root: null,
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });
    
    // Observe each element
    animatedElements.forEach(el => {
        observer.observe(el);
    });
}

/**
 * For interactive map functionality - would be implemented with a mapping API like Leaflet or Google Maps
 * 
 * function initMap() {
 *   const mapElement = document.querySelector('.location-map');
 *   // Map initialization code would go here
 * }
 */