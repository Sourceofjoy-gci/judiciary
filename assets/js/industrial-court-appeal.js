/**
 * JavaScript for Industrial Court of Appeal page
 * Implements interactive elements such as sticky sidebar, smooth scrolling, accordion, and tabs
 */

document.addEventListener('DOMContentLoaded', function() {
    // Variables
    const sidebarNav = document.getElementById('industrial-nav');
    const sidebarLinks = sidebarNav.querySelectorAll('a');
    const contentSections = document.querySelectorAll('.industrial-section-content');
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabPanels = document.querySelectorAll('.tab-panel');
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    
    // Function to set active sidebar link based on scroll position
    function setActiveSidebarLink() {
        let currentSectionId = '';
        
        contentSections.forEach(section => {
            const sectionTop = section.offsetTop - 120;
            const sectionHeight = section.offsetHeight;
            const scrollY = window.scrollY;
            
            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                currentSectionId = section.getAttribute('id');
            }
        });
        
        sidebarLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${currentSectionId}`) {
                link.classList.add('active');
            }
        });
    }
    
    // Add smooth scrolling to sidebar links
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            
            window.scrollTo({
                top: targetSection.offsetTop - 100,
                behavior: 'smooth'
            });
            
            // Update URL hash without scrolling
            history.pushState(null, null, `#${targetId}`);
            
            // Set active class
            sidebarLinks.forEach(link => link.classList.remove('active'));
            this.classList.add('active');
        });
    });
    
    // Tab functionality
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const tabId = this.getAttribute('data-tab');
            
            // Remove active class from all buttons and panels
            tabBtns.forEach(btn => btn.classList.remove('active'));
            tabPanels.forEach(panel => panel.classList.remove('active'));
            
            // Add active class to current button and panel
            this.classList.add('active');
            document.getElementById(`${tabId}-panel`).classList.add('active');
        });
    });
    
    // Accordion functionality
    accordionHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const content = this.nextElementSibling;
            
            // Toggle active class for header
            this.classList.toggle('active');
            
            // Toggle display of content
            if (content.style.display === 'block') {
                content.style.display = 'none';
            } else {
                // Close all accordion items first
                document.querySelectorAll('.accordion-content').forEach(item => {
                    item.style.display = 'none';
                });
                
                // Open clicked accordion item
                content.style.display = 'block';
            }
        });
    });
    
    // Initialize the first accordion item as open
    if (accordionHeaders.length > 0) {
        accordionHeaders[0].classList.add('active');
        accordionHeaders[0].nextElementSibling.style.display = 'block';
    }
    
    // Handle initial state based on URL hash
    if (window.location.hash) {
        const targetId = window.location.hash.substring(1);
        const targetSection = document.getElementById(targetId);
        
        if (targetSection) {
            setTimeout(() => {
                window.scrollTo({
                    top: targetSection.offsetTop - 100,
                    behavior: 'auto'
                });
                
                // Set active class on sidebar link
                sidebarLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${targetId}`) {
                        link.classList.add('active');
                    }
                });
            }, 100);
        }
    }
    
    // Event listeners
    window.addEventListener('scroll', setActiveSidebarLink);
    
    // Internal link handling
    document.querySelectorAll('.internal-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            
            window.scrollTo({
                top: targetSection.offsetTop - 100,
                behavior: 'smooth'
            });
            
            // Update URL hash without scrolling
            history.pushState(null, null, `#${targetId}`);
        });
    });
    
    // Initialize active sidebar link
    setActiveSidebarLink();
});