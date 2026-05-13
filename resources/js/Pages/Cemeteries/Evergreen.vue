<template>
  <AppLayout>
    <Head title="Headstones for Evergreen Cemetery Jacksonville | Duval Memorials" />
    <PageHero label="Evergreen Cemetery · Jacksonville" title="Headstones for Evergreen Cemetery, Jacksonville" subtitle="We know Evergreen's monument regulations inside and out. Cemetery approval handled. Free design proof included." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>About Evergreen Cemetery</h2>
          <p>Evergreen Cemetery is one of Jacksonville's oldest and most historically significant burial grounds, located in the heart of Duval County. Established in the 19th century, it is the final resting place for many of Jacksonville's founding families, Civil War veterans, and community leaders. The cemetery is maintained by the City of Jacksonville.</p>
          <h3>Monument Requirements at Evergreen Cemetery</h3>
          <p>Evergreen Cemetery accepts both upright monuments and flat grave markers, subject to section-specific rules. Some areas of the cemetery have specific dimensional restrictions. We contact the cemetery administrators on your behalf to confirm the exact rules for your specific lot before any production begins.</p>
          <h3>Why Families Choose Duval Memorials for Evergreen</h3>
          <ul>
            <li>We've worked at Evergreen Cemetery many times and know the staff and submission process well.</li>
            <li>We handle all documentation, permits, and foundation requirements.</li>
            <li>Florida's sandy soil requires deep concrete foundations — we engineer every base to cemetery spec.</li>
            <li>Our design proof shows exactly what your memorial will look like before cemetery submission.</li>
          </ul>
          <h3>Local Climate Considerations</h3>
          <p>Jacksonville's high humidity creates ideal conditions for algae and biological growth on granite. Evergreen's older stones are particularly susceptible. If you're ordering a new memorial for a lot with existing markers, we also offer monument restoration and cleaning services to bring weathered stones back to their original dignity.</p>
        </div>
        <div class="space-y-6">
          <div class="bg-white rounded-xl p-6 border border-sage-light shadow-sm">
            <h3 class="font-serif text-lg font-semibold text-evergreen mb-4">Order a Headstone for Evergreen Cemetery</h3>
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
  { label: 'Monument Restoration', href: '/headstones/restoration' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'Guide to Buying a Headstone', href: '/resources/buying-guide' },
];
</script>
