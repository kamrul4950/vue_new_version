var app = new Vue({
    el:'#app',
    data:{
        title:'',
        description:'',
        notes:[],
        errorText:'',
        successText:''
    },
    mounted(){
        this.notes.push(
            {
                'title':'1st title new',
                'description':'This is demo description'
            },
            {
                'title':'2nd title note',
                'description':'This is 2nd description demo text'
            }
        )
    },
    methods:{
        addFun(){
            let title=this.title;
            let description=this.description;
            if(title.length > 0 && description.length >0){
                let notAdd ={
                    'title':title,
                    'description':description
                }
                this.notes.push(notAdd);
                this.title="",
                this.description="",
                this.successText="Note Added",
                this.errorText=""
            }else{
                this.successText="",
                this.errorText="Please fill the input field.."
                return;
            }
        },
        deleteNote(noteIndex){
            this.notes.splice(noteIndex,1);
            this.successText="Note delete success..",
            this.errorText=""
        }
    }
});