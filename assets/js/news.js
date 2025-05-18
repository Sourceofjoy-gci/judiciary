/**
 * News Article Page JavaScript
 * Adds interactive features to the news article page
 */

document.addEventListener('DOMContentLoaded', function() {
    // Handle smooth scroll for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href').substring(1);
            if (!targetId) return;
            
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                e.preventDefault();
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Initialize the subscription form
    const subscribeForm = document.getElementById('subscribe-form');
    if (subscribeForm) {
        subscribeForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Clear previous errors
            const errorMessages = this.querySelectorAll('.error-message');
            errorMessages.forEach(el => el.textContent = '');
            
            // Simple validation
            let isValid = true;
            const email = this.querySelector('#subscribe-email');
            const privacy = this.querySelector('#subscribe-privacy');
            const statusDiv = document.getElementById('subscribe-status');
            
            if (!email.value || !validateEmail(email.value)) {
                showError(email, 'Please enter a valid email address');
                isValid = false;
            }
            
            if (!privacy.checked) {
                showError(privacy, 'You must accept the privacy policy');
                isValid = false;
            }
            
            if (isValid) {
                // Show loading state
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalBtnText = submitBtn.textContent;
                submitBtn.textContent = 'Subscribing...';
                submitBtn.disabled = true;
                
                // Simulate form submission (replace with actual AJAX call)
                setTimeout(() => {
                    statusDiv.innerHTML = '<div class="success-message">Thank you! You have been subscribed to our newsletter.</div>';
                    this.reset();
                    submitBtn.textContent = originalBtnText;
                    submitBtn.disabled = false;
                    
                    // Hide success message after 5 seconds
                    setTimeout(() => {
                        statusDiv.innerHTML = '';
                    }, 5000);
                }, 1000);
            }
        });
    }
    
    // Scroll animations for content sections
    const animateOnScroll = function() {
        const sections = document.querySelectorAll('.content-section, .sidebar-widget, .related-card');
        
        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (sectionTop < windowHeight * 0.85 && !section.classList.contains('animated')) {
                section.classList.add('animated', 'fade-in');
            }
        });
    };
    
    // Add scroll listener for animations
    window.addEventListener('scroll', animateOnScroll);
    // Run once on page load
    setTimeout(animateOnScroll, 100);
    
    // Add parallax effect to hero background
    const heroSection = document.querySelector('.article-hero');
    if (heroSection && window.innerWidth > 768) {
        window.addEventListener('scroll', function() {
            const scrollPosition = window.pageYOffset;
            heroSection.style.backgroundPosition = `center ${scrollPosition * 0.4}px`;
        });
    }
    
    // Add estimated reading time
    calculateReadingTime();

    // Add CSS for scroll animations
    addScrollAnimationStyles();

    // Initialize category filters
    initCategoryFilters();
    
    // Initialize gallery buttons
    initGalleryButtons();
    
    // Initialize gallery thumbnails in article view
    initGalleryThumbnails();
    
    // Initialize share buttons
    initShareButtons();
});

// Helper functions
function showError(element, message) {
    const errorEl = element.parentNode.querySelector('.error-message') || 
                  element.parentNode.parentNode.querySelector('.error-message');
    if (errorEl) {
        errorEl.textContent = message;
    }
}

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function calculateReadingTime() {
    const articleBody = document.querySelector('.article-body');
    if (!articleBody) return;
    
    const text = articleBody.textContent || articleBody.innerText;
    const wordCount = text.split(/\s+/).length;
    const readingTime = Math.ceil(wordCount / 200); // Average reading speed: 200 words per minute
    
    const metaContainer = document.querySelector('.article-meta');
    if (metaContainer) {
        const timeElement = document.createElement('span');
        timeElement.className = 'article-reading-time';
        timeElement.innerHTML = `<i class="far fa-clock"></i> ${readingTime} min read`;
        metaContainer.appendChild(timeElement);
    }
}

function addScrollAnimationStyles() {
    const style = document.createElement('style');
    style.textContent = `
        .fade-in {
            animation: fadeInAnimation 0.8s ease forwards;
        }
        
        @keyframes fadeInAnimation {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .content-section, .sidebar-widget, .related-card {
            opacity: 0;
        }
        
        .article-reading-time {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        .success-message {
            background-color: rgba(46, 204, 113, 0.2);
            color: #27ae60;
            padding: 10px;
            border-radius: 5px;
            font-size: 0.9rem;
            margin-top: 10px;
        }
    `;
    document.head.appendChild(style);
}

/**
 * Initialize category filters
 */
function initCategoryFilters() {
    const filterButtons = document.querySelectorAll('.filter-btn, .category-filter-btn');
    const newsCards = document.querySelectorAll('.news-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            // For anchor tags, prevent default only if they have a data attribute
            if (this.tagName === 'A' && this.getAttribute('data-category')) {
                e.preventDefault();
            }
            
            const category = this.getAttribute('data-category');
            
            // Update active state on buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter news cards
            if (category === 'all') {
                newsCards.forEach(card => {
                    card.style.display = 'flex';
                });
            } else {
                newsCards.forEach(card => {
                    if (card.getAttribute('data-category') === category) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }
        });
    });
}

/**
 * Initialize gallery buttons
 */
function initGalleryButtons() {
    const galleryButtons = document.querySelectorAll('.gallery-btn');
    
    galleryButtons.forEach(button => {
        button.addEventListener('click', function() {
            const galleryId = this.getAttribute('data-gallery');
            
            // Click the first hidden link to open the lightbox
            const firstGalleryLink = document.querySelector(`a[data-lightbox="${galleryId}"]`);
            if (firstGalleryLink) {
                firstGalleryLink.click();
            }
        });
    });
}

