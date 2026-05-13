<template>
  <AppLayout>
    <Head title="Headstones for Bosque Bello Cemetery Fernandina Beach | Duval Memorials" />
    <PageHero label="Bosque Bello Cemetery · Fernandina Beach" title="Headstones for Bosque Bello Cemetery, Fernandina Beach" subtitle="One of Amelia Island's oldest and most historic cemeteries. We navigate Bosque Bello's historic preservation requirements on your behalf." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>About Bosque Bello Cemetery</h2>
          <p>Bosque Bello Cemetery — whose name means "beautiful forest" in Spanish — is a historic burial ground on Amelia Island in Fernandina Beach, Nassau County. Dating back to the 19th century, it is one of the oldest cemeteries in northeast Florida and the final resting place for many of Fernandina Beach's earliest families, including veterans of multiple wars and prominent local figures.</p>
          <h3>Historic Preservation Requirements</h3>
          <p>As a historic cemetery, Bosque Bello has monument requirements designed to preserve the site's historic character and integrity. These requirements are among the more detailed we encounter and include restrictions on:</p>
          <ul>
            <li>Monument materials (must be consistent with the historic character of the site)</li>
            <li>Maximum dimensions for new monuments</li>
            <li>Prohibited styles that would be visually inconsistent with the historic landscape</li>
            <li>Installation methods that protect existing historic markers and root systems of mature trees</li>
          </ul>
          <h3>Why Bosque Bello Requires Special Expertise</h3>
          <p>Ordering a monument for a historic cemetery like Bosque Bello without first understanding the site's requirements is a recipe for rejection and delays. We contact the cemetery and, where applicable, relevant preservation authorities, before any design work begins.</p>
          <h3>Coastal Climate at Bosque Bello</h3>
          <p>Amelia Island's barrier island location creates particularly aggressive salt air conditions. All our recommendations for Bosque Bello monuments account for this — using the most durable granite varieties and bronze sealants available.</p>
        </div>
        <div class="space-y-6">
          <div class="bg-white rounded-xl p-6 border border-sage-light shadow-sm">
            <h3 class="font-serif text-lg font-semibold text-evergreen mb-4">Order a Headstone for Bosque Bello Cemetery</h3>
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
  { label: 'Fernandina Beach Service Area', href: '/service-areas/fernandina-beach' },
  { label: 'Green Pine Cemetery', href: '/cemeteries/green-pine-cemetery' },
  { label: 'Monument Restoration', href: '/headstones/restoration' },
  { label: 'All Cemeteries We Serve', href: '/cemeteries' },
];
</script>
