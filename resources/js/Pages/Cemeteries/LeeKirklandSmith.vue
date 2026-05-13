<template>
  <AppLayout>
    <Head title="Headstones for Lee Kirkland & H. Warren Smith Cemeteries Jacksonville Beach | Duval Memorials" />
    <PageHero label="Lee Kirkland & H. Warren Smith · Jacksonville Beach" title="Headstones for Lee Kirkland & H. Warren Smith Cemeteries" subtitle="Historic Jacksonville Beach cemeteries with unique requirements. We handle all coordination and approval for both sites." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>About Lee Kirkland and H. Warren Smith Cemeteries</h2>
          <p>The Lee Kirkland Cemetery and the H. Warren Smith Cemetery are two historic burial grounds located in Jacksonville Beach, representing some of the oldest continuously used cemetery land in the barrier island communities. These historic sites require careful attention to their individual requirements, which reflect their historic character and community significance.</p>
          <h3>Monument Requirements at These Historic Cemeteries</h3>
          <p>As older, historically significant cemeteries, Lee Kirkland and H. Warren Smith have requirements that may differ from modern memorial parks. We research and confirm the specific rules at each site before any order is placed. Due to the historic nature of these cemeteries, special consideration is given to monument styles that complement existing historic markers on the property.</p>
          <h3>Coastal Exposure at Jacksonville Beach</h3>
          <p>Jacksonville Beach cemeteries face some of the most intense salt air exposure of any cemetery on the First Coast. For monuments at Lee Kirkland and H. Warren Smith cemeteries, we always recommend:</p>
          <ul>
            <li>Polished black or blue pearl granite for maximum UV and moisture resistance</li>
            <li>Marine-grade sealed bronze for any bronze components</li>
            <li>Periodic cleaning and re-sealing to maintain the monument over time</li>
          </ul>
          <h3>Restoration Services Available</h3>
          <p>These historic cemeteries contain many older monuments that have suffered from decades of salt air and biological growth. We offer monument restoration services at both sites — cleaning, re-engraving faded inscriptions, and resetting settled markers.</p>
        </div>
        <div class="space-y-6">
          <div class="bg-white rounded-xl p-6 border border-sage-light shadow-sm">
            <h3 class="font-serif text-lg font-semibold text-evergreen mb-4">Order a Headstone for These Cemeteries</h3>
            <QuoteForm />
          </div>
          <RelatedLinks :links="related" />
        </div>
      </div>
    </section>
  </AppLayout>
</template>
<script setup>
import { Head } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import PageHero from '@/Components/PageHero.vue';
import QuoteForm from '@/Components/QuoteForm.vue';
import RelatedLinks from '@/Components/RelatedLinks.vue';
const related = [
  { label: 'Jacksonville Beach Service Area', href: '/service-areas/jacksonville-beach' },
  { label: 'Beaches Memorial Park', href: '/cemeteries/beaches-memorial-park' },
  { label: 'Monument Restoration', href: '/headstones/restoration' },
  { label: 'All Cemeteries We Serve', href: '/cemeteries' },
];
</script>
