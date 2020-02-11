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
          <h2>Calclutor Project Vue Js</h2>
            <div class="card">
              <div class="card-body">
                  
                  <div class="alert alert-danger" v-if="hasError">
                    Error : {{error}}
                  </div>
                  <div class="alert alert-success" v-else>
                    Result : {{result}}
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" v-model="frist_num" class="form-control" v-on:keyup="numberChick">
                    </div>
                    <div class="col-md-6">
                      <input type="text" v-model="second_num" class="form-control" v-on:keyup="numberChick">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-md-3">
                      <button type="button" class="btn btn-success btn-block" v-on:click="sumationFun">+</button>
                    </div>
                    <div class="col-md-3">
                      <button type="button" class="btn btn-success btn-block" v-on:click="subtractionFun">-</button>
                    </div>
                    <div class="col-md-3">
                      <button type="button" class="btn btn-success btn-block" v-on:click="divisionFun">/</button>
                    </div>
                    <div class="col-md-3">
                      <button type="button" class="btn btn-success btn-block" v-on:click="multiplactionFun">*</button>
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