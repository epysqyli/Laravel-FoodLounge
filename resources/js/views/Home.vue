<template>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center p-5">
        <div class="row">
          <div class="welcome col-8 offset-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
            <img
              class="d-block w-100 mx-auto"
              src="/image/Scooter.png"
              alt="delivery-scooter"
            />
          </div>
          <h2 class="text-center mx-auto mt-5">
            Non sai cosa mangiare? Scegli tra le nostre proposte!
          </h2>
        </div>
      </div>

      <div class="row mb-5 d-flex justify-content-center">
        <div
          class="col-8 offset-sm-0 col-sm-6 col-md-4 col-lg-3 my-2"
          v-for="category in categories"
          :key="category.id"
        >
          <CategoryCard
            :category="category"
            @toggleChoice="toggleChoice(category.slug)"
          />
        </div>
      </div>

      <Categories
        :userChoices="userChoices"
        ref="categories"
        :categories="categories"
      />
    </div>
  </div>
</template>

<script>
import CategoryCard from "../components/CategoryCard.vue";
import Categories from "../views/Categories.vue";

export default {
  name: "Home",
  components: {
    CategoryCard,
    Categories,
  },

  data() {
    return {
      apiUrl: "http://127.0.0.1:8000/api/categories",
      categories: [],
      userChoices: [],
    };
  },

  created() {
    this.getCategories();
  },

  methods: {
    getCategories() {
      axios.get(this.apiUrl).then((resp) => {
        this.categories = resp.data.categories.map((item) => {
          return { ...item, selected: false };
        });
      });
    },

    toggleChoice(choice) {
      if (!this.userChoices.includes(choice)) {
        this.userChoices.push(choice);
        this.categories.forEach((item) => {
          if (item.slug == choice) {
            item.selected = true;
          }
        });
      } else {
        this.userChoices.splice(this.userChoices.indexOf(choice), 1);
        this.categories.forEach((item) => {
          if (item.slug == choice) {
            item.selected = false;
          }
        });
      }
      this.startSearch();
    },

    startSearch: function () {
      this.$refs.categories.fillRestaurants();
    },
  },
};
</script>

<style lang="scss" scoped>
.welcome {
  animation: slide-in 750ms cubic-bezier(0.18, 0.89, 0.32, 1.28) 1 forwards;
}

@keyframes slide-in {
  0% {
    transform: translateX(-200%);
  }
  100% {
    transform: translateX(0%);
  }
}
</style>    
