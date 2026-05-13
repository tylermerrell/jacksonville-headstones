<template>
  <AppLayout>
    <Head title="Headstones for Riverside Memorial Park Jacksonville | Duval Memorials" />
    <PageHero label="Riverside Memorial Park · Jacksonville" title="Headstones for Riverside Memorial Park" subtitle="Serving families at Riverside Memorial Park in Jacksonville with custom headstones, cemetery-approved designs, and professional installation." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>About Riverside Memorial Park</h2>
          <p>Riverside Memorial Park is a well-maintained memorial park cemetery located in Jacksonville, Duval County. It serves a broad cross-section of the Jacksonville community and offers multiple burial and memorialization options. The park setting and landscaped grounds are maintained to high standards, and monument guidelines reflect that commitment to appearance.</p>
          <h3>Monument Requirements at Riverside Memorial Park</h3>
          <p>Riverside Memorial Park typically accommodates flat grave markers throughout much of the property, with upright monument sections in select areas. We verify the current requirements for your specific section before any order is placed. Requirements may include restrictions on monument height, width, base dimensions, and approved granite colors.</p>
          <h3>Why Work With Duval Memorials at Riverside</h3>
          <ul>
            <li>Direct coordination with Riverside Memorial Park for cemetery approval</li>
            <li>Free design proof showing your memorial before any production</li>
            <li>Complete installation service including foundation and setting</li>
            <li>Transparent pricing with no hidden cemetery coordination fees</li>
          </ul>
        </div>
        <div class="space-y-6">
          <div class="bg-white rounded-xl p-6 border border-sage-light shadow-sm">
            <h3 class="font-serif text-lg font-semibold text-evergreen mb-4">Order a Headstone for Riverside Memorial</h3>
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
  { label: 'All Jacksonville Cemeteries', href: '/cemeteries' },
  { label: 'Flat Grave Markers', href: '/headstones/flat-markers' },
  { label: 'Bronze Memorials', href: '/headstones/bronze-memorials' },
  { label: 'Headstone Pricing', href: '/resources/pricing' },
];
</script>
