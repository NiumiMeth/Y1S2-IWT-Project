function showModal(modalId) {
    document.getElementById(modalId).style.display = 'block';
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}

function filterBooks(query) {
    // Implement search functionality
    alert('Search for books using query: ' + query);
}

function refreshInquiries() {
    // Refresh the list of user inquiries
    alert('Refreshing user inquiries...');
}

function generateReport() {
    // Generate reports based on selection
    alert('Generating report...');
}

document.getElementById('add-book-form').addEventListener('submit', function(event) {
    event.preventDefault();
    // Implement the logic to add a book to the list
    alert('Book added successfully!');
    closeModal('add-book-modal');
});

