<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>User List</title>
    <style>
      table {
        width: 100%;
        border-collapse: collapse;
      }

      th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }

      th {
        background-color: #dddddd;
      }
    </style>
  </head>
  <body>
    <h1>User List</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
      </tr>
      <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>