<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1 style="text-decoration: underline; background-color: green">
    Mensajes de todos nuestros amigos
</h1>

<table>
    <tr>
        <td>Nombre</td>
        <td>Mensajes</td>
    </tr>
    <?php
    foreach ($messages as $message) {
        echo '<tr>';
        echo "<td>{$message['nombre']}</td>";
        echo "<td>{$message['mensaje']}</td>";
        echo "<tr>";
    }
    ?>
</table>
</body>
</html>