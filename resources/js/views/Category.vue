<template>
  <main>
    <div class="container">
      <div class="row row-cols-8 row-cols-md-2 g-4 ">
           <div class="col" v-for="restaurant in restaurants" :key="restaurant.id">
               <div class="card">
                  <img v-bind:src="restaurant.profile_image" class="card-img-top" alt="...">
                       <div class="card-body">
                          <h5 class="card-title">{{restaurant.name}}</h5>
                          <p>{{restaurant.address}}</p>
                             <p class="card-text">{{restaurant.description}}</p>
                        </div>
                 </div>
             </div>
 
      </div>  
       <!-- <div class="row">
        <div class="col-sm-6" v-for="restaurant in restaurants" :key="restaurant.id">
          <div class="card mt-3">
            <div class="card-body">
              <h5 class="card-title">{{restaurant.name}}</h5>
              <p>{{restaurant.address}}</p>
              <p class="card-text">{{restaurant.description}}</p>
               <router-link :to="{ name: 'post-detail', params:{slug: post.slug}}" class="btn btn-primary">Details</router-link> 
            </div>
          </div>
          
        </div>  -->
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
