new Vue({
  el:'#myApp',

  data:{
  albumData:[],
},


  mounted() {
  const self = this;
    axios.get('http://locahost/php-ajax-dischi/app/server.php')
      .then(function(resp) {

        const data = resp.data;
        self.albumData = data;
        console.log(self.albumData);


      })

  },


})
  Vue.config.devtools = true;
