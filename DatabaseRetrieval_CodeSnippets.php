#notes

<?php

global $wpdb;
$result = $wpdb->get_results( "SELECT note_number, item_id, status, note, date FROM notes");

echo "<style>";
echo "body {font-family: Arial;}";

echo ".table_container { padding: 10px 12px 0px 12px;  border: 1px solid #ccc;  }";
echo ".table_container th { background-color:lightblue; color:white; font-weight:bold; border-left: 1px solid white;}";
echo "</style></head>";
echo "<body>";

echo "<div class=\"table_container\"><table>";
echo "<tr><th style=\"padding-left:10px;\">Note Number</th><th>Item ID</th><th>Status</th><th>Note</th><th>Date</th></tr>";
foreach ($result as $row) {
	echo "<tr><td>" . $row->note_number . "</td><td>" . $row->item_id . "</td><td>" . $row->status . "</td><td>" . $row->note . "</td><td>" . $row->date . "</tr>";
}
echo "</table></div>";

?>

# Bookings

<?php

global $wpdb;
$result = $wpdb->get_results( "SELECT booking_num, item_id, location, date FROM bookings");

echo "<style>";
echo "body {font-family: Arial;}";

echo ".table_container { padding: 10px 12px 0px 12px;  border: 1px solid #ccc;  }";
echo ".table_container th { background-color:lightblue; color:white; font-weight:bold; border-left: 1px solid white;}";
echo "</style></head>";
echo "<body>";

echo "<div class=\"table_container\"><table>";
echo "<tr><th style=\"padding-left:10px;\">Booking Number</th><th>Item ID</th><th>Location</th><th>Date</th></tr>";
foreach ($result as $row) {
	echo "<tr><td>" . $row->booking_num . "</td><td>" . $row->item_id . "</td><td>" . $row->location . "</td><td>" . $row->date . "</tr>";
}
echo "</table></div>";

?>

# Assets
<?php

global $wpdb;
$result = $wpdb->get_results( "SELECT item_id, asset, origin, location, status FROM assets");

echo "<style>";
echo "body {font-family: Arial;}";

echo ".table_container { padding: 10px 12px 0px 12px;  border: 1px solid #ccc;  }";
echo ".table_container th { background-color:lightblue; color:white; font-weight:bold; border-left: 1px solid white;}";
echo "</style></head>";
echo "<body>";

echo "<div class=\"table_container\"><table>";
echo "<tr><th style=\"padding-left:10px;\">ID</th><th>Asset</th><th>Origin</th><th>Location</th><th>Status</th></tr>";
foreach ($result as $row) {
	echo "<tr><td>" . $row->item_id . "</td><td>" . $row->asset . "</td><td>" . $row->origin . "</td><td>" . $row->location . "</td><td>" . $row->status . "</tr>";
}
echo "</table></div>";

?>
