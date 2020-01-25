<template>
  <div class="header p-3">
  <!-- add -->
  <div class="text-sm mb-2" v-if="link">
    <a class="text-gray-700" :href="link">
      <i class="lni-chevron-left text-xs"></i> <span v-if="back" v-text="back"></span>
    </a>
  </div>
    <!-- title -->
  <div class="head">
    <h3>{{ title }}</h3>
  </div>
</div>
</template>

<script>
export default {
  name:"show-head",
  props:[
    'title','link','back'
  ]
};
</script>
<style lang="scss" scoped>
.header {
    border-bottom: 1px solid #222b3a1a;
    overflow: auto;
    display: flex;
    flex-direction: column;
    .head{
      font-size: 35px;
    }
}

</style>