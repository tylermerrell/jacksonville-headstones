<template>
  <AppLayout>
    <Head title="Headstones for Magnolia Cemetery Orange Park | Duval Memorials" />
    <PageHero label="Magnolia Cemetery · Orange Park" title="Headstones for Magnolia Cemetery, Orange Park" subtitle="Ordering a headstone for Magnolia Cemetery in Orange Park? We handle all approvals and installation. Free design proof included." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>About Magnolia Cemetery, Orange Park</h2>
          <p>Magnolia Cemetery is a historic, well-established community cemetery in Orange Park, Clay County. Its mature landscaping and traditional character are reflected in the monument styles found throughout the property — from classic upright monuments to flat markers and bronze memorials.</p>
          <h3>Monument Requirements at Magnolia Cemetery</h3>
          <p>Magnolia Cemetery accommodates traditional upright monuments as well as flat and bevel markers. Specific requirements depend on your section. We contact the cemetery to confirm dimensions, base requirements, and approved materials for your specific lot before any order is placed.</p>
          <h3>Monument Restoration at Magnolia Cemetery</h3>
          <p>Magnolia Cemetery's older sections contain many weathered monuments that show Florida's biological growth — algae, lichen, and in some cases structural settling from the area's sandy soil. If you have a family plot with existing monuments that need cleaning or restoration, we offer full restoration services at this cemetery.</p>
        </div>
        <div class="space-y-6">
          <div class="bg-white rounded-xl p-6 border border-sage-light shadow-sm">
            <h3 class="font-serif text-lg font-semibold text-evergreen mb-4">Order a Headstone for Magnolia Cemetery</h3>
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
  { label: 'Jacksonville Memory Gardens', href: '/cemeteries/jacksonville-memory-gardens' },
  { label: 'Monument Restoration', href: '/headstones/restoration' },
  { label: 'All Cemeteries We Serve', href: '/cemeteries' },
];
</script>
