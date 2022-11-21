<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddStudent</title>
    <!-- <style>
        .add
        {
            text-align:center
        }
        .text
        {
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .text input
        {
            min-width:300px;
        }
        h4
        {
            min-width:100px;
        }
        .button
        {
            text-align:center;
            margin-left:70px
        }
        .button input
        {
            font-weight: bold;
            text-decoration: none;
            color: red;
            background-color:aqua ;
            padding: 10px 30px 10px 30px;
            border-radius: 20px;
            width: 100px;
            border: none;
            
        }
        body
        {
            background-color:#dfe4ea;
            text-align: center;
        }
        a
        {
            
          
            font-weight: bold;
            text-decoration: none;
            color: red;
            background-color:aqua ;
            padding: 10px 30px 10px 30px;
            border-radius: 20px;
        }
     </style> -->
</head>
<body>
    
    <form class='add' method ='post'>
        <table>
            <caption><h3 class='login'>ADD SINH VIEN</h3></caption>

            <tr>
                <td>
                    <label><h4>ID</h4></label>
                </td>
                <td>
                    <input type='text' placeholder='ID' name='Add_ID' >
                </td>
            </tr>
            <tr>
                <td>
                    <label><h4>Name</h4></label>
                </td>
                <td>
                    <input type='text' placeholder='Name' name='Add_Name'>
                </td>
            </tr>
            <tr>
                <td>
                    <label><h4>Age</h4></label>
                </td>
                <td>
                    <input type='text' placeholder='Age' name='Add_Age'>
                </td>
            </tr>
            <tr>
                <td>
                    <label><h4>University</h4></label>
                </td>
                <td>
                    <input type='text' placeholder='University' name='Add_University'>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="../index.php">Home</a>
                </td>
                <td>
                    <input type='submit' name = 'Add_OK' value='OK' id = 'submit'>
                </td>
            </tr>

        </table>
        
      
        
        
            

    </form>
 
</body>
</html>