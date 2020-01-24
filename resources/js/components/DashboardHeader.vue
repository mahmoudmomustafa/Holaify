<template>
  <div class="header p-3">
    <!-- title -->
  <div class="head">
    <h3>{{ title }}</h3>
  </div>
  <!-- add -->
  <div class="add" v-if="link">
    <a class="btn btn-primary" :href="link">
      <i class="lni-plus"></i>
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
<style lang="scss">
.header {
    border-bottom: 1px solid #222b3a1a;
    overflow: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    .head{
      font-size: 35px;
    }
}

.btn-primary {
    border: 1px solid #667eea;
    color: white !important;
    background: #667eea;
    transition: 500ms ease;
    font-size: .9rem;
    &:hover{
    transform: scale(0.95);
    border: 1px solid #667eea;
    background: #667eea;
    box-shadow: 0 0 5px #667eea;
    }
    i{
      font-size: smaller
    }
}

</style>