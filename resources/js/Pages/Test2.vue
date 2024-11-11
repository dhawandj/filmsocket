<script setup>
import imgUrl from './../../images/camera2.png';

</script>
<template>
    <main class="h-svh borde border-red-500 space-y-3">
        <nav class="text mx-2 mt-2 rounded-sm border border-secondary p-2 text-center text-xs">
            filmsocket.com
        </nav>
        <section class="border border-secondary relative  bg-[#090C11]  mx-2 rounded-sm min-h-[35%] overflow-hidden">
                <img class="h-32 w-full object-contain absolute bottom-0 -right-2 z-0  object-right   borde "   :src="imgUrl" alt="">
                <button class="borde absolute bottom-5 left-5 text-textPrimary rounded-md   text-xs p-2 bg-secondaryAlt">what you want</button>
        </section>
        <nav class="text mx-2 mt-2 rounded-sm border border-secondary p-1 text-center text-sm">
            filmsocket.com
        </nav>
        <div class="mx-2">

                <div>comming soon..</div>
                <div>comming soon..</div>
                <div>comming soon..</div>
                <div>comming soon..</div>
                <div>comming soon..</div>
                <div>comming soon..</div>
                <div>comming soon..</div>
                <div>comming soon..</div>
                <div>comming soon..</div>
                <div>comming soon..</div>
        </div>
        </main>
</template>
<style>
main {
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas,
        'Liberation Mono', 'Courier New', monospace;
}
</style>
