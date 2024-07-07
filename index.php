<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FlipBook </title>
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Flipbook StyleSheet -->
    <link href="./assets/css/dflip.min.css" rel="stylesheet" type="text/css">

    <!-- Icons Stylesheet -->
    <link href="./assets/css/themify-icons.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    $pdf_url = "./assets/pdf/drylab.pdf";
    $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);

    if (isset($queries['pdf'])) {
        $pdf_url = $queries['pdf'];
    }
    ?>
    <div class="_df_book" webgl="true" backgroundcolor="#f3f0fc" source="<?php echo $pdf_url; ?>" id="df_manual_book">
    </div>

    <!-- jQuery  -->
    <script src="./assets/js/libs/jquery.min.js" type="text/javascript"></script>
    <!-- Flipbook main Js file -->
    <script src="./assets/js/dflip.min.js" type="text/javascript"></script>


</body>

</html>