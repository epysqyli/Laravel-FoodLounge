<template>
  <div class="container">
        <div class="row">
            <div class="col-12">
                <p>edo</p>

                
            </div>
             <div class="col-sm-6" v-for="category in categories" :key="category.id">
                    <div class="card mt-3">
                        <div class="card-body">
                        <h5 class="card-title">{{category.name}}</h5>
                      
                        </div>
            </div>
          
        </div>
        </div>
  </div>
</template>

<script>
export default {
    name: "Home",
    data(){
        return {
            api: 'http://127.0.0.1:8000/api/categories',    
            categories: []
        }
    },
    created(){
        this.getCategory();
        
    },
    methods: {
        getCategory(){
            axios.get(this.api)
        
            .then(resp =>{
        
                console.log(resp)
                //console.log(resp.data.results);
                this.categories = resp.data.categories;
                // console.log(resp);
            })
           
        }
    }
}
</script>

<style lang="scss" scoped>

</style>