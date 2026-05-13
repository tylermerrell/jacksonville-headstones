<template>
  <AppLayout>
    <Head title="Headstone Cleaning & Restoration Jacksonville | Duval Memorials" />
    <PageHero label="Restoration Services" title="Monument Cleaning & Restoration" subtitle="Bring weathered, algae-covered, or damaged headstones back to their original dignity. Serving cemeteries across the First Coast." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>Why Florida Headstones Need Regular Restoration</h2>
          <p>Jacksonville's climate is one of the toughest on memorial stones in the country. High humidity and warm temperatures create ideal conditions for biological growth — algae, lichen, and mold can colonize granite surfaces within a few years of installation. Salt air from the Atlantic coast and St. Johns River accelerates surface weathering, and Florida's intense UV exposure can fade and degrade certain stone finishes.</p>
          <p>The good news: with proper professional cleaning and restoration, even heavily weathered monuments can be returned to a state of dignity and legibility.</p>
          <h3>Our Restoration Services</h3>
          <ul>
            <li><strong>Biological Growth Removal</strong> — Safe removal of algae, lichen, mold, and moss using proven cemetery-safe cleaning agents. We never use bleach or pressure washing, which can damage granite surfaces and surrounding graves.</li>
            <li><strong>Inscription Re-Cutting</strong> — Faded or barely legible lettering can be re-deepened and re-filled to restore original clarity.</li>
            <li><strong>Structural Resetting</strong> — Tipped, leaning, or sunken monuments are a common result of Florida's sandy, shifting soil. We excavate, reset foundations, and level monuments to meet cemetery specifications.</li>
            <li><strong>Bronze Cleaning & Re-Patination</strong> — We clean oxidized bronze markers and can apply a fresh protective sealant to restore a warm, golden appearance.</li>
            <li><strong>Crack Repair</strong> — Minor surface cracks and chips can often be repaired and sealed to prevent moisture infiltration.</li>
          </ul>
          <h3>Before You Request Restoration</h3>
          <p>Most cemetery restorations require prior approval. We contact your cemetery on your behalf, confirm the work scope, and submit any required permits before any work begins.</p>
        </div>
        <div class="space-y-6">
          <div class="bg-white rounded-xl p-6 border border-sage-light shadow-sm">
            <h3 class="font-serif text-lg font-semibold text-evergreen mb-4">Request a Restoration Quote</h3>
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
  { label: 'Guide to Buying a Headstone', href: '/resources/buying-guide' },
  { label: 'Cemeteries We Serve', href: '/cemeteries' },
  { label: 'FAQ', href: '/resources/faq' },
  { label: 'Contact Us', href: '/contact' },
];
</script>
