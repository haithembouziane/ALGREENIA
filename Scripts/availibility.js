function addRow() {
    const daySelect = document.getElementById("daySelect");
    const day = daySelect.value;
    const fromTime = document.getElementById("fromTime").value;
    const toTime = document.getElementById("toTime").value;
    const table = document.getElementById("availabilityTable").getElementsByTagName("tbody")[0];

    // Check if both times are provided
    if (!day || !fromTime || !toTime) {
        alert("Please specify a day and both 'from' and 'to' times.");
        return;
    }

    // Check if 'from' time is before 'to' time
    if (fromTime >= toTime) {
        alert("'From' time must be earlier than 'To' time.");
        return;
    }

    // Check if the day is already used
    for (let row of table.rows) {
        if (row.cells[0].textContent === day) {
            alert("This day is already selected. Please choose a different day.");
            return;
        }
    }

    // Check if the table already has 7 rows
    if (table.rows.length >= 7) {
        alert("Maximum of 7 days can be added.");
        return;
    }

    // Add new row to the table
    const newRow = table.insertRow();
    const dayCell = newRow.insertCell(0);
    const fromCell = newRow.insertCell(1);
    const toCell = newRow.insertCell(2);
    const actionCell = newRow.insertCell(3);

    dayCell.textContent = day;
    fromCell.textContent = fromTime;
    toCell.textContent = toTime;
    actionCell.innerHTML = '<button class="btn delete-btn" onclick="deleteRow(this)">Delete</button>';

    // Reset input fields after adding a row
    daySelect.value = "";  // Reset the day select
    document.getElementById("fromTime").value = ""; // Reset from time input
    document.getElementById("toTime").value = "";   // Reset to time input
}

function deleteRow(button) {
    const row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
}
