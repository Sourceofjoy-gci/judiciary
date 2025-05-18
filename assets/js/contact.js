document.addEventListener('DOMContentLoaded', () => {

    // --- Contact Form Validation ---
    const contactForm = document.getElementById('main-contact-form');
    const formStatusDiv = document.getElementById('form-status');

    if (contactForm) {
        contactForm.addEventListener('submit', function(event) {
            // Prevent default submission initially to allow validation
            event.preventDefault();
            if (validateContactForm()) {
                // If validation passes, you can submit the form traditionally:
                 this.submit();

                // OR handle submission via AJAX (example below)
                // submitFormAjax(this);
            } else {
                if (formStatusDiv) {
                    formStatusDiv.textContent = 'Please correct the errors in the form.';
                    formStatusDiv.className = 'error'; // Use class for styling
                    formStatusDiv.style.display = 'block';
                }
                 // Find first invalid field and focus it
                 const firstInvalid = contactForm.querySelector('.invalid');
                 if (firstInvalid) {
                     firstInvalid.focus();
                 }
            }
        });
    }

    function validateContactForm() {
        let isValid = true;
        clearErrors(); // Clear previous errors

        // Fields to validate
        const fullName = document.getElementById('full-name');
        const email = document.getElementById('email');
        const phone = document.getElementById('phone'); // Optional validation
        const subject = document.getElementById('subject');
        const message = document.getElementById('message');
        const privacy = document.getElementById('privacy');
        const attachment = document.getElementById('attachment');

        // Full Name (Required)
        if (!fullName.value.trim()) {
            showError(fullName, 'Full Name is required.');
            isValid = false;
        }

        // Email (Required & Format)
        if (!email.value.trim()) {
            showError(email, 'Email Address is required.');
            isValid = false;
        } else if (!/\S+@\S+\.\S+/.test(email.value)) {
            showError(email, 'Please enter a valid email address.');
            isValid = false;
        }

        // Phone (Optional - Basic Format Check if filled)
        if (phone.value.trim() && !/^[+\d\s()-]*\d$/.test(phone.value)) {
             showError(phone, 'Please enter a valid phone number.');
             isValid = false; // Or just warn without blocking submission
        }


        // Subject (Required)
        if (!subject.value.trim()) {
            showError(subject, 'Subject is required.');
            isValid = false;
        }

        // Message (Required)
        if (!message.value.trim()) {
            showError(message, 'Message is required.');
            isValid = false;
        }

        // Privacy Policy (Required)
        if (!privacy.checked) {
            showError(privacy, 'You must accept the Privacy Policy.');
            isValid = false;
        }

        // Attachment (Optional - File Size Check)
        if (attachment.files.length > 0) {
            const maxSize = 5 * 1024 * 1024; // 5MB in bytes
            if (attachment.files[0].size > maxSize) {
                showError(attachment, 'File size must not exceed 5MB.');
                isValid = false;
            }
        }


        return isValid;
    }

    function showError(inputElement, message) {
        inputElement.classList.add('invalid');
        const errorDiv = inputElement.closest('.form-group').querySelector('.error-message');
        if (errorDiv) {
            errorDiv.textContent = message;
            errorDiv.style.display = 'block'; // Ensure it's visible
        }
         // Special handling for checkbox label parent
         if (inputElement.type === 'checkbox') {
             const privacyGroup = inputElement.closest('.privacy-policy');
             const checkboxErrorDiv = privacyGroup.querySelector('.error-message');
             if(checkboxErrorDiv){
                 checkboxErrorDiv.textContent = message;
                 checkboxErrorDiv.style.display = 'block';
             }
         }
    }

    function clearErrors() {
        contactForm.querySelectorAll('.invalid').forEach(el => el.classList.remove('invalid'));
        contactForm.querySelectorAll('.error-message').forEach(el => {
            el.textContent = '';
            el.style.display = 'none';
        });
        if (formStatusDiv) {
            formStatusDiv.textContent = '';
            formStatusDiv.style.display = 'none';
            formStatusDiv.className = ''; // Reset class
        }
    }

    // --- AJAX Form Submission (Example - Uncomment and adapt if needed) ---
    /*
    function submitFormAjax(form) {
        const formData = new FormData(form);
        const statusDiv = document.getElementById('form-status');
        statusDiv.textContent = 'Sending...';
        statusDiv.className = 'info'; // Use a class for styling pending state
        statusDiv.style.display = 'block';


        fetch(form.action, {
            method: 'POST',
            body: formData,
            // Add headers if your backend expects specific ones,
            // but FormData usually sets Content-Type correctly (multipart/form-data)
        })
        .then(response => response.json()) // Assuming your PHP script returns JSON
        .then(data => {
            if (data.success) {
                statusDiv.textContent = data.message || 'Message sent successfully!';
                statusDiv.className = 'success';
                form.reset(); // Clear the form
                clearErrors();
            } else {
                statusDiv.textContent = data.message || 'An error occurred. Please try again.';
                statusDiv.className = 'error';
            }
        })
        .catch(error => {
            console.error('Error submitting form:', error);
            statusDiv.textContent = 'A network error occurred. Please try again later.';
            statusDiv.className = 'error';
        });
    }
    */


    // --- FAQ Accordion ---
    const faqItems = document.querySelectorAll('.faq-accordion .faq-item');

    faqItems.forEach(item => {
        const questionButton = item.querySelector('.faq-question');
        const answerDiv = item.querySelector('.faq-answer');

        if (questionButton && answerDiv) {
            questionButton.addEventListener('click', () => {
                const isActive = questionButton.classList.contains('active');

                if (!isActive) {
                    questionButton.classList.add('active');
                    answerDiv.classList.add('active');
                    answerDiv.style.maxHeight = answerDiv.scrollHeight + "px";
                } else {
                    questionButton.classList.remove('active');
                    answerDiv.classList.remove('active');
                    answerDiv.style.maxHeight = null;
                }
            });

             if (!questionButton.classList.contains('active')) {
                 answerDiv.style.maxHeight = null;
             } else {
                 answerDiv.style.maxHeight = answerDiv.scrollHeight + "px";
             }
        }
    });

    // --- Interactive Map Placeholder ---
    const mapContainer = document.getElementById('interactive-map-container');
    if (mapContainer) {
        // Placeholder: Add map initialization code here if using Leaflet or Google Maps API
        // Example: initializeLeafletMap(mapContainer);
        // Example: initGoogleMap(); // If using Google Maps callback
        console.log("Map container found. Add map library and initialization code.");
    }


    console.log("Contact Us JS loaded.");

});

