<template>
  <div class="container" :class="restaurants.length == 0 ? hidden : visible">
    <div class="row">
      <div
        class="
          col-10
          offset-1
          col-sm-12
          offset-sm-0
          col-md-10
          offset-md-1
          col-lg-6
          offset-lg-0
          ml-lg-0
        "
        v-for="restaurant in restaurants"
        :key="restaurant.id"
      >
        <RestaurantCard
          :restaurant="restaurant"
          :categoryName="getCategoryName(restaurant)"
        />
      </div>
    </div>
  </div>
</template>

<script>
import RestaurantCard from "../components/RestaurantCard.vue";
export default {
  name: "Categories",
  components: {
    RestaurantCard,
  },

  props: {
    userChoices: Array,
    categories: Array,
  },

  data() {
    return {
      apiUrl: "http://127.0.0.1:8000/api/categories/",
      restaurants: [],
      hidden: "hidden",
      visible: "visible",
    };
  },

  methods: {
    getRestaurant(choice) {
      axios
        .get(`${this.apiUrl}${choice}`)
        .then((response) => {
          response.data.forEach((item) => {
            if (!this.restaurants.find((entry) => entry.id == item.id)) {
              this.restaurants.push(item);
            }
          });
        })
        .catch((error) => console.log(error));
    },

    fillRestaurants() {
      this.restaurants = [];
      this.userChoices.forEach((choice) => this.getRestaurant(choice));
    },

    getCategoryName(restaurant) {
      const catId = restaurant.pivot.category_id;
      let cat = null;
      this.categories.forEach((category) => {
        if (category.id == catId) {
          cat = category;
        }
      });
      return cat.name;
    },
  },
};
</script>

<style lang="scss" scoped>
.container {
  padding-top: 50px;
  padding-bottom: 100px;

  .hidden {
    display: none;
  }

  .visibie {
    display: block;
  }
}
</style>