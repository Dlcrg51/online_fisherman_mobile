<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/18/14
 * Time: 2:13 PM
 */
defined('_JEXEC') or die;

// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();

// Add JavaScript Frameworks
$doc->addScript('templates/'.$this->template.'/js/bootstrap.min.js');

// Add Stylesheets
$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <jdoc:include type="head" />

    <!--[if lt IE 9]>
    <script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
    <![endif]-->
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo JUri::root(); ?>">
                        <img src="<?php echo JUri::root() . 'templates/' . $this->template . '/images/logo.png'; ?>" />
                    </a>
                </div>
                <div class="col-md-8">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobile-menu">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="mobile-menu">
                                <jdoc:include type="modules" name="mobile-menu" />
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <jdoc:include type="message" />
                    <jdoc:include type="component" />
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <jdoc:include type="modules" name="mobile-footer" />
                </div>
            </div>
        </div>
    </footer>
</body>
</html>