<template>
  <div
    class="category d-flex align-items-center"
    :class="category.selected ? on : ''"
    @click="$emit('toggleChoice')"
  >
    <img :src="category.img" :alt="category.name" class="d-block w-25" />
    <div class="name w-100 text-center">
      {{ category.name }}
    </div>
  </div>
</template>

<script>
export default {
  name: "CategoryCard",

  props: {
    category: Object,
  },

  data() {
    return {
      on: "selected",
    };
  },
};
</script>

<style lang="scss" scoped>
.category {
  border-radius: 5px;
  background-color: #E9C46A;
  transition: box-shadow 200ms ease-out;

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
    box-shadow: 3px 6px 8px -6px #264653;
    // background-color: hsl(10%, 10%, 80%);
    background-color: #F4A666;
    cursor: pointer;
  }

  &:active {
    box-shadow: 5px 8px 12px -6px black;
    // background-color: hsl(10%, 10%, 50%);
    background-color: #F4A666;
  }
}

.selected {
  // background-color: hsl(10%, 10%, 80%);
  background-color: #F4A666;
}
</style>
