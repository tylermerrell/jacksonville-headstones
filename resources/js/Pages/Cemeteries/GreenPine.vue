<template>
  <AppLayout>
    <Head title="Headstones for Green Pine Cemetery Yulee FL | Duval Memorials" />
    <PageHero label="Green Pine Cemetery · Yulee" title="Headstones for Green Pine Cemetery, Yulee" subtitle="Serving Nassau County families at Green Pine Cemetery in Yulee with custom granite memorials, cemetery approval, and professional installation." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>About Green Pine Cemetery</h2>
          <p>Green Pine Cemetery serves the Yulee community in Nassau County — a rapidly growing area as families move north of Jacksonville along the I-95 corridor. As the Yulee community has expanded, so has the need for local memorial services that understand the area's cemeteries and community values.</p>
          <h3>Monument Requirements at Green Pine Cemetery</h3>
          <p>Green Pine Cemetery maintains its own monument guidelines. As a community cemetery in a growing area, its requirements are generally less restrictive than those of large memorial park corporations, but we still contact the cemetery directly before placing any order to confirm current specifications.</p>
          <h3>Serving the Growing Yulee Community</h3>
          <p>Duval Memorials recognizes that the Yulee, Callahan, and Hilliard communities of Nassau County represent a distinct local identity separate from Fernandina Beach. We're proud to serve these communities with the same care and expertise we bring to every First Coast cemetery.</p>
          <h3>What We Offer Yulee Families</h3>
          <ul>
            <li>Full selection of upright monuments, flat markers, slant markers, and bronze memorials</li>
            <li>Custom portrait engraving, military insignia, and custom artwork</li>
            <li>Free design proof with every inquiry</li>
            <li>Local delivery and professional installation</li>
          </ul>
        </div>
        <div class="space-y-6">
          <div class="bg-white rounded-xl p-6 border border-sage-light shadow-sm">
            <h3 class="font-serif text-lg font-semibold text-evergreen mb-4">Order a Headstone for Green Pine Cemetery</h3>
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
  { label: 'Bosque Bello Cemetery', href: '/cemeteries/bosque-bello-cemetery' },
  { label: 'All Cemeteries We Serve', href: '/cemeteries' },
  { label: 'Headstone Pricing', href: '/resources/pricing' },
];
</script>
