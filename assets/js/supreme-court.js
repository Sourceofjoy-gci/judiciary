/**
 * JavaScript for Supreme Court page of Judiciary of Eswatini website
 * Handles interactive elements and enhances user experience
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize sidebar navigation
    initSidebarNav();
    
    // Initialize tabs for jurisdiction section
    initTabs();
    
    // Initialize scroll spy for section highlighting
    initScrollSpy();
});

/**
 * Initialize sidebar navigation with smooth scrolling
 */
function initSidebarNav() {
    const sidebarLinks = document.querySelectorAll('#supreme-nav a');
    
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Get the target section id from the href
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                // Calculate scroll position with offset for header
                const headerOffset = 100;
                const elementPosition = targetSection.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                // Smooth scroll to the target section
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
                
                // Set active class
                sidebarLinks.forEach(link => link.classList.remove('active'));
                this.classList.add('active');
            }
        });
    });
}

/**
 * Initialize tabs functionality
 */
function initTabs() {
    const tabContainers = document.querySelectorAll('.jurisdiction-tabs');
    
    tabContainers.forEach(container => {
        const tabButtons = container.querySelectorAll('.tab-btn');
        const tabPanels = container.querySelectorAll('.tab-panel');
        
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all tab buttons and panels
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabPanels.forEach(panel => panel.classList.remove('active'));
                
                // Add active class to the clicked tab button
                this.classList.add('active');
                
                // Get the target panel and activate it
                const target = this.getAttribute('data-tab');
                const targetPanel = container.querySelector(`#${target}-panel`);
                
                if (targetPanel) {
                    targetPanel.classList.add('active');
                }
            });
        });
    });
}

/**
 * Initialize scroll spy to highlight active sidebar section
 */
function initScrollSpy() {
    const sections = document.querySelectorAll('.supreme-section-content');
    const navItems = document.querySelectorAll('#supreme-nav a');
    
    // Throttle function to limit scroll event frequency
    const throttle = (callback, delay) => {
        let lastCall = 0;
        return function(...args) {
            const now = new Date().getTime();
            if (now - lastCall < delay) {
                return;
            }
            lastCall = now;
            return callback(...args);
        };
    };
    
    // Update active navigation item based on scroll position
    const updateActiveNavItem = () => {
        const scrollPosition = window.scrollY;
        
        // Find the section that is currently in view
        let currentSection = null;
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 120; // Adjust offset for header
            const sectionBottom = sectionTop + section.offsetHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                currentSection = section.getAttribute('id');
            }
        });
        
        // Update active class on navigation items
        if (currentSection) {
            navItems.forEach(item => {
                item.classList.remove('active');
                if (item.getAttribute('href') === `#${currentSection}`) {
                    item.classList.add('active');
                }
            });
        }
    };
    
    // Listen for scroll event with throttling
    window.addEventListener('scroll', throttle(updateActiveNavItem, 100));
    
    // Initial call to highlight the correct section
    updateActiveNavItem();
}