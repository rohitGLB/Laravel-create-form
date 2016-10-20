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
<h1 align="center">USER DASHBOARD</h1>
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
        <th>    photo </th>
      <a type="button" href="/userlogout" class="btn btn-primary">Logout</a>
        </thead>
        <tbody>
        <tr>
            <td>{{ Auth::User()->id }}</td>
            <td>{{ Auth::User()->name }}</td>
            <td>{{ Auth::User()->lname }}</td>
            <td>{{ Auth::User()->email }}</td>
            <td>{{ Auth::User()->password }}</td>
            <td>{{ Auth::User()->picture }}</td>
            <td>{{ Auth::User()->size }}</td>

        </tr>

        </tbody>

    </table>

</body>
</html>