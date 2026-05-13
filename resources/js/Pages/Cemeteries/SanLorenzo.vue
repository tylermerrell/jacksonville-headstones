<template>
  <AppLayout>
    <Head title="Headstones for San Lorenzo Cemetery St. Augustine | Duval Memorials" />
    <PageHero label="San Lorenzo Cemetery · St. Augustine" title="Headstones for San Lorenzo Cemetery, St. Augustine" subtitle="Catholic cemetery governed by Diocese of St. Augustine guidelines. We handle all Diocese requirements and documentation on your behalf." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>About San Lorenzo Cemetery</h2>
          <p>San Lorenzo Cemetery is one of St. Augustine's historic Catholic cemeteries, operating under the oversight of the Diocese of St. Augustine. Given St. Augustine's status as the oldest continuously inhabited city in the United States, its Catholic cemeteries have a rich and deeply rooted character that comes with carefully maintained standards for memorialization.</p>
          <h3>Catholic Diocese of St. Augustine Requirements</h3>
          <p>Monuments placed in Diocese-administered cemeteries like San Lorenzo must comply with Diocese of St. Augustine cemetery regulations, which include:</p>
          <ul>
            <li><strong>Approved materials</strong> — Granite and bronze are the standard approved materials. The Diocese specifies acceptable grades and finishes.</li>
            <li><strong>Dimensional limits</strong> — Maximum height, width, and base dimensions that vary by section and monument type.</li>
            <li><strong>Religious symbol guidelines</strong> — The Diocese has specific policies on approved and non-approved religious imagery.</li>
            <li><strong>Inscription content</strong> — Epitaphs and inscriptions must be reviewed and approved.</li>
            <li><strong>Foundation requirements</strong> — Diocese-specified foundation standards for all upright monuments.</li>
          </ul>
          <h3>Our Experience with Diocese Cemeteries</h3>
          <p>We have extensive experience navigating Diocese of St. Augustine requirements and maintain good working relationships with cemetery administrators. We handle all Diocese paperwork and approval coordination — you focus on the memorial, we handle the process.</p>
          <h3>St. Augustine's Coastal Climate</h3>
          <p>St. Augustine's proximity to the Atlantic means elevated salt air exposure for cemetery monuments. We recommend marine-grade bronze sealants and polished granite finishes to maximize the longevity of memorials at San Lorenzo and other St. Johns County cemeteries.</p>
        </div>
        <div class="space-y-6">
          <div class="bg-white rounded-xl p-6 border border-sage-light shadow-sm">
            <h3 class="font-serif text-lg font-semibold text-evergreen mb-4">Order a Headstone for San Lorenzo Cemetery</h3>
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
  { label: 'Craig Memorial Park', href: '/cemeteries/craig-memorial-park' },
  { label: 'All Cemeteries We Serve', href: '/cemeteries' },
  { label: 'Guide to Buying a Headstone', href: '/resources/buying-guide' },
];
</script>
