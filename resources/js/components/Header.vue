<template>
  <header>
    <div class="container-fluid">
      <div class="row py-2">
        <div class="col-10 col-md-8">
          <router-link
            style="text-decoration: none; color: black; display: block"
            :to="{ name: 'home' }"
          >
            <h2><i class="bi bi-egg-fried success"></i> FoodLounge</h2>
          </router-link>
        </div>

        <div class="col-4">
          <div class="d-flex justify-content-end">
            <div v-if="this.$route.path.split('/').includes('restaurants')">
              <b-button
                class="btn btn-secondary rounded"
                v-b-toggle.sidebar-right
              >
                <div>
                  <font-awesome-icon icon="shopping-cart" />
                </div>
              </b-button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: "Header",
};
</script>

<style lang="scss" scoped>
header {
  position: relative;
  background: linear-gradient(
    87deg,
    rgba(231, 111, 81, 1) 0%,
    rgba(233, 196, 106, 1) 100%
  );
  box-shadow: 3px 6px 8px -6px #264653;
}

btn-sticky-left {
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