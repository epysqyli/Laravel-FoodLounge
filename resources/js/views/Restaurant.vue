<template>
  <div class="container-fluid restaurant">
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
          <div class="text-uppercase">{{ restaurant.address }}</div>
        </div>
      </div>
    </div>

    <div class="row mt-5 mb-5 g-5 justify-content-center">
      <div class="col-12 col-md-8 col-xxl-6">
        <div class="row">
          <div class="col mb-2" v-for="(food, index) in foods" :key="index">
            <div
              class="product-card"
              @click="addProduct(food)"
              :class="
                cart.items.find((el) => food.id === el.id)
                  ? 'notClickable'
                  : 'clickable'
              "
            >
              <div class="badge">{{ food.type.name }}</div>
              <div class="product-tumb">
                <img
                  class="rounded"
                  :src="
                    food.image[0] == 'h'
                      ? food.image
                      : `http://localhost:8000/storage/${food.image}`
                  "
                  :alt="food.name"
                />
              </div>
              <div class="product-details">
                <span class="product-catagory">{{ food.name }}</span>
                <h4>{{ food.name }}</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Vero, possimus nostrum!
                </p>
                <div class="product-bottom-details"></div>
              </div>
              <div class="product-price">
                <div class="mb-5">
                  <i class="bi bi-cash"></i> /
                  {{ food.price }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-12 col-md-3 col-xxl-6">
        <div class="card cardCart mb-3 shadow-lg" style="max-width: 18rem">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h3 class="pt-2">Carrello</h3>
            <font-awesome-icon icon="shopping-cart" size='2x' />
          </div>
          <div class="card-body">
            <div class="card-text">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nome Piatto</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Quantità</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="item in cart.items" :key="item.id">
                    <td>{{ item.name }}</td>
                    <td>{{ item.price }}</td>
                    <td class="d-flex justify-content-around">
                      <div @click="decrementQty(item)">
                        <font-awesome-icon
                          icon="minus-circle"
                          class="cart-qty-button"
                        />
                      </div>
                      <div>
                        {{ item.quantity }}
                      </div>
                      <div @click="incrementQty(item)">
                        <font-awesome-icon
                          icon="plus-circle"
                          class="cart-qty-button"
                        />
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <button
            class="btn"
            data-bs-placement="top"
            title="Sei Sicuro ?"
            data-bs-toggle="tooltip"
          >
            <router-link
              class="text-center linkText"
              @click="showMsgBoxOne"
              style="
                text-decoration: none;
                color: #356980;
                width: 100%;
                display: block;
              "
              :to="{ name: 'checkout' }"
            >
              <a>CHECKOUT</a>
            </router-link>
          </button>
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
body {
  font-family: "Roboto", sans-serif;
}

a {
  text-decoration: none;
}

.cover_image {
  box-shadow: 1px 2px 6px 0 #264653;
}

.container-fluid {
  .cover_image:hover .image {
    opacity: 0.8;
  }

  .cover_image:hover .middle,
  .cover_image:hover .address {
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
    .address {
      transition: 0.5s ease;
      opacity: 0;
      position: absolute;
      text-align: center;
      bottom: 5px;
      left: 10px;
      color: black;
      margin-left: 40px;
    }
  }
}

.notClickable {
  opacity: 0.25;
  pointer-events: none;
}

.clickable {
  opacity: 1;
}

.cardCart {
  position: relative;
  color: #356980;
  min-height: 100%;
  min-width: 100%;

  background-color: #e9c46b;

  .btn {
    background-color: #e8a05f;
    box-shadow: 2px 2px 7px #dfdfdf;
    color: black;
    padding: 2px;

    a {
      color: white;
    }

    &:hover {
      background-color: #356980;

      a {
        color: white;
      }
    }
  }

  .card-header {
    height: 3em;
    background-color: #e87553;
    color: white;
  }
}

.cart-name {
  font-size: 1.25rem;
}

// SINGLE FOOD CARD

.product-card {
  width: 250px;
  height: 350px;
  position: relative;
  box-shadow: 0 2px 7px #dfdfdf;

  background: #fafafa;
  cursor: pointer;
  &:hover {
    box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22);

    .product-tumb img {
      height: 160px;

      width: 110%;
    }
  }
}

.badge {
  position: absolute;
  left: 0;
  top: 20px;
  text-transform: uppercase;
  font-size: 13px;
  font-weight: 700;
  background: red;
  color: #fff;
  padding: 3px 10px;
}

.product-tumb {
  height: 150px;

  background: #f0f0f0;
  overflow: hidden;
}

.product-tumb img {
  object-fit: cover;
  width: 100%;
  height: 100%;
  transition: all 150ms ease-out;
}

.product-details {
  padding: 5px;
}

.product-catagory {
  display: block;
  font-size: 12px;
  font-weight: 700;
  text-transform: uppercase;
  color: #ccc;
  margin-bottom: 18px;
}

.product-details h4 a {
  font-weight: 500;
  display: block;
  margin-bottom: 18px;
  text-transform: uppercase;
  color: #363636;
  text-decoration: none;
  transition: 0.3s;
}

.product-details h4 a:hover {
  color: #fbb72c;
}

.product-details p {
  font-size: 15px;
  line-height: 22px;
  margin-bottom: 18px;
  color: #999;
}

.product-bottom-details {
  overflow: hidden;
  border-top: 1px solid #eee;
  padding-top: 20px;
}

.product-bottom-details div {
  float: left;
  width: 50%;
}

.product-price {
  position: absolute;

  bottom: -50px;
  left: 20px;
  font-size: 18px;
  color: #fbb72c;
  font-weight: 600;
}

.product-price small {
  font-size: 80%;
  font-weight: 400;
  text-decoration: line-through;
  display: inline-block;
  margin-right: 5px;
}

.product-links {
  text-align: right;
}

.product-links a {
  display: inline-block;
  margin-left: 5px;
  color: #e1e1e1;
  transition: 0.3s;
  font-size: 17px;
}

.product-links a:hover {
  color: #fbb72c;
}
</style>
