<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Availability Table</title>
    <link rel="stylesheet" href="../css/availibility.css">
    <link rel="stylesheet" href="../css/nav-footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php
    include "../includes/nav.php" 
    ?>

<div class="glass-theme availability hover_effect">
    <h2>Weekly Availability Table</h2>
    <table id="availabilityTable">
        <thead>
            <tr>
                <th>Day</th>
                <th>From</th>
                <th>To</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Rows will be dynamically added here -->
        </tbody>
        <tfoot>
            <tr>
                <td>
                    <select id="daySelect">
                        <option value="">Select a day</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                    </select>
                </td>
                <td><input type="time" id="fromTime"></td>
                <td><input type="time" id="toTime"></td>
                <td><button class="btn add-btn" onclick="addRow()">Add Availability</button></td>
            </tr>
        </tfoot>
    </table>
</div>


        <?php
        include "../includes/footer.php" 
        ?>

</body>
</html>



