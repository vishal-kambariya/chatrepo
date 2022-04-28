<html>
    <head>
        <title>
            notification page
        </title>

    </head>
    <body>
        <h1>notification page</h1>
    </body>
</html>
<script src="{{asset("js/app.js")}}"></script>
<script>
    Echo.channel('public-channel').listen(".App\\Events\\BrodcastingMessageToUser",(e)=>{
        console.log(e);
    });
</script>
