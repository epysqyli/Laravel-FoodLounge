<template>
  <div class="category-card">
    <img :src="category.img" :alt="category.name" />
    <!-- <p class="category-name">{{ category.name }}</p> -->
  </div>
</template>

<script>
export default {
  props: {
    category: Object,
  },
};
</script>

<style lang="scss" scoped>
.category-card {
  border-radius: 20px;

  box-shadow: 3px 5px 5px -5px black;
  transition: box-shadow ease-in-out 200ms;

  img {
    width: 100%;
    // border-top-left-radius: 15px;
    // border-top-right-radius: 15px;
    border-radius: 20px;
    transition: filter ease-in-out 200ms;
  }

  .category-name {
    color: white;
    font-weight: 600;
    font-size: 1.5rem;
    text-align: center;
    background-color: hsl(209, 100%, 30%);
    border-radius: 20px;
    // border-bottom-left-radius: 15px;
    // border-bottom-right-radius: 15px;
    // transition: padding ease-in-out 200ms;
  }

  &:hover {
    box-shadow: 6px 10px 8px -5px black;
    cursor: pointer;

    img {
      filter: contrast(110%);
      filter: saturate(175%);
    }

    .category-name {
      color: #ffc300;
    }

    // .category-name {
    //   padding-top: 1vh;
    // }
  }
}
</style>
