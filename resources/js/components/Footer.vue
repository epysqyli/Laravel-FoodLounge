<template>
  <footer>
    <div class="container pt-3">
      <div class="row pt-2">
        <!-- lato sx -->
        <div class="col-12 col-md-6 text-center">
          <h5>
            <a href="https://www.boolean.careers"
              ><img
                style="height: 25px"
                src="https://www.boolean.careers/images/misc/logo-small.png"
                alt=""
            /></a>
            Deliveboo
          </h5>
          <p class="text-light">
            Progetto conclusivo post formazione
            <span
              ><a class="text-light" href="https://www.boolean.careers"
                >Boolean Careers 2021</a
              ></span
            >
          </p>
          <a
            href="http://localhost:8000/api/user"
            class="d-block py-2 ml-2 align-self-right admin"
            >Accesso Ristoratori</a
          >
        </div>

        <!-- lato dx -->
        <div class="col-12 col-md-6 p-2">
          <div class="text-center">
            <h5>Powered by</h5>
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
        <p class="py-4">Copyright Deliveboo &copy; 2021</p>
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
  background: linear-gradient(
    87deg,
    rgba(231, 111, 81, 1) 0%,
    rgba(233, 196, 106, 1) 100%
  );

  ul li {
    display: inline-block;
    a {
      margin: 10px;
    }
  }

  .admin {
    color: #3a6b7e;
    font-weight: bold;
    text-decoration: none;

    &:hover {
      color: white;
    }
  }
}
</style> 