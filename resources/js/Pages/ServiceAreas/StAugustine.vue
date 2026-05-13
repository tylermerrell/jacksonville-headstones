<template>
  <AppLayout>
    <Head title="Headstones in St. Augustine & St. Johns County | Duval Memorials" />
    <PageHero label="St. Johns County" title="Headstones & Monuments in St. Augustine" subtitle="Serving families in St. Augustine, Ponte Vedra, Nocatee, and all of St. Johns County. We know the rules at every local cemetery." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>Headstones in the Nation's Oldest City</h2>
          <p>St. Augustine's rich history — including centuries of Catholic heritage — means its cemeteries have some of the most unique and carefully maintained requirements in the state. Duval Memorials has worked extensively with cemeteries in St. Johns County and understands the requirements set by the Catholic Diocese of St. Augustine for monument styles, dimensions, and approved materials.</p>
          <h3>Cemeteries We Serve in St. Johns County</h3>
          <ul>
            <li><a href="/cemeteries/san-lorenzo-cemetery" class="text-bronze hover:underline">San Lorenzo Cemetery</a> — One of St. Augustine's oldest Catholic cemeteries. Strict Diocese guidelines apply.</li>
            <li><a href="/cemeteries/craig-memorial-park" class="text-bronze hover:underline">Craig Memorial Park</a> — A well-maintained private memorial park serving the greater St. Augustine area.</li>
          </ul>
          <h3>Catholic Diocese Requirements</h3>
          <p>Headstones placed in Catholic cemeteries within the Diocese of St. Augustine must meet specific guidelines regarding approved materials, maximum dimensions, permitted religious symbols, and inscription content. We are fully versed in these requirements and handle Diocese submission on your behalf.</p>
          <h3>Florida Climate Considerations Near the Coast</h3>
          <p>St. Augustine's proximity to the Atlantic creates particularly challenging conditions for cemetery monuments. Salt-laden air accelerates surface corrosion on bronze and promotes faster biological growth on granite. We recommend polished granite finishes and marine-grade bronze sealants for all St. Johns County memorials.</p>
          <h3>Serving All of St. Johns County</h3>
          <p>We deliver and install headstones throughout St. Augustine, St. Augustine Beach, Ponte Vedra Beach, Nocatee, Palm Valley, Switzerland, and Hastings.</p>
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
  { label: 'San Lorenzo Cemetery', href: '/cemeteries/san-lorenzo-cemetery' },
  { label: 'Craig Memorial Park', href: '/cemeteries/craig-memorial-park' },
  { label: 'Guide to Buying a Headstone in Florida', href: '/resources/buying-guide' },
  { label: 'All Cemeteries We Serve', href: '/cemeteries' },
];
</script>