// --- Example Map Initialization Functions (Requires Libraries) ---

/*
// Example for Leaflet
function initializeLeafletMap(containerId) {
    if (typeof L === 'undefined') {
        console.error("Leaflet library not loaded.");
        return;
    }
    const map = L.map(containerId).setView([-26.5, 31.5], 8); // Eswatini center

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Add markers for courts (fetch data or define here)
    const courts = [
        { name: "High Court", coords: [-26.3167, 31.1333], popup: "High Court Building, Mbabane" },
        // Add other courts...
    ];

    courts.forEach(court => {
        L.marker(court.coords).addTo(map).bindPopup(court.popup || court.name);
    });

     // Remove placeholder text
     const placeholder = document.getElementById(containerId);
     if (placeholder && placeholder.firstChild && placeholder.firstChild.nodeType === Node.TEXT_NODE) {
         placeholder.firstChild.remove();
     }
}

// Example for Google Maps (requires API key and callback=initMap in script tag)
function initGoogleMap() {
     const mapOptions = {
          center: { lat: -26.5, lng: 31.5 }, // Eswatini center
          zoom: 8,
     };
     const map = new google.maps.Map(document.getElementById("interactive-map-container"), mapOptions);

     // Add markers
     const courts = [
          { name: "High Court", position: { lat: -26.3167, lng: 31.1333 }, title: "High Court Building, Mbabane" },
          // Add other courts...
     ];

     courts.forEach(court => {
          const marker = new google.maps.Marker({
               position: court.position,
               map: map,
               title: court.title || court.name,
          });
          // Optional: Add InfoWindow
          // const infowindow = new google.maps.InfoWindow({ content: court.title || court.name });
          // marker.addListener("click", () => infowindow.open(map, marker));
     });

      // Remove placeholder text
      const placeholder = document.getElementById("interactive-map-container");
      if (placeholder && placeholder.firstChild && placeholder.firstChild.nodeType === Node.TEXT_NODE) {
          placeholder.firstChild.remove();
      }
}
*/