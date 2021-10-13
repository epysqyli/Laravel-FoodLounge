<template>
  <footer>
    <div class="container">
      <div class="row pt-2">
        <!-- lato sx -->
        <div class="col-6 text-center">
          <h2>
            <a href="https://www.boolean.careers"
              ><img
                style="height: 25px"
                src="https://www.boolean.careers/images/misc/logo-small.png"
                alt=""
            /></a>
            Deliveboo
          </h2>
          <p class="text-light">
            Progetto conclusivo post formazione
            <span
              ><a class="text-light" href="https://www.boolean.careers"
                >Boolean Carrers 2021</a
              ></span
            >
          </p>
        </div>

        <!-- lato dx -->
        <div class="col-6 p-2">
          <div class="text-center">
            <h2>Powered by</h2>
          </div>
          <div class="d-flex justify-content-around">
            <ul style="list-style-type: none">
              <li>
                <a
                  class="text-light 2rem"
                  href="https://www.linkedin.com/in/elvis-pysqyli-542986105/"
                  ><i class="bi bi-linkedin mr-2"></i>Elvis</a
                >
              </li>
              <li>
                <a
                  class="text-light 2rem"
                  href="https://www.linkedin.com/in/edoardo-ragazzi-72200a204/"
                  ><i class="bi bi-linkedin mr-2"></i>Edoardo</a
                >
              </li>
              <li>
                <a
                  class="text-light 2rem"
                  href="https://www.linkedin.com/in/valentina-viky-volpe/"
                  ><i class="bi bi-linkedin mr-2"></i>Valentina</a
                >
              </li>
              <li>
                <a
                  class="text-light 2rem"
                  href="https://www.linkedin.com/in/flavio-origgi"
                  ><i class="bi bi-linkedin mr-2"></i>Flavio</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- lato inferiore -->
      <div
        class="
          col-12
          d-flex
          justify-content-center
          border-top
          text-white
          border-dark
        "
      >
        <p>Copyright Deliveboo &copy;2021</p>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<style lang="scss" scoped>
footer {
  background-color: rgb(238, 108, 94);
  // position: fixed;
  height: 150px;
  bottom: 0;
  left: 0;
  width: 100%;

  // .column-boolean{
  //   img{
  //     max-width: 20px;
  //   }
  // }
  ul li {
    display: inline-block;
    a {
      margin: 10px;
    }
  }
}
</style> 