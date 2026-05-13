<template>
  <AppLayout>
    <Head title="Headstones for Beaches Memorial Park Atlantic Beach FL | Duval Memorials" />
    <PageHero label="Beaches Memorial Park · Atlantic Beach" title="Headstones for Beaches Memorial Park, Atlantic Beach" subtitle="Serving barrier island families at Beaches Memorial Park with coastal-grade monuments and cemetery-approved designs." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>About Beaches Memorial Park</h2>
          <p>Beaches Memorial Park in Atlantic Beach serves the barrier island communities of Atlantic Beach, Neptune Beach, and Jacksonville Beach — some of the most desirable and closely-knit communities on the First Coast. The park setting and professional grounds reflect the high standards of the communities it serves.</p>
          <h3>Monument Requirements at Beaches Memorial Park</h3>
          <p>As a memorial park, Beaches Memorial typically favors flat or low-profile markers in most sections to maintain the park aesthetic and facilitate grounds maintenance. We confirm the specific requirements for your section before any order is placed.</p>
          <h3>Coastal Climate: The Most Challenging Environment for Monuments</h3>
          <p>Beaches Memorial Park is located directly on the barrier island, making it one of the most salt air-exposed cemetery environments on the First Coast. Our specific recommendations for this location:</p>
          <ul>
            <li><strong>Granite</strong> — Black granite with high polish is our top recommendation. It's the most resistant to UV fading and slowest to show biological growth.</li>
            <li><strong>Bronze</strong> — If bronze is chosen, marine-grade sealant is essential and should be re-applied every 5–7 years to prevent accelerated oxidation.</li>
            <li><strong>Lettering fill</strong> — We recommend lead-free white fill for lettering on dark granite, which holds up better in high-humidity, salt air environments than silver or gold fill.</li>
          </ul>
        </div>
        <div class="space-y-6">
          <div class="bg-white rounded-xl p-6 border border-sage-light shadow-sm">
            <h3 class="font-serif text-lg font-semibold text-evergreen mb-4">Order a Headstone for Beaches Memorial Park</h3>
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
  { label: 'Lee Kirkland & Smith Cemeteries', href: '/cemeteries/lee-kirkland-smith-cemeteries' },
  { label: 'Bronze Memorials', href: '/headstones/bronze-memorials' },
  { label: 'All Cemeteries We Serve', href: '/cemeteries' },
];
</script>
