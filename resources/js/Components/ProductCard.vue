<template>
  <Link :href="href" class="group bg-white border border-sage-light hover:border-evergreen rounded-xl p-6 transition-all hover:shadow-md flex flex-col">
    <div class="w-11 h-11 bg-evergreen/10 rounded-lg flex items-center justify-center mb-4">
      <svg class="w-6 h-6 text-evergreen" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 2C8 2 5 6 5 10c0 5 7 12 7 12s7-7 7-12c0-4-3-8-7-8z"/>
      </svg>
    </div>
    <h3 class="font-semibold text-evergreen mb-2 group-hover:text-evergreen-light">{{ title }}</h3>
    <p class="text-sm text-granite-light leading-relaxed flex-1">{{ description }}</p>
    <div class="mt-4 flex items-center gap-1 text-bronze text-sm font-medium">
      Learn more
      <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
    </div>
  </Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({ title: String, description: String, href: String, icon: String });
</script>
