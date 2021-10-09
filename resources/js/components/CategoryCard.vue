<template>
  <div class="category d-flex align-items-center" @click="$emit('addChoice')">
    <img :src="category.img" :alt="category.name" class="d-block w-25" />
    <div class="name w-100 text-center">{{ category.name }}</div>
  </div>
</template>

<script>
export default {
  name: "CategoryCard",
  props: {
    category: Object,
  },
};
</script>

<style lang="scss" scoped>
.category {
  border-radius: 5px;
  box-shadow: 3px 6px 5px -6px black;
  background-color: whitesmoke;
  transition: all 250ms ease-out;

  img {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
  }

  .name {
    font-size: 1.2rem;
    color: black;
    text-decoration: none;
  }

  &:hover {
    box-shadow: 5px 8px 10px -6px black;
    background-color: hsl(10%, 10%, 80%);
    cursor: pointer;
  }
}
</style>
