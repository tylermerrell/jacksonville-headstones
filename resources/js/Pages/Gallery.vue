<template>
  <AppLayout>
    <Head title="Design Inspiration Gallery | Duval Memorials" />

    <!-- Hero -->
    <section class="bg-evergreen text-white py-16 px-4 sm:px-6 lg:px-8 text-center">
      <p class="text-sage-light text-sm tracking-widest uppercase mb-3">Ideas & Inspiration</p>
      <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Design Inspiration Gallery</h1>
      <p class="text-white/75 text-lg max-w-2xl mx-auto">Browse styles, engravings, and layouts to help shape your vision. Every design shown can be customized for your loved one.</p>
    </section>

    <!-- Filter tabs -->
    <section class="bg-stone-dark border-b border-sage-light sticky top-[65px] z-30">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-1 overflow-x-auto py-3">
          <button
            v-for="tab in tabs"
            :key="tab"
            @click="activeTab = tab"
            class="flex-shrink-0 px-4 py-1.5 rounded-full text-sm font-medium transition-colors"
            :class="activeTab === tab ? 'bg-evergreen text-white' : 'text-granite-light hover:text-evergreen hover:bg-sage-light'"
          >
            {{ tab }}
          </button>
        </div>
      </div>
    </section>

    <!-- Gallery grid -->
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <div
            v-for="item in filteredItems"
            :key="item.id"
            class="bg-white rounded-xl overflow-hidden border border-sage-light hover:shadow-lg transition-shadow group"
          >
            <div class="aspect-[4/3] bg-sage-light flex items-center justify-center">
              <div class="text-center p-8">
                <svg class="w-12 h-12 text-sage mx-auto mb-3" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
                <p class="text-xs text-sage">Photo coming soon</p>
              </div>
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-1">
                <h3 class="font-semibold text-evergreen text-sm">{{ item.title }}</h3>
                <span class="text-xs bg-sage-light text-granite-light px-2 py-0.5 rounded-full">{{ item.category }}</span>
              </div>
              <p class="text-xs text-granite-light">{{ item.description }}</p>
            </div>
          </div>
        </div>

        <div class="mt-12 text-center bg-sage-light rounded-2xl p-8">
          <h2 class="font-serif text-2xl font-semibold text-evergreen mb-3">Don't See What You're Envisioning?</h2>
          <p class="text-granite-light mb-6 max-w-xl mx-auto">Every memorial we create is fully custom. Share your ideas and we'll create a free design proof — no commitment required.</p>
          <Link href="/contact" class="inline-flex items-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-8 py-3.5 rounded-lg transition-colors">
            Request a Free Custom Design
          </Link>
        </div>
      </div>
    </section>

  </AppLayout>
</template>

<script setup>
import { ref, computed } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

const tabs = ['All Styles', 'Upright Monuments', 'Flat Markers', 'Bronze', 'Slant & Bevel', 'Custom Engraving', 'Pet Memorials'];
const activeTab = ref('All Styles');

const items = [
  { id: 1, title: 'Classic Upright Granite', category: 'Upright Monuments', description: 'Black granite with laser-etched portrait and scripture.' },
  { id: 2, title: 'Double Heart Monument', category: 'Upright Monuments', description: 'Companion monument with heart motif, ideal for couples.' },
  { id: 3, title: 'Flush Bronze Marker', category: 'Bronze', description: 'Traditional bronze with raised lettering, meets most Florida cemetery rules.' },
  { id: 4, title: 'Gray Granite Flat Marker', category: 'Flat Markers', description: 'Low-profile marker with engraved cross and dates.' },
  { id: 5, title: 'Military Upright with Eagle', category: 'Upright Monuments', description: 'Custom military monument with service branch emblem.' },
  { id: 6, title: 'Bevel Marker with Flowers', category: 'Slant & Bevel', description: 'Angled marker with hand-carved rose motif.' },
  { id: 7, title: 'Pet Memorial Stone', category: 'Pet Memorials', description: 'Small granite marker with paw print and name.' },
  { id: 8, title: 'Portrait Engraving', category: 'Custom Engraving', description: 'Laser-etched photo portrait on black granite.' },
  { id: 9, title: 'Slant Marker in Blue Pearl', category: 'Slant & Bevel', description: 'Blue pearl granite with gold-filled lettering.' },
];

const filteredItems = computed(() => {
  if (activeTab.value === 'All Styles') return items;
  return items.filter(i => i.category === activeTab.value);
});
</script>
