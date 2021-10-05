<template>
  <div class="container">
        <div class="row">
            <div class="col-12">
                <p>shuhsaushuash</p>
            </div>
        </div>
  </div>
</template>

<script>
export default {
    name: "Home",
    data(){
        return {
            api: 'localhost:8000/api/categories',
            categories: []
        }
    },
    created(){
        this.Category();
    },
    methods: {
        getCategory(){
            axios.get(this.api)
            .then(resp =>{
                //console.log(resp.data.results);
                this.posts = resp.category;
            })
        }
    }
}
</script>

<style lang="scss" scoped>

</style>