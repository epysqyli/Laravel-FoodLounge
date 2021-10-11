<template>
  <header >
      <nav class="navbar navbar-light bg-dark text-center
      ">
              <div class="container-fluid">
                 <router-link
                          style="text-decoration: none; color: inherit; width: 50%; display: block"
                          :to="{ name: 'home' }"
                        >
                <a class="navbar-brand"> <h1><i class="bi bi-egg-fried success"></i> FoodLounge</h1>
                   </a>

                </router-link>

                <form class="d-flex">
                 <b-button class="btn btn-secondary rounded" v-b-toggle.sidebar-right> <h1> <i class="bi bi-cart"></i></h1></b-button>
                    
                  <button class="btn btn-outline-secondary mr-5 " type="submit"> <a
                        
                        href="http://localhost:8000/api/user"
                        class="link-dark"
                        >Admin area</a ></button>
                </form>
              </div>
</nav>
    
    
  </header>
</template>

<script>
export default {
  name: "Header",
};
</script>

<style lang="scss" scoped>
header{
  position:relative;
}
btn-sticky-left{
    background: #e9d758 none repeat scroll 0 0;
    border-radius: 0 5px 5px 0;
    box-shadow: 0 0 25px rgb(37 37 37 / 40%);
    left: 0;
    z-index: 1000;
    position: fixed;
    top: 0px;
    left: 200px;
}
</style>