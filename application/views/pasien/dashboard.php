<?php
// dashboard.php

// Assuming we are using a simple PHP structure to display patient profile and consultation information.

// Mock data for demonstration purposes. This would typically come from a database.
$patientProfile = [
    'name' => 'John Doe',
    'age' => 30,
    'gender' => 'Male',
    'phone' => '123-456-7890',
    'address' => '123 Elm St, Springfield, USA'
];

$consultations = [
    [
        'date' => '2026-03-01',
        'doctor' => 'Dr. Smith',
        'notes' => 'Routine checkup and blood tests ordered.',
    ],
    [
        'date' => '2026-03-15',
        'doctor' => 'Dr. Jane',
        'notes' => 'Follow-up on blood test results. Prescribed new medication.',
    ]
];

// HTML Structure
?>
<!DOCTYPE html>
<html>
<head>
    <title>Patient Dashboard</title>
</head>
<body>
    <h1>Patient Profile</h1>
    <p>Name: <?= $patientProfile['name']; ?></p>
    <p>Age: <?= $patientProfile['age']; ?></p>
    <p>Gender: <?= $patientProfile['gender']; ?></p>
    <p>Phone: <?= $patientProfile['phone']; ?></p>
    <p>Address: <?= $patientProfile['address']; ?></p>
    
    <h2>Consultation History</h2>
    <table>
        <tr>
            <th>Date</th>
            <th>Doctor</th>
            <th>Notes</th>
        </tr>
        <?php foreach ($consultations as $consultation): ?>
        <tr>
            <td><?= $consultation['date']; ?></td>
            <td><?= $consultation['doctor']; ?></td>
            <td><?= $consultation['notes']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>