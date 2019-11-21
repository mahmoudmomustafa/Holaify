<div class="loading" v-if="loaded">
  <span class="wow fadeInDown" data-wow-duration="2s" data-wow-delay="1s">{{ config('app.name', 'Holaify') }}</span>
  <div class="looping-rhombuses-spinner wow fadeIn" data-wow-duration="2s" data-wow-delay="2s">
    <div class="rhombus"></div>
    <div class="rhombus"></div>
    <div class="rhombus"></div>
  </div>
</div>