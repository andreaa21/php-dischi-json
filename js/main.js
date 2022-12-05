const { createApp } = Vue;

createApp({

    data(){
        return{
            apiUrl:'server.php'
        }
    },
    methods:{
        getRecord(){
            axios.get(this.apiUrl)
            .then(result => {
                console.log(result.data);
            })
        }
    },
    mounted(){
        console.log('----------');
    }

}).mount('#app');