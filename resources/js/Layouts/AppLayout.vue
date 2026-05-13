<template>
  <div class="min-h-screen flex flex-col bg-stone font-sans text-granite">

    <!-- Header -->
    <header class="bg-evergreen text-white sticky top-0 z-40 shadow-lg">
      <!-- Top bar -->
      <div class="bg-evergreen-dark text-xs text-white/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between py-1.5">
          <a href="tel:+19045550000" class="flex items-center gap-1.5 hover:text-white transition-colors">
            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            (904) 555-0000
          </a>
          <span class="hidden sm:block font-medium text-white/90">Serving the First Coast &bull; Cemetery Approval Guaranteed</span>
          <a href="sms:+19045550000" class="flex items-center gap-1.5 hover:text-white transition-colors">
            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
            </svg>
            Text Us
          </a>
        </div>
      </div>

      <!-- Main header -->
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between py-3">
          <Link href="/" class="flex flex-col leading-tight">
            <span class="font-serif text-2xl font-semibold tracking-wide text-white">Duval Memorials</span>
            <span class="text-xs text-sage-light tracking-widest uppercase">Jacksonville Headstones &amp; Monuments</span>
          </Link>

          <!-- Desktop nav -->
          <nav class="hidden lg:flex items-center gap-6 text-sm font-medium text-white/80">
            <div class="relative group">
              <button class="hover:text-white transition-colors flex items-center gap-1">
                Products
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
              </button>
              <div class="absolute top-full left-0 mt-2 w-56 bg-white text-granite rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                <div class="py-2">
                  <Link href="/headstones/upright-monuments" class="block px-4 py-2 text-sm hover:bg-stone hover:text-evergreen transition-colors">Upright Monuments</Link>
                  <Link href="/headstones/flat-markers" class="block px-4 py-2 text-sm hover:bg-stone hover:text-evergreen transition-colors">Flat Grave Markers</Link>
                  <Link href="/headstones/bronze-memorials" class="block px-4 py-2 text-sm hover:bg-stone hover:text-evergreen transition-colors">Bronze Memorials & Plaques</Link>
                  <Link href="/headstones/slant-bevel-markers" class="block px-4 py-2 text-sm hover:bg-stone hover:text-evergreen transition-colors">Slant & Bevel Markers</Link>
                  <Link href="/headstones/custom-engraving" class="block px-4 py-2 text-sm hover:bg-stone hover:text-evergreen transition-colors">Custom Engraving</Link>
                  <Link href="/headstones/restoration" class="block px-4 py-2 text-sm hover:bg-stone hover:text-evergreen transition-colors">Cleaning & Restoration</Link>
                  <Link href="/headstones/pet-memorials" class="block px-4 py-2 text-sm hover:bg-stone hover:text-evergreen transition-colors">Pet Memorials</Link>
                </div>
              </div>
            </div>
            <div class="relative group">
              <button class="hover:text-white transition-colors flex items-center gap-1">
                Service Areas
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
              </button>
              <div class="absolute top-full left-0 mt-2 w-56 bg-white text-granite rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                <div class="py-2">
                  <Link href="/service-areas/st-augustine" class="block px-4 py-2 text-sm hover:bg-stone hover:text-evergreen transition-colors">St. Augustine / St. Johns County</Link>
                  <Link href="/service-areas/orange-park" class="block px-4 py-2 text-sm hover:bg-stone hover:text-evergreen transition-colors">Orange Park / Clay County</Link>
                  <Link href="/service-areas/jacksonville-beach" class="block px-4 py-2 text-sm hover:bg-stone hover:text-evergreen transition-colors">Jacksonville Beach / The Beaches</Link>
                  <Link href="/service-areas/fernandina-beach" class="block px-4 py-2 text-sm hover:bg-stone hover:text-evergreen transition-colors">Fernandina Beach / Yulee</Link>
                  <Link href="/service-areas/macclenny" class="block px-4 py-2 text-sm hover:bg-stone hover:text-evergreen transition-colors">Macclenny / Baker County</Link>
                </div>
              </div>
            </div>
            <Link href="/resources" class="hover:text-white transition-colors">Resources</Link>
            <Link href="/cemeteries" class="hover:text-white transition-colors">Cemeteries</Link>
            <Link href="/gallery" class="hover:text-white transition-colors">Gallery</Link>
            <Link href="/about" class="hover:text-white transition-colors">About</Link>
          </nav>

          <!-- Desktop CTA -->
          <Link
            href="/contact"
            class="hidden lg:flex items-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-5 py-2.5 rounded-lg transition-colors text-sm shadow"
          >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.5-6.5a2.121 2.121 0 013 3L12 16H9v-3z"/></svg>
            Request a Free Design Proof
          </Link>

          <!-- Mobile menu toggle -->
          <button @click="mobileOpen = !mobileOpen" class="lg:hidden p-2 rounded text-white/80 hover:text-white">
            <svg v-if="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
            <svg v-else class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
          </button>
        </div>
      </div>

      <!-- Mobile menu -->
      <div v-show="mobileOpen" class="lg:hidden bg-evergreen-dark border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">
          <div>
            <button @click="productsOpen = !productsOpen" class="w-full flex items-center justify-between text-white/80 hover:text-white py-2 text-sm font-medium">
              Products
              <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': productsOpen }" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div v-show="productsOpen" class="pl-4 space-y-1">
              <Link href="/headstones/upright-monuments" @click="mobileOpen = false" class="block py-1.5 text-sm text-white/70 hover:text-white">Upright Monuments</Link>
              <Link href="/headstones/flat-markers" @click="mobileOpen = false" class="block py-1.5 text-sm text-white/70 hover:text-white">Flat Grave Markers</Link>
              <Link href="/headstones/bronze-memorials" @click="mobileOpen = false" class="block py-1.5 text-sm text-white/70 hover:text-white">Bronze Memorials & Plaques</Link>
              <Link href="/headstones/slant-bevel-markers" @click="mobileOpen = false" class="block py-1.5 text-sm text-white/70 hover:text-white">Slant & Bevel Markers</Link>
              <Link href="/headstones/custom-engraving" @click="mobileOpen = false" class="block py-1.5 text-sm text-white/70 hover:text-white">Custom Engraving</Link>
              <Link href="/headstones/restoration" @click="mobileOpen = false" class="block py-1.5 text-sm text-white/70 hover:text-white">Cleaning & Restoration</Link>
              <Link href="/headstones/pet-memorials" @click="mobileOpen = false" class="block py-1.5 text-sm text-white/70 hover:text-white">Pet Memorials</Link>
            </div>
          </div>
          <div>
            <button @click="areasOpen = !areasOpen" class="w-full flex items-center justify-between text-white/80 hover:text-white py-2 text-sm font-medium">
              Service Areas
              <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': areasOpen }" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div v-show="areasOpen" class="pl-4 space-y-1">
              <Link href="/service-areas/st-augustine" @click="mobileOpen = false" class="block py-1.5 text-sm text-white/70 hover:text-white">St. Augustine / St. Johns County</Link>
              <Link href="/service-areas/orange-park" @click="mobileOpen = false" class="block py-1.5 text-sm text-white/70 hover:text-white">Orange Park / Clay County</Link>
              <Link href="/service-areas/jacksonville-beach" @click="mobileOpen = false" class="block py-1.5 text-sm text-white/70 hover:text-white">Jacksonville Beach / The Beaches</Link>
              <Link href="/service-areas/fernandina-beach" @click="mobileOpen = false" class="block py-1.5 text-sm text-white/70 hover:text-white">Fernandina Beach / Yulee</Link>
              <Link href="/service-areas/macclenny" @click="mobileOpen = false" class="block py-1.5 text-sm text-white/70 hover:text-white">Macclenny / Baker County</Link>
            </div>
          </div>
          <Link href="/resources" @click="mobileOpen = false" class="block py-2 text-sm text-white/80 hover:text-white font-medium">Resources</Link>
          <Link href="/cemeteries" @click="mobileOpen = false" class="block py-2 text-sm text-white/80 hover:text-white font-medium">Cemeteries</Link>
          <Link href="/gallery" @click="mobileOpen = false" class="block py-2 text-sm text-white/80 hover:text-white font-medium">Gallery</Link>
          <Link href="/about" @click="mobileOpen = false" class="block py-2 text-sm text-white/80 hover:text-white font-medium">About</Link>
          <Link href="/contact" @click="mobileOpen = false" class="block mt-3 w-full text-center bg-bronze hover:bg-bronze-dark text-white font-semibold px-5 py-2.5 rounded-lg transition-colors text-sm">
            Request a Free Design Proof
          </Link>
        </div>
      </div>
    </header>

    <!-- Mobile sticky contact bar -->
    <div class="lg:hidden fixed bottom-0 inset-x-0 z-40 bg-evergreen-deeper flex border-t border-white/10">
      <a href="tel:+19045550000" class="flex-1 flex flex-col items-center justify-center py-3 text-white text-xs font-medium gap-1">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
        Call Us
      </a>
      <a href="sms:+19045550000" class="flex-1 flex flex-col items-center justify-center py-3 text-white text-xs font-medium gap-1 border-l border-white/10">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/></svg>
        Text Us
      </a>
      <Link href="/contact" class="flex-1 flex flex-col items-center justify-center py-3 bg-bronze text-white text-xs font-medium gap-1 border-l border-white/10">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.5-6.5a2.121 2.121 0 013 3L12 16H9v-3z"/></svg>
        Get Quote
      </Link>
    </div>

    <!-- Page content -->
    <main class="flex-1 pb-16 lg:pb-0">
      <slot />
    </main>

    <!-- Footer -->
    <footer class="bg-evergreen-deeper text-white pt-12 pb-20 lg:pb-12">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-10 border-b border-white/10">

          <!-- Brand -->
          <div class="lg:col-span-1">
            <div class="font-serif text-2xl font-semibold mb-1">Duval Memorials</div>
            <div class="text-xs text-sage-light tracking-widest uppercase mb-4">Jacksonville Headstones & Monuments</div>
            <p class="text-sm text-white/60 leading-relaxed">Honoring lives on the First Coast with handcrafted headstones, monuments, and memorial markers. Cemetery approval guaranteed.</p>
            <div class="mt-5 flex flex-col gap-2 text-sm text-white/70">
              <a href="tel:+19045550000" class="hover:text-white transition-colors">(904) 555-0000</a>
              <a href="sms:+19045550000" class="hover:text-white transition-colors">Text us anytime</a>
              <a href="mailto:hello@duvalmemorials.com" class="hover:text-white transition-colors">hello@duvalmemorials.com</a>
            </div>
          </div>

          <!-- Products -->
          <div>
            <h4 class="text-sm font-semibold text-white/90 uppercase tracking-wider mb-4">Products</h4>
            <ul class="space-y-2 text-sm text-white/60">
              <li><Link href="/headstones/upright-monuments" class="hover:text-white transition-colors">Upright Monuments</Link></li>
              <li><Link href="/headstones/flat-markers" class="hover:text-white transition-colors">Flat Grave Markers</Link></li>
              <li><Link href="/headstones/bronze-memorials" class="hover:text-white transition-colors">Bronze Memorials & Plaques</Link></li>
              <li><Link href="/headstones/slant-bevel-markers" class="hover:text-white transition-colors">Slant & Bevel Markers</Link></li>
              <li><Link href="/headstones/custom-engraving" class="hover:text-white transition-colors">Custom Engraving</Link></li>
              <li><Link href="/headstones/restoration" class="hover:text-white transition-colors">Cleaning & Restoration</Link></li>
              <li><Link href="/headstones/pet-memorials" class="hover:text-white transition-colors">Pet Memorials</Link></li>
            </ul>
          </div>

          <!-- Service Areas -->
          <div>
            <h4 class="text-sm font-semibold text-white/90 uppercase tracking-wider mb-4">Service Areas</h4>
            <ul class="space-y-2 text-sm text-white/60">
              <li><Link href="/service-areas/st-augustine" class="hover:text-white transition-colors">St. Augustine</Link></li>
              <li><Link href="/service-areas/orange-park" class="hover:text-white transition-colors">Orange Park</Link></li>
              <li><Link href="/service-areas/jacksonville-beach" class="hover:text-white transition-colors">Jacksonville Beach</Link></li>
              <li><Link href="/service-areas/fernandina-beach" class="hover:text-white transition-colors">Fernandina Beach / Yulee</Link></li>
              <li><Link href="/service-areas/macclenny" class="hover:text-white transition-colors">Macclenny</Link></li>
              <li><Link href="/cemeteries" class="hover:text-white transition-colors">All Cemeteries We Serve</Link></li>
            </ul>
          </div>

          <!-- Resources -->
          <div>
            <h4 class="text-sm font-semibold text-white/90 uppercase tracking-wider mb-4">Resources</h4>
            <ul class="space-y-2 text-sm text-white/60">
              <li><Link href="/resources" class="hover:text-white transition-colors">Resource Hub</Link></li>
              <li><Link href="/resources/buying-guide" class="hover:text-white transition-colors">Guide to Buying a Headstone</Link></li>
              <li><Link href="/resources/pricing" class="hover:text-white transition-colors">Headstone Pricing & Costs</Link></li>
              <li><Link href="/resources/faq" class="hover:text-white transition-colors">Frequently Asked Questions</Link></li>
              <li><Link href="/gallery" class="hover:text-white transition-colors">Design Inspiration Gallery</Link></li>
              <li><Link href="/about" class="hover:text-white transition-colors">About Us</Link></li>
              <li><Link href="/contact" class="hover:text-white transition-colors">Contact / Request a Quote</Link></li>
            </ul>
          </div>
        </div>

        <div class="pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-white/40">
          <p>&copy; {{ new Date().getFullYear() }} Duval Memorials and Monuments. All rights reserved.</p>
          <p>Proudly serving Jacksonville, Duval County, and the First Coast of Florida.</p>
        </div>
      </div>
    </footer>

  </div>
</template>

<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const mobileOpen = ref(false);
const productsOpen = ref(false);
const areasOpen = ref(false);
</script>
