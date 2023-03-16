<script setup>
import { ChevronDownIcon } from "@heroicons/vue/20/solid";
import { CircleStackIcon } from "@heroicons/vue/24/outline";
import SecondaryButton from "@/Components/SecondaryButton.vue";
</script>

<template>
  <header
    class="bg-moon-raker-200 px-6 py-4 w-full flex items-center gap-12 justify-between"
  >
    <div class="flex items-center gap-12">
      <div>
        <CircleStackIcon class="w-8 h-8 text-swirl-900" />
      </div>
      <nav>
        <ul class="flex items-center gap-8">
          <li>
            <a
              class="text-lg text-swirl-900 flex items-center gap-1 underline decoration-transparent hover:decoration-black hover:text-black transition-colors"
              href="#"
            >
              <span>Lorem</span>
              <ChevronDownIcon class="w-5 h-5" />
            </a>
          </li>
          <li>
            <a
              class="text-lg text-swirl-900 flex items-center gap-1 underline decoration-transparent hover:decoration-black hover:text-black transition-colors"
              href="#"
            >
              Ipsum
            </a>
          </li>
          <li>
            <a
              class="text-lg text-swirl-900 flex items-center gap-1 underline decoration-transparent hover:decoration-black hover:text-black transition-colors"
              href="#"
            >
              Dolor
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="flex items-center gap-6">
        <SecondaryButton>            
            Save
        </SecondaryButton>
        <!-- avatar -->
        <div class="w-10 h-10 rounded-full bg-swirl-900"></div>        
    </div>
  </header>
</template>
