/**
 * JavaScript for About Us page of Judiciary of Eswatini website
 * Handles interactive elements like sidebar navigation, tabs, and smooth scrolling
 */

document.addEventListener('DOMContentLoaded', () => {
    // Variables
    const aboutNav = document.getElementById('about-nav');
    const aboutSections = document.querySelectorAll('.about-section-content');
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanels = document.querySelectorAll('.tab-panel');
    
    // ===== Sidebar Navigation Highlighting =====
    function highlightNavigation() {
        // Get current scroll position
        const scrollPosition = window.scrollY;
        
        // Loop through all sections
        aboutSections.forEach(section => {
            // Get section position and height
            const sectionTop = section.offsetTop - 120; // Offset for header
            const sectionBottom = sectionTop + section.offsetHeight;
            
            // Check if the current scroll position is within this section
            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                // Get the id of the current section
                const currentId = section.getAttribute('id');
                
                // Remove active class from all links
                aboutNav.querySelectorAll('a').forEach(link => {
                    link.classList.remove('active');
                });
                
                // Add active class to the corresponding link
                const activeLink = aboutNav.querySelector(`a[href="#${currentId}"]`);
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }
        });
    }
    
    // Add scroll event listener
    window.addEventListener('scroll', highlightNavigation);
    
    // Trigger once on page load
    highlightNavigation();
    
    // ===== Smooth Scrolling =====
    // Add click event listeners to sidebar links
    if (aboutNav) {
        aboutNav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Get the target section id from the href
                const targetId = this.getAttribute('href').substring(1);
                const targetSection = document.getElementById(targetId);
                
                if (targetSection) {
                    // Calculate the scroll position
                    const scrollPosition = targetSection.offsetTop - 100; // Offset for header
                    
                    // Scroll smoothly to the target section
                    window.scrollTo({
                        top: scrollPosition,
                        behavior: 'smooth'
                    });
                    
                    // Update URL hash without jumping
                    history.pushState(null, null, `#${targetId}`);
                }
            });
        });
    }
    
    // ===== Tab Functionality =====
    // Add click event listeners to tab buttons
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Get the tab to show
            const tabToShow = button.dataset.tab;
            
            // Remove active class from all buttons and panels
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabPanels.forEach(panel => panel.classList.remove('active'));
            
            // Add active class to clicked button
            button.classList.add('active');
            
            // Show the corresponding panel
            const activePanel = document.getElementById(`${tabToShow}-panel`);
            if (activePanel) {
                activePanel.classList.add('active');
            }
        });
    });
    
    // ===== Handle Initial Hash =====
    // Check if there's a hash in the URL and scroll to that section
    if (window.location.hash) {
        const targetId = window.location.hash.substring(1);
        const targetSection = document.getElementById(targetId);
        
        if (targetSection) {
            // Small delay to ensure the page is fully loaded
            setTimeout(() => {
                // Calculate the scroll position
                const scrollPosition = targetSection.offsetTop - 100;
                
                // Scroll to the target section
                window.scrollTo({
                    top: scrollPosition,
                    behavior: 'smooth'
                });
                
                // Update active state in the sidebar
                aboutNav.querySelectorAll('a').forEach(link => {
                    link.classList.remove('active');
                });
                
                const activeLink = aboutNav.querySelector(`a[href="#${targetId}"]`);
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }, 100);
        }
    }
});
