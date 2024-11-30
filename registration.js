document.addEventListener('DOMContentLoaded', function() {
    // List of tattoo styles
    const tattooStyles = ['Traditional', 'Tribal', 'Japanese', 'Realistic', 'Watercolor', 'Geometric'];

    // Get the tattoo styles container
    const tattooStylesContainer = document.getElementById('tattooStyles');

    // Dynamically create checkboxes for each tattoo style
    tattooStyles.forEach(style => {
        const label = document.createElement('label');
        label.innerHTML = `
            <input type="checkbox" name="tattooStyles" value="${style}"> ${style}
        `;
        tattooStylesContainer.appendChild(label);
    });

    // Handle form submission
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting the traditional way

        // Get form values
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;
        const preferences = document.getElementById('preferences').value;
        const selectedStyles = Array.from(document.querySelectorAll('input[name="tattooStyles"]:checked'))
                                   .map(input => input.value);
        const message = document.getElementById('message');

        // Validate password and confirm password match
        if (password !== confirmPassword) {
            message.textContent = 'Passwords do not match.';
            return;
        }

        // Simple email validation (basic format check)
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            message.textContent = 'Please enter a valid email address.';
            return;
        }

        // Check if at least one tattoo style is selected
        if (selectedStyles.length === 0) {
            message.textContent = 'Please select at least one tattoo style.';
            return;
        }

        // If all validations pass, display a success message
        message.textContent = '';
        alert('Registration successful!');
    });
});
