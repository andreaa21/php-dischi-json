const { createApp } = Vue;

createApp({

    data(){
        return{
            apiUrl:'server.php',
            records: []
        }
    },
    methods:{
        getRecords(){
            axios.get(this.apiUrl)
            .then(result => {
                this.records = result.data;
                console.log(this.records);
            })
        }
    },
    mounted(){
        this.getRecords();
    }

}).mount('#app');