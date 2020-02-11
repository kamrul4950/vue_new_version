<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue Js</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
        <div id="app">
          <div class="container">
            <div class="card">
              <h2>Note App Vue Js</h2>
              <div class="card card-body" v-if="errorText.length>0">
                <div class="alert alert-danger" >
                  {{errorText}}
                </div>
              </div>
              <div class="card card-body" v-if="successText.length>0">
                <div class="alert alert-success">
                  {{successText}}
                </div>
              </div>
              <div class="card card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <p>Title  {{ title }}</p>
                      <input type="text" class="form-control" v-model="title">
                    </div>
                    <div class="col-md-6">
                      <p>Description  {{ description }}</p>
                      <textarea class="form-control" cols="30" rows="5" v-model="description"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <button type="button" class="btn btn-success btn-block mt-2" v-on:click="addFun" >Add Note</button>
                    </div>
                  </div>
              </div>
              <div class="card card-body mt-3 p-3" v-for="(note , index) in notes">
                <div class="row">
                  <div class="col-md-12">
                    <p class="btn btn-danger" v-on:click="deleteNote(index)">X</p>
                     <h4>{{note.title}}</h4>
                    <p>{{note.description}}</p>
                  </div>
                </div>
                
               
              </div>
            </div>
              
            
          </div>
        </div>
        
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/vue.js"></script>
    <script src="js/main.js"></script>
</body>
</html>