<template>
  <main>
    <div class="container">
      <div class="row pt-5">
        <div class="col-12" v-for="restaurant in restaurants" :key="restaurant.id">
          <router-link :to="{ name: 'restaurants', params: { slug: restaurant.slug } }"
          class="card m-3 mx-auto" style="max-width: 900px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img :src="restaurant.profile_image[0] == 'h' ? restaurant.profile_image : `http://localhost:8000/storage/${restaurant.profile_image}`" class="card-img-top" alt="restaurant.name">
              </div>
              <div class="col-md-8">
                <div class="card-body text-center">
                  <h5 class="card-title">{{restaurant.name}}</h5>
                  <p>{{restaurant.address}}</p>
                  <p class="card-text">{{restaurant.description}}</p>
                </div>
              </div>
            </div>
          </router-link>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
export default {
  name: "Categories",
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
h2 {
  font-size: 40px;
  color: #ffd60a;
}

.card {
  border: none;
  border-radius: 20px;
}

.card img {
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
  // border-radius: 20px;
}
.card-body{
  height: 250px;
  overflow: auto;
}

.card:hover {
  box-shadow: 0 0 20px #ffd60a;
}
</style>