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
            <span v-if="gender">
                <span v-once>{{phone_no}}</span>
            </span>
            <span v-else>
                <p>Sorry she is female number is private</p>
            </span>
        
        
            <h2>Fabarate lanaguages is ({{languages.length}})</h2>
            <ol>
                <li v-for="language in languages">
                    {{language}}
                </li>
            </ol>
            <br>
            <h2>Student Details</h2>
            <p>Name: {{student.name}}</p>
            <p>Age : {{student.age}}</p>
            
            <hr>

            
        </div>
        
        
        
    </div>
    
    <script src="js/vue.js"></script>
    <script>
        var app = new Vue({
            el:"#app",
            data:{
                name1:"Md Kamrul Asad",
                about:"Hei I am Md Kamrul Asad </br> Department is <b> CSE</b>",
                phone_no:"01823-335388",
                gender:true,
                languages:[
                    "C",
                    "C++",
                    "Java",
                    "PHP",
                    "C#"


                ],
                books:{
                    name:"Java Programming",
                    price: 250
                },
                student:{
                    name:"Md Kamrul Asad",
                    age: 25,
                    mobile:"01823-335388",
                    deprt:"CSE"
                }
            }
           
        })
    </script>
</body>
</html>