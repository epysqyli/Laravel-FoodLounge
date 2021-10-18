<template>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Image</th>
          <th scope="col">Price</th>
          <th scope="col">Name</th>
          <th scope="col">Buy</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(food, index) in foods" :key="index">
          <td>
            <img
              class="w-50"
              :src="
                food.image[0] == 'h'
                  ? food.image
                  : `http://localhost:8000/storage/${food.image}`
              "
              :alt="food.name"
            />
          </td>
          <td>{{ food.price }}</td>
          <td>{{ food.name }}</td>
          <td class="d-flex justify-content-center align-items-center">
            <div
              class="btn btn-outline-danger font-weight-bold px-2 mr-2"
              @click="removeProduct(food)"
              :class="
                cart.items.find((el) => food.id === el.id)
                  ? 'clickable'
                  : 'notClickable'
              "
            >
              Remove
            </div>
            <div
              class="btn btn-outline-primary font-weight-bold px-4"
              @click="addProduct(food)"
              :class="
                cart.items.find((el) => food.id === el.id)
                  ? 'notClickable'
                  : 'clickable'
              "
            >
              Add
            </div>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Cart -->
    <div class="row mt-4">
      <b-sidebar id="sidebar-right" title="Cart" right shadow>
        <div class="overflow-hidden">
          <div class="mx-1">
            <div
              class="container mx-auto border rounded"
              v-if="cart.items.length != 0"
            >
              <h1><i class="bi bi-cart"></i></h1>
              <div
                class="d-flex justify-content-between align-items-center my-1"
                v-for="item in cart.items"
                :key="item.id"
              >
                <div>{{ item.name }}</div>
                <div>{{ item.price }} &euro;</div>
                <div
                  class="btn btn-outline-danger font-weight-bold px-3"
                  @click="decrementQty(item)"
                >
                  -
                </div>
                <div>{{ item.quantity }}</div>
                <div
                  class="btn btn-outline-primary font-weight-bold px-3"
                  @click="incrementQty(item)"
                >
                  +
                </div>
              </div>
              <div
                class="
                  d-flex
                  justify-content-between
                  align-items-center
                  mt-3
                  mb-1
                "
              >
                <div>Totale: {{ cart.total }} &euro;</div>
                <router-link
                  style="
                    text-decoration: none;
                    color: inherit;
                    width: 50%;
                    display: block;
                  "
                  :to="{ name: 'checkout' }"
                >
                  <a class="navbar-brand">CheckOut</a>
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </b-sidebar>
    </div>
  </div>
</template>

<script>
export default {
  name: "Restaurant",
  data() {
    return {
      apiUrl: "http://127.0.0.1:8000/api/restaurants/",
      restaurant: {},
      foods: null,
      cart: {
        items: [],
        total: null,
      },
      disabled: "disabled",
      active: "active",
    };
  },

  mounted() {
    this.getRestaurant();
    this.updateCartToMatchStorage();
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
          this.foods = this.restaurant.foods.map((food) => {
            return { ...food, quantity: 0 };
          });
        })
        .catch((error) => console.log(error));
    },

    removeProduct(item) {
      this.removeFromStorage(item);
    },

    addProduct(item) {
      // clean up cart if foods from other restaurants are present
      this.cleanUp(item);

      item.quantity = 1;
      this.addToStorage(item);
    },

    cleanUp(item) {
      if (!!localStorage.length) {
        const oldItem = JSON.parse(Object.values(localStorage)[0]);
        if (oldItem.user_id != item.user_id) {
          localStorage.clear();
          this.updateCartToMatchStorage();
        }
      }
    },

    decrementQty(item) {
      if (item.quantity > 0) {
        item.quantity--;
        // localstorage needs to be updated here too
        this.addToStorage(item);
      }

      if (item.quantity == 0) {
        this.removeFromStorage(item);
      }
    },

    incrementQty(item) {
      item.quantity++;
      this.addToStorage(item);
    },

    addToStorage(item) {
      if (localStorage.getItem(item.name) === null) {
        localStorage.setItem(item.name, JSON.stringify(item));
      } else {
        localStorage.removeItem(item.name);
        localStorage.setItem(item.name, JSON.stringify(item));
      }
      this.updateCartToMatchStorage();
    },

    removeFromStorage(item) {
      localStorage.removeItem(item.name);
      this.updateCartToMatchStorage();
    },

    updateCartToMatchStorage() {
      this.cart.items = [];
      Object.keys(localStorage).forEach((key) => {
        this.cart.items.push(JSON.parse(localStorage.getItem(key)));
      });
    },

    getTotal() {
      let sum = null;
      this.cart.items.forEach((item) => (sum += item.price * item.quantity));
      return sum.toFixed(2);
    },
  },
};
</script>

<style lang="scss" scoped>
.notClickable {
  opacity: 0.25;
  pointer-events: none;
}

.clickable {
  opacity: 1;
}
</style>
