<template>
  <AppLayout>
    <Head title="Guide to Buying a Headstone in Florida | Duval Memorials" />
    <PageHero label="Florida Buying Guide" title="Guide to Buying a Headstone in Florida" subtitle="A step-by-step guide for First Coast families navigating the headstone process — from choosing a style to cemetery approval and installation." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>Step 1: Understand Your Cemetery's Rules</h2>
          <p>Before you think about style or price, start with your cemetery. Every cemetery in Jacksonville — from Evergreen Cemetery in Duval County to San Lorenzo in St. Augustine — has its own written rules (called "monument regulations") specifying what types of markers are allowed, maximum dimensions, approved materials, and foundation requirements.</p>
          <p>This is the step where many families run into problems when ordering from national online retailers. Duval Memorials contacts your cemetery first — every time, on every order.</p>

          <h2>Step 2: Choose a Memorial Style</h2>
          <p>Once you know what your cemetery permits, you can choose from:</p>
          <ul>
            <li><strong>Upright Monuments</strong> — Standing headstones, the most traditional style. Not permitted at all Florida cemeteries, particularly those with lawn-mower-friendly layouts.</li>
            <li><strong>Flat Markers</strong> — Flush-to-ground markers. Required at Jacksonville National Cemetery and preferred at many other local cemeteries.</li>
            <li><strong>Slant / Bevel Markers</strong> — Angled markers that offer better visibility than flat markers while remaining lower-profile than full uprights.</li>
            <li><strong>Bronze Memorials</strong> — Durable cast bronze on granite bases. Ideal for Florida's coastal climate and accepted at most area cemeteries.</li>
          </ul>

          <h2>Step 3: Choose Your Granite Color</h2>
          <p>Florida's climate makes material selection more important than in many other states. Our recommendations for the First Coast:</p>
          <ul>
            <li><strong>Black Granite</strong> — Best for laser-etched portraits. Highest UV resistance. The most popular choice in Jacksonville.</li>
            <li><strong>Gray Granite</strong> — Classic and understated. Available in several shades.</li>
            <li><strong>Blue Pearl (Norwegian Granite)</strong> — Highly durable in coastal environments.</li>
          </ul>

          <h2>Step 4: Design Your Memorial</h2>
          <p>This is where personalization happens. Consider:</p>
          <ul>
            <li>Name, dates, and epitaph wording</li>
            <li>Religious symbols, military insignia, or custom artwork</li>
            <li>Portrait engraving from a photograph</li>
            <li>Whether the monument will serve one person or accommodate a future companion inscription</li>
          </ul>
          <p>You'll receive a free design proof showing exactly what the finished memorial will look like before any production begins.</p>

          <h2>Step 5: Cemetery Approval & Installation</h2>
          <p>Once you approve the design, we submit it to your cemetery for formal approval. For most Jacksonville-area cemeteries, this takes 1–3 weeks. We then produce the memorial — typically 6–10 weeks for granite, 8–14 weeks for bronze — and handle all delivery, foundation work, and installation.</p>

          <h2>Florida-Specific Considerations</h2>
          <ul>
            <li><strong>Sandy soil</strong> — Florida's sandy, shifting soil requires reinforced concrete foundations for upright monuments. We design all foundations to each cemetery's specifications.</li>
            <li><strong>Humidity & algae</strong> — Polished granite surfaces resist biological growth better than rough or honed finishes. We recommend polished surfaces for all First Coast memorials.</li>
            <li><strong>Salt air</strong> — Families near the coast (The Beaches, Fernandina Beach, St. Augustine) should use marine-grade sealants on bronze memorials.</li>
            <li><strong>Hurricane preparedness</strong> — Properly set monuments with deep foundations withstand Florida's hurricane-force winds. Shortcuts on foundations can result in toppled monuments.</li>
          </ul>
        </div>
        <div class="space-y-6">
          <div class="bg-white rounded-xl p-6 border border-sage-light shadow-sm">
            <h3 class="font-serif text-lg font-semibold text-evergreen mb-4">Ready to Get Started?</h3>
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
  { label: 'Headstone Pricing & Costs', href: '/resources/pricing' },
  { label: 'Frequently Asked Questions', href: '/resources/faq' },
  { label: 'All Cemeteries We Serve', href: '/cemeteries' },
  { label: 'Design Inspiration Gallery', href: '/gallery' },
];
</script>
