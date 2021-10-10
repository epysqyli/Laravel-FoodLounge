<template>
  <router-link
    :to="{ name: 'restaurants', params: { slug: restaurant.slug } }"
    class="card m-5"
  >
    <div class="row g-0">
      <div class="col-md-4">
        <img
          :src="
            restaurant.profile_image[0] == 'h'
              ? restaurant.profile_image
              : `http://localhost:8000/storage/${restaurant.profile_image}`
          "
          class="card-img-top"
          alt="restaurant.name"
        />
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ restaurant.name }}</h5>
          <p>{{ restaurant.address }}</p>
          <p class="card-text">{{ restaurant.description }}</p>
        </div>
      </div>
    </div>
  </router-link>
</template>

<script>
export default {
  name: "RestaurantCard",
  props: {
    restaurant: Object,
  },
};
</script>

<style lang="scss" scoped>
</style>