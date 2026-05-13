<template>
  <AppLayout>
    <Head title="Headstones for Jacksonville Memory Gardens Orange Park | Duval Memorials" />
    <PageHero label="Jacksonville Memory Gardens · Orange Park" title="Headstones for Jacksonville Memory Gardens" subtitle="Serving families at Jacksonville Memory Gardens in Orange Park with full-service monument ordering, design proofs, and cemetery-approved installation." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>About Jacksonville Memory Gardens</h2>
          <p>Jacksonville Memory Gardens is one of the largest combined cemetery and funeral home complexes in the Orange Park and Clay County area. Its expansive grounds serve thousands of families across the south Duval and Clay County region, and it offers a wide range of memorialization options including traditional in-ground burial, mausoleums, and garden niches.</p>
          <h3>Monument Regulations at Jacksonville Memory Gardens</h3>
          <p>Jacksonville Memory Gardens has detailed monument regulations that vary by section. Most sections accommodate flat markers, while designated upright monument sections are also available. Bronze memorial options are popular at this cemetery given the landscape-focused grounds maintenance approach. We confirm all specifications for your lot before ordering.</p>
          <h3>Serving Clay County Families</h3>
          <p>Many families in the Orange Park, Fleming Island, and Middleburg areas choose Jacksonville Memory Gardens for its accessibility and comprehensive services. Duval Memorials is a preferred independent headstone provider for Clay County families seeking quality and fair pricing outside of funeral home-affiliated vendors.</p>
        </div>
        <div class="space-y-6">
          <div class="bg-white rounded-xl p-6 border border-sage-light shadow-sm">
            <h3 class="font-serif text-lg font-semibold text-evergreen mb-4">Order a Headstone for Jacksonville Memory Gardens</h3>
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
  { label: 'Orange Park Service Area', href: '/service-areas/orange-park' },
  { label: 'Magnolia Cemetery', href: '/cemeteries/magnolia-cemetery' },
  { label: 'All Cemeteries We Serve', href: '/cemeteries' },
  { label: 'Headstone Pricing', href: '/resources/pricing' },
];
</script>
