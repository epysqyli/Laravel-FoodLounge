<template>
  <router-link
    :to="{ name: 'restaurants', params: { slug: restaurant.slug } }"
    class="card m-3"
    style="text-decoration: none; color: inherit"
  >
    <div class="row">
      <div class="col-md-4">
        <img
          :src="
            restaurant.profile_image[0] == 'h'
              ? restaurant.profile_image
              : `http://localhost:8000/storage/${restaurant.profile_image}`
          "
          class="card-img-top"
          :alt="restaurant.name"
        />
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ restaurant.name }}</h5>
          <p>{{ restaurant.address }}</p>
          <p class="card-text">
            {{ this.limitParagraph(restaurant.description) }}
          </p>
          <p><strong>Category:</strong> {{ categoryName }}</p>
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
    categoryName: String,
  },

  methods: {
    limitParagraph(text) {
      return `${text.split(" ").slice(0, 20).join(" ")} ...`;
    },
  },
};
</script>

<style lang="scss" scoped>
h5,
p {
  color: #193540;
}

.card {
  border: none;
  border-radius: 20px;
  background-color: whitesmoke;
  height: 200px;
  overflow: hidden;
  text-overflow: ellipsis;

  img {
    border-radius: 20px;
    object-fit: cover;
    height: 200px;
  }
}
</style>