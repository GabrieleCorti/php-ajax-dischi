const app = new Vue({
    el: "#app",
    data: {
        albums: []
    },
    mounted: function() {
        axios.get('http://localhost/php-ajax-dischi/albumsJson.php')
            .then((response)=>{
                console.log(response);
                this.albums = response.data;
            });
    },
})