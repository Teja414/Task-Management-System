<?php
$dueDate = new DateTime('2023-06-30'); // Due date
$currentDate = new DateTime(); // Current date and time

$diff = $currentDate->diff($dueDate); // Difference between current date and due date

// Output the duration until the due date
echo "Due date: " . $dueDate->format('Y-m-d') . "<br>";
echo "Days left: " . $diff->format('%a') . " days<br>";
echo "Hours left: " . $diff->format('%h') . " hours<br>";
echo "Minutes left: " . $diff->format('%i') . " minutes<br>";
echo "Seconds left: " . $diff->format('%s') . " seconds<br>";
$days = $diff->format('%a');
$hours = $diff->format('%h');
$min = $diff->format('%i');
$sec = $diff->format('%s');
$due=$diff->format('Y-m-d H:i:s');
echo $due;
?>
