<template>
  <router-link
    :to="{ name: 'restaurants', params: { slug: restaurant.slug } }"
    class="card m-3"
    style="text-decoration: none; color: inherit"
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
          <p class="card-text">
            {{ this.limitParagraph(restaurant.description) }}
          </p>
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

  methods: {
    limitParagraph(text) {
      return `${text.split(" ").slice(0, 30).join(" ")} ...`;
    },
  },
};
</script>

<style lang="scss" scoped>
h2 {
  font-size: 40px;
  color: #ffd60a;
}

.card {
  border: none;
  border: 2px solid black;
  border-radius: 20px;

  img {
    border-radius: 18px;
    object-fit: cover;
    height: 200px;
  }
}

.card:hover{
  border: 2px solid yellow;
}


</style>