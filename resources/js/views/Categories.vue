<template>
  <main>
    <div class="container">
      <div class="row">
        <div
          class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-10 offset-md-1 col-lg-6 mx-auto ml-lg-0"
          v-for="restaurant in restaurants"
          :key="restaurant.id"
        >
          <RestaurantCard :restaurant="restaurant" />
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import RestaurantCard from "../pages/RestaurantCard.vue";
export default {
  name: "Categories",
  components: {
    RestaurantCard,
  },

  data() {
    return {
      apiUrl: "http://127.0.0.1:8000/api/categories/",
      userChoices: [],
      restaurants: [],
    };
  },

  mounted() {
    this.userChoices = this.$route.params.names.split("&");
    this.fillRestaurants();
  },

  methods: {
    getRestaurant(choice) {
      axios
        .get(`${this.apiUrl}${choice}`)
        .then((response) => {
          response.data.forEach((item) => this.restaurants.push(item));
        })
        .catch((error) => console.log(error));
    },

    fillRestaurants() {
      this.userChoices.forEach((choice) => this.getRestaurant(choice));
    },
  },
};
</script>

<style lang="scss" scoped>
main{
  background-color: #4FB3E4;
  padding-top: 100px;
  padding-bottom: 200px;
  
}
</style>