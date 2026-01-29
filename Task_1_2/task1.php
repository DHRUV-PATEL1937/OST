<?php
$students = [
    "S001" => [
        "Name" => "Jeet",
        "Course" => "BCA",
        "Semester" => 4,
        "Marks" => [
            "PHP"   => 85,
            "DBMS"  => 78,
            "OS"    => 82
        ]
    ],
    "S002" => [
        "Name" => "Darshan",
        "Course" => "BSc IT",
        "Semester" => 2,
        "Marks" => [
            "PHP"   => 88,
            "DBMS"  => 90,
            "OS"    => 84
        ]
    ],
    "S003" => [
        "Name" => "Bhavya",
        "Course" => "BBA",
        "Semester" => 3,
        "Marks" => [
            "PHP"  => 36,
            "DBMS" => 89,
            "OS"   => 99
        ]
    ],
    "S004" => [
        "Name" => "Dhruv",
        "Course" => "BCA",
        "Semester" => 4,
        "Marks" => [
            "PHP"  => 99,
            "DBMS" => 97,
            "OS"   => 96
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr>
        <th>Student Name</th>
        <th>PHP Marks</th>
        <th>DBMS Marks</th>
        <th>OS Marks</th>
    </tr>

    <?php
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td><b>{$student['Name']}</b></td>";
            echo "<td>{$student['Marks']['PHP']}</td>";
            echo "<td>{$student['Marks']['DBMS']}</td>";
            echo "<td>{$student['Marks']['OS']}</td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>