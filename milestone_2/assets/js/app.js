const app = new Vue({

     el: '#app',
     data: {
         disks: [],
     },

     mounted() {
          axios
          .get("./assets/api_disks/db.php")
          .then(r => {
               this.disks = r.data
               console.log(this.disks)
          }).catch(e => {
               console.log(e);
          })
     }
 
 })