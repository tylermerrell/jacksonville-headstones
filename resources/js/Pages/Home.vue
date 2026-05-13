<template>
  <AppLayout>
    <Head title="Jacksonville Headstones & Monuments | Duval Memorials" />

    <!-- Hero -->
    <section class="bg-evergreen text-white py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
      <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 40px, rgba(255,255,255,.05) 40px, rgba(255,255,255,.05) 80px);"></div>
      </div>
      <div class="max-w-5xl mx-auto relative text-center">
        <p class="text-sage-light text-sm font-medium tracking-widest uppercase mb-4">Serving the First Coast Since Day One</p>
        <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-semibold leading-tight mb-6">
          Jacksonville Headstones &amp;<br class="hidden sm:block"> Monuments, Done Right
        </h1>
        <p class="text-white/80 text-lg sm:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
          Duval Memorials crafts custom headstones, grave markers, and bronze plaques for families across Duval, St. Johns, Clay, Nassau, and Baker counties. Cemetery approval guaranteed on every order.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
          <Link href="/contact" class="inline-flex items-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-8 py-3.5 rounded-lg transition-colors shadow-lg text-base">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.5-6.5a2.121 2.121 0 013 3L12 16H9v-3z"/></svg>
            Request a Free Design Proof
          </Link>
          <a href="tel:+19045550000" class="inline-flex items-center gap-2 border border-white/30 hover:border-white text-white font-semibold px-8 py-3.5 rounded-lg transition-colors text-base">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
            Speak with a Memorial Guide
          </a>
        </div>
      </div>
    </section>

    <!-- Trust bar -->
    <section class="bg-stone-dark border-b border-sage-light">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-5 grid grid-cols-2 sm:grid-cols-4 gap-4 text-center">
        <div>
          <div class="font-serif text-2xl font-semibold text-evergreen">100%</div>
          <div class="text-xs text-granite-light mt-0.5">Cemetery Approval Rate</div>
        </div>
        <div>
          <div class="font-serif text-2xl font-semibold text-evergreen">Free</div>
          <div class="text-xs text-granite-light mt-0.5">Design Proof Included</div>
        </div>
        <div>
          <div class="font-serif text-2xl font-semibold text-evergreen">33+</div>
          <div class="text-xs text-granite-light mt-0.5">Local Cemeteries Served</div>
        </div>
        <div>
          <div class="font-serif text-2xl font-semibold text-evergreen">5 Counties</div>
          <div class="text-xs text-granite-light mt-0.5">First Coast Coverage</div>
        </div>
      </div>
    </section>

    <!-- Products overview -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
          <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-evergreen mb-3">Our Headstones & Memorials</h2>
          <p class="text-granite-light max-w-2xl mx-auto">Every memorial is hand-designed and submitted to your cemetery for approval before a single stone is cut.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <ProductCard
            v-for="product in products"
            :key="product.href"
            :title="product.title"
            :description="product.description"
            :href="product.href"
            :icon="product.icon"
          />
        </div>
      </div>
    </section>

    <!-- Why Duval Memorials -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-sage-light">
      <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div>
            <p class="text-bronze font-medium text-sm tracking-wider uppercase mb-2">Why Choose Us</p>
            <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-evergreen mb-6">Built for Florida. Built for Families.</h2>
            <div class="space-y-5">
              <div v-for="reason in reasons" :key="reason.title" class="flex gap-4">
                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-evergreen flex items-center justify-center mt-0.5">
                  <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                </div>
                <div>
                  <h3 class="font-semibold text-evergreen mb-1">{{ reason.title }}</h3>
                  <p class="text-sm text-granite-light leading-relaxed">{{ reason.body }}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-white rounded-2xl p-8 shadow-md">
            <h3 class="font-serif text-xl font-semibold text-evergreen mb-1">Speak with a Memorial Guide</h3>
            <p class="text-sm text-granite-light mb-6">We'll check your cemetery's rules before you even place an order.</p>
            <QuoteForm />
          </div>
        </div>
      </div>
    </section>

    <!-- Service areas -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto text-center">
        <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-evergreen mb-3">Serving the First Coast</h2>
        <p class="text-granite-light max-w-xl mx-auto mb-10">From Duval to Baker County, we deliver and install headstones at cemeteries across northeast Florida.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
          <Link
            v-for="area in serviceAreas"
            :key="area.href"
            :href="area.href"
            class="group bg-white border border-sage-light hover:border-evergreen rounded-xl p-5 text-left transition-all hover:shadow-md"
          >
            <div class="font-semibold text-evergreen group-hover:text-evergreen-light mb-1">{{ area.name }}</div>
            <div class="text-sm text-granite-light">{{ area.sub }}</div>
          </Link>
        </div>
      </div>
    </section>

    <!-- Cemetery CTA -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-evergreen text-white text-center">
      <div class="max-w-3xl mx-auto">
        <h2 class="font-serif text-3xl sm:text-4xl font-semibold mb-4">We Know Your Cemetery's Rules</h2>
        <p class="text-white/70 text-lg mb-8">From Evergreen Cemetery to Jacksonville National, we've worked with every major cemetery on the First Coast. We handle the approvals so you don't have to.</p>
        <Link href="/cemeteries" class="inline-flex items-center gap-2 bg-white text-evergreen font-semibold px-8 py-3.5 rounded-lg hover:bg-stone transition-colors">
          Browse All Cemeteries We Serve
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </Link>
      </div>
    </section>

    <!-- Resources teaser -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-10">
          <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-evergreen mb-3">Helpful Resources</h2>
          <p class="text-granite-light max-w-xl mx-auto">Everything you need to know about choosing a headstone in Florida.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
          <Link href="/resources/buying-guide" class="group bg-white rounded-xl p-6 border border-sage-light hover:border-evergreen hover:shadow-md transition-all">
            <div class="w-10 h-10 bg-evergreen/10 rounded-lg flex items-center justify-center mb-4">
              <svg class="w-5 h-5 text-evergreen" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
            </div>
            <h3 class="font-semibold text-evergreen mb-2 group-hover:text-evergreen-light">Guide to Buying a Headstone in Florida</h3>
            <p class="text-sm text-granite-light">Everything families need to know, from cemetery rules to delivery timelines.</p>
          </Link>
          <Link href="/resources/pricing" class="group bg-white rounded-xl p-6 border border-sage-light hover:border-evergreen hover:shadow-md transition-all">
            <div class="w-10 h-10 bg-evergreen/10 rounded-lg flex items-center justify-center mb-4">
              <svg class="w-5 h-5 text-evergreen" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <h3 class="font-semibold text-evergreen mb-2 group-hover:text-evergreen-light">Headstone Pricing & Costs</h3>
            <p class="text-sm text-granite-light">Transparent pricing breakdowns for every style — no hidden fees.</p>
          </Link>
          <Link href="/resources/faq" class="group bg-white rounded-xl p-6 border border-sage-light hover:border-evergreen hover:shadow-md transition-all">
            <div class="w-10 h-10 bg-evergreen/10 rounded-lg flex items-center justify-center mb-4">
              <svg class="w-5 h-5 text-evergreen" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <h3 class="font-semibold text-evergreen mb-2 group-hover:text-evergreen-light">Frequently Asked Questions</h3>
            <p class="text-sm text-granite-light">Answers to the questions families ask most during a difficult time.</p>
          </Link>
        </div>
      </div>
    </section>

  </AppLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import QuoteForm from '@/Components/QuoteForm.vue';
