// Get the form element
const form = document.getElementById('enrollment-form');

if (form) {
  try {
    form.addEventListener('submit', (e) => {
      // Prevent default form submission
      e.preventDefault();

      // Get the form data
      const formData = new FormData(form);

      // Send the form data to the PHP script using fetch API
      fetch('send_email.php', {
        method: 'POST',
        body: formData,
      })
      .then((response) => response.text())
      .then((message) => {
        // Display the success message
        document.getElementById('success-message').innerHTML = message;
      })
      .catch((error) => {
        console.error('Error:', error);
      });
    });
  } catch (error) {
    console.error('Error adding event listener:', error);
  }
} else {
  console.error('Form element not found');
}