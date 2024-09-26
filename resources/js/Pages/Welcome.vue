<template>
  <div>
    <h1>Real-time Updates</h1>
    <ul>
      <li v-for="(item, index) in items" :key="index">{{ item.message }}</li>
    </ul>
  </div>
</template>
  
  <script setup>
import { ref, onMounted } from "vue";

const items = ref([]);

onMounted(() => {
  window.Echo.channel("your-channel") // Use the same channel name
    .listen("YourEvent", (e) => {
      items.value.unshift(e.data); // Add to the beginning of the array
    });
});
</script>
  
  <style scoped>
/* Optional styles */
</style>
  