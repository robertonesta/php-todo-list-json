<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link axios  -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.5/axios.min.js"
      integrity="sha512-nnNHpffPSgINrsR8ZAIgFUIMexORL5tPwsfktOTxVYSv+AUAILuFYWES8IHl+hhIhpFGlKvWFiz9ZEusrPcSBQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>To Do List</title>
</head>

<body>

<div id="app">
    <div class="container text-center w-50">
        <h1 id="title" class="my-5 text-white">My daily To-Do List</h1>
        <div class="input d-flex my-3">
            <input @keyup.enter="addTask()" v-model="taskAdded" type="text" class="form-control" placeholder="new task" aria-label="new task" aria-describedby="submit">
        <button class="btn btn-outline-dark bg-white" type="button" id="submit">Add </button>
        </div>
        <ul>
            <li v-for="task in tasks">
                <div class="task d-flex justify-content-between text-align-center">
                    <div><strong>{{task.tasks}}</strong></div>
                    <button class="delete border-0"><i class="fa-regular fa-trash-can"></i></button>
                </div>
            </li>
        </ul>

    </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.5/axios.min.js"
      integrity="sha512-nnNHpffPSgINrsR8ZAIgFUIMexORL5tPwsfktOTxVYSv+AUAILuFYWES8IHl+hhIhpFGlKvWFiz9ZEusrPcSBQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.global.min.js"></script>
<script src="./app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>