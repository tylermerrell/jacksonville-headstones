<template>
  <AppLayout>
    <Head title="Slant & Bevel Grave Markers Jacksonville | Duval Memorials" />
    <PageHero label="Angled Markers" title="Slant & Bevel Markers in Jacksonville" subtitle="A versatile middle ground between upright monuments and flat markers — excellent visibility, lower profile, and full customization options." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>Slant and Bevel Markers: The Best of Both Worlds</h2>
          <p>Slant markers (also called bevel markers) feature an angled top surface that creates natural visibility of the engraving while maintaining a lower profile than traditional upright monuments. They sit on a base directly on the ground and are accepted at many Jacksonville-area cemeteries that restrict full upright monuments.</p>
          <h3>Slant Markers vs. Bevel Markers</h3>
          <ul>
            <li><strong>Bevel Markers</strong> — Relatively low profile with a gentle angle. Typically 3–6 inches tall at the back and nearly flush at the front. A good choice for cemeteries with low height restrictions.</li>
            <li><strong>Slant Markers</strong> — Taller and more steeply angled, usually 12–16 inches at the tallest point. More visible from a distance while still lower than full upright monuments.</li>
          </ul>
          <h3>Granite Options for Slant Markers</h3>
          <p>Slant and bevel markers are available in all standard granite colors — black, gray, blue pearl, and red. The polished angled face is ideal for laser-etched portraits, detailed artwork, and multi-color lettering.</p>
          <h3>Cemetery Restrictions in the Jacksonville Area</h3>
          <p>Before ordering, we contact your cemetery to verify whether slant or bevel markers are permitted and confirm the maximum allowable dimensions. Some cemeteries permit slant markers where upright monuments are restricted. We handle all of this on your behalf.</p>
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
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'Flat Grave Markers', href: '/headstones/flat-markers' },
  { label: 'Design Inspiration Gallery', href: '/gallery' },
  { label: 'Headstone Pricing', href: '/resources/pricing' },
];
</script>
