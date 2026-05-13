<template>
  <AppLayout>
    <Head title="Headstones in Orange Park & Clay County | Duval Memorials" />
    <PageHero label="Clay County" title="Headstones & Monuments in Orange Park" subtitle="Serving families throughout Clay County — Orange Park, Fleming Island, Middleburg, Green Cove Springs, and beyond." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>Memorial Services for Clay County Families</h2>
          <p>Orange Park and Clay County have grown rapidly over the past two decades, and local cemeteries have kept pace. Duval Memorials serves families throughout Clay County with the same commitment to quality and cemetery compliance that has made us the First Coast's trusted choice.</p>
          <h3>Cemeteries We Serve in Clay County</h3>
          <ul>
            <li><a href="/cemeteries/jacksonville-memory-gardens" class="text-bronze hover:underline">Jacksonville Memory Gardens (Orange Park)</a> — One of the largest cemetery and funeral home complexes in the area.</li>
            <li><a href="/cemeteries/magnolia-cemetery" class="text-bronze hover:underline">Magnolia Cemetery (Orange Park)</a> — An older, established cemetery with traditional monument styles.</li>
          </ul>
          <h3>Sandy Soil & Foundation Requirements</h3>
          <p>Clay County's soil conditions — like much of northeast Florida — are predominantly sandy and subject to shifting. Upright monuments require properly engineered concrete foundations to prevent tipping or settling over time. We design and install all foundations to meet or exceed each cemetery's specific requirements.</p>
          <h3>Communities We Serve in Clay County</h3>
          <p>We deliver and install throughout Orange Park, Fleming Island, Middleburg, Green Cove Springs, Keystone Heights, Penney Farms, and all surrounding communities.</p>
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
  { label: 'Jacksonville Memory Gardens', href: '/cemeteries/jacksonville-memory-gardens' },
  { label: 'Magnolia Cemetery', href: '/cemeteries/magnolia-cemetery' },
  { label: 'All Cemeteries We Serve', href: '/cemeteries' },
  { label: 'Headstone Pricing', href: '/resources/pricing' },
];
</script>
