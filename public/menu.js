// Wait for the DOM content to load before executing the script
document.addEventListener('DOMContentLoaded', () => {
    // Function to toggle dropdown visibility
    const toggleDropdown = (buttonId, dropdownId) => {
        const button = document.getElementById(buttonId);
        const dropdown = document.getElementById(dropdownId);

        button.addEventListener('click', () => {
            dropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', (event) => {
            if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });
    };

    // Toggle for the first dropdown
    toggleDropdown('mega-menu-dropdown-button', 'mega-menu-dropdown');

    // Toggle for the second dropdown
    toggleDropdown('mega-menu-dropdown-button-2', 'mega-menu-dropdown-2');
});

