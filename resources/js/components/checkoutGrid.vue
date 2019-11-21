<template>
  <div class="bg-white rounded-lg py-3 shadow px-4 order m-1">
        <div class="w-100 d-flex justify-end position-relative">
          <i class="fas fa-ellipsis-h cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"></i>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item edit" :href="checkoutID">Edit</a>
            <a class="dropdown-item delete" :href="checkoutID">Delete</a>
          </div>
        </div>
        <div class="text-center">
          <div class="font-bold text-xl mb-2 title w-100" v-text="checkoutCustomer"></div>
          <div class="d-flex flex-column">
            <div class="font-bold text-sm mb-2 title" v-text="checkoutProduct"></div>
            <div class="font-bold text-gray-700 text-xs mb-2 title" v-text="'At ' +checkoutTime"></div>
          </div>
        </div>
      </div>
</template>

<script>
export default {
  data() {
    return {
      checkoutID: "",
      checkoutCustomer: "",
      checkoutProduct: "",
      checkoutTime: ""
    };
  },
  methods: {}
};
</script>
