<template>
  <AppLayout>
    <Head title="Request a Quote | Duval Memorials and Monuments" />

    <!-- Hero -->
    <section class="bg-evergreen text-white py-16 px-4 sm:px-6 lg:px-8 text-center">
      <p class="text-sage-light text-sm tracking-widest uppercase mb-3">We're Here to Help</p>
      <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Request a Free Design Proof</h1>
      <p class="text-white/75 text-lg max-w-2xl mx-auto">No pressure, no obligation. We'll check your cemetery's rules and send a custom design proof within one business day.</p>
    </section>

    <!-- Form + info grid -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-stone">
      <div class="max-w-5xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-10">

        <!-- Contact info -->
        <div class="space-y-8">
          <div>
            <h2 class="font-serif text-xl font-semibold text-evergreen mb-4">Contact Us Directly</h2>
            <div class="space-y-4">
              <a href="tel:+19045550000" class="flex items-start gap-3 group">
                <div class="flex-shrink-0 w-10 h-10 bg-evergreen/10 rounded-lg flex items-center justify-center mt-0.5">
                  <svg class="w-5 h-5 text-evergreen" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                </div>
                <div>
                  <div class="text-xs text-granite-light mb-0.5">Call or text</div>
                  <div class="font-semibold text-evergreen group-hover:text-evergreen-light">(904) 555-0000</div>
                </div>
              </a>
              <a href="sms:+19045550000" class="flex items-start gap-3 group">
                <div class="flex-shrink-0 w-10 h-10 bg-evergreen/10 rounded-lg flex items-center justify-center mt-0.5">
                  <svg class="w-5 h-5 text-evergreen" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/></svg>
                </div>
                <div>
                  <div class="text-xs text-granite-light mb-0.5">Text anytime</div>
                  <div class="font-semibold text-evergreen group-hover:text-evergreen-light">Text (904) 555-0000</div>
                </div>
              </a>
              <a href="mailto:hello@duvalmemorials.com" class="flex items-start gap-3 group">
                <div class="flex-shrink-0 w-10 h-10 bg-evergreen/10 rounded-lg flex items-center justify-center mt-0.5">
                  <svg class="w-5 h-5 text-evergreen" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <div>
                  <div class="text-xs text-granite-light mb-0.5">Email</div>
                  <div class="font-semibold text-evergreen group-hover:text-evergreen-light">hello@duvalmemorials.com</div>
                </div>
              </a>
            </div>
          </div>

          <div class="bg-sage-light rounded-xl p-5">
            <h3 class="font-semibold text-evergreen mb-3">What Happens Next</h3>
            <ol class="space-y-3">
              <li v-for="(step, i) in steps" :key="i" class="flex gap-3 text-sm">
                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-evergreen text-white text-xs flex items-center justify-center font-semibold">{{ i + 1 }}</span>
                <span class="text-granite-light leading-snug">{{ step }}</span>
              </li>
            </ol>
          </div>
        </div>

        <!-- Form -->
        <div class="lg:col-span-2 bg-white rounded-2xl p-8 shadow-sm border border-sage-light">
          <h2 class="font-serif text-xl font-semibold text-evergreen mb-6">Send Us a Message</h2>
          <QuoteForm />
        </div>

      </div>
    </section>

  </AppLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import QuoteForm from '@/Components/QuoteForm.vue';

const steps = [
  'We receive your request and confirm your cemetery\'s rules.',
  'You get an immediate email confirmation so you know we\'re on it.',
  'A memorial guide reaches out within one business day with your free design proof.',
  'You approve the design. We submit to the cemetery. No surprises.',
];
</script>
