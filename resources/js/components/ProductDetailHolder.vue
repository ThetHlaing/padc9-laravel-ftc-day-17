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
      <slot name="create_form">
      </slot>            
    </div>
  </div>
</template>
<script>
export default {
  props: ["name", "price", "image_url","save_url"]
};
</script>