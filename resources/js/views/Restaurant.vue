<template>
    <div class="container">
        <div class="card text-center">
                    <div class="card-header">
                        {{restaurant.name}}
                    </div>
                    <div class="card-body"><p class="card-text">{{restaurant.description}}</p>
                    </div>
                    </div>
    </div>
    
</template>
<script>
export default {
  name: "Category",
        data() {
            return {
              apiUrl: "http://127.0.0.1:8000/api/restaurants/",
                restaurant: []
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
                     this.restaurant = response.data;
                     console.log(this.restaurant)
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
