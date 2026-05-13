<template>
  <AppLayout>
    <Head title="Upright Monuments & Headstones Jacksonville | Duval Memorials" />

    <PageHero
      label="Traditional Headstones"
      title="Upright Monuments & Headstones in Jacksonville"
      subtitle="Classic standing headstones crafted in granite, marble, or blue pearl for Duval County families. Custom engraving included. Cemetery approval guaranteed."
    />

    <!-- Main content -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">

        <!-- Content -->
        <div class="lg:col-span-2 prose-custom">
          <h2>The Most Recognized Headstone Style in Northeast Florida</h2>
          <p>Upright monuments — also called standing headstones — are the most traditional and widely used memorial style across Jacksonville cemeteries. They stand vertically from a base, providing ample space for custom engraving, portraits, scripture, military insignia, and meaningful artwork.</p>
          <p>At Duval Memorials, every upright monument is quarried from premium granite, finished to your specifications, and submitted to your cemetery for approval before production begins. We work with every major cemetery in Duval, St. Johns, Clay, Nassau, and Baker counties.</p>

          <h3>Materials We Work With</h3>
          <ul>
            <li><strong>Black Granite</strong> — The most popular choice in Florida. Black granite provides the highest contrast for laser-etched portraits and white-filled lettering, and it resists UV fading better than lighter stones.</li>
            <li><strong>Gray Granite</strong> — A timeless, understated choice available in several shades from light gray to charcoal.</li>
            <li><strong>Blue Pearl Granite</strong> — Imported Norwegian granite with a distinctive blue shimmer. Highly durable in Florida's coastal climate.</li>
            <li><strong>Red and Pink Granites</strong> — Available for families seeking a warmer, more distinctive look.</li>
          </ul>

          <h3>Florida-Specific Considerations</h3>
          <p>Jacksonville's climate creates unique challenges for headstones. Salt air from the Atlantic and St. Johns River accelerates surface weathering on inferior stones. High humidity encourages algae and lichen growth on rough surfaces. UV exposure from Florida's intense sun can fade porous stones over time.</p>
          <p>We address each of these by specifying polished finishes that resist moisture absorption, and by recommending stone types proven in the First Coast environment.</p>

          <h3>Cemetery Requirements in Duval County</h3>
          <p>Every cemetery has its own rules regarding monument height, width, base requirements, and foundation specifications. Many Florida cemeteries require reinforced concrete foundations due to the region's sandy, shifting soil. We handle all foundation work and submit the required documentation to your cemetery before installation.</p>
        </div>

        <!-- Sidebar -->
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
  { label: 'Custom Engraving', href: '/headstones/custom-engraving' },
  { label: 'Headstone Pricing Guide', href: '/resources/pricing' },
  { label: 'Cemetery Rules We Know', href: '/cemeteries' },
];
</script>
