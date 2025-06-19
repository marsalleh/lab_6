<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php  
        $name = "Mardiah Salleh";
        $matric = "AI230007";
        $course = "Bachelor of Information Technology";
        $year = "Year 2";
        $address = "85, Jalan Universiti 18, Taman Universiti, 86400 Batu Pahat, Johor ";
    ?> 

    <table border="1" cellpadding="10">
        <tr><td>Name</td><td><?php echo $name; ?></td></tr>
        <tr><td>Matric Number</td><td><?php echo $matric; ?></td></tr>
        <tr><td>Course</td><td><?php echo $course; ?></td></tr>
        <tr><td>Year of Study</td><td><?php echo $year; ?></td></tr>
        <tr><td>Address</td><td><?php echo $address; ?></td></tr>
    </table>
</body>
</html>
