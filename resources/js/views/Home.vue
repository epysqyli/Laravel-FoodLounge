<template>
  <!-- start content -->
  <div class="content">
    <div class="container mx-auto">
      <div class="row">
        <div class="col-12 text-center p-5">
          <h2 class="text-center mx-auto">
            Bee Happy, Bee Healthy! Choose: 
          </h2>
        </div>
      </div>

      <div class="row">
        <div class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 col-lg-3 my-2" v-for="category in categories" :key="category.id">
          <CategoryCard :category="category" @toggleChoice="toggleChoice(category.slug)"/>
        </div>
      </div>

      <div class="row">
        <div class="col-12 mt-4">
          <router-link style="text-decoration: none; color: inherit" :to="{ name: 'categories', params: { names: queryChoices } }">
            <div class="d-block w-50 btn btn-outline-primary mx-auto mt-5 bg-light" v-if="userChoices.length != 0">
              <!-- Go -->
              <span>Go</span>
            </div>
          </router-link>
        </div>
      </div>
    </div>

    <router-view></router-view>
  
  </div>
  <!-- end content -->
</template>

<script>
import CategoryCard from "../pages/CategoryCard.vue";

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
      queryChoices: {},
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
      this.buildQuery();
    },

    buildQuery() {
      this.queryChoices = this.userChoices.join("&");
    },
  },
};
</script>

<style lang="scss" scoped>
.content{
  background-color: #4FB3E4;
  height: 100%;
  overflow: hidden;
  padding-bottom: 150px;
  .btn{
    &:hover{
      box-shadow: 5px 10px 8px -6px black;
      background-color: hsl(10%, 10%, 80%);
      cursor: pointer;
    }
    &:hover span{
      color: #4FB3E4;
    }
  }
}
</style>    
