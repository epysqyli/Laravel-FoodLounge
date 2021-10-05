<template>
    <div class="container">

        <div class="content">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="text-center">Scegli quello che vuoi: te lo portiamo a casa noi</h2>
                </div>
            </div>

            <!-- start card -->
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-4" v-for="category in categories" :key="category.id">
                    <div class="card mb-3 mx-auto border-white" style="width: 18rem;">
                        <img class="card-img-top" :src="category.img" :alt="category.name">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{category.name}}</h5>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->  
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
                this.categories = resp.data.categories;
                //console.log(resp);
            })
        }
    }
}
</script>

<style lang="scss" scoped>

</style>