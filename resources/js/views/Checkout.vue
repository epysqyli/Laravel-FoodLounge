<template>
  <main>
    <div class="container">
          <!-- <router-link
            style="text-decoration: none; color: inherit; width: 50%; display: block"
            :to="{ name: 'home' }">
                <a class="navbar-brand"> <h1><i class="bi bi-egg-fried success"></i> FoodLounge</h1></a>
                </router-link> -->
      <div class="row pt-5">
      
          <CheckoutCard  />
        </div>
      </div>
    
  </main>
</template>

<script>
import CheckoutCard from "../components/CheckoutCard.vue";

export default {
  name: "Categories",
  components: {
    CheckoutCard,
  },
}

  
</script>

<style lang="scss" scoped>

</style>