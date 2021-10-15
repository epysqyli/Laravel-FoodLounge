<template>
  <router-link
    :to="{ name: 'restaurants', params: { slug: restaurant.slug } }"
    class="card m-3"
    style="text-decoration: none; color: inherit"
  >
    <div class="row">
      <div class="col-md-4">
        <img
          :src="
            restaurant.profile_image[0] == 'h'
              ? restaurant.profile_image
              : `http://localhost:8000/storage/${restaurant.profile_image}`
          "
          class="card-img-top"
          :alt="restaurant.name"
        />
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ restaurant.name }}</h5>
          <p>{{ restaurant.address }}</p>
          <p class="card-text">
            {{ this.limitParagraph(restaurant.description) }}
          </p>
          <p><strong>Category:</strong> {{ categoryName }}</p>
        </div>
      </div>
    </div>
  </router-link>
</template>

<script>
export default {
  name: "RestaurantCard",

  props: {
    restaurant: Object,
    categoryName: String,
  },

  methods: {
    limitParagraph(text) {
      return `${text.split(" ").slice(0, 10).join(" ")} ...`;
    },
  },
};
</script>

<style lang="scss" scoped>
h5,
p {
  color: #193540;
}

.card {
  border: none;
  border-radius: 20px;
  background-color: #E9C46A;
  animation: myAnim 2s ease 0s 1 normal forwards;
  img {
    border-radius: 20px;
    object-fit: cover;
    height: 220px;
  }
  &:hover {
    box-shadow: 3px 6px 8px -6px #264653;
    // background-color: hsl(10%, 10%, 80%);
    background-color: #F4A666;
    cursor: pointer;
    @keyframes myAnim {
    0% {
      animation-timing-function: ease-in;
      opacity: 1;
      transform: translateY(-45px);
    }

    24% {
      opacity: 1;
    }

    40% {
      animation-timing-function: ease-in;
      transform: translateY(-24px);
    }

    65% {
      animation-timing-function: ease-in;
      transform: translateY(-12px);
    }

    82% {
      animation-timing-function: ease-in;
      transform: translateY(-6px);
    }

    93% {
      animation-timing-function: ease-in;
      transform: translateY(-4px);
    }

    25%,
    55%,
    75%,
    87% {
      animation-timing-function: ease-out;
      transform: translateY(0px);
    }

    100% {
      animation-timing-function: ease-out;
      opacity: 1;
      transform: translateY(0px);
    }
  }
  }
}
</style>