<template>
  <div>
    <h1 class="text-center my-5 py-2">Success!</h1>
    <router-link :to="{ name: 'home' }"
      ><div class="text-center btn btn-outline-primary d-block w-75 mx-auto my-5">Go buy more stuff</div></router-link
    >
  </div>
</template>

<script>
export default {
  name: "PaymentResult",
};
</script>

<style lang="scss" scoped>
</style>