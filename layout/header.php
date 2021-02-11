<?php require_once 'classes/noticia.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>noticias</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="responsive">
                <span></span>    
                <span></span>
                <span></span>
            </div>
            <div class="responsive-container">
                <a href="index.php" class="link-container " id="logo"> logo</a>
                <nav class="nav">
                        
                    <a href="cadastrar-noticia.php" class="link-container " id="cadastro">cadastrar noticia</a>
                    
                    <form action="index.php" method="GET" class="nav-buscar">
                        <input type="text" name="filtrar" placeholder="Busca" class="buscar-txt">
                        <button type="submit" class="buscar-btn">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMTM2cHQiIHZlcnNpb249IjEuMSIgdmlld0JveD0iLTEgMCAxMzYgMTM2LjIxODUyIiB3aWR0aD0iMTM2cHQiPgo8ZyBpZD0ic3VyZmFjZTEiPgo8cGF0aCBkPSJNIDkzLjE0ODQzOCA4MC44MzIwMzEgQyAxMDkuNSA1Ny43NDIxODggMTA0LjAzMTI1IDI1Ljc2OTUzMSA4MC45NDE0MDYgOS40MjE4NzUgQyA1Ny44NTE1NjIgLTYuOTI1NzgxIDI1Ljg3ODkwNiAtMS40NjA5MzggOS41MzEyNSAyMS42MzI4MTIgQyAtNi44MTY0MDYgNDQuNzIyNjU2IC0xLjM1MTU2MiA3Ni42OTE0MDYgMjEuNzQyMTg4IDkzLjAzOTA2MiBDIDM4LjIyMjY1NiAxMDQuNzA3MDMxIDYwLjAxMTcxOSAxMDUuNjA1NDY5IDc3LjM5NDUzMSA5NS4zMzk4NDQgTCAxMTUuMTY0MDYyIDEzMi44ODI4MTIgQyAxMTkuMjQyMTg4IDEzNy4xNzU3ODEgMTI2LjAyNzM0NCAxMzcuMzQ3NjU2IDEzMC4zMjAzMTIgMTMzLjI2OTUzMSBDIDEzNC42MTMyODEgMTI5LjE5NTMxMiAxMzQuNzg1MTU2IDEyMi40MTAxNTYgMTMwLjcxMDkzOCAxMTguMTE3MTg4IEMgMTMwLjU4MjAzMSAxMTcuOTgwNDY5IDEzMC40NTcwMzEgMTE3Ljg1NTQ2OSAxMzAuMzIwMzEyIDExNy43MjY1NjIgWiBNIDUxLjMwODU5NCA4NC4zMzIwMzEgQyAzMy4wNjI1IDg0LjMzNTkzOCAxOC4yNjk1MzEgNjkuNTU0Njg4IDE4LjI1NzgxMiA1MS4zMDg1OTQgQyAxOC4yNTM5MDYgMzMuMDYyNSAzMy4wMzUxNTYgMTguMjY5NTMxIDUxLjI4NTE1NiAxOC4yNjE3MTkgQyA2OS41MDc4MTIgMTguMjUzOTA2IDg0LjI5Mjk2OSAzMy4wMTE3MTkgODQuMzI4MTI1IDUxLjIzNDM3NSBDIDg0LjM1OTM3NSA2OS40ODQzNzUgNjkuNTg1OTM4IDg0LjMwMDc4MSA1MS4zMzIwMzEgODQuMzMyMDMxIEMgNTEuMzI0MjE5IDg0LjMzMjAzMSA1MS4zMjAzMTIgODQuMzMyMDMxIDUxLjMwODU5NCA4NC4zMzIwMzEgWiBNIDUxLjMwODU5NCA4NC4zMzIwMzEgIiBzdHlsZT0iIHN0cm9rZTpub25lO2ZpbGwtcnVsZTpub256ZXJvO2ZpbGw6cmdiKDAlLDAlLDAlKTtmaWxsLW9wYWNpdHk6MTsiIC8+CjwvZz4KPC9zdmc+" /> 
                        </button>
                    </form>
                </nav>
            </div>
        </div>
    </header>
    <section>  
