<template>
  <div class="content">
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
  </div>
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


h5, p {
  color: #193540;
}

.card {
  border: none;
  // border: 1px solid black;
  border-radius: 20px;
  background-color: whitesmoke;

  &:hover{
    // border-radius: 5px;
    box-shadow: 6px 12px 10px -6px black;
    // transition: box-shadow 200ms ease-out;
  }

  img {
    border-radius: 20px;
    object-fit: cover;
    height: 200px;
  }


}


</style>