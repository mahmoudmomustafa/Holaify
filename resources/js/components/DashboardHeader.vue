<template>
  <div class="header p-2">
    <!-- title -->
  <div class="head">
    <h3>{{ title }}</h3>
  </div>
  <!-- add -->
  <div class="add" v-if="link">
    <a class="btn btn-primary" :href="link">
      <span v-if="add" v-text="add"></span>
    </a>
  </div>
</div>
</template>

<script>
export default {
  name:"dash-head",
  props:[
    'title','link','add'
  ]
};
</script>
