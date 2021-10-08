<template>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 g-2" v-for="restaurant in restaurants" :key="restaurant.id">
          <div class="car">
          

            <div class="flip-box">
            
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <img v-bind:src="restaurant.profile_image" class="car-img-top" alt="...">
                    <div class="text-block">
                      <h4>Nature</h4>
                      <p>What a beautiful sunrise</p>
                    </div>
                </div>
                <div class="flip-box-back">
                  <p>{{restaurant.address}}</p>
                            
                 
                  
                </div>
              </div>
            
              <!-- <div class="card-body">
                <h5 class="card-title">{{restaurant.name}}</h5>
                <p>{{restaurant.address}}</p>
                <p class="card-text">{{restaurant.description}}</p>
              </div> -->
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
.text-block {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}
.car {
  height:300px;
  max-width:200px;
  border: none;
  position:relative;
 
  img{
    height: 100%;
    width: 100%;
    
  }
}

.car:hover {
  box-shadow: 0 0 20px #ffd60a;
}

 /* The flip box container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-box {
  width:200px;
  height: 300px;
  background-color:white;    
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.5s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;  
  backface-visibility:hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-box-front {
  background-color: red;
  color: black;
}

/* Style the back side */
.flip-box-back {
  background-color:grey ;
  color: rgb(5, 5, 5);
  transform: rotateY(180deg);
} 
</style>
