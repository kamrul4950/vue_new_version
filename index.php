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
        <br>
        <span v-html="about"></span>
        <br>
        <span v-once>{{phone_no}}</span>
    </div>
    
    <script src="js/vue.js"></script>
    <script>
        var app = new Vue({
            el:"#app",
            data:{
                name1:"Md Kamrul Asad",
                about:"Hei I am Md Kamrul Asad </br> Department is <b> CSE</b>",
                phone_no:"01823-335388"
            }
        })
    </script>
</body>
</html>