<template>
  <div class="outer">
    <div class="inner">
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
  background-color: #e9c46a;
  box-shadow: 3px 6px 8px -6px black;
  transition: box-shadow 200ms ease-out;
  cursor: pointer;

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
    box-shadow: 5px 10px 8px -6px black;
    background-color: #e2b33c;
  }

  &:active {
    box-shadow: 5px 8px 12px -6px black;
  }
}

.selected {
  background-color: hsl(40, 65%, 50%);
  animation: pressed 100ms ease-in 1 alternate forwards;
}

@keyframes pressed {
  0% {
    box-shadow: 5px 10px 8px -6px black;
    background-color: #e2b33c;
  }
  25% {
    box-shadow: 2px 5px 4px -3px black;
    background-color: #e2b33c;
  }
  50% {
    box-shadow: 0px 0px 0px 0px black;
    background-color: #e2b33c;
  }
  65% {
    box-shadow: 0px 1px 1px 0px black inset;
    background-color: #e2b33c;
  }
  83% {
    box-shadow: 0px 2px 2px 1px black inset;
    background-color: #e2b33c;
  }
  100% {
    box-shadow: 0px 2px 5px -2px black inset;
    background-color: hsl(40, 65%, 50%);
  }
}
</style>
