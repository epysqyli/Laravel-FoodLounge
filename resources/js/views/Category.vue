<template>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center p-5">
          <h2 class="text-center mx-auto"></h2>
        </div>
      </div>

      <!-- start restaurants cards to loop -->
      <div class="row">
        <div class="col-xs-12 mx-auto">
          <div class="card mb-3" style="max-width: 800px">
            <div class="row g-0">
              <div class="col-md-4">
                <!-- <img src="..." class="img-fluid rounded-start" alt="..."> -->
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">
                    This is a wider card with supporting text below as a natural
                    lead-in to additional content. This content is a little bit
                    longer.
                  </p>
                  <p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end restaurants cards to loop -->
    </div>
  </main>
</template>

<script>
export default {
  name: "Category",
        data() {
            return {
                category: []
            }
        },
        mounted() {
            axios.get('/Api/categories/' + this.$route.params.slug)
                .then( response => {
                    this.category = response.data.results;
                    console.log(this.category)
                });
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
