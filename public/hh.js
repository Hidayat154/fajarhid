// Wait for the DOM content to load before executing the script
document.addEventListener('DOMContentLoaded', () => {

    // Get the button that toggles the dropdown menu
    const button = document.getElementById('mega-menu-dropdown-button');

    // Get the dropdown menu itself
    const dropdown = document.getElementById('mega-menu-dropdown ');

    // Add an event listener to the button to toggle the dropdown visibility
    button.addEventListener('click', () => {
        dropdown.classList.toggle('hidden');
    });

    // Optional: Add an event listener to the document to close the dropdown
    // if clicking outside of the button or dropdown menu
    document.addEventListener('click', (event) => {
        // Check if the clicked target is not the button and not the dropdown
        if (!button.contains(event.target) && !dropdown.contains(event.target)) {
            // Add the 'hidden' class to close the dropdown
            dropdown.classList.add('hidden');
        }
    });
});

