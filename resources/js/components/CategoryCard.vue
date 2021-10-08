<template>
  <router-link
    style="text-decoration: none; color: inherit"
    :to="{ name: 'category', params: { slug: category.slug } }"
  >
    <div class="category d-flex align-items-center">
      <img :src="category.img" :alt="category.name" class="d-block w-25" />
      <div class="name w-100 text-center">{{ category.name }}</div>
    </div>
  </router-link>
</template>

<script>
export default {
  name: 'CategoryCard',
  props: {
    category: Object,
  },
};
</script>

<style lang="scss" scoped>
.category {
  border-radius: 10px;
  box-shadow: 3px 6px 5px -6px black;
  background-color: whitesmoke;
  transition: all 250ms ease-out;

  img {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
  }

  .name {
    font-size: 1.2rem;
    color: black;
    text-decoration: none;
  }

  &:hover {
    box-shadow: 5px 8px 10px -6px black;
    background-color: hsl(10%, 10%, 80%);
  }
}
</style>
