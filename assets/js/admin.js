/**
 * Admin JavaScript for Judiciary of Eswatini Website
 */
document.addEventListener('DOMContentLoaded', function() {
    // Toggle mobile sidebar
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const adminSidebar = document.querySelector('.admin-sidebar');
    
    if (sidebarToggle && adminSidebar) {
        sidebarToggle.addEventListener('click', function() {
            adminSidebar.classList.toggle('show');
        });
    }
    
    // Image preview for file inputs
    const imageInputs = document.querySelectorAll('input[type="file"][accept*="image"]');
    
    imageInputs.forEach(input => {
        input.addEventListener('change', function() {
            const previewContainer = this.parentElement.querySelector('.image-preview');
            
            // Create preview container if it doesn't exist
            if (!previewContainer) {
                const container = document.createElement('div');
                container.className = 'image-preview';
                container.innerHTML = '<p>Preview:</p><img src="" alt="Image preview">';
                this.parentElement.appendChild(container);
            }
            
            // Update image preview
            const preview = this.parentElement.querySelector('.image-preview img');
            
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.parentElement.style.display = 'block';
                };
                
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
    
    // Confirm before deleting
    const deleteButtons = document.querySelectorAll('.delete-confirm');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            if (!confirm('Are you sure you want to delete this item? This action cannot be undone.')) {
                e.preventDefault();
            }
        });
    });
    
    // Filter form auto-submit
    const filterSelects = document.querySelectorAll('.filter-form select');
    
    filterSelects.forEach(select => {
        select.addEventListener('change', function() {
            this.form.submit();
        });
    });
    
    // Slug generator
    const titleInput = document.getElementById('title');
    const slugDisplay = document.querySelector('.slug-display');
    
    if (titleInput && slugDisplay) {
        titleInput.addEventListener('input', function() {
            const slug = createSlug(this.value);
            slugDisplay.textContent = slug;
        });
    }
    
    // Helper function to create a slug
    function createSlug(text) {
        return text
            .toString()
            .toLowerCase()
            .trim()
            .replace(/\s+/g, '-')        // Replace spaces with -
            .replace(/[^\w\-]+/g, '')    // Remove all non-word chars
            .replace(/\-\-+/g, '-')      // Replace multiple - with single -
            .replace(/^-+/, '')          // Trim - from start of text
            .replace(/-+$/, '');         // Trim - from end of text
    }
    
    // File input custom styling
    const fileInputs = document.querySelectorAll('input[type="file"]');
    
    fileInputs.forEach(input => {
        const label = input.nextElementSibling;
        
        if (label && label.tagName === 'LABEL') {
            input.addEventListener('change', function() {
                if (this.files && this.files.length > 0) {
                    label.textContent = this.files[0].name;
                } else {
                    label.textContent = 'Choose file';
                }
            });
        }
    });
    
    // TinyMCE initialization for textareas with class 'wysiwyg'
    // This is handled separately in news_form.php
});
