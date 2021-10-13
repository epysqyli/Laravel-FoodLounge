<template>
  <div>
    <h1 class="text-center my-5 py-2">Success!</h1>
    <div class="row">
      <div class="col-10 offset-1">
        <div class="text-center h3 mx-auto">Riepilogo ordine da inserire</div>
      </div>
    </div>
    <router-link :to="{ name: 'home' }"
      ><div
        class="text-center btn btn-outline-primary d-block w-75 mx-auto my-5"
      >
        Go buy more stuff
      </div></router-link
    >
  </div>
</template>

<script>
export default {
  name: "PaymentResult",
  data() {
    return {
      orderedItems: [],
    };
  },

  methods: {
    buildCart() {
      Object.keys(localStorage).forEach((key) => {
        this.orderedItems.push(JSON.parse(localStorage.getItem(key)));
      });
    },

    clearStorage() {
      localStorage.clear();
    },
  },

  mounted() {
    this.buildCart();
    this.clearStorage();
  },
};
</script>

<style lang="scss" scoped>
</style>