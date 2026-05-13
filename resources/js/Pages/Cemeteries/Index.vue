<template>
  <AppLayout>
    <Head title="Cemeteries We Serve in Jacksonville & Northeast Florida | Duval Memorials" />
    <PageHero label="Cemetery Directory" title="Cemeteries We Serve in Northeast Florida" subtitle="We've worked with every major cemetery on the First Coast. Click your cemetery below to see specific rules, requirements, and how we can help." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto">
        <div v-for="group in groups" :key="group.county" class="mb-12">
          <h2 class="font-serif text-2xl font-semibold text-evergreen mb-5 pb-3 border-b border-sage-light">{{ group.county }}</h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <Link v-for="cem in group.cemeteries" :key="cem.href" :href="cem.href" class="group bg-white rounded-xl border border-sage-light hover:border-evergreen hover:shadow-md transition-all p-5 flex flex-col">
              <h3 class="font-semibold text-evergreen mb-1 group-hover:text-evergreen-light">{{ cem.name }}</h3>
              <p class="text-sm text-granite-light flex-1">{{ cem.location }}</p>
              <div class="mt-3 flex items-center gap-1 text-bronze text-sm font-medium">
                View details <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
              </div>
            </Link>
          </div>
        </div>

        <div class="bg-evergreen text-white rounded-2xl p-8 text-center mt-6">
          <h2 class="font-serif text-2xl font-semibold mb-3">Don't See Your Cemetery?</h2>
          <p class="text-white/70 mb-6 max-w-xl mx-auto">We serve cemeteries across all five First Coast counties. Contact us with your cemetery's name and we'll confirm requirements for you.</p>
          <Link href="/contact" class="inline-flex items-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-8 py-3.5 rounded-lg transition-colors">Contact Us</Link>
        </div>
      </div>
    </section>
  </AppLayout>
</template>
<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import PageHero from '@/Components/PageHero.vue';

const groups = [
  {
    county: 'Duval County — Jacksonville',
    cemeteries: [
      { name: 'Evergreen Cemetery', location: 'Jacksonville, FL', href: '/cemeteries/evergreen-cemetery' },
      { name: 'Jacksonville National Cemetery', location: 'Jacksonville, FL (VA Cemetery)', href: '/cemeteries/jacksonville-national-cemetery' },
      { name: 'Hardage-Giddens Oaklawn Cemetery', location: 'Jacksonville, FL', href: '/cemeteries/hardage-giddens-oaklawn' },
      { name: 'Riverside Memorial Park', location: 'Jacksonville, FL', href: '/cemeteries/riverside-memorial-park' },
    ],
  },
  {
    county: 'Clay County — Orange Park Area',
    cemeteries: [
      { name: 'Jacksonville Memory Gardens', location: 'Orange Park, FL', href: '/cemeteries/jacksonville-memory-gardens' },
      { name: 'Magnolia Cemetery', location: 'Orange Park, FL', href: '/cemeteries/magnolia-cemetery' },
    ],
  },
  {
    county: 'St. Johns County — St. Augustine Area',
    cemeteries: [
      { name: 'San Lorenzo Cemetery', location: 'St. Augustine, FL (Catholic Diocese)', href: '/cemeteries/san-lorenzo-cemetery' },
      { name: 'Craig Memorial Park', location: 'St. Augustine, FL', href: '/cemeteries/craig-memorial-park' },
    ],
  },
  {
    county: 'Nassau County — Fernandina Beach / Yulee',
    cemeteries: [
      { name: 'Bosque Bello Cemetery', location: 'Fernandina Beach, FL (Historic)', href: '/cemeteries/bosque-bello-cemetery' },
      { name: 'Green Pine Cemetery', location: 'Yulee, FL', href: '/cemeteries/green-pine-cemetery' },
    ],
  },
  {
    county: 'The Beaches — Atlantic Beach / Jacksonville Beach',
    cemeteries: [
      { name: 'Beaches Memorial Park', location: 'Atlantic Beach, FL', href: '/cemeteries/beaches-memorial-park' },
      { name: 'Lee Kirkland & H. Warren Smith Cemeteries', location: 'Jacksonville Beach, FL', href: '/cemeteries/lee-kirkland-smith-cemeteries' },
    ],
  },
];
</script>
