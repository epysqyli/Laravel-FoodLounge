<template>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center p-5">
          <h2 class="text-center mx-auto"></h2>
        </div>
      </div>

      <!-- start restaurants cards to loop -->
      <div class="row">
        <div class="col-xs-12 mx-auto">
          <div class="card mb-3" style="max-width: 800px">
            <div class="row g-0">
              <div class="col-md-4">
                <!-- <img src="..." class="img-fluid rounded-start" alt="..."> -->
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{ category.name }}</h5>
                  <p class="card-text">
                    This is a wider card with supporting text below as a natural
                    lead-in to additional content. This content is a little bit
                    longer.
                  </p>
                  <p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </p>
                </div>


                   <div class="col-sm-6" v-for="restaurant in restaurants" :key="restaurant.id">

                              <div class="card mt-3">

                                <div class="card-body">

                                  <h5 class="card-title">{{restaurant.name}}</h5>

              <!-- <p>{{restaurant.created_at}}</p>
              <p class="card-text">{{resta.content}}</p>
              <router-link :to="{ name: 'post-detail', params:{slug: post.slug}}" class="btn btn-primary">Details</router-link>
            </div> -->
          </div>
          
        </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end restaurants cards to loop -->
    </div>
  </main>
</template>

<script>
export default {
  name: "Category",
        data() {
            return {
              apiUrl: "http://127.0.0.1:8000/api/categories/",
                restaurants: []
            }
        },
        created(){
        this.getRestaurant();
         },
        methods:{
          getRestaurant() {
            
            axios.get(this.apiUrl + this.$route.params.slug)  

                .then( response => {
                  console.log(response);
                     this.restaurants = response.data;
                     console.log(this.restaurants)
                })
                .catch();
            }
        }
    }
</script>

<style lang="scss" scoped>
h2 {
  font-size: 40px;
  color: #ffd60a;
}

.card {
  border: none;
}

.card:hover {
  box-shadow: 0 0 20px #ffd60a;
}
</style>
