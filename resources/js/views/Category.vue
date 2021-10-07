<template>
    <main>
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <p>Categoria</p>
                </div>
            </div>

        
            <div class="row">
                <div class="col-xs-12 mx-auto">
                    <div class="card mb-3" style="max-width: 800px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <!-- <img src="..." class="img-fluid rounded-start" alt="..."> -->
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- <div class="row">
                <div class="col-6" v-for="post in posts" :key="post.id">
                    <div class="card mb-3">                   
                        <div class="card-body">
                            <h5 class="card-title">{{post.title}}</h5>
                            <p class="card-text">{{post.content}}</p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </main>
</template>

<script>
export default {
    name: "Category",
}
</script>

<style lang="scss" scoped>

</style>