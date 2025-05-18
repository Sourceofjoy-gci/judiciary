document.addEventListener('DOMContentLoaded', () => {
    // --- Document Checklist Tabs ---
    const tabButtons = document.querySelectorAll('.checklist-tabs .tab-btn');
    const tabPanes = document.querySelectorAll('.checklist-content .tab-pane');

    if (tabButtons.length > 0 && tabPanes.length > 0) {
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all tabs
                tabButtons.forEach(tab => tab.classList.remove('active'));
                
                // Add active class to current tab
                this.classList.add('active');
                
                // Hide all tab panes
                tabPanes.forEach(pane => pane.classList.remove('active'));
                
                // Show the selected tab pane
                const tabId = this.getAttribute('data-tab');
                document.getElementById(tabId).classList.add('active');
            });
        });
    }

    // --- FAQ Accordion ---
    const faqItems = document.querySelectorAll('.faq-accordion .faq-item');

    faqItems.forEach(item => {
        const questionButton = item.querySelector('.faq-question');
        const answerDiv = item.querySelector('.faq-answer');

        if (questionButton && answerDiv) {
            questionButton.addEventListener('click', () => {
                const isActive = questionButton.classList.contains('active');

                // Optional: Close other open FAQs if desired
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.querySelector('.faq-question').classList.remove('active');
                        otherItem.querySelector('.faq-answer').classList.remove('active');
                        otherItem.querySelector('.faq-answer').style.maxHeight = null;
                    }
                });

                if (!isActive) {
                    questionButton.classList.add('active');
                    answerDiv.classList.add('active');
                    answerDiv.style.maxHeight = answerDiv.scrollHeight + "px"; // Animate open
                } else {
                    questionButton.classList.remove('active');
                    answerDiv.classList.remove('active');
                    answerDiv.style.maxHeight = null; // Animate close
                }
            });

            // Ensure initially closed answers have max-height set to null
            if (!questionButton.classList.contains('active')) {
                answerDiv.style.maxHeight = null;
            } else {
                // If an item should be open by default
                answerDiv.style.maxHeight = answerDiv.scrollHeight + "px";
            }
        }
    });

    // Add smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80, // Offset for fixed header if needed
                    behavior: 'smooth'
                });
            }
        });
    });

    // Add animation when elements come into view
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.card-icon, .document-item, .step-icon');
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.2;
            
            if (elementPosition < screenPosition) {
                element.classList.add('animated');
            }
        });
    };

    // Run once on load
    animateOnScroll();
    
    // Run on scroll
    window.addEventListener('scroll', animateOnScroll);

    console.log("Master of the High Court JS loaded.");
});