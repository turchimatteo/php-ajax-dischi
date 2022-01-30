Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        array: []
    },
    methods: {
        getData: function(){
            axios.get('http://localhost:8888/php-ajax-dischi/MILESTONE2/server.php')
            .then((response) => {
                console.log(response.data)
                this.array = response.data
            })
        }
    },
    created: function(){
        this.getData();
    }
});