<template>
  <AppLayout>
    <Head title="Headstones in Jacksonville Beach & The Beaches | Duval Memorials" />
    <PageHero label="The Beaches" title="Headstones & Monuments at Jacksonville Beach" subtitle="Serving Atlantic Beach, Neptune Beach, Jacksonville Beach, and Ponte Vedra. Coastal climate expertise built into every memorial we craft." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>Memorial Stones Built for Coastal Florida</h2>
          <p>Families in the Jacksonville Beach communities — Atlantic Beach, Neptune Beach, Jacksonville Beach, and Ponte Vedra — live in one of the most beautiful but climatically demanding environments in Florida. The combination of salt air, humidity, and intense UV exposure creates unique challenges for cemetery monuments that we've spent years learning to address.</p>
          <h3>Cemeteries We Serve at The Beaches</h3>
          <ul>
            <li><a href="/cemeteries/beaches-memorial-park" class="text-bronze hover:underline">Beaches Memorial Park (Atlantic Beach)</a> — A peaceful park-style cemetery serving the barrier island communities.</li>
            <li><a href="/cemeteries/lee-kirkland-smith-cemeteries" class="text-bronze hover:underline">Lee Kirkland & H. Warren Smith Cemeteries (Jacksonville Beach)</a> — Historic cemeteries with their own specific requirements.</li>
          </ul>
          <h3>Salt Air and Granite: What You Need to Know</h3>
          <p>Salt air is the primary environmental enemy of granite and bronze at The Beaches. It promotes surface etching on polished granite over many years and accelerates oxidation on unprotected bronze. We address this by recommending the most resistant granite varieties and marine-grade sealants for all bronze memorials installed within a mile of the coastline.</p>
          <h3>Communities We Serve</h3>
          <p>We serve Atlantic Beach, Neptune Beach, Jacksonville Beach, Ponte Vedra Beach, Ponte Vedra, Palm Valley, and all surrounding barrier island communities.</p>
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
  { label: 'Beaches Memorial Park', href: '/cemeteries/beaches-memorial-park' },
  { label: 'Lee Kirkland & Smith Cemeteries', href: '/cemeteries/lee-kirkland-smith-cemeteries' },
  { label: 'Bronze Memorials for Coastal Areas', href: '/headstones/bronze-memorials' },
  { label: 'Headstone Pricing', href: '/resources/pricing' },
];
</script>
