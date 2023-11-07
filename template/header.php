<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="bowl.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="template/mystyle.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Restaurant Bowls</title>

</head>
<body>

<div class="bg"></div>
    
<nav class="navbar navbar-expand-sm  pe-5">
    
    <div class="d-md-none">                                
        <div class="dropdown d-flex ">
            <svg type="button" id="hamburger" class="Header__toggle-svg" viewbox="0 0 60 40" data-bs-toggle="dropdown">
                <g stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                    <path id="top-line" d="M10,10 L50,10 Z"></path>
                    <path id="middle-line" d="M10,20 L50,20 Z"></path>
                    <path id="bottom-line" d="M10,30 L50,30 Z"></path>
                </g>
            </svg>
            
            <ul class="dropdown-menu m-2 ">
                <li><a class="dropdown-item " href="core.php">Ponúkame</a></li>
                <li><a class="dropdown-item " href="dailyMenu.php">Denné menu</a></li>
                <li><a class="dropdown-item " href="menu.php">Jedálny listok</a></li>
            </ul>
        </div>
    </div>
    
    <div class="d-none d-md-block">
    
        <ul class="navbar-nav text ms-5">
        <li class="nav-item">
            <a class="nav-link text-light " href="core.php">Ponúkame</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light " href="dailyMenu.php">Denné menu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light " href="menu.php">Jedálny listok</a>
        </li>
        </ul>
    </div> 
</nav>

