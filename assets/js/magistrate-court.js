// Magistrate Court Horizontal Scroll Logic
document.addEventListener('DOMContentLoaded', () => {
    const bookContainer = document.querySelector('.book-container');
    const bookPages = document.querySelector('.book-pages');
    const tocLinks = document.querySelectorAll('.interactive-toc');
    
    // Handle TOC clicks
    tocLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const targetPage = bookPages.querySelector(`#${targetId}`);
            if (targetPage) {
                const pageIndex = Array.from(bookPages.children).indexOf(targetPage);
                // Update active TOC item
                tocLinks.forEach(link => link.classList.remove('active'));
                // Find the corresponding TOC link by href
                const activeTocLink = document.querySelector(`.interactive-toc[href="#${targetId}"]`);
                if (activeTocLink) {
                    activeTocLink.classList.add('active');
                }
                bookContainer.scrollTo({
                    left: pageIndex * window.innerWidth,
                    behavior: 'smooth'
                });
                // Update URL hash without jumping
                history.replaceState(null, null, `#${targetId}`);
            }
        });
    });

    if (!bookContainer) return;

    // Initialize scroll positions
    let isScrolling = false;
    let currentPage = 0;
    const pageWidth = window.innerWidth;

    // Handle scroll snap
    bookContainer.addEventListener('scroll', () => {
        if (!isScrolling) {
            isScrolling = true;
            currentPage = Math.round(bookContainer.scrollLeft / pageWidth);
            bookContainer.scrollTo({
                left: currentPage * pageWidth,
                behavior: 'smooth'
            });
            setTimeout(() => isScrolling = false, 100);
        }
    });

    // Add keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            currentPage = Math.max(0, currentPage - 1);
        } else if (e.key === 'ArrowRight') {
            currentPage = Math.min(
                bookContainer.children.length - 1, 
                currentPage + 1
            );
        }
        bookContainer.scrollTo({
            left: currentPage * pageWidth,
            behavior: 'smooth'
        });
    });

    // Handle hash links on page load
    if (window.location.hash) {
        const targetId = window.location.hash.substring(1);
        const targetPage = bookPages.querySelector(`#${targetId}`);
        if (targetPage) {
            const pageIndex = Array.from(bookPages.children).indexOf(targetPage);
            currentPage = pageIndex;
            bookContainer.scrollLeft = pageIndex * pageWidth;
            // Update active TOC item on load
            tocLinks.forEach(link => link.classList.remove('active'));
            const activeTocLink = document.querySelector(`.interactive-toc[href="#${targetId}"]`);
            if (activeTocLink) {
                activeTocLink.classList.add('active');
            }
        }
    }

    // Add mobile touch gestures
    let touchStartX = 0;
    bookContainer.addEventListener('touchstart', (e) => {
        touchStartX = e.touches[0].clientX;
    }, { passive: true });

    bookContainer.addEventListener('touchend', (e) => {
        const touchEndX = e.changedTouches[0].clientX;
        const diff = touchStartX - touchEndX;
        if (Math.abs(diff) > 50) {
            currentPage = diff > 0 
                ? Math.min(currentPage + 1, bookContainer.children.length - 1)
                : Math.max(currentPage - 1, 0);
            bookContainer.scrollTo({
                left: currentPage * pageWidth,
                behavior: 'smooth'
            });
        }
    }, { passive: true });
});