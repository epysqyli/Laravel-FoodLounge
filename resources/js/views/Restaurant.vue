<template>
    <div class="container">
        <div class="content">
          <!-- start motto -->
          <div class="row">
              <div class="col-12 text-center p-5">
                  <h2 class="text-center mx-auto">Scegli il cibo che vuoi, te lo portiamo a casa noi!</h2>
              </div>
          </div>
          <!-- end motto -->

          <!-- start cards -->
          <div class="row d-flex justify-content-center">
              <div class="col-xs-12 col-md-6 col-lg-4" v-for="category in categories" :key="category.id">
                  <div class="card mb-4 mx-auto" style="width: 22rem;">
                      <img class="card-img-top" :src="category.img" :alt="category.name">
                      <div class="card-body text-center">
                          <h5 class="card-title">{{category.name}}</h5>
                      </div>
                  </div>
              </div>
          </div>
          <!-- end cards --> 

        </div>
    </div>
</template>

<script>
export default {

    name: "Home",
    data(){
        return{
            apiUrl: 'http://127.0.0.1:8000/api/categories',
            categories: []
        }
    },
    created(){
        this.getCategory()
    },
    methods: {
        getCategory(){

            axios.get(this.apiUrl)
            .then(resp =>{
                this.categories= resp.data.categories;
            })
        }
    }
}
</script>

<style lang="scss" scoped>

h2{
    font-size: 40px;
    color: #ffd60a;
}

.card{
    border: none;
    background-color: transparent;
}

.card img{
    border-top-left-radius: 16px;
    border-top-right-radius: 16px;
}

.card-body{
    color: #ffd60a;
}

.card:hover{
    border: 3px solid #ffc300;
}

.card:hover img{
    filter: opacity(80%);
}

</style>    
