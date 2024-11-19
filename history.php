<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{direction: rtl;};
        table{
            border: 2px;
            border-style: solid;
            text-align: center;

        }
        th,td{
            border: 1px;
            border-style: solid;
            text-align:center;
            background-color:;

        }
        thead{background-color: chartreuse;
            
        }
        tbady{
            background-color:pink;
        }
        main{
            bac
        }


    </style>
</head>
<body>
    <table>
        <thead>
            <th>
            <th>شنبه</th>
            <th>یکشنبه </th>
            <th>دوشنبه</th>
            <th>سه شنبه</th>
            <th>چهار شنبه</th>
            <th>پنج شنبه</th>
            <th>جمعه</th>

        </thead>
        <tbody>
            <tr>
            <td rowspan="7">history</td>" 
            <td colspan="7">day</td>
            </tr>
            <tr>
                
                <th></th>
            <?php for($a=1; $a<=6; $a++) echo("<td>".$a."</td>"); ?>
            </tr>
            <tr>
            <?php for($a=7; $a<=13;$a++)echo("<td>".$a."</td>") ?>
            </tr>
            <tr>
            <?php for($a=14; $a<=20;$a++)echo("<td>".$a."</td>") ?>
            </tr>
            <tr>
            <?php for($a=21; $a<=27;$a++)echo("<td>".$a."</td>") ?>
            </tr>
            <tr>
            <?php for($a=28; $a<=31;$a++)echo("<td>".$a."</td>") ?>
            <th></th>
            <th></th>
            <th></th>
            </tr>
            


        </tbody>
    <table>
</body>
</html>