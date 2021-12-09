<template>
  
  <div>
    <header>
      <SiteHeader/>
    </header>

    <main>
      <SongCards/>
    </main>

    <footer>
    </footer>
  </div>

</template>

<script>

import SiteHeader from './components/Header.vue';
import SongCards from './components/SongCards.vue';


export default {
 
  
  components: {
    SiteHeader,
    SongCards,
  },
}
</script>

<style lang="scss">

@import "../node_modules/bootstrap/scss/bootstrap.scss";




</style>
