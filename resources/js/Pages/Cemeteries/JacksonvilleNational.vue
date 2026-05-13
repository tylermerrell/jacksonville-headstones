<template>
  <AppLayout>
    <Head title="Headstones for Jacksonville National Cemetery | Duval Memorials" />
    <PageHero label="Jacksonville National Cemetery · VA" title="Headstones for Jacksonville National Cemetery" subtitle="We help veteran families navigate VA marker regulations and handle all coordination with Jacksonville National Cemetery." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>About Jacksonville National Cemetery</h2>
          <p>Jacksonville National Cemetery is a federally administered Veterans Affairs cemetery serving veterans of the United States Armed Forces, their spouses, and eligible dependents. It is one of the most significant military burial grounds on the First Coast, with direct connections to NAS Jacksonville and Naval Station Mayport.</p>
          <h3>Monument Regulations at Jacksonville National Cemetery</h3>
          <p>As a VA national cemetery, Jacksonville National has very specific and non-negotiable marker requirements:</p>
          <ul>
            <li><strong>All markers must be flat and flush to the ground.</strong> Upright monuments, slant markers, and any standing structures are not permitted.</li>
            <li>The VA provides government-furnished markers (flat granite or bronze) for eligible veterans at no cost to the family.</li>
            <li>Private family-purchased markers must meet VA specifications for materials, size, and installation.</li>
            <li>All marker applications must be submitted through the National Cemetery Scheduling Office.</li>
          </ul>
          <h3>VA Marker Application: How We Help</h3>
          <p>Navigating the VA application process is confusing and time-consuming for families already in the midst of grief. Duval Memorials helps First Coast veteran families with:</p>
          <ul>
            <li>Understanding eligibility for government-furnished markers</li>
            <li>Completing and submitting VA Form 40-1330 (application for standard government markers)</li>
            <li>Coordinating delivery and installation at Jacksonville National Cemetery</li>
            <li>Designing and producing private markers that meet VA specifications for families who want to add personal engravings beyond what government markers provide</li>
          </ul>
          <h3>Military Engraving Options</h3>
          <p>For private markers placed at Jacksonville National, we can include branch insignia (Army, Navy, Marines, Air Force, Coast Guard, Space Force), rank, unit designations, military occupational specialties, and combat decorations — all subject to cemetery approval.</p>
        </div>
        <div class="space-y-6">
          <div class="bg-white rounded-xl p-6 border border-sage-light shadow-sm">
            <h3 class="font-serif text-lg font-semibold text-evergreen mb-4">Get Help with VA Cemetery Coordination</h3>
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
  { label: 'Flat Grave Markers', href: '/headstones/flat-markers' },
  { label: 'Bronze Memorials', href: '/headstones/bronze-memorials' },
  { label: 'All Cemeteries We Serve', href: '/cemeteries' },
  { label: 'FAQ — Military Markers', href: '/resources/faq' },
];
</script>
