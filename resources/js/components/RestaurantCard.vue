<template>
  <router-link
    :to="{ name: 'restaurants', params: { slug: restaurant.slug } }"
    class="card m-3"
    style="text-decoration: none; color: inherit"
  >
    <div class="row">
      <div class="col-md-4 image-container">
        <img
          :src="
            restaurant.profile_image[0] == 'h'
              ? restaurant.profile_image
              : `http://localhost:8000/storage/${restaurant.profile_image}`
          "
          class="card-img-top"
          :alt="restaurant.name"
        />
        <div class="category-name">{{ categoryName }}</div>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ restaurant.name }}</h5>
          <p>{{ restaurant.address }}</p>
          <p class="card-text">
            {{ this.limitParagraph(restaurant.description) }}
          </p>
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
      if (text.split(" ").length < 16) {
        return text;
      } else {
        return `${text.split(" ").slice(0, 15).join(" ")} ...`;
      }
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
  border-radius: 5px;
  background-color: #e9c46a;
  box-shadow: 3px 5px 3px -5px #264653;
  animation: myAnim 1s ease-in 1 normal forwards;
  transition: box-shadow 200ms ease-out;

  .image-container {
    overflow: hidden;
    height: 220px;
  }

  img {
    border-radius: 5px;
    object-fit: cover;
    height: 220px;
    transition: all 300ms ease-out;
  }

  .category-name {
    position: absolute;
    top: 2%;
    left: 10%;
    color: white;
    padding: 5px 10px;
    border-radius: 10px;
    border: 2px solid white;
    background-color: #264653;
    font-size: 0.85rem;
  }

  &:hover {
    box-shadow: 6px 8px 5px -6px #264653;
    background-color: #f4a666;
    cursor: pointer;

    img {
      height: 230px;
    }
  }

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
</style>