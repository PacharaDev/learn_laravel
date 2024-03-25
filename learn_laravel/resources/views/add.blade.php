<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Form</title>
    <link rel="stylesheet" href="{{asset('css/add.css')}}">
</head>

<body>
    <div class="edge">
        <h1> Add Form </h1>
        <br>
        <form action="/customers" method="POST">
            @csrf
            <label for="">Name : </label>
            <input type="text" name="name" required>
            <br>
            <br>
            <label for="">Phone : </label>
            <input type="text" name="phone" required>
            <br>
            <br>
            <button class="submit-button" type="submit">submit</button>
        </form>
    </div>
</body>
</html>