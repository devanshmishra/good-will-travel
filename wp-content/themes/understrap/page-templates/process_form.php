<?php
if (isset($_POST['submit_form'])) {
    // Form is submitted, process the data
    $from = $_POST['from'];
    $to = $_POST['to'];
    $departure = $_POST['departure'];
    $return = $_POST['return'];
    $trip_type = $_POST['trip'];

    // Perform any additional processing or validation here

    // Example: Displaying the submitted data
    echo "From: $from<br>";
    echo "To: $to<br>";
    echo "Departure Date: $departure<br>";
    echo "Return Date: $return<br>";
    echo "Trip Type: $trip_type<br>";
}
?>
