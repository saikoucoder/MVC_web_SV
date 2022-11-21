<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .search
        {
            text-align: center;
        }
        div
        {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <form class= 'search' method ='post'>
        <input type = 'radio' name ='check' value='id'><label>ID</label>
        <input type = 'radio' name ='check' value='name'><label>Name</label>
        <input type = 'radio' name ='check' value='university'><label>University</label>
        <br>
        <br>
        <input id = 'text'type='text' name ='text_search' >
        <div style='margin-top:10px'><input type='submit' value = 'OK' name='OK'> 
        <input type='button' value = 'Reset' onclick = 'reset()' ></div>
    </form>
    <script>
        reset()
        {
            document.querySelector('#text').value = ''
        }
        
    </script>

</body>
</html>