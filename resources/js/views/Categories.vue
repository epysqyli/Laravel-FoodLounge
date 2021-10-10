<template>
  
   <main>
        <div class="container ">

            <div class="row">
              <div class="carousel">
             
                 <div class="carouselslide">
                  
                    <hooper :itemsToShow="3" style="height: 900px">
                               <slide class="col-3 mx-auto" v-for="restaurant in restaurants" :key="restaurant.id">
                              <router-link :to="{ name: 'restaurants', params: { slug: restaurant.slug } }" class="car m-5"
                                style="max-width: 900px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                      <div class="car">
                          
                                          <div class="flip-box">

                                              <div class="flip-box-inner">
                                                        <div class="flip-box-front">
                                                            <img :src="restaurant.profile_image[0] == 'h' ? restaurant.profile_image : `http://localhost:8000/storage/${restaurant.profile_image}`"
                                                                class="card-img-top" alt="restaurant.name">
                                                              
                                                                <div class="text-block">
                                                                    <h4>{{restaurant.name}}</h4>
                                                                    <p>What a beautiful sunrise</p>
                                                                </div>
                                                        </div>
                                                    
                                                        
                                                        <div class="flip-box-back">
                                                            <p>{{restaurant.address}}</p>

                                                        </div>
                                              </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                              </router-link>
                      </slide>
                      
                      </hooper>
                    </div>
    
                
               </div>
            </div>
         </div>
      

      
  </main>
</template>

<script>
import { Hooper, Slide } from 'hooper';
import 'hooper/dist/hooper.css';
export default {
  name: "Category",
  components:{
    Hooper,
    Slide
  },
  data() {
    return {
      apiUrl: "http://127.0.0.1:8000/api/categories/",
      userChoices: [],
      restaurants: [],
    };
  },

  mounted() {
    this.userChoices = this.$route.params.names.split('&');
    this.fillRestaurants();
  },

  methods: {
    getRestaurant(choice) {
      axios
        .get(`${this.apiUrl}${choice}`)
        .then((response) => {
          response.data.forEach((item) => this.restaurants.push(item));
        })
        .catch((error) => console.log(error));
    },

    fillRestaurants() {
      this.userChoices.forEach((choice) => this.getRestaurant(choice));
    },
  },
};
</script>
<style lang="scss" scoped>
h2 {
  font-size: 40px;
  color: #ffd60a;
}
.text-block {
  position: absolute;
  bottom: 20px;
  width: 100%;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5);
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}
.car {
  height:300px;
  width:200px;
  border: none;
  position:relative;
  border-radius: 20px;
 
  img{
    height: 100%;
    width: 100%;
    border-radius: 20px;
    
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
  border-radius: 20px;
}

/* This container is needed to position the front and back side */
.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.5s;
  transform-style: preserve-3d;
  border-radius: 20px;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
  border-radius: 20px;
}

/* Position the front and back side */
.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;  
  backface-visibility:hidden;
  border-radius: 20px;
}

/* Style the front side (fallback if image is missing) */
.flip-box-front {
  background-color: red;
  color: black;
  border-radius: 20px;
}

/* Style the back side */
.flip-box-back {
  background-color:grey ;
  color: rgb(5, 5, 5);
  transform: rotateY(180deg);
  border-radius: 20px;
} 

.carousel {
  height: 100%;
  width: 100%;
  background-size: 100% 100%;
  background-color: #f7f8fa;
  
  font-family: "Fredoka One";
  font-weight: 600;
  font-size: 30px;
  color: #3d404f;
  .carouselslide {
    padding: 15 px;
    height: 80%;
    width: 80%;
    margin: auto;
  
    .card-text {
      font-size: 10px;
    }
  }
}
  
</style>
