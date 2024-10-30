const toggleSwitch = document.getElementById('darkModeToggle');

// Cek apakah user sebelumnya mengaktifkan dark mode
if (localStorage.getItem('darkMode') === 'enabled') {
    document.body.classList.add('dark-mode');
    toggleSwitch.checked = true;
}

toggleSwitch.addEventListener('change', () => {
    document.body.classList.toggle('dark-mode');

    if (document.body.classList.contains('dark-mode')) {
        localStorage.setItem('darkMode', 'enabled');
    } else {
        localStorage.removeItem('darkMode');
    }
});

function showNotification(message, duration) {
    const notificationBox = document.getElementById('notification');
    const notificationMessage = document.getElementById('notificationMessage');

    // Set message for the notification
    notificationMessage.textContent = message;

    // Show the notification box with animation
    notificationBox.classList.add('show');

    // Hide the notification after the specified duration
    setTimeout(() => {
        notificationBox.classList.remove('show');
    }, duration);
}