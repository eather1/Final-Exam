<?php
if (isset($_GET['age'])) {
    $age = intval($_GET['age']);
    if ($age <= 100) {
        echo "You are $age years old.";
    } else {
        echo "Invalid input.";
    }
} else {
    echo "Age not provided.";
}
?>