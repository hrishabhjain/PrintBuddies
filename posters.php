<html>
<head>
    <title>Posters</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <script src="js/common.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/handlebars-v2.0.0.js"></script>
    <script src="js/productInfo.js"></script>
</head>
<body onload=getProductInfo("posters");>
<div class="post "  >
    <h1>Posters</h1>
</div>

<script id="handlebar-info" type="text/x-handlebars-template">
    <div class="post " data-update-id="{{Category}}" id="{{Category}}-info" >
        <label>{{Category}}</label>
    </div>
</script>

<div id="productInfo">

</div>

</body>
</html>