<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>elFinder 2.0</title>

    <!-- jQuery and jQuery UI (REQUIRED) -->
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

    <!-- elFinder CSS (REQUIRED) -->
    <link rel="stylesheet" type="text/css" href="<?php echo URL::to('plugins/anandpatel/wysiwygeditors/public/css/elfinder.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo URL::to('plugins/anandpatel/wysiwygeditors/public/css/theme.css'); ?>">

    <!-- elFinder JS (REQUIRED) -->
    <script src="<?php echo URL::to('plugins/anandpatel/wysiwygeditors/public/js/elfinder.min.js'); ?>"></script>

    <?php if ($locale) { ?>
    <!-- elFinder translation (OPTIONAL) -->
    <script src="<?= asset($dir."/js/i18n/elfinder.$locale.js") ?>"></script>
    <?php } ?>

    <!-- elFinder initialization (REQUIRED) -->
    <script type="text/javascript" charset="utf-8">
        // Documentation for client options:
        // https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
        $().ready(function() {
            $('#elfinder').elfinder({
                // Set your elFinder options here.
                <?php if ($locale) { ?>
                    lang: '<?= $locale ?>', // Locale
                <?php } ?>
                url : '<?= URL::action('Barryvdh\Elfinder\ElfinderController@showConnector') ?>' // Connector URL
            });
        });
    </script>
</head>
<body>

    <!-- Element where elFinder will be created (REQUIRED) -->
    <div id="elfinder"></div>

</body>
</html>
