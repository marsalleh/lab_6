<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q2</title>
</head>
<body>
    <?php
    $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21
        ],
        [
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name' => 'Raju',
            'program' => 'BIT',
            'age' => 22
        ]
    ];
    ?>

    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>{$student['name']}</td>";
            echo "<td>{$student['program']}</td>";
            echo "<td>{$student['age']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
