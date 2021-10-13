<template>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card text-center border">
            <div class="card-header">
              {{ restaurant.name }}
            </div>
            <div class="card-body">
              <p class="card-text">{{ restaurant.description }}</p>
            </div>
          </div>
        </div>
      </div>
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
    <tbody >
      <tr v-for="(food,index) in foods" :key="index">
        <th scope="row">1</th>
          <td> 
            <img class="card-img" :src="food.image[0] == 'h'? food.image : `http://localhost:8000/storage/${food.image}`" :alt="food.name"/>
          </td>
          <td>{{food.price}}</td>
          <td>{{food.name}}</td>
          <td>
            <div class=" btn btn-success mx-auto w-2 mt-2" @click="addToCart(food)">
              <h3>Add To Cart</h3>
            </div>
          </td>
      </tr>
    </tbody>
  </table>
      <div class="row mt-4">
        <div>
          <b-sidebar id="sidebar-right" title="Cart" right shadow>
            <div class=" overflow-hidden">
              <div class=" mx-1 ">
                <div class="container mx-auto border rounded" v-if="cart.items.length != 0">
                  <h1><i class="bi bi-cart"></i></h1>
                    <div class="d-flex justify-content-between align-items-center my-1"        v-for="item in cart.items" :key="item.id">
                      <div>
                        {{ item.name }}
                      </div>
                      <div>
                        {{ item.price }} &euro;
                      </div>
                      <div
                        class="btn btn-outline-danger"
                        @click="removeFromCart(item)"
                      >
                        Remove
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 mb-1">
                      <div>Totale: {{ cart.total }} &euro;</div>
                        <router-link style="text-decoration: none; color: inherit; width: 50%; display: block" :to="{ name: 'checkout',  params: { cart: cart } }">
                          <a class="navbar-brand">
                            CheckOut
                          </a>
                        </router-link>
                            
                      </div>
                  </div>
                </div>
              </div>
            </b-sidebar>
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
      return sum.toFixed(2);
    },
  },
};
</script>

<style lang="scss" scoped>
.content{
  background-color: #4FB3E4;
  // background-color: red;
  padding-top: 100px;
  padding-bottom: 150px;
}
h2 {
  font-size: 40px;
  color: #ffd60a;
}
.card {
  border: none;
  
}

.card-img{
    height: 200px;
    object-fit: cover;
}

</style>
