<template>
  <div class="app">
    <Header></Header>
    <router-view></router-view>
    <Footer></Footer>
  </div>
</template>

<script>
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";

export default {
  name: "App",
  components: {
    Header,
    Footer
  },
};
</script>

<style lang="scss" scoped>
.app{
  position:relative;
  width: 100vw;
  height: 100vh;
}
</style> 
