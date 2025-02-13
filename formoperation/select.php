<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select and checkbox</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body{
            height:100vh;
            display: flex;
            justify-content:center;
            align-items:center;
        }
        .outer{
            height:300px;
            width:300px;
            background:silver;
            display:flex;
            flex-direction:column;
            justify-content:center;
            border-radius:15px;
            padding-left:40px;
        }
        input[type='submit'],select{
            height:40px;
            width: 80%;
            border-radius:15px;
        }
    </style>
</head>
<body>
    <form action="newselect.php" method="post" class="outer">
        <label for="">country</label>
        <select name="country" id="">
        <option value="">-select-</option>
            <option value="india">India</option>
            <option value="nepal">Nepal</option>
            <option value="china">China</option>
        </select>
        <label for="">Hobby</label>
        <input type="checkbox" name="hobby[]" value="Game">Game
        <input type="checkbox" name="hobby[]" value="Singing">Singing
        <input type="checkbox" name="hobby[]" value="Dancing">Dancing
        <input type="checkbox" name="hobby[]" value="Cooking">Cooking
        <input type="submit" value="submit">
    </form>
</body>
</html>