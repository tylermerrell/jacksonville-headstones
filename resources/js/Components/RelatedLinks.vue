<template>
  <div class="bg-sage-light rounded-xl p-5">
    <h4 class="font-semibold text-evergreen mb-3 text-sm uppercase tracking-wider">Related</h4>
    <ul class="space-y-2">
      <li v-for="link in links" :key="link.href">
        <Link :href="link.href" class="flex items-center gap-2 text-sm text-granite-light hover:text-evergreen transition-colors">
          <svg class="w-4 h-4 text-bronze flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
          {{ link.label }}
        </Link>
      </li>
    </ul>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({ links: Array });
</script>
