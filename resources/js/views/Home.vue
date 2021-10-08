<template>
  <div class="container-fluid">
    <div class="content">
      <div class="row">
        <div class="col-12 text-center p-5">
          <h2 class="text-center mx-auto">
            Scegli il cibo che vuoi, te lo portiamo a casa noi!
          </h2>
        </div>
      </div>

      <div class="row ">
        <div
          class="col-6 border"
          v-for="category in categories"
          :key="category.id"
        >
          <CategoryCardTest :category="category" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import CategoryCardTest from "../components/CategoryCardTest.vue";

export default {
  name: "Home",
  components: {
    CategoryCardTest,
  },

  data() {
    return {
      apiUrl: "http://127.0.0.1:8000/api/categories",
      categories: [],
    };
  },

  created() {
    this.getCategories();
  },

  methods: {
    getCategories() {
      axios.get(this.apiUrl).then((resp) => {
        this.categories = resp.data.categories;
      });
    },
  },
};
</script>

<style lang="scss" scoped>
</style>    
