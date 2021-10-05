<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>dahshdaudahudashudais</h2>
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
        this.getCategory();
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