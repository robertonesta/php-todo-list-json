<?php

$tasksArray = "tasks.json";
$newTasks = json_encode($_POST);
file_put_contents($tasksArray, $newTasks);

echo $newTasks;