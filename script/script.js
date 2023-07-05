const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl : './server.php',
            disks : []
        }
    },
    methods: {
        getDisks(){
            axios.get(this.apiUrl, {
                params: {
                    }
                })
                .then((response) => {
                    this.disks = response.data;
                    console.log(response.data);
                })
                .catch(function (error) {
                    console.log(error);
                })
                .finally(function () {
                    // always executed
                });  
        }
    },

    created(){
        this.getDisks();
    }
}).mount('#app')