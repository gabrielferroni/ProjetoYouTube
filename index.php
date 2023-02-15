<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Auls 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");
        
        $g[0] = new Gafanhoto("Jubileu", 21, "M", "juba");
        
        $vis[0] = new Visualizacao ($g[0],$v[2] ); // jubileu assiste HTML5
        
        $vis[0]->avaliar();
        
        print_r($vis);
      
        ?>
        </pre>
    </body>
</html>
