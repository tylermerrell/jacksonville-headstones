<template>
  <AppLayout>
    <Head title="Headstones in Macclenny & Baker County | Duval Memorials" />
    <PageHero label="Baker County" title="Headstones & Monuments in Macclenny" subtitle="Serving Macclenny, Glen St. Mary, Sanderson, and all of Baker County with crafted granite memorials and complete cemetery support." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>Serving Baker County with Care</h2>
          <p>Baker County is the westernmost county we serve on the First Coast, and its communities have a deeply rooted character and tradition. Duval Memorials is committed to serving Macclenny families with the same quality, care, and cemetery expertise we bring to every county we work in.</p>
          <h3>Baker County Cemetery Service</h3>
          <p>Baker County's smaller community cemeteries often have less formal written rules, but this can make the ordering process more — not less — complex. We reach out directly to cemetery administrators, church boards, or family cemetery trustees to confirm requirements before production begins.</p>
          <h3>What We Offer Baker County Families</h3>
          <ul>
            <li>Full selection of upright monuments, flat markers, slant/bevel markers, and bronze memorials</li>
            <li>Custom engraving including portraits, military insignia, and custom artwork</li>
            <li>Delivery and professional installation at your cemetery</li>
            <li>Monument cleaning and restoration for older family plots</li>
          </ul>
          <h3>Communities We Serve in Baker County</h3>
          <p>Macclenny, Glen St. Mary, Sanderson, Olustee, and all surrounding Baker County communities.</p>
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
  { label: 'Guide to Buying a Headstone', href: '/resources/buying-guide' },
  { label: 'All Cemeteries We Serve', href: '/cemeteries' },
  { label: 'Monument Restoration', href: '/headstones/restoration' },
  { label: 'Contact Us', href: '/contact' },
];
</script>
