<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="manifest.json">
    <title>Installable App</title> 
    <script>
       window.addEventListener('load',()=>{
           if("serviceWorker" in navigator){
               navigator.serviceWorker.register('sw.js')
           }
       })
    </script>
</head>
<body>
        <center>
            <button>show notification</button>
        </center>
    <script src="notification.js"></script>
</body>
</html>