<template>
  <AppLayout>
    <Head title="Headstones in Fernandina Beach & Nassau County | Duval Memorials" />
    <PageHero label="Nassau County" title="Headstones & Monuments in Fernandina Beach" subtitle="Serving Fernandina Beach, Yulee, Callahan, and all of Nassau County with locally crafted headstones and cemetery-approved memorials." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>Nassau County's Trusted Memorial Provider</h2>
          <p>Fernandina Beach and Nassau County represent the northern edge of the First Coast, with their own cemeteries, traditions, and community character. Duval Memorials is proud to serve Nassau County families with the same care and craftsmanship we bring to every order across northeast Florida.</p>
          <h3>Cemeteries We Serve in Nassau County</h3>
          <ul>
            <li><a href="/cemeteries/bosque-bello-cemetery" class="text-bronze hover:underline">Bosque Bello Cemetery (Fernandina Beach)</a> — One of Amelia Island's oldest and most historic cemeteries, with monument requirements reflective of its historic character.</li>
            <li><a href="/cemeteries/green-pine-cemetery" class="text-bronze hover:underline">Green Pine Cemetery (Yulee)</a> — A community cemetery serving the rapidly growing Yulee corridor.</li>
          </ul>
          <h3>Historic Cemetery Considerations</h3>
          <p>Bosque Bello Cemetery on Amelia Island is a historic site with strict regulations about monument size, style, and materials. We have experience navigating these requirements and can advise families on what's permitted before any order is placed.</p>
          <h3>Amelia Island's Unique Climate</h3>
          <p>Like Jacksonville Beach, Fernandina Beach's barrier island location means elevated salt air exposure. Our recommendations for materials, finishes, and sealants take this into account.</p>
          <h3>Communities We Serve in Nassau County</h3>
          <p>Fernandina Beach, Amelia Island, Yulee, Callahan, Hilliard, Bryceville, and all surrounding Nassau County communities.</p>
        </div>
        <div class="space-y-6">
          <div class="bg-white rounded-xl p-6 border border-sage-light shadow-sm">
            <h3 class="font-serif text-lg font-semibold text-evergreen mb-4">Request a Free Design Proof</h3>
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
  { label: 'Bosque Bello Cemetery', href: '/cemeteries/bosque-bello-cemetery' },
  { label: 'Green Pine Cemetery', href: '/cemeteries/green-pine-cemetery' },
  { label: 'All Cemeteries We Serve', href: '/cemeteries' },
  { label: 'Headstone Pricing', href: '/resources/pricing' },
];
</script>
