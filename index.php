<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Dropdown</title>
    <style>

    body{margin: 0;}

    .menu{
        height: 40px;
        background-color: black;
        color: white;
    }
    ul{
        padding: 0;
        margin: 0;
        list-style: none;
    }
    li{
        padding: 0px 20px;
        float: left;
        line-height: 40px;
    }
    </style>
</head>
<body>
    <div class="menu">
        <ul>
            <li>
                <div class="tituloMenu">HOME</div>
                <div class="subMenu">
                    OPCAO 1 <br>
                    OPCAO 2 <br>
                    OPCAO 3 <br>
                </div>
            </li>
            <li>MENU 1</li>
            <li>MENU 2</li>
            <li>MENU 3</li>
            <li>MENU 4</li>
            <li>MENU 5</li>
        </ul>
    </div>


   <script src="jquery.min"></script> 
   <script src="script-index.js"></script>
</body>
</html>