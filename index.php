<?php
require 'db.php';
$todos = $pdo->query("SELECT * FROM todos")->fetchAll();
?>
<!DOCTYPE html>
<html>
<head><title>ToDo App</title></head>
<body>
<h1>My ToDo List</h1>
<form action="add.php" method="POST">
    <input type="text" name="task" required>
    <button type="submit">Add</button>
</form>
<ul>
<?php foreach ($todos as $todo): ?>
    <li><?= htmlspecialchars($todo['task']) ?> 
        <a href="delete.php?id=<?= $todo['id'] ?>">X</a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>

