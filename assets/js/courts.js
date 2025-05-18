document.addEventListener('DOMContentLoaded', function() {
    // Court Hierarchy Interaction
    const courtNodes = document.querySelectorAll('.court-node');
    const infoSections = document.querySelectorAll('.hierarchy-info-content');
    
    courtNodes.forEach(node => {
        node.addEventListener('click', function() {
            const courtId = this.getAttribute('data-court');
            
            // Remove active class from all nodes
            courtNodes.forEach(n => n.classList.remove('active'));
            
            // Add active class to clicked node
            this.classList.add('active');
            
            // Hide all info sections
            infoSections.forEach(section => {
                section.classList.remove('active');
            });
            
            // Show selected info section
            const infoSection = document.getElementById(`info-${courtId}`);
            if (infoSection) {
                infoSection.classList.add('active');
            }
        });
    });
    
    // View Toggle (Grid/List)
    const viewToggleBtns = document.querySelectorAll('.toggle-btn');
    const courtsContainer = document.getElementById('courts-container');
    
    viewToggleBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const view = this.getAttribute('data-view');
            
            // Remove active class from all buttons
            viewToggleBtns.forEach(b => b.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Toggle view class on container
            if (view === 'grid') {
                courtsContainer.classList.add('courts-grid');
                courtsContainer.classList.remove('courts-list');
            } else {
                courtsContainer.classList.remove('courts-grid');
                courtsContainer.classList.add('courts-list');
            }
        });
    });
    
    // Court Filtering and Sorting
    const filterSelect = document.getElementById('court-filter');
    const searchInput = document.getElementById('court-search');
    const sortSelect = document.getElementById('sort-courts');
    const courtCards = document.querySelectorAll('.court-card');
    const resultsCount = document.getElementById('results-count');
    const noResultsMessage = document.querySelector('.no-results-message');
    const resetFiltersBtn = document.querySelector('.reset-filters');
    
    // Filter function
    function filterAndSortCourts() {
        const filterValue = filterSelect.value;
        const searchValue = searchInput.value.toLowerCase();
        const sortValue = sortSelect.value;
        
        // First filter the courts
        let visibleCount = 0;
        const visibleCards = [];
        
        courtCards.forEach(card => {
            const courtType = card.getAttribute('data-type');
            const courtName = card.querySelector('h3').textContent.toLowerCase();
            const courtDesc = card.querySelector('p').textContent.toLowerCase();
            const courtMetadata = card.querySelector('.court-metadata').textContent.toLowerCase();
            
            // Check if card matches both filter and search
            const matchesFilter = filterValue === 'all' || courtType === filterValue;
            const matchesSearch = searchValue === '' || 
                                courtName.includes(searchValue) || 
                                courtDesc.includes(searchValue) ||
                                courtMetadata.includes(searchValue);
            
            if (matchesFilter && matchesSearch) {
                card.style.display = '';
                visibleCount++;
                visibleCards.push(card);
            } else {
                card.style.display = 'none';
            }
        });
        
        // Update results count
        resultsCount.textContent = visibleCount;
        
        // Show/hide no results message
        if (visibleCount === 0) {
            noResultsMessage.style.display = 'block';
            courtsContainer.style.display = 'none';
        } else {
            noResultsMessage.style.display = 'none';
            courtsContainer.style.display = '';
            
            // Then sort the visible cards
            sortCourts(visibleCards, sortValue);
        }
    }
    
    // Sort function
    function sortCourts(cards, sortType) {
        const sortedCards = Array.from(cards).sort((a, b) => {
            if (sortType === 'name') {
                const nameA = a.querySelector('h3').textContent.toLowerCase();
                const nameB = b.querySelector('h3').textContent.toLowerCase();
                return nameA.localeCompare(nameB);
            } 
            else if (sortType === 'established') {
                const yearA = parseInt(a.getAttribute('data-established'));
                const yearB = parseInt(b.getAttribute('data-established'));
                return yearA - yearB;
            }
            else { // hierarchy - use default DOM order
                return Array.from(courtCards).indexOf(a) - Array.from(courtCards).indexOf(b);
            }
        });
        
        // Reorder cards in the DOM
        sortedCards.forEach(card => {
            courtsContainer.appendChild(card);
        });
    }
    
    // Reset filters
    function resetFilters() {
        searchInput.value = '';
        filterSelect.value = 'all';
        sortSelect.value = 'hierarchy';
        filterAndSortCourts();
    }
    
    // Event listeners for filtering and sorting
    filterSelect.addEventListener('change', filterAndSortCourts);
    searchInput.addEventListener('input', filterAndSortCourts);
    sortSelect.addEventListener('change', filterAndSortCourts);
    resetFiltersBtn.addEventListener('click', resetFilters);
    
    // Initialize first court node as active
    if (courtNodes.length > 0) {
        courtNodes[0].classList.add('active');
        const firstCourtId = courtNodes[0].getAttribute('data-court');
        const firstInfoSection = document.getElementById(`info-${firstCourtId}`);
        if (firstInfoSection) {
            firstInfoSection.classList.add('active');
        }
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80, // Offset for fixed header
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Parallax effect for hero section
    const heroSection = document.querySelector('.parallax-hero');
    if (heroSection) {
        window.addEventListener('scroll', function() {
            const scrollPosition = window.pageYOffset;
            heroSection.style.backgroundPositionY = `calc(30% + ${scrollPosition * 0.5}px)`;
        });
    }
});