import ProductCard from '@/Components/ProductCard.vue';

const products = [
  { title: 'Upright Monuments', description: 'Traditional standing headstones in granite or marble, custom engraved for any cemetery.', href: '/headstones/upright-monuments', icon: 'monument' },
  { title: 'Flat Grave Markers', description: 'Flush-to-ground markers that comply with most Florida cemetery regulations.', href: '/headstones/flat-markers', icon: 'flat' },
  { title: 'Bronze Memorials & Plaques', description: 'Durable bronze plaques built to withstand Florida\'s salt air and humidity.', href: '/headstones/bronze-memorials', icon: 'bronze' },
  { title: 'Slant & Bevel Markers', description: 'A classic angled style offering excellent visibility and customization.', href: '/headstones/slant-bevel-markers', icon: 'slant' },
  { title: 'Custom Engraving', description: 'Portraits, military insignia, religious symbols, and custom artwork.', href: '/headstones/custom-engraving', icon: 'engrave' },
  { title: 'Cleaning & Restoration', description: 'Bring weathered or algae-covered stones back to their original beauty.', href: '/headstones/restoration', icon: 'restore' },
];

const reasons = [
  { title: 'Florida-Specific Expertise', body: 'We understand the unique challenges of our climate — salt air, humidity, and UV fading — and specify materials that hold up on the First Coast.' },
  { title: 'Cemetery Approval Guaranteed', body: 'We know the rules at every major cemetery in Duval, St. Johns, Clay, Nassau, and Baker counties. Your order won\'t be rejected.' },
  { title: 'Military Memorial Specialists', body: 'Familiar with NAS Jacksonville, Mayport, and VA marker regulations. We help veteran families navigate the process at no extra charge.' },
  { title: 'Deep Foundations for Sandy Soil', body: 'Florida\'s sandy soil requires reinforced concrete bases. Every upright monument we install meets or exceeds local requirements.' },
];

const serviceAreas = [
  { name: 'Duval County', sub: 'All of Jacksonville', href: '/' },
  { name: 'St. Augustine', sub: 'St. Johns County', href: '/service-areas/st-augustine' },
  { name: 'Orange Park', sub: 'Clay County', href: '/service-areas/orange-park' },
  { name: 'Jacksonville Beach', sub: 'The Beaches', href: '/service-areas/jacksonville-beach' },
  { name: 'Fernandina Beach', sub: 'Nassau County / Yulee', href: '/service-areas/fernandina-beach' },
  { name: 'Macclenny', sub: 'Baker County', href: '/service-areas/macclenny' },
];
</script>
