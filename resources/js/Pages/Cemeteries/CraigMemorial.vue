<template>
  <AppLayout>
    <Head title="Headstones for Craig Memorial Park St. Augustine | Duval Memorials" />
    <PageHero label="Craig Memorial Park · St. Augustine" title="Headstones for Craig Memorial Park, St. Augustine" subtitle="Serving St. Augustine families at Craig Memorial Park with custom headstones, cemetery-approved designs, and professional installation." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>About Craig Memorial Park</h2>
          <p>Craig Memorial Park is a well-maintained private memorial park serving the greater St. Augustine and St. Johns County area. Its park-style setting and professional grounds maintenance reflect the high standards expected by the families and communities it serves.</p>
          <h3>Monument Requirements at Craig Memorial Park</h3>
          <p>Craig Memorial Park maintains its own monument regulations, which we review and confirm for every order. Most memorial park cemeteries in St. Johns County favor flush-to-ground or low-profile markers in many sections, though upright monument areas exist. We'll confirm your specific section's requirements and advise you on what options are available.</p>
          <h3>Florida Climate and Monument Selection</h3>
          <p>St. Augustine's position on the northeast Florida coast means elevated salt air exposure compared to inland cemeteries. For Craig Memorial Park, we typically recommend polished black or gray granite with marine-grade protective sealant on any bronze components.</p>
          <h3>Serving All St. Augustine Families</h3>
          <p>Whether your family is in St. Augustine proper, St. Augustine Beach, Vilano Beach, or anywhere in St. Johns County, Duval Memorials delivers and installs at Craig Memorial Park and all other area cemeteries.</p>
        </div>
        <div class="space-y-6">
          <div class="bg-white rounded-xl p-6 border border-sage-light shadow-sm">
            <h3 class="font-serif text-lg font-semibold text-evergreen mb-4">Order a Headstone for Craig Memorial Park</h3>
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
  { label: 'St. Augustine Service Area', href: '/service-areas/st-augustine' },
  { label: 'San Lorenzo Cemetery', href: '/cemeteries/san-lorenzo-cemetery' },
  { label: 'All Cemeteries We Serve', href: '/cemeteries' },
  { label: 'Headstone Pricing', href: '/resources/pricing' },
];
</script>
