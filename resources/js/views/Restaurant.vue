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
    <div class="row mt-5">
      <div class="col-8">
        <div class="row g-5 justify-content-center">
          <div class="p-2" v-for="(food, index) in foods" :key="index">
            <div class="cardFood">
              <div class="card-body">
                 <div
                  class="btn-group rounded"
                  role="group"
                  aria-label="Basic outlined example"
                >
                  <button
                    type="button"
                    class="btn btn-outline-primary"
                    @click="addProduct(food)"
                  >+
                  </button>

                  <button
                    type="button"
                    class="btn btn-outline-primary"
                    @click="removeProduct(food)"
                  >-
                  </button>
                </div>
                <img
                  class="rounded"
                  :src="
                    food.image[0] == 'h'
                      ? food.image
                      : `http://localhost:8000/storage/${food.image}`
                  "
                  :alt="food.name"
                />

                <p class="card-text">
                  {{ food.name }}
                </p>

                <div>
                  <i class="bi bi-cash"></i> / Price:
                  {{ food.price }}
                </div>
               
              </div>
              <!-- <div
                            class="
                                btn btn-outline-danger
                                font-weight-bold
                                px-2
                                mr-2
                            "
                            @click="removeProduct(food)"
                            :class="
                                cart.items.find((el) => food.id === el.id)
                                    ? 'clickable'
                                    : 'notClickable'
                            "
                        >
                            Remove
                        </div> -->
            </div>
          </div>
        </div>
      </div>
    
    <div class="col-4">
      
      <div class="card cardCart border-success mb-3" style="max-width: 18rem">
        <div class="card-header">
          <i class="bi bi-cart"> Cart </i>
        </div>
        <div
          class="card-body text-success"
          v-for="item in cart.items"
          :key="item.id"
        >
          <div class="card-text">
            <div class="row">
              <div class="col-8">{{ item.name }} / {{ item.price }} &euro;</div>
              <div class="col-4">
                <div
                  class="btn-group"
                  role="group"
                  aria-label="Basic outlined example"
                >
                  <button
                    type="button"
                    class="btn-outline-primary"
                    @click="decrementQty(item)"
                  >
                    -
                  </button>
                  <button type="button" class="btn-outline-primary">
                    {{ item.quantity }}
                  </button>
                  <button
                    type="button"
                    class="btn-outline-primary"
                    @click="incrementQty(item)"
                  >
                    +
                  </button>
                </div>
              </div>
            </div>
           
          </div>
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
          myToggle: false,
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
            if (!localStorage.length) {
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
            this.cart.items.forEach(
                (item) => (sum += item.price * item.quantity)
            );
            return sum.toFixed(2);
        },
    },
};
</script>

<style lang="scss" scoped>
.restaurant {
  min-height: 700px;
}

.cardFood {
  position: relative;
  text-align: center;
  margin: 10px;
  border-radius: 25px;
  width: 250px;
  line-height: 35px;
  max-height: 300px;
  box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
  .card-date {
    margin-top: 20px;
  }
  .btn-group{
    justify-content: center;
    position: absolute;
    left:25px;
    top: -30px;
    height: 40px;
    border-radius: 25px;
    vertical-align: middle;
    
        background-color: #e56768;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        border: 0px;
        &:hover {
            background-color: #e9d758;
  }
  }
  
  img {
    height: 40%;
    width: 80%;
    margin: auto;
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

.cardCart {
  min-height: 100%;
  min-width: 100%;
  box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22);
}
</style>
