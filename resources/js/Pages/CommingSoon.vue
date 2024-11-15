<script setup>
import MyTransition from '@/Components/MyTransition.vue';
import PrimaryBtn from '@/Components/PrimaryBtn.vue';
</script>

<template>
    <MyTransition>
        <main class="flex h-svh flex-col items-center justify-center borde">
            <PrimaryBtn :href="route('home')" replace lable="◀︎ go back"  />

            <p class="text-lg font-semibold text-yellow-500">Coming Soon...</p>
            <p class="mt-4 px-4 text-center">As a solo developer,</p>
            <p class="mt-4 px-4  text-textPrimary   text-center">
                I'm pouring my heart into building a space where <span class="text-yellow-500">filmmakers</span>,
                <span class="text-yellow-500">creators</span>, and dreamers can come together. Thank you for
                believing in this journey with <span class="text-yellow-500">me</span>.
            </p>
            <p class="mt-4 text-center  text-sm italic text-gray-400">
                "Great things take time - and together, we'll make something
                amazing."
            </p>
            <div class="grid grid-cols-1 gap-3">
            <PrimaryBtn lable="contrubite"  />
            <PrimaryBtn lable=" # click her to support us"  />

            </div>
            
        </main>
    </MyTransition>
</template>
