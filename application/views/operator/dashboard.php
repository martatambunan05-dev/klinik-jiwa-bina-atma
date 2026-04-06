<?php
// dashboard.php

// Patient Management Statistics
$patientManagement = [
    'totalPatients' => 120,
    'newAdmissions' => 15,
    'discharges' => 10,
    'activePatients' => 95
];

// Antrian Statistics
$antrianStatistics = [
    'totalQueue' => 30,
    'attended' => 20,
    'waiting' => 10,
    'averageWaitTime' => '15 minutes'
];

// Displaying the statistics
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Patient Management & Antrian Statistics</h1>
    <h2>Patient Management</h2>
    <ul>
        <li>Total Patients: <?php echo $patientManagement['totalPatients']; ?></li>
        <li>New Admissions: <?php echo $patientManagement['newAdmissions']; ?></li>
        <li>Discharges: <?php echo $patientManagement['discharges']; ?></li>
        <li>Active Patients: <?php echo $patientManagement['activePatients']; ?></li>
    </ul>

    <h2>Antrian Statistics</h2>
    <ul>
        <li>Total Queue: <?php echo $antrianStatistics['totalQueue']; ?></li>
        <li>Attended: <?php echo $antrianStatistics['attended']; ?></li>
        <li>Waiting: <?php echo $antrianStatistics['waiting']; ?></li>
        <li>Average Wait Time: <?php echo $antrianStatistics['averageWaitTime']; ?></li>
    </ul>
</body>
</html>
