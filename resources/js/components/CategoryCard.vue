<template>
  <div
    class="category d-flex align-items-center"
    :class="category.selected ? on : '' || jumpAnimation"
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
      jumpAnimation: "jump-animation",
    };
  },

  methods: {
    removeJumpAnimation() {
      this.jumpAnimation = null;
    },
  },

  mounted() {
    setTimeout(this.removeJumpAnimation, 1000);
  },
};
</script>

<style lang="scss" scoped>
.category {
  border-radius: 5px;
  background-color: #3a6b7e;
  box-shadow: 3px 6px 8px -6px black;
  transition: box-shadow 200ms ease-out;

  img {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
  }

  .name {
    font-size: 1.2rem;
    color: white;
    text-decoration: none;
  }

  &:hover {
    box-shadow: 5px 10px 8px -6px black;
    background-color: #e2b33c;
    cursor: pointer;
    
    .name {
      color: black;
    }
  } 

  &:active {
    box-shadow: 5px 8px 12px -6px black;
  }
}

.selected {
  animation: pressed 50ms ease-in 1 alternate forwards;
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
    box-shadow: 2px 4px 5px -4px black inset;
    background-color: hsl(40, 65%, 50%);
  }
}

.jump-animation {
  animation: jumpAnimation 1s ease-in 1 forwards;
}

@keyframes jumpAnimation {
  0% {
    animation-timing-function: ease-in;
    opacity: 1;
    transform: translateY(-45px);
  }

  24% {
    opacity: 1;
  }

  40% {
    animation-timing-function: ease-in;
    transform: translateY(-24px);
  }

  65% {
    animation-timing-function: ease-in;
    transform: translateY(-12px);
  }

  82% {
    animation-timing-function: ease-in;
    transform: translateY(-6px);
  }

  93% {
    animation-timing-function: ease-in;
    transform: translateY(-4px);
  }

  25%,
  55%,
  75%,
  87% {
    animation-timing-function: ease-out;
    transform: translateY(0px);
  }

  100% {
    animation-timing-function: ease-out;
    opacity: 1;
    transform: translateY(0px);
  }
}
</style>
