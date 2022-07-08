<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>template(plantilla)</title>
        <link type="text/css" href="indexcss.css" rel="stylesheet">
    </head>
<body>
    <header>
        <h1>LOGOTIPO</h1>
    </header>
    <?php
     include ("modulos/navegacion.php");
    ?>
    <section>
    <?php
       require_once ("C:\xampp\htdocs\php\carpetaservidor\apuntesphp\MVC\controllers\controller.php");
        
       $mvc = new MvcController();
       $mvc -> enlacesPaginasController();
       
   ?>
    
     </section>
</body>
</html>