new Vue({
  el:'#myApp',

  data:{

  albumData:[],
  dataGenres:[],
  userSelect:'',
},


  mounted() {
  const self = this;
    axios.get('app/server.php')

      .then(function(resp) {

        const data = resp.data;
        self.albumData = data;
        console.log(self.albumData);


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

    },



    chooseGenres:function(){

     const self = this;
      axios.get('app/server.php',{
        params:{
          genre: self.userSelect,
        },
      })

       .then(function(resp){
          self.albumData = resp.data;
          console.log(self.albumData);

      })

    },
  },


})
  Vue.config.devtools = true;
