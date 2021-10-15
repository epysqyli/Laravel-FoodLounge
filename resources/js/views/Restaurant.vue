<template>
  <div class="container-fluid">
    <div class="row cover_image">
      <div class="cover-image">
        <img
          :src="restaurant.cover_image"
          :alt="restaurant.name"
          class="image"
        />
  
        <div class="middle">
          <div class="text text-uppercase">{{ restaurant.name }}</div>
        </div>
        <div class="address">
          <div class=" text-uppercase">{{ restaurant.address }}</div>
        </div>

      </div>
    </div>
    <div class="row">
    <div class="col-8 ">
      <div class="row">
        <div class="col p-5" v-for="(food, index) in foods" :key="index">
 <div class="card " >
        <div class="card-body">
            <img
              class="rounded"
              :src="
                food.image[0] == 'h'
                  ? food.image
                  : `http://localhost:8000/storage/${food.image}`
              "
              :alt="food.name"
            />
          <div class="card-date">
            <i class="bi bi-calendar3"></i>24 Mar 18:00 PM
          </div>
          <p class="card-text">
           {{ food.name }}
          </p>
          <div><i class="bi bi-person"></i>Teacher: </div>
          <br />
          <div><i class="bi bi-cash"></i>Price: {{ food.price }}</div>
          <a href="#" class="btn btn-primary"
            ><i class="bi bi-plus-lg"></i>Find More</a
          >
        </div>
      </div>
        </div>
      </div>
      
      
      
      
      
      </div>
    <div class="col-4 bg-secondary">
      
      
      
      
      2 di 2
      
      
      
      
      </div>
  </div>
    

    <!-- Display foods -->
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Image</th>
          <th scope="col">Price</th>
          <th scope="col">Name</th>
          <th scope="col">Buy</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(food, index) in foods" :key="index">
          <th scope="row">1</th>
          <td>
            <img
              class=""
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
.card {
    margin: 20px;
    border-radius: 25px;
    min-width: 270px;
    max-height: 300px;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    .card-date {
      margin-top: 20px;
    }
    p {

    }
    .btn {
      margin-top: 20px;
      height: 50px;
      border-radius: 25px;
      vertical-align: middle;
      padding: 16px 43px !important;
      background-color: #e56768;
      box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
      border: 0px;
      &:hover {
        background-color: #e9d758;
      }
    }
    img {
      height: 80px;
      width: 100px;
      transition: transform 0.8s;
      &:hover {
        transform: scale(1.1);
      }
    }
  }

.container-fluid {
  .cover_image:hover .image {
    opacity: 0.8;
  }
  .cover_image:hover .middle,.cover_image:hover .address {
    opacity: 1;
  }
  .cover-image {
    position: relative;
    width: 100%;

    .text {
      background: rgb(0, 0, 0); /* Fallback color */
      background: rgba(0, 0, 0, 0.9); /* Black background with 0.5 opacity */
      color: #eb7b0c; /* Grey text */
      font-size: 16px;
      padding: 16px 32px;
      animation: type 8s steps(60, end);
    }

    img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      opacity: 1;
      transition: 0.5s ease;
      backface-visibility: hidden;
    }
    .middle {
      transition: 0.5s ease;
      opacity: 0;
      position: absolute;
      top: 20%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      text-align: center;
    }
    .address{
       transition: 0.5s ease;
      opacity:0;
      position:absolute;
      text-align: center;
      bottom:5px;
      left: 10px;
      color: black;
      margin-left: 40px;
     
    }
   
  }
 
}
td img {
  height: 100px;
  width: 50px;
  object-fit: cover;
  vertical-align: middle;
}
h2 {
  font-size: 40px;
  color: #ffd60a;
}
.card {
  border: none;
}

.notClickable {
  opacity: 0.25;
  pointer-events: none;
}

.clickable {
  opacity: 1;
}
</style>
