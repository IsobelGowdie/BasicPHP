<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Advertisement List</title>
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
    <h1>Advertisement List</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>User Name</th>
      </tr>
      <?php foreach ($advertisements as $advertisement): ?>
        <tr>
            <td><?= $advertisement['id'] ?></td>
            <td><?= $advertisement['title'] ?></td>
            <td><?= $advertisement['name'] ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>