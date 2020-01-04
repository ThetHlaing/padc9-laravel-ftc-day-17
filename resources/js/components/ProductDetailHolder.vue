<template>
  <div class="row">
    <div class="col-sm text-right">
      <img :src="image_url" :alt="name" />
    </div>
    <div class="col-sm">
      <h1>{{name}}</h1>
      <p>
        <slot></slot>
      </p>
      <button class="btn btn-primary">Buy now with {{price}} USD</button>
    </div>
  </div>
</template>
<script>
export default {
  props: ["name", "price", "image_url"]
};
</script>