/**
 * Legislation Page JavaScript
 * Handles tab navigation, document viewing, and search/filtering functionality
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize tab navigation
    initTabNavigation();
    
    // Initialize document viewer modal
    initDocumentViewer();
    
    // Initialize search and filtering
    initSearchAndFilter();
});

/**
 * Tab Navigation Implementation
 */
function initTabNavigation() {
    const tabs = document.querySelectorAll('.nav-tab');
    const sections = document.querySelectorAll('.content-section');
    
    // Add click event listeners to each tab
    tabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Get the target section ID
            const targetId = this.getAttribute('data-target');
            
            // Remove active class from all tabs and sections
            tabs.forEach(t => t.classList.remove('active'));
            sections.forEach(s => s.classList.remove('active'));
            
            // Add active class to clicked tab and corresponding section
            this.classList.add('active');
            document.getElementById(targetId).classList.add('active');
            
            // Smoothly scroll to the section
            window.scrollTo({
                top: document.querySelector('.quick-nav').offsetTop - 100,
                behavior: 'smooth'
            });
            
            // Update URL hash
            window.history.pushState(null, null, this.getAttribute('href'));
        });
    });
    
    // Check for hash in URL on page load
    if (window.location.hash) {
        const hash = window.location.hash.substring(1);
        const tab = document.querySelector(`[data-target="${hash}"]`);
        if (tab) {
            tab.click();
        }
    }
}

/**
 * Document Viewer Modal Implementation
 */
function initDocumentViewer() {
    const modal = document.getElementById('document-viewer-modal');
    const modalTitle = document.getElementById('modal-title');
    const pdfIframe = document.getElementById('pdf-iframe');
    const downloadBtn = document.getElementById('download-btn');
    const loadingIndicator = document.querySelector('.loading-indicator');
    
    // View button click handlers
    document.querySelectorAll('.btn-view').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            
            const docName = this.getAttribute('data-doc');
            const docTitle = this.closest('.document-card').querySelector('h4').textContent;
            
            // Set modal title and document path
            modalTitle.textContent = docTitle;
            pdfIframe.src = `assets/documents/${docName}`;
            downloadBtn.href = `assets/documents/${docName}`;
            downloadBtn.setAttribute('download', docName);
            
            // Show loading indicator
            loadingIndicator.style.display = 'flex';
            
            // Hide loading indicator when document loads
            pdfIframe.onload = function() {
                loadingIndicator.style.display = 'none';
            };
            
            // Open modal
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        });
    });
    
    // Download button click handlers
    document.querySelectorAll('.btn-download').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const docName = this.getAttribute('data-doc');
            this.href = `assets/documents/${docName}`;
            this.setAttribute('download', docName);
        });
    });
    
    // Close modal handlers
    const closeModal = function() {
        modal.style.display = 'none';
        document.body.style.overflow = ''; // Re-enable scrolling
        pdfIframe.src = ''; // Clear iframe source to stop any downloads/processing
    };
    
    document.querySelector('.modal-close').addEventListener('click', closeModal);
    document.querySelector('.btn-close').addEventListener('click', closeModal);
    
    // Close modal when clicking outside content
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
    
    // Close modal on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.style.display === 'block') {
            closeModal();
        }
    });
}

/**
 * Search and Filtering Implementation
 */
function initSearchAndFilter() {
    const searchInput = document.getElementById('search-docs');
    const yearFilter = document.getElementById('year-filter');
    const courtFilter = document.getElementById('court-filter');
    const filterForm = document.getElementById('document-filter-form');
    const cards = document.querySelectorAll('.document-card');
    
    // Apply filters when form is submitted
    filterForm.addEventListener('submit', function(e) {
        e.preventDefault();
        applyFilters();
    });
    
    // Reset filters
    filterForm.addEventListener('reset', function() {
        setTimeout(() => {
            // Allow form to reset values, then apply filters
            applyFilters();
        }, 10);
    });
    
    function applyFilters() {
        const searchTerm = searchInput.value.toLowerCase();
        const yearValue = yearFilter.value;
        const courtValue = courtFilter.value;
        
        cards.forEach(card => {
            const cardContent = card.textContent.toLowerCase();
            const yearMatch = card.querySelector('.year');
            const yearText = yearMatch ? yearMatch.textContent : '';
            
            // Check if card matches all applied filters
            const matchesSearch = !searchTerm || cardContent.includes(searchTerm);
            const matchesYear = !yearValue || yearText.includes(yearValue);
            const matchesCourt = !courtValue || cardContent.toLowerCase().includes(courtValue.toLowerCase());
            
            // Show or hide card based on filter matches
            if (matchesSearch && matchesYear && matchesCourt) {
                card.style.display = '';
                card.closest('.category-group').style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
        
        // Hide empty category groups
        document.querySelectorAll('.category-group').forEach(group => {
            const visibleCards = group.querySelectorAll('.document-card[style=""]');
            if (visibleCards.length === 0) {
                group.style.display = 'none';
            } else {
                group.style.display = '';
            }
        });
        
        // Show message if no results found
        document.querySelectorAll('.content-section.active').forEach(section => {
            const visibleGroups = section.querySelectorAll('.category-group[style=""]');
            let noResultsMsg = section.querySelector('.no-results-message');
            
            if (visibleGroups.length === 0) {
                if (!noResultsMsg) {
                    noResultsMsg = document.createElement('div');
                    noResultsMsg.className = 'no-results-message';
                    noResultsMsg.innerHTML = '<p>No documents match your search criteria. Try adjusting your filters.</p>';
                    section.querySelector('.cards-container').appendChild(noResultsMsg);
                }
            } else if (noResultsMsg) {
                noResultsMsg.remove();
            }
        });
    }
    
    // Add keyboard event to search as you type (with debounce)
    let debounceTimer;
    searchInput.addEventListener('input', function() {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => {
            applyFilters();
        }, 300);
    });
}

/**
 * Utility Functions
 */

// Helper function to create an SVG icon element
function createSvgIcon(iconName) {
    const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg.classList.add('icon');
    
    const use = document.createElementNS('http://www.w3.org/2000/svg', 'use');
    use.setAttributeNS('http://www.w3.org/1999/xlink', 'xlink:href', `assets/svg/sprites.svg#${iconName}`);
    
    svg.appendChild(use);
    return svg;
}

// Create directory structure placeholder for demo documents
// In a real implementation, this would be replaced with server-side code
function createDocumentDirectory() {
    console.log('Document directory structure would be created here in a real implementation');
    // This is just a placeholder for demonstration purposes
}
