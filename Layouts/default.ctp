<?php
/**
 * Croogo 2.0 Theme by Lukas Strassel
 * @author Lukas Strassel <lukasstrassel@googlemail.com>
 * @link   http://sakulstra.org
 */
?>
<!DOCTYPE html>
<html lang="de-DE">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="author" content="Lukas Strassel" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"/>
        <title><?php echo $title_for_layout; ?> &raquo; <?php echo Configure::read('Site.title');?></title>
        <?php
        echo $this->Meta->meta();
        echo $this->Layout->feed();
        echo $this->Html->css(array(
            'screen'
        ));
        ?>
        <?php 
        echo $this->Blocks->get('css');
		echo $this->Blocks->get('script');
        echo $scripts_for_layout;
        ?>
    </head>
    <body>

        <div id="wrapper">
            <header class="grid-container">
                <div id="grid-100">
                    <h1><?php echo $this->Html->link(Configure::read('Site.title'), "/");?></h1>
                    <div id="tagline">
                        <span><?php echo Configure::read('Site.tagline');?></span>
                    </div>
                </div>
                <nav class="main">
                    <?php echo $this->Layout->menu('main');?>
                </nav>
            </header>
            <div id="main" class="grid-container">
                <div id="content" class="grid-80">
                    <?php echo $content_for_layout;?>
                </div>
                <div id="sidebar" class="grid-20">
                    <?php echo $this->Layout->blocks('right');?>
                </div>
            </div>
            <footer class="grid-container">
                <div id="grid-100">
                <?php echo $this->Layout->menu('footer');?>
                    <div>
                        Powered by <?php echo $this->Html->link('Croogo', 'http://croogo.org');?> with <?php echo $this->Html->link('Crorestra Theme', 'http://sakulstra.org');?>.
                    </div>
                </div>
            </footer>
        </div>

    </body>
</html>