<style lang="less">
// @import '../../assets/less/variables.less';
// @import '../../assets/less/crow.less';

// .mod-image {
//   .crow {
//     @media @smartphone {
//       .uncrow();
//     }
//   }
// }
</style>

<template>
  <div class="mod mod-image">
    <div class="image">
      <img
        :src="'../../static/images/' + orientations[orientation].src"
        alt=""
      />
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      orientation: 0,
      orientations: [
        {
          type: "none",
          src: "placeholder/default.jpg",
        },
        {
          type: "landscape",
          src: "placeholder/landscape.jpg",
        },
        {
          type: "portrait",
          src: "placeholder/portrait.jpg",
        },
      ],
    };
  },
};
</script>
