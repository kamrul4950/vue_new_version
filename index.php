<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <h2>Welcome {{name1}}</h2>
    </div>
    
    <script src="js/vue.js"></script>
    <script>
        var app = new Vue({
            el:"#app",
            data:{
                name1:"Md Kamrul Asad"
            }
        })
    </script>
</body>
</html>