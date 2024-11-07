let isEditing = false;

function toggleEdit() {
    const phoneInput = document.getElementById('phone-input');
    const editSaveButton = document.querySelector('.editSaveButton');

    // Toggle the isEditing state
    isEditing = !isEditing;

    if (isEditing) {
        // Enable editing only for the Phone field
        phoneInput.disabled = false;

        // Change button text to "Save"
        editSaveButton.textContent = "Save";
    } else {
        // Disable editing for the Phone field after saving
        phoneInput.disabled = true;

        // Change button text back to "Edit"
        editSaveButton.textContent = "Edit";

        // Optional: Perform save actions here, like sending data to a server
    }
}






