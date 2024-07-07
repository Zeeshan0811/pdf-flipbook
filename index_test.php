<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DFlip / examples</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Flipbook StyleSheet -->
    <link href="./assets/css/dflip.min.css" rel="stylesheet" type="text/css">

    <!-- Icons Stylesheet -->
    <link href="./assets/css/themify-icons.min.css" rel="stylesheet" type="text/css">
    <!-- Include stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.1/dist/quill.snow.css" rel="stylesheet" />
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <h2>You can now create FlipBook with just HTML (Recommended) </h2>
                All you need is to include the necessary files.

                <pre>
<code class="language-html">&lt;div class="_df_book" source="http://www.yourssite.com/books/dflip manual.pdf"&gt;&lt;/div&gt;</code></pre>
            </div>
            <div class="col-xs-12" style="padding-bottom:30px">
                <!--Normal FLipbook-->
                <div class="_df_book" height="750" webgl="true" backgroundcolor="#f3f0fc" source="./assets/pdf/drylab.pdf" id="df_manual_book">
                </div>

            </div>
        </div>
    </div>

    <!-- jQuery  -->
    <script src="./assets/js/libs/jquery.min.js" type="text/javascript"></script>
    <!-- Flipbook main Js file -->
    <script src="./assets/js/dflip.min.js" type="text/javascript"></script>
    <!-- Include the Quill library -->
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.1/dist/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        const quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>

</body>

</html>