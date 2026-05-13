<template>
  <AppLayout>
    <Head title="Pet Memorials Jacksonville FL | Duval Memorials" />
    <PageHero label="Pet Memorials" title="Pet Memorial Stones & Markers" subtitle="Honor the memory of a beloved pet with a custom engraved memorial stone or plaque — crafted with the same care and quality as our human memorials." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>Honoring Every Member of the Family</h2>
          <p>Pets are family. When a beloved dog, cat, horse, or other companion passes, many Jacksonville families want a lasting memorial they can visit and cherish. Duval Memorials creates custom pet memorial stones for backyard gardens, pet cemeteries, and memorial parks across the First Coast.</p>
          <h3>Pet Memorial Options</h3>
          <ul>
            <li><strong>Garden Stones</strong> — Small to medium granite markers designed for placement in a home garden or yard. Fully customizable with the pet's name, dates, a portrait, and a personal message.</li>
            <li><strong>Flat Pet Cemetery Markers</strong> — Polished granite markers sized for pet cemeteries. We confirm the allowable specifications with your pet cemetery before ordering.</li>
            <li><strong>Engraved Paw Print Stones</strong> — A popular design featuring the pet's actual paw print impression, name, and dates.</li>
            <li><strong>Photo Portrait Stones</strong> — Laser-etched portraits from a photo you provide, capturing your pet's likeness in lasting granite.</li>
          </ul>
          <h3>Common Pet Memorial Engravings</h3>
          <p>Beyond names and dates, we regularly engrave:</p>
          <ul>
            <li>Paw prints, dog bones, cat silhouettes, horse heads, bird motifs</li>
            <li>Laser-etched photo portraits from your favorite picture</li>
            <li>Personal quotes, "Rainbow Bridge" verse, and other tributes</li>
            <li>Species-specific breed silhouettes</li>
          </ul>
          <h3>Turnaround & Delivery</h3>
          <p>Most pet memorial stones are completed within 2–4 weeks of design approval. We can ship anywhere in the Jacksonville metro area or arrange local pickup.</p>
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
  { label: 'Custom Engraving', href: '/headstones/custom-engraving' },
  { label: 'Design Inspiration Gallery', href: '/gallery' },
  { label: 'Contact Us', href: '/contact' },
  { label: 'FAQ', href: '/resources/faq' },
];
</script>
