
<html>
<head>
    <title>Canvas Banner </title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <script src="js/common.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/handlebars-v2.0.0.js"></script>
    <script src="js/productInfo.js"></script>
</head>
<body onload=getProductInfo("canvas_banner");>
    <div class="post "  >
        <h1>Canvas Banner</h1>
    </div>

<script id="handlebar-info" type="text/x-handlebars-template">
    <div class="post " data-update-id="{{Category}}" id="{{Category}}-attribute" >
        <label>{{Category}}</label>
    </div>
</script>
<div id="productInfo">

</div>

</body>
</html>