<template>
  <div class="container mx-auto my-3">
    <div class="row pt-3">
      <div class="col-8 border px-5 pt-3">
        <form
          class="col-10 mx-auto"
          method="post"
          action="http://localhost:8000/api/check-payment"
          id="payment-form"
        >
          <div class="form-group">
            <label for="customer_name">First Name</label>
            <input
              type="text"
              class="form-control"
              id="customer_name"
              name="customer_name"
              placeholder="Enter first name"
              required
            />
          </div>

          <div class="form-group">
            <label for="customer_surname">Customer Surname</label>
            <input
              type="text"
              class="form-control"
              id="customer_surname"
              name="customer_surname"
              placeholder="Enter surname"
              required
            />
          </div>

          <div class="form-group">
            <label for="customer_address">Delivery Address</label>
            <input
              type="text"
              class="form-control"
              id="customer_address"
              name="customer_address"
              placeholder="Enter delivery address"
              required
            />
          </div>

          <div class="form-group">
            <label for="customer_email">Email Address</label>
            <input
              type="email"
              class="form-control"
              id="customer_email"
              name="customer_email"
              placeholder="Enter email address"
              required
            />
          </div>

          <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input
              type="text"
              class="form-control"
              id="phone_number"
              name="phone_number"
              placeholder="Enter phone number"
              required
            />
          </div>

          <div class="form-group">
            <div id="dropin-container"></div>
          </div>

          <button
            type="submit"
            class="btn btn-primary w-50 mx-auto d-block my-2"
          >
            Pay!
          </button>

          <input type="hidden" id="nonce" name="payment_method_nonce" />
          <input
            type="hidden"
            id="user_id"
            name="user_id"
            :value="cart.items[0].user_id"
          />
          <input type="hidden" id="amount" name="amount" :value="cart.total" />

          <template v-for="item in cart.items">
            <input
              type="hidden"
              name="foods[]"
              :value="item.id"
              :key="item.id"
            />
            <input
              type="hidden"
              name="foods[]"
              :value="item.quantity"
              :key="item.id"
            />
          </template>
        </form>
      </div>

      <!-- Side cart -->
      <div class="col-4 border px-5 pt-3">
        <h4 class="text-center mb-3">Cart</h4>
        <div
          class="d-flex justify-content-between align-items-center my-2"
          v-for="item in cart.items"
          :key="item.id"
        >
          <span
            ><strong>{{ item.name }}</strong> (x{{ item.quantity }})</span
          >
          <span class="price">{{ item.price }} &euro;</span>
        </div>
        <hr />
        <p>
          Total
          <span
            ><b>{{ cart.total }} &euro;</b></span
          >
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "CheckoutCard",
  data() {
    return {
      cart: {
        items: [],
        total: null,
      },
    };
  },

  methods: {
    buildCart() {
      this.cart.items = [];
      Object.keys(localStorage).forEach((key) => {
        this.cart.items.push(JSON.parse(localStorage.getItem(key)));
      });
      let sum = null;
      this.cart.items.forEach((item) => (sum += item.price * item.quantity));
      this.cart.total = sum;
    },

    addBtreeScript() {
      let btreeScript = document.createElement("script");
      btreeScript.setAttribute(
        "src",
        "https://js.braintreegateway.com/web/dropin/1.31.2/js/dropin.min.js"
      );
      document.head.appendChild(btreeScript);
    },

    createBtreeInstance: async () => {
      const req = await fetch("http://localhost:8000/api/payment-token");
      const token = await req.json();

      // call braintree function
      const form = document.getElementById("payment-form");
      braintree.dropin
        .create({
          authorization: token.token,
          container: document.getElementById("dropin-container"),
        })
        .then((dropinInstance) => {
          form.addEventListener("submit", (e) => {
            e.preventDefault();

            dropinInstance
              .requestPaymentMethod()
              .then((payload) => {
                document.getElementById("nonce").value = payload.nonce;
                form.submit();
              })
              .catch((error) => {
                throw error;
              });
          });
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },

  mounted() {
    this.buildCart();
    this.addBtreeScript();
    this.createBtreeInstance();
  },
};
</script>

<style lang="scss" scoped>
</style>