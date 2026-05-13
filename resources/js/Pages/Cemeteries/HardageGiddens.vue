<template>
  <AppLayout>
    <Head title="Headstones for Hardage-Giddens Oaklawn Cemetery Jacksonville | Duval Memorials" />
    <PageHero label="Hardage-Giddens Oaklawn · Jacksonville" title="Headstones for Hardage-Giddens Oaklawn Cemetery" subtitle="We coordinate directly with Hardage-Giddens Oaklawn Cemetery on all monument approvals. Free design proof with every inquiry." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>About Hardage-Giddens Oaklawn Cemetery</h2>
          <p>Hardage-Giddens Oaklawn Cemetery is a well-established private cemetery in Jacksonville, Florida, operated in conjunction with the Hardage-Giddens Funeral Home network — one of the most trusted funeral service providers in Duval County. The cemetery maintains a peaceful, well-kept environment and is a popular choice among Jacksonville families.</p>
          <h3>Monument Guidelines at Oaklawn Cemetery</h3>
          <p>As a private cemetery, Hardage-Giddens Oaklawn maintains its own monument regulations that differ by section. Most sections accommodate both upright monuments and flat grave markers, with specific dimension limits. We confirm the rules for your specific lot before any order is placed.</p>
          <h3>Working With Funeral Home-Associated Cemeteries</h3>
          <p>Families who arrange funerals through Hardage-Giddens are sometimes presented with headstone options through the funeral home itself. You are always free to purchase your memorial through an independent provider like Duval Memorials — and this often results in significant savings with no compromise in quality. We work cooperatively with Hardage-Giddens on all installation coordination.</p>
          <h3>Our Process at Oaklawn Cemetery</h3>
          <ul>
            <li>We verify monument regulations for your specific section and lot</li>
            <li>We submit your design for cemetery approval</li>
            <li>We handle foundation engineering and installation</li>
            <li>We coordinate delivery timing with cemetery staff</li>
          </ul>
        </div>
        <div class="space-y-6">
          <div class="bg-white rounded-xl p-6 border border-sage-light shadow-sm">
            <h3 class="font-serif text-lg font-semibold text-evergreen mb-4">Order a Headstone for Oaklawn Cemetery</h3>
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
  { label: 'All Jacksonville Cemeteries', href: '/cemeteries' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'Flat Grave Markers', href: '/headstones/flat-markers' },
  { label: 'Headstone Pricing', href: '/resources/pricing' },
];
</script>
