<template>
  <div class="category-card">
    <router-link :to="{ name: 'category', params: { slug: category.slug } }">
      <img :src="category.img" :alt="category.name" />
      <div class="category-name">{{ category.name }}</div>
    </router-link>
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
  padding: 0;
  box-shadow: 3px 5px 5px -5px black;
  transition: box-shadow ease-in-out 200ms;

  img {
    width: 100%;
    transition: filter ease-in-out 200ms;
  }

  .category-name {
    color: white;
    padding: 0;
    margin: 0;
    font-weight: 600;
    font-size: 1.5rem;
    text-align: center;
    background-color: hsl(209, 100%, 30%);
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
  }
}
</style>
