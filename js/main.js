var app =new Vue({
    el:"#app",
    data:{
        name:"",
        live:""
    },
    methods:{
        testingMethod(){
            alert('Welcome '+this.name);
        },
        liveValidation(){
            if(this.name=="Shopon"){
                this.live="Yea I Know you Md Kamrul Asad"
            }else{
                this.live="Sorry you are unknown persion pls contact admin"
            }
        }
    }
})