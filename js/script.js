const app = new Vue({
        el: '#app',
        data: {
           url: 'api.php',
           dischi: '' 
        },
        mounted(){
            axios
                .get(this.url)
                .then(x => {
                    
                    this.dischi = x.data;
                    console.log(response);
                })

        }
})