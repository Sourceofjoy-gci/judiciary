/**
 * JavaScript for Commercial Court page of Judiciary of Eswatini website
 * Handles interactive elements, animations, and form submission
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initSidebarNavigation();
    initContactForm();
    addSmoothScrolling();
    initAnimations();
    enhanceProcessVisualizations();
});

/**
 * Sidebar Navigation
 * Handles the highlighting of current section in sidebar
 */
function initSidebarNavigation() {
    const sidebarLinks = document.querySelectorAll('#commercial-court-nav a');
    const sections = document.querySelectorAll('.commercial-court-section-content');
    
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
                const activeLink = document.querySelector(`#commercial-court-nav a[href="#${id}"]`);
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
 * Contact Form
 * Handles the validation and submission of contact form
 */
function initContactForm() {
    const form = document.getElementById('commercial-court-inquiry');
    
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
    const sidebarLinks = document.querySelectorAll('#commercial-court-nav a');
    
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
 * Adds fade-in and slide animations for content sections when scrolled into view
 */
function initAnimations() {
    const animatedElements = [
        { selector: '.glass-card', effect: 'fade-up' },
        { selector: '.feature-card', effect: 'fade-up' },
        { selector: '.jurisdiction-item', effect: 'slide-right' },
        { selector: '.process-step', effect: 'slide-right' },
        { selector: '.timeline-item', effect: 'fade-in' },
        { selector: '.procedure-card', effect: 'fade-up' },
        { selector: '.expert-meeting, .expert-minute', effect: 'fade-up' },
        { selector: '.benefit-item', effect: 'fade-up' },
        { selector: '.urgency-step', effect: 'fade-up' },
        { selector: '.criterion', effect: 'fade-up' },
    ];
    
    animatedElements.forEach(({selector, effect}) => {
        const elements = document.querySelectorAll(selector);
        
        if (!elements.length) return;
        
        // Add initial styles based on animation effect
        elements.forEach(el => {
            el.style.opacity = '0';
            el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            
            if (effect === 'fade-up') {
                el.style.transform = 'translateY(20px)';
            } else if (effect === 'slide-right') {
                el.style.transform = 'translateX(-20px)';
            } else if (effect === 'fade-in') {
                // Just opacity change, no transform
            }
        });
        
        // Create intersection observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0) translateX(0)';
                    observer.unobserve(entry.target); // Stop observing once animated
                }
            });
        }, {
            root: null,
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });
        
        // Observe each element
        elements.forEach(el => {
            observer.observe(el);
        });
    });
}

/**
 * Process Visualizations
 * Enhances interactive elements in process diagrams
 */
function enhanceProcessVisualizations() {
    // Add hover effects to flow diagram steps
    const flowSteps = document.querySelectorAll('.flow-step, .flow-start, .flow-end');
    flowSteps.forEach(step => {
        step.addEventListener('mouseenter', () => {
            step.style.transform = 'scale(1.05)';
            step.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
            step.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
        });
        
        step.addEventListener('mouseleave', () => {
            step.style.transform = 'scale(1)';
            step.style.boxShadow = 'none';
        });
    });
    
    // Add active state to proceedings timeline items
    const timelineItems = document.querySelectorAll('.timeline-item');
    timelineItems.forEach(item => {
        item.addEventListener('click', () => {
            // Remove active class from all items
            timelineItems.forEach(i => i.querySelector('.timeline-content').classList.remove('active-timeline-item'));
            
            // Add active class to clicked item
            const content = item.querySelector('.timeline-content');
            content.classList.add('active-timeline-item');
            content.style.backgroundColor = 'rgba(212, 175, 55, 0.15)';
            content.style.borderLeft = '3px solid var(--gold)';
            
            // Reset after delay
            setTimeout(() => {
                content.classList.remove('active-timeline-item');
                content.style.backgroundColor = '';
                content.style.borderLeft = '';
            }, 1500);
        });
    });
    
    // Interactive conference participants
    const participants = document.querySelectorAll('.participant');
    participants.forEach(participant => {
        participant.addEventListener('mouseenter', () => {
            // Scale up slightly
            participant.style.transform = 'scale(1.1)';
            participant.style.transition = 'transform 0.3s ease';
            
            // Add description tooltip (if needed)
            const role = participant.className.split(' ')[1]; // Get role from class name
            let description = '';
            
            switch(role) {
                case 'judge':
                    description = 'Presides over the pre-trial conference';
                    break;
                case 'counsel-one':
                    description = 'Represents the first party';
                    break;
                case 'counsel-two':
                    description = 'Represents the opposing party';
                    break;
                case 'registrar':
                    description = 'Records the proceedings';
                    break;
            }
            
            if (description) {
                const tooltip = document.createElement('div');
                tooltip.className = 'tooltip';
                tooltip.textContent = description;
                tooltip.style.cssText = `
                    position: absolute;
                    top: -30px;
                    left: 50%;
                    transform: translateX(-50%);
                    background-color: var(--primary-blue);
                    color: white;
                    padding: 5px 10px;
                    border-radius: 4px;
                    font-size: 12px;
                    white-space: nowrap;
                    z-index: 10;
                    opacity: 0;
                    transition: opacity 0.3s ease;
                `;
                
                participant.style.position = 'relative';
                participant.appendChild(tooltip);
                
                // Show tooltip after a small delay
                setTimeout(() => {
                    tooltip.style.opacity = '1';
                }, 100);
            }
        });
        
        participant.addEventListener('mouseleave', () => {
            participant.style.transform = 'scale(1)';
            
            // Remove tooltip if exists
            const tooltip = participant.querySelector('.tooltip');
            if (tooltip) {
                tooltip.remove();
            }
        });
    });
    
    // Add connectivity lines between steps in process diagrams
    connectProcessSteps();
}

/**
 * Connect Process Steps
 * Adds visual connection lines between process steps
 */
function connectProcessSteps() {
    const processStepsContainers = document.querySelectorAll('.process-flow');
    
    processStepsContainers.forEach(container => {
        const steps = container.querySelectorAll('.process-step');
        
        // Skip if there are less than 2 steps
        if (steps.length < 2) return;
        
        // Create connector lines between steps
        for (let i = 0; i < steps.length - 1; i++) {
            const currentStep = steps[i];
            const nextStep = steps[i + 1];
            
            // Create connector element
            const connector = document.createElement('div');
            connector.className = 'step-connector';
            connector.style.cssText = `
                width: 2px;
                height: 15px;
                background-color: var(--primary-blue);
                margin: 0 auto;
                opacity: 0;
                transition: opacity 0.5s ease;
            `;
            
            // Insert connector after current step
            currentStep.after(connector);
            
            // Animate connectors after a delay
            setTimeout(() => {
                connector.style.opacity = '1';
            }, 500 + (i * 200)); // Staggered animation
        }
    });
}