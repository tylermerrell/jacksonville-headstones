<template>
  <AppLayout>
    <Head title="Flat Grave Markers Jacksonville FL | Duval Memorials" />
    <PageHero label="Flush Memorials" title="Flat Grave Markers in Jacksonville" subtitle="Ground-level granite markers that meet virtually every Florida cemetery regulation. Custom engraved and delivered to your cemetery." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>Flat Markers: The Most Universally Accepted Memorial Style in Florida</h2>
          <p>Flat grave markers — also called flush markers or lawn-level memorials — lie flat with the ground surface, making them the preferred (and often required) style at many Jacksonville-area cemeteries. Their low profile simplifies grounds maintenance and complies with the rules at nearly every cemetery in Duval, Clay, St. Johns, Nassau, and Baker counties.</p>
          <h3>Why Florida Families Choose Flat Markers</h3>
          <ul>
            <li><strong>Cemetery Compliant</strong> — Required at many local cemeteries including Jacksonville National Cemetery, where all markers must be flush to the ground.</li>
            <li><strong>Cost-Effective</strong> — Flat markers are often less expensive than upright monuments while still offering full customization.</li>
            <li><strong>Durable in Florida's Climate</strong> — Polished granite surfaces resist algae growth and UV fading better than rough-cut or unpolished stones.</li>
            <li><strong>Fully Customizable</strong> — Choose granite color, lettering style, borders, emblems, and artwork.</li>
          </ul>
          <h3>Standard Sizes for Florida Cemeteries</h3>
          <p>Common flat marker sizes are 12"×24", 16"×28", and 20"×36" (single) and 24"×48" (companion/double). We confirm the allowable dimensions with your cemetery before cutting.</p>
          <h3>Bronze Flat Markers</h3>
          <p>We also produce bronze flat markers mounted on granite bases — a popular choice at older Jacksonville cemeteries. See our <a href="/headstones/bronze-memorials" class="text-bronze hover:underline">Bronze Memorials page</a> for details.</p>
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
  { label: 'Bronze Memorials & Plaques', href: '/headstones/bronze-memorials' },
  { label: 'Jacksonville National Cemetery', href: '/cemeteries/jacksonville-national-cemetery' },
  { label: 'Headstone Pricing', href: '/resources/pricing' },
];
</script>
