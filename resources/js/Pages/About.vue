<template>
  <AppLayout>
    <Head title="About Us | Duval Memorials and Monuments" />

    <!-- Hero -->
    <section class="bg-evergreen text-white py-16 px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center">
        <p class="text-sage-light text-sm tracking-widest uppercase mb-3">Our Story</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-6">Rooted in Jacksonville, Committed to Families</h1>
        <p class="text-white/75 text-lg max-w-2xl mx-auto leading-relaxed">Duval Memorials was built on a single belief: every family on the First Coast deserves a memorial that is handled with care, expertise, and complete transparency.</p>
      </div>
    </section>

    <!-- Story section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-5xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="font-serif text-3xl font-semibold text-evergreen mb-5">Why We Started</h2>
          <div class="space-y-4 text-granite-light leading-relaxed">
            <p>After watching too many families get burned by out-of-state online retailers who shipped headstones that were rejected by Florida cemeteries, we decided to build something different — a locally operated memorial company that puts cemetery compliance first.</p>
            <p>We know the rules at Evergreen Cemetery, Jacksonville National, and dozens of other First Coast cemeteries because we've worked with them directly. When you order through Duval Memorials, we contact your cemetery before a single stone is cut.</p>
            <p>We're proud to serve Duval, St. Johns, Clay, Nassau, and Baker counties, and we understand the local climate challenges — salt air from the coast, high humidity that encourages algae growth on granite, and intense UV exposure that can fade inferior finishes.</p>
          </div>
        </div>
        <div class="bg-sage-light rounded-2xl p-8 space-y-6">
          <div v-for="value in values" :key="value.title" class="flex gap-4">
            <div class="flex-shrink-0 w-10 h-10 bg-evergreen rounded-full flex items-center justify-center">
              <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <div>
              <h3 class="font-semibold text-evergreen mb-1">{{ value.title }}</h3>
              <p class="text-sm text-granite-light">{{ value.body }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Military section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-sage-light">
      <div class="max-w-5xl mx-auto text-center">
        <h2 class="font-serif text-3xl font-semibold text-evergreen mb-4">Proud to Serve Our Military Community</h2>
        <p class="text-granite-light max-w-2xl mx-auto mb-8 leading-relaxed">Jacksonville is home to NAS Jacksonville and Naval Station Mayport. We have deep experience with VA marker regulations and helping veteran families navigate the memorial process at no extra charge.</p>
        <Link href="/contact" class="inline-flex items-center gap-2 bg-evergreen hover:bg-evergreen-dark text-white font-semibold px-8 py-3.5 rounded-lg transition-colors">
          Talk to a Memorial Guide
        </Link>
      </div>
    </section>

    <!-- CTA -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone text-center">
      <div class="max-w-2xl mx-auto">
        <h2 class="font-serif text-3xl font-semibold text-evergreen mb-4">Ready to Get Started?</h2>
        <p class="text-granite-light mb-8">Request a free design proof — no obligation, no pressure. We'll reach out within one business day.</p>
        <Link href="/contact" class="inline-flex items-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-8 py-3.5 rounded-lg transition-colors">
          Request a Free Design Proof
        </Link>
      </div>
    </section>

  </AppLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

const values = [
  { title: 'Cemetery Approval First', body: 'We verify your cemetery\'s rules before any work begins — guaranteed approval or we make it right.' },
  { title: 'Locally Owned & Operated', body: 'Not a national chain or an overseas factory. We\'re based in Duval County and personally oversee every order.' },
  { title: 'Florida Climate Expertise', body: 'We specify materials that resist salt air, humidity-driven algae, and UV fading unique to northeast Florida.' },
  { title: 'Empathetic Service', body: 'We understand this is one of the hardest times in a family\'s life. We move at your pace with no pressure.' },
];
</script>
