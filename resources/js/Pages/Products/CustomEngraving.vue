<template>
  <AppLayout>
    <Head title="Custom Headstone Engraving Jacksonville FL | Duval Memorials" />
    <PageHero label="Personalization" title="Custom Engraving & Inscriptions" subtitle="Laser-etched portraits, military insignia, religious symbols, custom artwork, and meaningful scripture — every detail, exactly as you envision it." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 prose-custom">
          <h2>Every Memorial Tells a Story — We Help You Tell It</h2>
          <p>Custom engraving is what transforms a headstone from a marker into a true memorial. At Duval Memorials, our engraving team uses state-of-the-art laser technology and traditional hand-carving techniques to bring your vision to life on granite or bronze.</p>
          <h3>What We Can Engrave</h3>
          <ul>
            <li><strong>Photo Portraits</strong> — Laser-etched portraits from a photograph you provide, rendered in striking detail on black granite. No artist needed — we convert your photo digitally.</li>
            <li><strong>Military Insignia</strong> — Official branch emblems, unit crests, rank insignia, and medals. We work with veterans' families from NAS Jacksonville and Mayport regularly.</li>
            <li><strong>Religious Symbols</strong> — Crosses, Stars of David, praying hands, doves, and hundreds of other faith symbols. We're familiar with the requirements of the Catholic Diocese of St. Augustine for cemetery markers.</li>
            <li><strong>Custom Artwork</strong> — Hobbies, careers, passions — roses, golf clubs, fishing rods, guitars, first responder badges. If it matters to your family, we can engrave it.</li>
            <li><strong>Scripture & Quotes</strong> — Any verse, quote, or poem in a wide variety of font styles.</li>
            <li><strong>Additional Dates</strong> — Add a spouse's information later on a pre-purchased companion monument.</li>
          </ul>
          <h3>Laser Engraving vs. Sandblasting</h3>
          <p>Laser etching provides finer detail and is ideal for portraits and complex artwork. Sandblasting creates deeper, more traditional-looking letters and is preferred for standard text and simple designs. We use both techniques and recommend the right approach for your specific design.</p>
          <h3>Free Design Proof Before Any Work Begins</h3>
          <p>You'll see exactly what your memorial will look like before we cut a single line. Our design proof process is included at no charge and typically delivered within one business day of your request.</p>
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
  { label: 'Design Inspiration Gallery', href: '/gallery' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'Guide to Buying a Headstone', href: '/resources/buying-guide' },
  { label: 'FAQ', href: '/resources/faq' },
];
</script>
