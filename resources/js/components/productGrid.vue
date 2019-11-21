<template>
  <div class="w-48 bg-white m-2 rounded shadow-md product">
    <img class="w-full" :src="producImg" :alt="productTitle" />
    <div class="p-2 body">
      <div class="font-bold text-lg mb-2 title w-100" v-text="productTitle"></div>
      <div class="d-flex flex-column">
        <div class="rate">
          <input type="radio" name="stars" id="star-1" class="d-none" />
          <input type="radio" name="stars" id="star-2" class="d-none" />
          <input type="radio" name="stars" id="star-3" class="d-none" />
          <input type="radio" name="stars" id="star-4" class="d-none" />
          <input type="radio" name="stars" id="star-5" class="d-none" />
          <section>
            <label for="star-1">
              <i class="lni-star-filled"></i>
            </label>
            <label for="star-2">
              <i class="lni-star-filled"></i>
            </label>
            <label for="star-3">
              <i class="lni-star-filled"></i>
            </label>
            <label for="star-4">
              <i class="lni-star-filled"></i>
            </label>
            <label for="star-5">
              <i class="lni-star-filled"></i>
            </label>
          </section>
        </div>
        <div class="w-100 d-flex justify-between position-relative">
          <div class="price font-bold text-sm mb-2" v-text="productPrice"></div>
          <i
            class="fas fa-ellipsis-v cursor-pointer"
            id="dropdownMenuButton"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          ></i>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item edit" :href="productID">Edit</a>
            <a class="dropdown-item delete" :href="productID">Delete</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      productID:"",
      productTitle:"",
      producImg:"",
      productPrice:"",
      productRate:""
    };
  },
  methods: {
  }
};
</script>