/**
 * Initialize gallery thumbnails in article view
 */
function initGalleryThumbnails() {
    const galleryThumbs = document.querySelectorAll('.gallery-thumb');
    const featuredImage = document.querySelector('.main-featured-image');
    
    galleryThumbs.forEach(thumb => {
        thumb.addEventListener('click', function(e) {
            // Don't open lightbox on thumbnail click
            e.preventDefault();
            
            // Update main image
            if (featuredImage) {
                const imgUrl = this.querySelector('img').getAttribute('src');
                const imgAlt = this.querySelector('img').getAttribute('alt');
                
                // Animate the change
                featuredImage.style.opacity = '0';
                
                setTimeout(() => {
                    featuredImage.setAttribute('src', imgUrl);
                    featuredImage.setAttribute('alt', imgAlt);
                    featuredImage.style.opacity = '1';
                }, 300);
                
                // Update active state
                galleryThumbs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                // Update lightbox link
                const featuredLink = featuredImage.closest('a');
                if (featuredLink) {
                    featuredLink.setAttribute('href', imgUrl);
                    featuredLink.setAttribute('data-title', imgAlt);
                }
            }
        });
    });
    
    // Initialize gallery navigation
    const prevButton = document.querySelector('.gallery-nav-prev');
    const nextButton = document.querySelector('.gallery-nav-next');
    const thumbnailsContainer = document.querySelector('.gallery-thumbnails');
    
    if (prevButton && nextButton && thumbnailsContainer) {
        const scrollAmount = 200; // Adjust as needed
        
        prevButton.addEventListener('click', () => {
            thumbnailsContainer.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        });
        
        nextButton.addEventListener('click', () => {
            thumbnailsContainer.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        });
    }
}

/**
 * Initialize share buttons
 */
function initShareButtons() {
    const shareButtons = document.querySelectorAll('.share-btn');
    
    shareButtons.forEach(button => {
        button.addEventListener('click', function() {
            const card = this.closest('.news-card');
            const articleLink = card ? card.querySelector('.news-card-title a').getAttribute('href') : window.location.href;
            const articleTitle = card ? card.querySelector('.news-card-title').textContent.trim() : document.title;
            
            // Create sharing dialog
            const shareData = {
                title: articleTitle,
                url: articleLink
            };
            
            // Use Web Share API if available
            if (navigator.share) {
                navigator.share(shareData)
                    .catch(err => {
                        console.error('Error sharing:', err);
                    });
            } else {
                // Fallback: create a temporary popup with share links
                const popup = document.createElement('div');
                popup.className = 'share-popup';
                popup.innerHTML = `
                    <div class="share-popup-content">
                        <h3>Share this article</h3>
                        <div class="share-popup-links">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(articleLink)}" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook-f"></i> Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=${encodeURIComponent(articleLink)}&text=${encodeURIComponent(articleTitle)}" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-twitter"></i> Twitter
                            </a>
                            <a href="mailto:?subject=${encodeURIComponent(articleTitle)}&body=${encodeURIComponent('I thought you might be interested in this article: ' + articleLink)}">
                                <i class="fas fa-envelope"></i> Email
                            </a>
                            <button class="copy-link-btn" data-link="${articleLink}">
                                <i class="fas fa-link"></i> Copy Link
                            </button>
                        </div>
                        <button class="close-popup-btn">Close</button>
                    </div>
                `;
                
                document.body.appendChild(popup);
                
                // Handle copy link button
                const copyLinkBtn = popup.querySelector('.copy-link-btn');
                copyLinkBtn.addEventListener('click', function() {
                    const linkToCopy = this.getAttribute('data-link');
                    navigator.clipboard.writeText(linkToCopy)
                        .then(() => {
                            this.innerHTML = '<i class="fas fa-check"></i> Copied!';
                            setTimeout(() => {
                                this.innerHTML = '<i class="fas fa-link"></i> Copy Link';
                            }, 2000);
                        })
                        .catch(err => {
                            console.error('Error copying text: ', err);
                        });
                });
                
                // Handle close button
                const closeBtn = popup.querySelector('.close-popup-btn');
                closeBtn.addEventListener('click', function() {
                    document.body.removeChild(popup);
                });
                
                // Close popup when clicking outside
                popup.addEventListener('click', function(e) {
                    if (e.target === popup) {
                        document.body.removeChild(popup);
                    }
                });
            }
        });
    });
}

// Add CSS for share popup
document.addEventListener('DOMContentLoaded', function() {
    const style = document.createElement('style');
    style.textContent = `
        .share-popup {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }
        
        .share-popup-content {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            width: 90%;
            max-width: 400px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        }
        
        .share-popup-content h3 {
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 1.2rem;
            text-align: center;
        }
        
        .share-popup-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 20px;
        }
        
        .share-popup-links a,
        .share-popup-links button {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 15px;
            text-decoration: none;
            color: #333;
            background-color: #f5f5f5;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
            border: none;
            cursor: pointer;
            text-align: left;
            width: 100%;
        }
        
        .share-popup-links a:hover,
        .share-popup-links button:hover {
            background-color: #e5e5e5;
        }
        
        .share-popup-links i {
            width: 20px;
            text-align: center;
        }
        
        .close-popup-btn {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }
        
        .close-popup-btn:hover {
            background-color: #555;
        }
    `;
    document.head.appendChild(style);
});