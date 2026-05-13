<template>
  <AppLayout>
    <Head title="Headstone Resources for Jacksonville Families | Duval Memorials" />
    <PageHero label="Resource Library" title="Headstone Resources for First Coast Families" subtitle="Everything you need to make an informed, confident decision during a difficult time. Free guides written specifically for Florida families." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
          <Link v-for="resource in resources" :key="resource.href" :href="resource.href" class="group bg-white rounded-xl p-6 border border-sage-light hover:border-evergreen hover:shadow-md transition-all flex flex-col">
            <div class="w-11 h-11 bg-evergreen/10 rounded-lg flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-evergreen" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" v-html="resource.iconPath"></svg>
            </div>
            <h2 class="font-semibold text-evergreen mb-2 group-hover:text-evergreen-light">{{ resource.title }}</h2>
            <p class="text-sm text-granite-light leading-relaxed flex-1">{{ resource.description }}</p>
            <div class="mt-4 flex items-center gap-1 text-bronze text-sm font-medium">
              Read guide <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </div>
          </Link>
        </div>

        <!-- Quote CTA -->
        <div class="bg-evergreen text-white rounded-2xl p-10 text-center">
          <h2 class="font-serif text-2xl sm:text-3xl font-semibold mb-3">Still Have Questions?</h2>
          <p class="text-white/70 mb-6 max-w-xl mx-auto">Our memorial guides are here to help — no pressure, no sales pitch. Just honest answers from people who know Jacksonville's cemeteries.</p>
          <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <Link href="/contact" class="inline-flex items-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-8 py-3.5 rounded-lg transition-colors">Request a Free Design Proof</Link>
            <a href="tel:+19045550000" class="inline-flex items-center gap-2 border border-white/30 hover:border-white text-white font-semibold px-8 py-3.5 rounded-lg transition-colors">Call (904) 555-0000</a>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>
<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import PageHero from '@/Components/PageHero.vue';

const resources = [
  {
    title: 'Guide to Buying a Headstone in Florida',
    description: 'A step-by-step guide to the headstone ordering process in Florida — from choosing a style to cemetery installation. Written for First Coast families.',
    href: '/resources/buying-guide',
    iconPath: '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>',
  },
  {
    title: 'Headstone Pricing & Costs',
    description: 'Transparent price ranges for every headstone style — upright monuments, flat markers, bronze, and more. No hidden fees, no surprises.',
    href: '/resources/pricing',
    iconPath: '<path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>',
  },
  {
    title: 'Frequently Asked Questions',
    description: 'Answers to the questions Jacksonville families ask most — timelines, cemetery rules, military markers, payment options, and more.',
    href: '/resources/faq',
    iconPath: '<path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>',
  },
];
</script>
