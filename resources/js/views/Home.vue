<template>
  <div class="container mx-auto">
    <div class="row">
      <div class="col-12 text-center p-5">
        <h2 class="text-center mx-auto">Bee Happy, Bee Healthy! Choose:</h2>
      </div>
    </div>

    <div class="row">
      <div
        class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-lg-3 my-2"
        v-for="category in categories"
        :key="category.id"
      >
        <CategoryCard
          :category="category"
          @toggleChoice="toggleChoice(category.slug)"
        />
      </div>
    </div>

    <!-- <div class="row">
      <div class="col-10 offset-1">
        <div
          class="d-block w-100 btn btn-outline-primary mx-auto mt-5"
          :class="userChoices.length != 0 ? visible : hidden"
          @click='startSearch'
        >
          Go
        </div>
      </div>
    </div> -->

    <div class="row">
      <div class="col-12 my-5">
        <Categories :userChoices="userChoices" ref="categories" />
      </div>
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
      visible: "visible",
      hidden: "hidden",
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
.btn {
  transition: all 300ms ease-out;
}

.visible {
  opacity: 1;
}

.hidden {
  opacity: 0;
  pointer-events: none;
}
</style>    
