<template>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center p-5">
          <img  src="/image/Scooter.png" alt="">
          <h2 class="text-center mx-auto pt-2">Bee Happy, Bee Healthy! Choose:</h2>
        </div>

        <div class="row mb-5">
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

        <Categories
          :userChoices="userChoices"
          ref="categories"
          :categories="categories"
        />
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
.content{
  background-color: #EFFBF9;
  .container {
    min-height: 45vh;
    
    img{
      width: 10%;
    }
  }
}

</style>    
