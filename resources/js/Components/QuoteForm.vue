<template>
  <form @submit.prevent="submit" class="space-y-4">
    <div v-if="$page.props.flash?.success" class="bg-evergreen/10 border border-evergreen text-evergreen text-sm rounded-lg px-4 py-3">
      {{ $page.props.flash.success }}
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      <div>
        <label class="block text-xs font-medium text-granite mb-1">First Name</label>
        <input v-model="form.first_name" type="text" required placeholder="Jane" class="w-full border-sage rounded-lg text-sm focus:ring-evergreen focus:border-evergreen" :class="{ 'border-red-400': form.errors.first_name }" />
        <p v-if="form.errors.first_name" class="text-red-500 text-xs mt-1">{{ form.errors.first_name }}</p>
      </div>
      <div>
        <label class="block text-xs font-medium text-granite mb-1">Last Name</label>
        <input v-model="form.last_name" type="text" required placeholder="Smith" class="w-full border-sage rounded-lg text-sm focus:ring-evergreen focus:border-evergreen" :class="{ 'border-red-400': form.errors.last_name }" />
        <p v-if="form.errors.last_name" class="text-red-500 text-xs mt-1">{{ form.errors.last_name }}</p>
      </div>
    </div>

    <div>
      <label class="block text-xs font-medium text-granite mb-1">Phone or Email</label>
      <input v-model="form.contact" type="text" required placeholder="(904) 555-0000 or email@example.com" class="w-full border-sage rounded-lg text-sm focus:ring-evergreen focus:border-evergreen" :class="{ 'border-red-400': form.errors.contact }" />
      <p v-if="form.errors.contact" class="text-red-500 text-xs mt-1">{{ form.errors.contact }}</p>
    </div>

    <div>
      <label class="block text-xs font-medium text-granite mb-1">
        Cemetery Name <span class="text-bronze">(required — we check rules for you)</span>
      </label>
      <input v-model="form.cemetery" type="text" placeholder="e.g. Evergreen Cemetery, Jacksonville National..." class="w-full border-sage rounded-lg text-sm focus:ring-evergreen focus:border-evergreen" />
      <p class="text-xs text-granite-light mt-1">Not sure yet? Leave blank and we'll help.</p>
    </div>

    <div>
      <label class="block text-xs font-medium text-granite mb-1">What can we help with?</label>
      <select v-model="form.type" class="w-full border-sage rounded-lg text-sm focus:ring-evergreen focus:border-evergreen">
        <option value="">Select a product or service...</option>
        <option>Upright Monument / Headstone</option>
        <option>Flat Grave Marker</option>
        <option>Bronze Memorial or Plaque</option>
        <option>Slant or Bevel Marker</option>
        <option>Custom Engraving</option>
        <option>Cleaning or Restoration</option>
        <option>Pet Memorial</option>
        <option>Not sure yet</option>
      </select>
    </div>

    <div>
      <label class="block text-xs font-medium text-granite mb-1">Message (optional)</label>
      <textarea v-model="form.message" rows="3" placeholder="Share any details — we'll reach out within one business day." class="w-full border-sage rounded-lg text-sm focus:ring-evergreen focus:border-evergreen resize-none"></textarea>
    </div>

    <button type="submit" :disabled="form.processing" class="w-full bg-evergreen hover:bg-evergreen-dark disabled:opacity-60 text-white font-semibold py-3 rounded-lg transition-colors text-sm">
      {{ form.processing ? 'Sending...' : 'Request a Free Design Proof' }}
    </button>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
  first_name: '',
  last_name: '',
  contact: '',
  cemetery: '',
  type: '',
  message: '',
});

function submit() {
  form.post(route('leads.store'), {
    preserveScroll: true,
    onSuccess: () => form.reset(),
  });
}
</script>
