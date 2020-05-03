<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Teste de MVC">
    <meta name="description" contet="<?php echo $this->$Description();?>">
    <meta name="keywords" content="<?php echo $this->$Keywords();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->getTitle(); ?></title>
    <title></title>
    <link rel="stylesheet" href="<?php echo DIRCSS. 'style.css'?>">
    <?php echo $this->addHeader(); ?> 
</head>
<body>

    <div class="Nav">
        <a href="<?php echo DIRPAGE;?>">Home</a>
        <a href="<?php echo DIRPAGE.'contato';?>">Contato</a>
    </div>

    <div class="Header">
        <img src="<?php echo DIRMIMG. 'Banner.jpg';?>" alt=""><br>
        <?php
        $BreadCrumb = new Src\Classes\ClassBreadcrumb();
        $BreadCrumb->addBreadcrumb();
        ?>
        
        TEL: (XX) XXXXXXXXX <br>
        <?php echo $this->addHeader(); ?>
    </div>

    <div class="Main">
        <?php echo $this->addMain(); ?>
    </div>

    <div class="Footer">
        2019 - TODOS OS DIREITOS RESERVADOS ****** <br>
        <?php echo $this->addFooter(); ?>
    </div>

</body>
</html>