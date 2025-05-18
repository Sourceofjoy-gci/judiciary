/**
 * Home page specific JavaScript for Judiciary of Eswatini website
 * Includes functionality for sliders, tabs, and filters
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all homepage components
    initHeroSlider();
    initValuesTabs();
    initNewsFilters();
    initServicesSlider();
    initMembersSlider();
});

/**
 * Hero Slider
 * Controls the main homepage banner slider
 */
function initHeroSlider() {
    const slides = document.querySelectorAll('.hero-slider .slide');
    const dots = document.querySelectorAll('.hero-slider .dot');
    const prevBtn = document.querySelector('.hero-slider .prev');
    const nextBtn = document.querySelector('.hero-slider .next');
    
    if (!slides.length) return;
    
    let currentSlide = 0;
    let slideInterval;
    
    const showSlide = (index) => {
        // Hide all slides and remove active class from dots
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        // Show current slide and set corresponding dot as active
        slides[index].classList.add('active');
        dots[index].classList.add('active');
    };
    
    const nextSlide = () => {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    };
    
    const prevSlide = () => {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    };
    
    // Start automatic slideshow
    const startSlideshow = () => {
        slideInterval = setInterval(nextSlide, 6000);
    };
    
    // Stop automatic slideshow
    const stopSlideshow = () => {
        clearInterval(slideInterval);
    };
    
    // Event listeners for next/prev buttons
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            stopSlideshow();
            nextSlide();
            startSlideshow();
        });
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            stopSlideshow();
            prevSlide();
            startSlideshow();
        });
    }
    
    // Event listeners for dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            stopSlideshow();
            currentSlide = index;
            showSlide(currentSlide);
            startSlideshow();
        });
    });
    
    // Start the slideshow
    startSlideshow();
    
    // Pause slideshow when mouse hovers over slider
    const sliderContainer = document.querySelector('.hero-slider');
    if (sliderContainer) {
        sliderContainer.addEventListener('mouseenter', stopSlideshow);
        sliderContainer.addEventListener('mouseleave', startSlideshow);
    }
}

/**
 * Values Tabs
 * Handles tab switching in the Values section
 */
function initValuesTabs() {
    const tabBtns = document.querySelectorAll('.values-tabs .tab-btn');
    const tabPanes = document.querySelectorAll('.values-tabs .tab-pane');
    
    if (!tabBtns.length || !tabPanes.length) return;
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons and panes
            tabBtns.forEach(b => b.classList.remove('active'));
            tabPanes.forEach(p => p.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Show corresponding tab pane
            const tabId = this.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });
}

/**
 * News Filters
 * Handles filtering of news cards by category
 */
function initNewsFilters() {
    const filterBtns = document.querySelectorAll('.news-filter .filter-btn');
    const newsCards = document.querySelectorAll('.news-card');
    
    if (!filterBtns.length || !newsCards.length) return;
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Get the filter value
            const filter = this.getAttribute('data-filter');
            
            // Show/hide cards based on filter
            newsCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'block';
                    // Animate the card appearance
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
}

/**
 * Services Slider
 * Handles horizontal scrolling of service cards
 */
function initServicesSlider() {
    const servicesContainer = document.querySelector('.services-container');
    const prevBtn = document.querySelector('.service-nav .prev');
    const nextBtn = document.querySelector('.service-nav .next');
    
    if (!servicesContainer || !prevBtn || !nextBtn) return;
    
    const scrollAmount = servicesContainer.clientWidth / 2;
    
    nextBtn.addEventListener('click', () => {
        servicesContainer.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    });
    
    prevBtn.addEventListener('click', () => {
        servicesContainer.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });
    });
    
    // Show/hide buttons based on scroll position
    const updateNavButtons = () => {
        const isAtStart = servicesContainer.scrollLeft === 0;
        const isAtEnd = servicesContainer.scrollLeft + servicesContainer.clientWidth >= servicesContainer.scrollWidth - 5;
        
        prevBtn.style.opacity = isAtStart ? '0.5' : '1';
        prevBtn.style.pointerEvents = isAtStart ? 'none' : 'auto';
        
        nextBtn.style.opacity = isAtEnd ? '0.5' : '1';
        nextBtn.style.pointerEvents = isAtEnd ? 'none' : 'auto';
    };
    
    servicesContainer.addEventListener('scroll', updateNavButtons);
    window.addEventListener('resize', updateNavButtons);
    
    // Initialize button state
    updateNavButtons();
}

/**
 * Members Slider
 * Handles horizontal scrolling of JSC members
 */
function initMembersSlider() {
    const membersContainer = document.querySelector('.members-container');
    const prevBtn = document.querySelector('.members-nav .prev');
    const nextBtn = document.querySelector('.members-nav .next');
    
    if (!membersContainer || !prevBtn || !nextBtn) return;
    
    const scrollAmount = membersContainer.clientWidth / 2;
    
    nextBtn.addEventListener('click', () => {
        membersContainer.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    });
    
    prevBtn.addEventListener('click', () => {
        membersContainer.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });
    });
    
    // Show/hide buttons based on scroll position
    const updateNavButtons = () => {
        const isAtStart = membersContainer.scrollLeft === 0;
        const isAtEnd = membersContainer.scrollLeft + membersContainer.clientWidth >= membersContainer.scrollWidth - 5;
        
        prevBtn.style.opacity = isAtStart ? '0.5' : '1';
        prevBtn.style.pointerEvents = isAtStart ? 'none' : 'auto';
        
        nextBtn.style.opacity = isAtEnd ? '0.5' : '1';
        nextBtn.style.pointerEvents = isAtEnd ? 'none' : 'auto';
    };
    
    membersContainer.addEventListener('scroll', updateNavButtons);
    window.addEventListener('resize', updateNavButtons);
    
    // Initialize button state
    updateNavButtons();
}

/**
 * Floating Animation on Scroll
 * Adds subtle floating animations to elements as they come into view
 */
function initScrollAnimations() {
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    
    if (!animatedElements.length) return;
    
    const isElementInViewport = (el) => {
        const rect = el.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.85 &&
            rect.bottom >= 0
        );
    };
    
    const handleScroll = () => {
        animatedElements.forEach(element => {
            if (isElementInViewport(element) && !element.classList.contains('animated')) {
                element.classList.add('animated');
                
                // Add specific animation class based on data attribute
                const animationType = element.getAttribute('data-animation') || 'fade-in';
                element.classList.add(animationType);
            }
        });
    };
    
    // Initial check
    handleScroll();
    
    // Check on scroll
    window.addEventListener('scroll', handleScroll);
}

// Initialize scroll animations on load
window.addEventListener('load', initScrollAnimations);