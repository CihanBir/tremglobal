<template>
  <div class="logo">
    <img src="~/static/trem-global-logo.png" alt="Trem Global Logo" class="img-fluid">
  </div>
</template>
<script>
export default {
  name: 'Logo'
}
</script>
<style>
.NuxtLogo {
  animation: 1s appear;
}

@keyframes appear {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
</style>
