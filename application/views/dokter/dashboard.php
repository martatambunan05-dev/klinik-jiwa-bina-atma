<?php
// Dashboard for Dokter

// Sample data for waiting patients
$waitingPatients = [
    ['name' => 'John Doe', 'time' => '15:00'],
    ['name' => 'Jane Smith', 'time' => '15:10'],
    ['name' => 'Alice Johnson', 'time' => '15:20'],
];

// Sample data for consultation schedule
$consultationSchedule = [
    ['patient' => 'Michael Brown', 'time' => '15:30'],
    ['patient' => 'Emily Davis', 'time' => '15:40'],
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>

    <h2>Patients Waiting</h2>
    <ul>
        <?php foreach ($waitingPatients as $patient): ?>
            <li><?php echo $patient['name']; ?> - <?php echo $patient['time']; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Consultation Schedule</h2>
    <ul>
        <?php foreach ($consultationSchedule as $consultation): ?>
            <li><?php echo $consultation['patient']; ?> - <?php echo $consultation['time']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
