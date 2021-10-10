<template>
  <div class="container">
    <div class="card text-center">
      <div class="card-header">
        {{ restaurant.name }}
      </div>
      <div class="card-body">
        <p class="card-text">{{ restaurant.description }}</p>
      </div>
    </div>

    <div class="row">
      <div
        class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-lg-3 my-2"
        v-for="food in foods"
        :key="food.id"
      >
        <div class="card-header">
          {{ food.name }}
        </div>
        <div class="card-body">
          <div class="card-text">{{ food.description }}</div>
          <div class="card-text">{{ food.price }} &euro;</div>
          <img class="w-100"
            :src="
              food.image[0] == 'h'
                ? food.image
                : `http://localhost:8000/storage/${food.image}`
            "
            :alt="food.name"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Restaurant",
  data() {
    return {
      apiUrl: "http://127.0.0.1:8000/api/restaurants/",
      restaurant: null,
      foods: null,
    };
  },
  created() {
    this.getRestaurant();
  },
  methods: {
    getRestaurant() {
      axios
        .get(this.apiUrl + this.$route.params.slug)

        .then((response) => {
          this.restaurant = response.data;
          this.foods = this.restaurant.foods;
        })
        .catch();
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
}
.card:hover {
  box-shadow: 0 0 20px #ffd60a;
}
</style>
