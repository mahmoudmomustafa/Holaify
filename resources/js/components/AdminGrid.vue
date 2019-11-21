<template>
  <div class="bg-white rounded-lg py-3 px-4 admin m-1">
    <div class="w-100 d-flex justify-end position-relative">
      <i
        class="fas fa-ellipsis-h cursor-pointer"
        id="dropdownMenuButton"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      ></i>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item edit" :href="adminID">Edit</a>
        <a class="dropdown-item delete" :href="adminID">Delete</a>
      </div>
    </div>
    <img class="h-24 w-24 rounded-full mx-auto my-2" :src="adminImg" />
    <div class="text-center">
      <div class="font-bold text-base mb-2 title w-100" v-text="adminName"></div>
      <div class="d-flex flex-column">
        <div class="font-bold text-xs mb-2 title" v-text="adminMail"></div>
        <div class="font-bold text-sm mb-2 title" v-text="adminNumber"></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      adminID: "",
      adminImg: "",
      adminName: "",
      adminMail: "",
      adminNumber: ""
    };
  },
  methods: {}
};
</script>
