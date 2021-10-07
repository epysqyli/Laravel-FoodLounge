<template>
  <div class="category-card">
    <img src="http://picsum.photos/300/300" alt="" />
    <p class="category-name">Category name</p>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
.category-card {
  margin: 2vh 3vw;
  width: 300px;
  border-radius: 15px;
  box-shadow: 3px 5px 5px -5px black;
  transition: box-shadow ease-in-out 200ms;

  img {
    width: 100%;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
  }

  .category-name {
    padding: 0;
    margin: 0;
    color: white;
    font-weight: 600;
    font-size: 1.5rem;
    text-align: center;
    background-color: hsl(209, 100%, 30%);
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    transition: padding ease-in-out 200ms;
  }

  &:hover {
    box-shadow: 6px 10px 8px -5px black;
    cursor: pointer;
    
    // .category-name {
    //   padding-top: 1vh;
    // }
  }
}
</style>
