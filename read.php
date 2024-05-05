<?php

include_once 'connection.php';

$sql = "select * from info";
$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->get_result();
// $data = $result->fetch_assoc();

// var_dump($data);

while ($row = $result->fetch_assoc()): ?>

    <tr class="data">
        <td><?= $row['ID'] ?></td>
        <td><?= $row['FNAME'] ?></td>
        <td><?= $row['LNAME'] ?></td>
        <td><?= $row['CONTACT'] ?></td>

        <td><button class="btn btn-danger">Edit</button></td>
        <td><button class="btn btn-danger" onclick="window.location.href='delete.php?id=<?= $row['ID'] ?>'">Delete</button></td>
    </tr>

<?php endwhile ?>
