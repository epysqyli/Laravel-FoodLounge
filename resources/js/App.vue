<template>
  <div class="app">
    <Header></Header>
    <Main class="main"></Main>
    <Footer></Footer>
  </div>
</template>

<script>
import Header from "./components/Header.vue";
import Main from "./components/Main.vue";
import Footer from "./components/Footer.vue";

export default {
  name: "App",
  components: {
    Header,
    Main,
    Footer,
  },
};
</script>

<style lang="scss" scoped>
.app {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  min-height: 100vh;

  .main {
    flex-grow: 1;
    background-color: #effbf9;
  }
}
</style> 
