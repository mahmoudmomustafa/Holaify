<template>
  <div class="grid">
    <span class="mr-1">View :</span>
    <i
      class="fas fa-th-list"
      :class="{'active' : !grid}"
      @click="view()"
      v-if="!grid"
      data-toggle="tooltip"
      data-placement="bottom"
      title="List"
    ></i>
    <i
      class="fas fa-th-large"
      :class="{'active' : grid }"
      @click="view()"
      v-if="grid"
      data-toggle="tooltip"
      data-placement="bottom"
      title="Grid"
    ></i>
  </div>
</template>

<script>
export default {
  data() {
    return{
      grid: false
    }
  },
  methods:{
    view(){
      this.grid = !this.grid;
    }
  }
};
</script>
