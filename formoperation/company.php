<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    <style>
        *{
            margin:0;
            padding: 0;
            box-sizing:border-box;
        }
        body{
            height:100vh;
            width: 100%;
            background:#000;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .outer{
            height:400px;
            width: 400px;
            border-radius:15px;
            box-shadow:0px 0px 10px 5px silver;
            color:#f1f1f1;
        }
        .form-handel{
            display:flex;
            flex-direction:column;
            justify-content:center;
            gap:15px;
            padding: 30px;
        }
        .inp{
            height:30px;
            width:50%;
            border-radius:8px;
            background:silver;
        }
        .col{
            background:blue;
        }
    </style>
</head>
<body>
    <div class="outer">
        <form action="newcompany.php" method="post">
            <div class="form-handel">
                <span>
                Your name:
                <input type="text" name="name" class="inp">
                </span><span>
                Father's name:
                <input type="text" name="fname" class="inp">
                </span><span>
                Mother's name:
                <input type="text" name="mname" class="inp">
                </span><span>
                D.O.B:
                <input type="date" name="date">
                </span><span>
                Gender:
                <input type="radio" name="gender" value="male">male
                <input type="radio" name="gender" value="female">Female
                </span>
                <span>
                Hobby:
                <input type="checkbox" name="hobby[]" value="rona">Rona
                <input type="checkbox" name="hobby[]" value="sona">Sona
                <input type="checkbox" name="hobby[]" value="khana">khana
                <input type="checkbox" name="hobby[]" value="khona">khona
                </span>
                <span>
                Your district:
                <select name="district" id="" class="inp">
                    <option value="">-select-</option>
                    <option value="mau">Mau</option>
                    <option value="gorakhpur">Gorakhpur</option>
                    <option value="ayodhya">Ayodhya</option>
                </select>
                </span>
                <span>
                Your Massege:
                <textarea name="massege" id="" class="inp"></textarea>
                </span>
                <span>
                <input type="submit" class="inp col">
                </span>
            </div>
        </form>
    </div>
</body>
</html>