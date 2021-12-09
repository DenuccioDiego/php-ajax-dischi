<template>
  
  <div>
       de
  </div>

</template>

<script>
import axios from "axios";


export default {

     data(){
          return{
               disks:[],
               api_url: "../../../milestone_1/db.php",
          };
     },
          
     

     mounted() {
     axios
          .get(this.api_url)
          .then((r) => {
               this.disks = r.cards
          })
          .catch((e) => {
               this.error = e;
          });
     },
  
}
</script>


<style scoped lang="scss">

</style>