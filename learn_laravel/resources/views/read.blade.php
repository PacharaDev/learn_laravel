<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Form</title>
    <link rel="stylesheet" href="{{asset('css/add.css')}}">
</head>

<body>
    <div class="edge">
        
        <h1> Read Form </h1>
        <br>
        <div> 
            <label for="">Name : {{$c_data -> c_name}}</label>            
            <br>
            <br>
            <label for="">Phone : {{$c_data -> c_phone}}</label>           
            <br>
            <br>
            <a href="/customers"><button class="back-button" type="button">back</button> </a>
        </div>
    </div>
</body>

</html>