<!DOCTYPE html>
<html lang="en">

<head>
    <title>Email</title>
</head>

<body>
    <p>Date : {{ $data->created_at }}</p>
    <p>Name : {{ $data->name }}</p>
    <p>Email : {{ $data->email }}</p>
    <p>Message : {{ $data->message }}</p>
</body>

</html>
