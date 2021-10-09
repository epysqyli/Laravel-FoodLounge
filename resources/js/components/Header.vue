<template>
  <header class="d-flex justify-content-around">
    <router-link
      style="text-decoration: none; color: inherit; width: 50%; display: block"
      :to="{ name: 'Home' }"
    >
      <div class="d-block btn w-100 btn-outline-primary">Home</div>
    </router-link>
    <a
      class="d-block btn w-50 btn-outline-primary"
      href="http://localhost:8000/api/user"
      >Admin area</a
    >
  </header>
</template>

<script>
export default {
  name: "Header",
};
</script>

<style lang="scss" scoped>
</style>