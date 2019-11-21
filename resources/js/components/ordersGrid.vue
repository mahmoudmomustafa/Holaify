<template>
  <div class="bg-white rounded-lg py-3 px-4 order m-1">
    <div class="w-100 d-flex justify-end position-relative">
      <i
        class="fas fa-ellipsis-h cursor-pointer"
        id="dropdownMenuButton"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      ></i>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item edit" :href="orderID">Edit</a>
        <a class="dropdown-item delete" :href="orderID">Delete</a>
      </div>
    </div>
    <img class="h-16 w-16 rounded-full mx-auto my-2" :src="orderImg" />
    <div class="text-center">
      <div class="font-bold text-base mb-2 title w-100" v-text="orderCustomer"></div>
      <div class="d-flex flex-column">
        <div class="font-bold text-sm mb-2 title" v-text="orderCode"></div>
        <div class="font-bold text-sm mb-2 title" v-text="orderAddress"></div>
        <div class="font-bold text-xs mb-2 title">
          <span class="deliverd" v-text="orderState">Deliverd</span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      orderID: "",
      orderImg: "",
      orderCustomer: "",
      orderCode: "",
      orderAddress: "",
      orderState: "",
    };
  },
  methods: {}
};
</script>
