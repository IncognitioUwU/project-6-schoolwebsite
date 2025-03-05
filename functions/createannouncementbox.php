<?php
include_once("sql/connecttodatabase.php");

function getAnnouncementsFromDB(): mysqli_result {
    $connect = connect();
    $sql = "SELECT announcement, DATE(display_from_date) AS display_from_date, DATE(display_to_date) AS display_to_date, display_order, active FROM announcements ORDER BY display_from_date ASC, display_order ASC LIMIT 0,30";
    $result = $connect->query($sql);
    $connect->close();
    return $result;
}

function displayAnnouncements($announcements): void {
    $today = date("Y-m-d");
    $found = false;
    while ($row = $announcements->fetch_assoc()) {
        if ($today >= $row['display_from_date'] && $today <= $row['display_to_date'] && $row['active'] == 1) {
            echo "<hr><p>{$row['announcement']}<br><small>{$row['display_from_date']}</small></p>";
            $found = true;
        }
    }
    if (!$found) {
        echo "<p>No Announcements for Today</p><br>";
    }
}

function createAnnouncementBox(): void {
    echo '<div class="announcementbox"><h2>Daily Announcements</h2>';
    $announcements = getAnnouncementsFromDB();
    if ($announcements->num_rows < 1) {
        echo "<hr><p>No Announcements for Today</p>";
    } else {
        displayAnnouncements($announcements);
    }
    echo '</div>';
}
?>
