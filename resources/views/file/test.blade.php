<html>
    <head>
        <title>Test Page for checking external bootstrap CSS and JS</title>
        <link rel="stylesheet" href="/css/Bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="/css/fonts.css" type="text/css">
        <script src="/js/Bootstrap.min.js"></script>
        <script src="/js/jquery.js"></script>
        <script src="/js/popper.js"></script>
    </head>
    <body>
        <button class="btn btn-outline-success welcome">Welcome!</button>
        <div class="alert alert-success btn-status">
            You have Clicked Welcome Button...!
        </div>
    </body>
</html>
<script>
$(document).ready(function () {
    $('.btn-status').hide();
    $('.welcome').click(function () {
        $('.btn-status').show();
    });
});
</script>