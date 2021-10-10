<template>
  <div class="container">
    <!-- <div class="row">
      <div class="col-12 mt-3">
        <div class="card text-center border">
          <div class="card-header">
            {{ restaurant.name }}
          </div>
          <div class="card-body">
            <p class="card-text">{{ restaurant.description }}</p>
          </div>
        </div>
      </div>
    </div> -->

    <div class="row">
      <!-- make Cart.vue component -->
      <div class="col-10 offset-1 offset-sm-0 col-sm-12 my-2">
        <div
          class="container-fluid mx-auto border rounded"
          v-if="cart.items.length != 0"
        >
          <div
            class="d-flex justify-content-between align-items-center my-1"
            v-for="item in cart.items"
            :key="item.id"
          >
            <div>{{ item.name }}</div>
            <div>{{ item.price }} &euro;</div>
            <div class="btn btn-outline-danger" @click="removeFromCart(item)">
              Remove
            </div>
          </div>
          <div class="d-flex justify-content-between align-items-center mt-3 mb-1">
            <div>Totale: {{ cart.total }} &euro;</div>
            <div class="btn btn-outline-primary rounded">Checkout</div>
          </div>
        </div>
      </div>

      <!-- make Food.vue component -->
      <div
        class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-lg-3 my-2"
        v-for="food in foods"
        :key="food.id"
      >
        <div class="card-header border">
          {{ food.name }}
        </div>
        <div class="card-body border">
          <div class="card-text">{{ food.description }}</div>
          <div class="card-text">{{ food.price }} &euro;</div>
          <img
            class="w-100"
            :src="
              food.image[0] == 'h'
                ? food.image
                : `http://localhost:8000/storage/${food.image}`
            "
            :alt="food.name"
          />
          <div
            class="btn btn-outline-secondary d-block mx-auto w-75 mt-2"
            @click="addToCart(food)"
          >
            Add to cart
          </div>
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
      cart: {
        items: [],
        total: null,
      },
    };
  },

  mounted() {
    this.getRestaurant();
  },

  updated() {
    if (this.cart.items.length != 0) this.cart.total = this.getTotal();
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

    addToCart(item) {
      this.cart.items.push(item);
    },

    removeFromCart(item) {
      this.cart.items.splice(this.cart.items.indexOf(item), 1);
    },

    getTotal() {
      let sum = null;
      this.cart.items.forEach((item) => (sum += item.price));
      return sum;
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
