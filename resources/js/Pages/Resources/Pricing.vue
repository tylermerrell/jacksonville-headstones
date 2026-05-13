<template>
  <AppLayout>
    <Head title="Headstone Pricing & Costs in Jacksonville | Duval Memorials" />
    <PageHero label="Transparent Pricing" title="Headstone Pricing & Costs" subtitle="Honest price ranges for every memorial style. No hidden fees, no bait-and-switch. Call or text us for a precise quote on your specific order." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto">

        <!-- Pricing cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-14">
          <div v-for="item in pricing" :key="item.title" class="bg-white rounded-xl border border-sage-light p-6 shadow-sm">
            <h2 class="font-serif text-lg font-semibold text-evergreen mb-1">{{ item.title }}</h2>
            <div class="text-2xl font-bold text-bronze mb-3">{{ item.range }}</div>
            <p class="text-sm text-granite-light mb-4 leading-relaxed">{{ item.description }}</p>
            <ul class="space-y-1.5 text-sm text-granite-light">
              <li v-for="note in item.notes" :key="note" class="flex items-start gap-2">
                <svg class="w-4 h-4 text-evergreen flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                {{ note }}
              </li>
            </ul>
          </div>
        </div>

        <!-- What affects price -->
        <div class="bg-sage-light rounded-2xl p-8 mb-10 prose-custom">
          <h2>What Affects the Price of a Headstone?</h2>
          <ul>
            <li><strong>Size</strong> — Larger monuments require more material and more complex installation foundations.</li>
            <li><strong>Granite color</strong> — Imported granite varieties (Blue Pearl, exotic reds) cost more than domestic black or gray.</li>
            <li><strong>Engraving complexity</strong> — Simple lettering is less expensive than laser-etched portraits or detailed custom artwork.</li>
            <li><strong>Foundation type</strong> — Florida's sandy soil requires reinforced concrete foundations for upright monuments, which adds to installation cost.</li>
            <li><strong>Cemetery fees</strong> — Most cemeteries charge a separate installation or setting fee. We provide this estimate upfront before you commit to an order.</li>
            <li><strong>Bronze vs. granite</strong> — Bronze memorials typically cost more than equivalent granite due to materials and casting time.</li>
          </ul>
        </div>

        <!-- CTA -->
        <div class="text-center">
          <h2 class="font-serif text-2xl font-semibold text-evergreen mb-3">Get an Exact Quote for Your Order</h2>
          <p class="text-granite-light mb-6 max-w-xl mx-auto">Every memorial is different. Share your details and we'll provide a precise, written quote — no pressure, no obligation.</p>
          <Link href="/contact" class="inline-flex items-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-8 py-3.5 rounded-lg transition-colors">Request a Free Design Proof & Quote</Link>
        </div>

      </div>
    </section>
  </AppLayout>
</template>
<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import PageHero from '@/Components/PageHero.vue';

const pricing = [
  {
    title: 'Flat Grave Markers',
    range: '$400 – $900',
    description: 'Polished granite flush markers. The most affordable option and accepted at virtually all Florida cemeteries.',
    notes: ['Standard sizes: 12"×24" to 20"×36"', 'Custom lettering & simple engraving included', 'Cemetery setting fee not included'],
  },
  {
    title: 'Slant & Bevel Markers',
    range: '$700 – $1,400',
    description: 'Angled granite markers with higher visibility than flat markers and more customization space.',
    notes: ['Polished face ideal for portraits', 'Bronze lettering or gold-fill available', 'Base included'],
  },
  {
    title: 'Upright Monuments',
    range: '$1,200 – $4,000+',
    description: 'Traditional standing headstones in granite. Price varies significantly by size, stone color, and engraving complexity.',
    notes: ['Companion/double monuments available', 'Foundation required (included in price)', 'Full portrait engraving available'],
  },
  {
    title: 'Bronze Flat Markers',
    range: '$800 – $1,600',
    description: 'Cast bronze on granite bases. Highly durable in Florida\'s coastal climate. Popular for older Jacksonville cemeteries.',
    notes: ['Marine-grade sealant available', 'VA marker coordination available', 'Raised lettering standard'],
  },
  {
    title: 'Custom Engraving Add-Ons',
    range: '$150 – $600',
    description: 'Laser-etched portrait, custom artwork, or military insignia added to any marker or monument.',
    notes: ['Photo portrait from your image', 'Military emblems & branch insignia', 'Custom clipart & symbols'],
  },
  {
    title: 'Monument Restoration',
    range: '$200 – $800',
    description: 'Cleaning, resetting, re-engraving, and bronze re-patination for existing memorials.',
    notes: ['Cemetery approval handled for you', 'Algae & lichen removal', 'Monument resetting & leveling'],
  },
];
</script>
