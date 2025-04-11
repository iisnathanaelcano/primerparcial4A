<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
$username = "root";
$password = "";
$servername = "localhost";
$database = "formula1";



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<link href="https://fonts.cdnfonts.com/css/minecraft-3" rel="stylesheet">
<link href="https://fonts.cdnfonts.com/css/alien-cyborg" rel="stylesheet">
<link href="https://fonts.cdnfonts.com/css/inter-tight" rel="stylesheet">


<style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      text-align: center;
    }

    header {
      background-color: #080414;
      color: white;
      padding: 20px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo {
      font-size: 1.5em;
      font-weight: bold;
      align-items: center;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-size: 1em;
      transition: color 0.3s ease;
    }

    .boton-imagen {
width: 150px;
height: auto;
cursor: pointer;
transition: transform 0.2s ease;
}

.boton-imagen:hover {
transform: scale(1.05);
}

.boton-redondeado {
        background-color:#ff2424; 
        border: none; 
        color: white; /* Color del texto */
        padding: 15px 32px; /* Relleno */
        text-align: center; /* Alineación del texto */
        text-decoration: none; /* Sin subrayado */
        display: inline-block; /* Mostrar en línea */
        font-size: 16px; /* Tamaño de la fuente */
        margin: 4px 2px; /* Margen */
        cursor: pointer; 
        border-radius: 12px; 
        font-family:'Inter Tight', sans-serif;
        }

  </style>
</head>
  <header>
    <div class="logo">
    <a href="index.html">
        <img src="logof1.png" alt="Botón" class="boton-imagen">
      </a>
    </div>
  </header>
