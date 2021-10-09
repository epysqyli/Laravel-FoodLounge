<template>
  <div class="container mx-auto">
    <div class="content">
      <div class="row">
        <div class="col-12 text-center p-5">
          <h2 class="text-center mx-auto">
            Scegli il cibo che vuoi, te lo portiamo a casa noi!
          </h2>
        </div>
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
          @addChoice="toggleChoice(category.slug)"
        />
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <router-link
          style="text-decoration: none; color: inherit"
          :to="{ name: 'category', params: { userChoices } }"
        >
          <div class="d-block w-50 btn btn-outline-primary mx-auto mt-5">
            Go
          </div>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
import CategoryCard from "../components/CategoryCard.vue";

export default {
  name: "Home",
  components: {
    CategoryCard,
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
        })
      });
    },

    toggleChoice(choice) {
      if (!this.userChoices.includes(choice)) {
        this.userChoices.push(choice);
      } else {
        this.userChoices.splice(this.userChoices.indexOf(choice), 1);
      }
    },
  },
};
</script>

<style lang="scss" scoped>
</style>    
