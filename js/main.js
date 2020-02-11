var app =new Vue({
    el:"#app",
    data:{
        frist_num:"",
        second_num:"",
        result:"",
        hasError:false,
        error:""
    },
    methods:{
        sumationFun(){
            
           var nam1 = Number(this.frist_num) ;
           var nam2 = Number(this.second_num) ;
           var result =nam1+nam2;
           this.result=result;
        },
        subtractionFun(){
            
            var nam1 = Number(this.frist_num);
            var nam2 = Number(this.second_num);
            var result = nam1-nam2;
            this.result=result;
        },
        divisionFun(){
            

            var nam1=Number(this.frist_num);
            var nam2=Number(this.second_num);
            var result =nam1/nam2;
            this.result=result;
        },
        multiplactionFun(){
           

            var nam1 = Number(this.frist_num);
            var nam2 = Number(this.second_num);
            var result =nam1*nam2;
            this.result=result;
        },
        numberChick(){
            if(isNaN(this.frist_num)){
                            this.hasError=true;
                            this.error="Please enter valide number..";
                        }else if(isNaN(this.second_num)){
                            this.hasError=true;
                            this.error="Please enter valide number";
                        }else{
                            this.hasError=false;
                            this.error="";
                        }
        }
    }
})