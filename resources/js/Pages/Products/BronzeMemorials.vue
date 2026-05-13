<template>
  <AppLayout>
    <Head title="Bronze Memorials & Plaques Jacksonville | Duval Memorials" />
    <PageHero label="Bronze Memorials" title="Bronze Memorials & Plaques in Jacksonville" subtitle="Cast bronze plaques and markers built to endure Florida's salt air, humidity, and coastal climate — guaranteed for decades." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>Why Bronze is Ideal for First Coast Cemeteries</h2>
          <p>Bronze has been used for cemetery memorials for over a century because of its exceptional durability and timeless appearance. In Jacksonville's coastal environment — where salt air from the Atlantic and St. Johns River accelerates corrosion on lesser metals — properly cast and finished bronze develops a beautiful protective patina that actually strengthens over time.</p>
          <h3>Types of Bronze Memorials We Offer</h3>
          <ul>
            <li><strong>Bronze Flat Markers on Granite</strong> — The most common style, featuring a raised bronze tablet mounted on a polished granite base. Accepted at nearly all Jacksonville cemeteries.</li>
            <li><strong>Bronze Upright Plaques</strong> — Larger bronze panels mounted on granite monuments for a premium, historic look.</li>
            <li><strong>Military Bronze Markers</strong> — We produce VA-specification markers for eligible veterans and assist families with the application process.</li>
            <li><strong>Columbarium Plaques</strong> — Custom bronze plaques for indoor or outdoor niches at local columbarium facilities.</li>
          </ul>
          <h3>Bronze Patina in Florida's Climate</h3>
          <p>A common concern is bronze turning green. This natural oxidation — called patina — is actually a sign of quality bronze and protects the underlying metal. We can also supply bronze with a sealed finish to maintain a warmer, golden tone longer. Both options are available and we'll walk you through the pros and cons.</p>
          <h3>VA Bronze Markers for Veterans</h3>
          <p>The Department of Veterans Affairs provides free bronze flat markers for eligible veterans. We help First Coast families navigate the VA application process and coordinate delivery and installation at Jacksonville National Cemetery and other area cemeteries. Learn more on our <a href="/cemeteries/jacksonville-national-cemetery" class="text-bronze hover:underline">Jacksonville National Cemetery page</a>.</p>
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
  { label: 'Flat Grave Markers', href: '/headstones/flat-markers' },
  { label: 'Jacksonville National Cemetery', href: '/cemeteries/jacksonville-national-cemetery' },
  { label: 'Custom Engraving', href: '/headstones/custom-engraving' },
  { label: 'Headstone Pricing', href: '/resources/pricing' },
];
</script>
