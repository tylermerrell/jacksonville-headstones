<template>
  <section class="bg-evergreen text-white py-14 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
      <p v-if="label" class="text-sage-light text-sm tracking-widest uppercase mb-3">{{ label }}</p>
      <h1 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-semibold mb-4">{{ title }}</h1>
      <p v-if="subtitle" class="text-white/75 text-lg max-w-2xl leading-relaxed">{{ subtitle }}</p>
    </div>
  </section>
</template>

<script setup>
defineProps({ label: String, title: String, subtitle: String });
</script>
