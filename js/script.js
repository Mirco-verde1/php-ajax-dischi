new Vue({
  el:'#myApp',

  data:{
  albumData:[],
  dataGenres:[],
  userSelect:'',
},


  mounted() {
  const self = this;
    axios.get('http://locahost/php-ajax-dischi/app/server.php'  )
      .then(function(resp) {

        const data = resp.data;
        self.albumData = data;


      })

  },
  methods:{

    albumsGenres:function(){

      this.albumData.forEach((item, i) => {

        if (!this.dataGenres.includes(item.genre)) {
          this.dataGenres.push(item.genre);
          console.log(this.dataGenres);
        }
      });

    }

  },

   chooseGenres:function(){
    const self = this;
    axios.get('http://localhost/php-ajax-dischi/app/server.php', {
      params:{
        genre: this.userSelect,
      },
    }).then(function(resp){
       self.albumData = resp.data;

     })

}
})
  Vue.config.devtools = true;
