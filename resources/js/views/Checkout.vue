<template>
  <main>
    <div class="container">
         
        <div class="row">
          <CheckoutCard :cart="cart" />
        </div>
      </div>  
    
  </main>
</template>

<script>
import CheckoutCard from "../pages/CheckoutCard.vue";

export default {
  name: "Categories",
  components: {
    CheckoutCard,
  },
  props:{
    cart : Object,
  }
}

  
</script>

<style lang="scss" scoped>

</style>