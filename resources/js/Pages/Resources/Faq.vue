<template>
  <AppLayout>
    <Head title="Headstone FAQ | Duval Memorials Jacksonville" />
    <PageHero label="Frequently Asked Questions" title="Headstone FAQs for Jacksonville Families" subtitle="Honest answers to the questions we hear most from families across the First Coast." />
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-4xl mx-auto">
        <div class="space-y-3 mb-12">
          <div v-for="(item, i) in faqs" :key="i" class="bg-white rounded-xl border border-sage-light overflow-hidden">
            <button @click="open === i ? open = null : open = i" class="w-full flex items-center justify-between px-6 py-5 text-left">
              <span class="font-semibold text-evergreen pr-4">{{ item.q }}</span>
              <svg class="w-5 h-5 text-bronze flex-shrink-0 transition-transform" :class="{ 'rotate-180': open === i }" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div v-show="open === i" class="px-6 pb-5 text-granite-light text-sm leading-relaxed border-t border-sage-light pt-4">
              {{ item.a }}
            </div>
          </div>
        </div>

        <div class="bg-evergreen text-white rounded-2xl p-8 text-center">
          <h2 class="font-serif text-2xl font-semibold mb-3">Have a Question We Didn't Answer?</h2>
          <p class="text-white/70 mb-6">Call, text, or send us a message — we respond within one business day and are always happy to talk through your specific situation.</p>
          <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <Link href="/contact" class="inline-flex items-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-8 py-3.5 rounded-lg transition-colors">Send Us a Message</Link>
            <a href="tel:+19045550000" class="inline-flex items-center gap-2 border border-white/30 hover:border-white text-white px-8 py-3.5 rounded-lg transition-colors">(904) 555-0000</a>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>
<script setup>
import { ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import PageHero from '@/Components/PageHero.vue';

const open = ref(null);

const faqs = [
  { q: 'How long does it take to get a headstone in Jacksonville?', a: 'Most granite markers take 6–10 weeks from design approval to installation. Bronze memorials typically run 8–14 weeks. The timeline begins after your cemetery approves the design, which usually takes 1–3 weeks. We\'ll give you a specific timeline estimate at the start of your order.' },
  { q: 'Do I need cemetery approval before ordering?', a: 'Yes — always. Every cemetery in the Jacksonville area has its own monument regulations. Ordering without approval first is the most common reason families end up with rejected headstones and lost deposits with other vendors. We contact your cemetery before production begins on every single order.' },
  { q: 'Can I order a headstone before a burial takes place?', a: 'Yes. Many families pre-purchase headstones, especially for companion monuments where one person has passed and the other wants the stone to be ready. We can engrave one side now and add the second inscription later.' },
  { q: 'What is a "free design proof" and what does it include?', a: 'Our design proof is a digital mockup showing exactly what your finished memorial will look like — stone shape, size, color, lettering style, engraving, and any artwork. You\'ll see it before we submit to your cemetery and before any production begins. It\'s included at no charge with every inquiry.' },
  { q: 'Does Duval Memorials handle VA military markers for veterans?', a: 'Yes. We assist families with VA marker applications for eligible veterans and coordinate delivery and installation at Jacksonville National Cemetery and other local cemeteries. The VA provides certain markers at no charge — we help you navigate the process.' },
  { q: 'What are the cemetery rules at Jacksonville National Cemetery?', a: 'Jacksonville National Cemetery is a VA cemetery and requires flat, government-issued or VA-specification markers flush to the ground. No upright monuments are permitted. We\'re very familiar with the specific requirements and handle all paperwork and coordination.' },
  { q: 'Can I add a second inscription later for a companion monument?', a: 'Yes. This is a common arrangement for spouses. We engrave one side now and add the second name, dates, and inscription at a later date — typically within the same timeline (6–10 weeks) as a new order.' },
  { q: 'How does Florida\'s climate affect headstones?', a: 'Jacksonville\'s combination of salt air, high humidity, and intense UV exposure creates unique challenges. Algae and lichen grow faster in our climate than in most of the country. We recommend polished granite surfaces (which resist biological growth), UV-resistant finishes, and marine-grade sealants for bronze markers within a mile of the coast.' },
  { q: 'What does monument installation involve in Florida?', a: 'Florida\'s sandy soil means upright monuments require reinforced concrete foundations to prevent tipping or settling. We design all foundations to your specific cemetery\'s requirements, excavate and pour the foundation, and return to set the monument once the concrete has cured. The process typically adds 2–4 weeks to the installation timeline.' },
  { q: 'Do you offer payment plans?', a: 'Yes. We understand the financial strain that comes during a period of loss. Contact us directly to discuss payment options — we work with families on a case-by-case basis and always treat these conversations with respect.' },
];
</script>
