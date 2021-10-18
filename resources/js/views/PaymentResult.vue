<template>
  <div class="container">
    <h1 class="text-center my-5 py-2">Ordine confermato!</h1>
    <div class="row">
      <div class="col-10 offset-1">
        <div class="text-center h3">
          {{ orderDetails.customer_name }}, ecco il riepilogo del tuo ordine.
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-10 offset-1 col-md-4 offset-md-4 mt-5">
        <div class="table">
          <tr>
            <th>Totale Ordine</th>
            <td>{{ orderDetails.amount }} &euro;</td>
          </tr>
          <tr>
            <th>Indirizzo di Spedizione</th>
            <td>{{ orderDetails.customer_address }}</td>
          </tr>
          <tr>
            <th>Prodotti ordinati</th>
            <td>
              <ul>
                <li v-for="item in orderedItems" :key="item.id">
                  {{ item.name }}
                </li>
              </ul>
            </td>
          </tr>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-10 offset-1 mt-3">
        <p class="text-center">
          Controlla {{ orderDetails.customer_email }} per ulteriori informazioni
        </p>
      </div>
    </div>
    <router-link :to="{ name: 'home' }" style="text-decoration: none"
      ><div
        class="text-center btn btn-outline-primary w-75 my-5 d-block mx-auto"
      >
        Esplora altri ristoranti!
      </div></router-link
    >
  </div>
</template>

<script>
export default {
  name: "PaymentResult",
  data() {
    return {
      orderedItems: [],
      orderDetails: null,
    };
  },

  methods: {
    buildCart() {
      Object.keys(localStorage).forEach((key) => {
        if (key !== "customer_email") {
          this.orderedItems.push(JSON.parse(localStorage.getItem(key)));
        }
      });
    },

    clearStorage() {
      localStorage.clear();
    },

    getOrder() {
      axios
        .get(
          `http://localhost:8000/api/orders/${localStorage.getItem(
            "customer_email"
          )}`
        )
        .then((resp) => (this.orderDetails = resp.data))
        .catch((error) => console.log(error));
    },
  },

  mounted() {
    this.buildCart();
    this.getOrder();
    this.clearStorage();
  },
};
</script>

<style lang="scss" scoped>
</style>