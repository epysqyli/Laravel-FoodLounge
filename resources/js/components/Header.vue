<template>
  <header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center py-2 px-md-5">
          <router-link
            style="
              text-decoration: none;
              color: black;
              width: 50%;
              display: block;
            "
            :to="{ name: 'home' }"
          >
            <h1><i class="bi bi-egg-fried success"></i> FoodLounge</h1>
          </router-link>

          <div class="d-flex align-items-center">
            <div v-if="this.$route.path.split('/').includes('restaurants')">
              <b-button
                class="btn btn-secondary rounded"
                v-b-toggle.sidebar-right
              >
                <h1><i class="bi bi-cart"></i></h1
              ></b-button>
            </div>
            <a
              href="http://localhost:8000/api/user"
              class="d-block btn btn-outline-primary py-2 ml-2"
              >Accesso Ristoratori</a
            >
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
  background: rgb(231, 111, 81);
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