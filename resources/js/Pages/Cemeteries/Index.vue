<template>
  <AppLayout>
    <Head title="Cemeteries We Serve in Jacksonville & Northeast Florida | Duval Memorials" />
    <PageHero
      label="Cemetery Directory"
      title="Cemeteries We Serve in Northeast Florida"
      subtitle="Over 50 cemeteries across five First Coast counties. Find yours below — cemeteries with a dedicated page include specific rules and requirements."
    />

    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto">

        <div v-for="group in groups" :key="group.county" class="mb-14">
          <h2 class="font-serif text-2xl font-semibold text-evergreen mb-1">{{ group.county }}</h2>
          <p class="text-sm text-granite-light mb-5">{{ group.sub }}</p>

          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
            <template v-for="cem in group.cemeteries" :key="cem.name">

              <!-- Has a dedicated page -->
              <Link
                v-if="cem.href"
                :href="cem.href"
                class="group bg-white rounded-xl border border-sage-light hover:border-evergreen hover:shadow-md transition-all p-4 flex flex-col"
              >
                <div class="flex items-start justify-between gap-2 mb-1">
                  <h3 class="font-semibold text-evergreen text-sm group-hover:text-evergreen-light leading-snug">{{ cem.name }}</h3>
                  <span class="flex-shrink-0 w-5 h-5 rounded-full bg-evergreen/10 flex items-center justify-center mt-0.5">
                    <svg class="w-3 h-3 text-evergreen" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                  </span>
                </div>
                <p class="text-xs text-granite-light mb-2">{{ cem.location }}</p>
                <p v-if="cem.note" class="text-xs text-bronze">{{ cem.note }}</p>
                <div class="mt-auto pt-2 text-xs text-evergreen font-medium">View cemetery details</div>
              </Link>

              <!-- Listed only — no dedicated page -->
              <div v-else class="bg-white rounded-xl border border-sage-light p-4 flex flex-col">
                <h3 class="font-semibold text-granite text-sm leading-snug mb-1">{{ cem.name }}</h3>
                <p class="text-xs text-granite-light mb-2 flex-1">{{ cem.location }}</p>
                <p v-if="cem.note" class="text-xs text-bronze mb-2">{{ cem.note }}</p>
                <Link href="/contact" class="mt-auto text-xs text-bronze hover:text-bronze-dark font-medium transition-colors">
                  Request a free proof →
                </Link>
              </div>

            </template>
          </div>
        </div>

        <div class="bg-evergreen text-white rounded-2xl p-8 text-center mt-4">
          <h2 class="font-serif text-2xl font-semibold mb-3">Don't See Your Cemetery?</h2>
          <p class="text-white/70 mb-6 max-w-xl mx-auto">We serve cemeteries across all five First Coast counties. Tell us your cemetery name and we'll confirm requirements before you order.</p>
          <Link href="/contact" class="inline-flex items-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-8 py-3.5 rounded-lg transition-colors">
            Contact Us
          </Link>
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
    county: 'Duval County',
    sub: 'Jacksonville & The Beaches',
    cemeteries: [
      { name: 'Evergreen Cemetery', location: 'Jacksonville', href: '/cemeteries/evergreen-cemetery' },
      { name: 'Jacksonville National Cemetery', location: 'Jacksonville', href: '/cemeteries/jacksonville-national-cemetery', note: 'VA National Cemetery' },
      { name: 'Hardage-Giddens Oaklawn Cemetery', location: 'Jacksonville', href: '/cemeteries/hardage-giddens-oaklawn' },
      { name: 'Riverside Memorial Park', location: 'Jacksonville', href: '/cemeteries/riverside-memorial-park' },
      { name: 'Beaches Memorial Park', location: 'Atlantic Beach', href: '/cemeteries/beaches-memorial-park' },
      { name: 'Lee Kirkland Cemetery', location: 'Jacksonville Beach', href: '/cemeteries/lee-kirkland-smith-cemeteries' },
      { name: 'H. Warren Smith Cemetery', location: 'Jacksonville Beach', href: '/cemeteries/lee-kirkland-smith-cemeteries' },
      { name: 'Greenlawn Cemetery', location: 'Jacksonville' },
      { name: 'Restlawn Memorial Park', location: 'Jacksonville' },
      { name: 'Edgewood Cemetery', location: 'Jacksonville' },
      { name: 'Arlington Memorial Park', location: 'Jacksonville' },
      { name: 'Sunset Memorial Park', location: 'Jacksonville' },
      { name: 'Historic Old City Cemetery', location: 'Downtown Jacksonville', note: 'Historic — contact for requirements' },
      { name: "St. Mary's Catholic Cemetery", location: 'Jacksonville', note: 'Catholic Diocese guidelines apply' },
      { name: 'Mt. Olive Cemetery', location: 'Jacksonville' },
      { name: 'Pickett Cemetery', location: 'Jacksonville' },
      { name: 'St. Nicholas Cemetery', location: 'Jacksonville' },
      { name: 'Pinehurst Cemetery', location: 'Jacksonville' },
      { name: 'Memorial Cemetery', location: 'Jacksonville' },
    ],
  },
  {
    county: 'Clay County',
    sub: 'Orange Park, Middleburg, Green Cove Springs',
    cemeteries: [
      { name: 'Jacksonville Memory Gardens', location: 'Orange Park', href: '/cemeteries/jacksonville-memory-gardens' },
      { name: 'Magnolia Cemetery', location: 'Orange Park', href: '/cemeteries/magnolia-cemetery' },
      { name: 'Holly Hill Memorial Park', location: 'Middleburg' },
      { name: 'Hickory Grove Cemetery', location: 'Green Cove Springs' },
      { name: 'Middleburg United Methodist Church Cemetery', location: 'Middleburg' },
      { name: 'Peoria Cemetery', location: "Orange Park / Doctor's Inlet" },
      { name: 'Sharon Baptist Church Cemetery', location: 'Middleburg' },
      { name: 'Penney Farms Cemetery', location: 'Penney Farms' },
      { name: 'Russell Haven of Rest Cemetery', location: 'Green Cove Springs' },
    ],
  },
  {
    county: 'St. Johns County',
    sub: 'St. Augustine, Ponte Vedra',
    cemeteries: [
      { name: 'San Lorenzo Catholic Cemetery', location: 'St. Augustine', href: '/cemeteries/san-lorenzo-cemetery', note: 'Catholic Diocese guidelines apply' },
      { name: 'Craig Memorial Park', location: 'St. Augustine', href: '/cemeteries/craig-memorial-park' },
      { name: 'St. Augustine National Cemetery', location: 'St. Augustine', note: 'VA National Cemetery' },
      { name: 'Ponte Vedra Valley Cemetery', location: 'Ponte Vedra Beach' },
      { name: 'Evergreen Cemetery of St. Augustine', location: 'St. Augustine' },
      { name: 'Tolomato Cemetery', location: 'Historic St. Augustine', note: 'Historic — closed to new burials' },
      { name: 'Huguenot Cemetery', location: 'Historic St. Augustine', note: 'Historic — closed to new burials' },
      { name: 'Sampson Cemetery', location: 'St. Augustine' },
      { name: 'Pellicer Creek Cemetery', location: 'Southern St. Johns County' },
    ],
  },
  {
    county: 'Nassau County',
    sub: 'Fernandina Beach, Yulee, Callahan',
    cemeteries: [
      { name: 'Bosque Bello Cemetery', location: 'Fernandina Beach', href: '/cemeteries/bosque-bello-cemetery', note: 'Historic — special requirements' },
      { name: 'Green Pine Cemetery', location: 'Yulee', href: '/cemeteries/green-pine-cemetery' },
      { name: 'St. Peters Episcopal Cemetery', location: 'Fernandina Beach' },
      { name: 'Callahan Cemetery', location: 'Callahan' },
      { name: 'Jones Cemetery', location: 'Callahan' },
      { name: 'Hughes Cemetery', location: 'Yulee' },
      { name: 'Vaughan Cemetery', location: 'Yulee' },
      { name: 'Hilliard Cemetery', location: 'Hilliard' },
    ],
  },
  {
    county: 'Baker County',
    sub: 'Macclenny, Glen St. Mary, Sanderson',
    cemeteries: [
      { name: 'Woodlawn Cemetery', location: 'Macclenny' },
      { name: 'Macedonia Cemetery', location: 'Macclenny' },
      { name: 'Oak Grove Cemetery', location: 'Macclenny' },
      { name: 'Manntown Cemetery', location: 'Glen St. Mary' },
      { name: 'South Prong Cemetery', location: 'Sanderson' },
      { name: 'Cedar Creek Cemetery', location: 'Sanderson' },
      { name: 'Taylor Cemetery', location: 'Taylor' },
    ],
  },
];
</script>
