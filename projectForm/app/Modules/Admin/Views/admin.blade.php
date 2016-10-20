<!DOCTYPE html>
<html>
<head>

    <title>Admin page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<style>
    h1 {
        color: blue;
        font-family: verdana;
        font-size: 300%;

    }
    table {
        border-collapse: separate;
        border-spacing: 0 5px;
    }

    thead th {
        background-color: #006DCC;
        color: white;
    }

    tbody td {
        background-color: #EEEEEE;
    }

    tr td:first-child,
    tr th:first-child {
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px;
    }

    tr td:last-child,
    tr th:last-child {
        border-top-right-radius: 6px;
        border-bottom-right-radius: 6px;
    }
</style>
<h1 align="center">ADMIN</h1>

<body>

<div class="container">
    <table class="table">
        <thead>

        <th scope="row">User id </th>
        <th scope="row">Frist name </th>
        <th scope="row">Last Name</th>
        <th  scope="row">Email</th>
        <th scope="row">password</th>
        <th scope="row">picture</th>
        <th scope="row">size</th>
        <th scope="row">Role</th>
        <th scope="row">Status</th>
        <th>    photo </th>
        <th scope="row">Edit data</th>
        <th scope="row">Delete data</th>

        <a type="button" href="/signup" class="btn btn-primary">Register</a>
       <a type="button" href="/adminLogout" class="btn btn-primary">Logout</a>

        </thead>
        <tbody>
        <?php
        $userprofile=DB::table('users')->get();
        //echo "<pre>";  print_r($userprofile);die;
        foreach ($userprofile as $row){
        ?>
        <tr>
            <td><?php echo $row->id ?></td>
            <td><?php echo $row->name ?></td>
            <td><?php echo $row->lname ?></td>
            <td><?php echo $row->email ?></td>
            <td><?php echo $row->password ?></td>
            <td><?php echo $row->picture ?></td>
            <td><?php echo $row->size ?></td>
            <td><?php echo $row->role ?></td>
            <td><?php echo $row->status ?></td>
            <td><img src="{!! '/images/'.$row->picture !!}" alt="" width="50" height="50" ></td>

            <td><a href="<?php echo 'updateuserdata/'.$row->id?>"> Edit  </a></td>
            <td><a href="<?php echo 'deleteadmin/'.$row->id ?>">Delete</a></td>
        </tr>

        </tbody>
        <?php }?>
    </table>

</body>
</html>