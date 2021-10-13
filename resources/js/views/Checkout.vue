<template>
  <main>
    <div class="content">
      <div class="container">
        <div class="row">
          <CheckoutCard :cart="cart" />
        </div>
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
.content{
  padding-top: 40px;
  padding-bottom: 50px;
}
</style>