<script setup>
import imgUrl from './../../images/camera2.png';
</script>
<template>
    <main class="min-h-svh borderr p-2">
        <nav class="nav borderr borderr-red-400">filmsocket.com</nav>
        <section class="borderr-4 borderr-red-400">
            <div class="borderr-2 min-h-[25vh] max-h-[25vh] bg-zinc-900 rounded-md   relative overflow-hidden ">
                <img class="h-[30vh]  -right-4  bottom-0   absolute    borderr-green-400 borderr"  :src="imgUrl" alt="">
                <!-- <button class="borderr px-2 py-1 text-sm   absolute bottom-[2vh] left-[2vh] rounded-md ">what you what</button> -->
                <!-- <button class="borderr px-2 py-1 text-sm  absolute bottom-[2vh] left-[30vh] rounded-md ">what you what</button> -->
            </div>
        </section>
        <section class="borderr-4 borderr-red-400 space-y-3">
            <div class="space-y-2">
                <p class="text-textPrimary text-sm  flex justify-between" ><span>connect...</span> <span class="text-secondary text-xs">*</span></p>
                <div class="p-1 grid grid-cols-2 gap-3">
                    <button class="borde   px-3  py-2 text-secondary text-sm bg-secondaryAlt  rounded-md ">what you what</button>
                    <button class="borde px-3 py-2   text-secondary text-sm bg-secondaryAlt  rounded-md ">what you what</button>
                </div>
            </div>
            <div class="space-y-2">
                <p class="text-textPrimary text-sm  flex justify-between" ><span>film-making</span> <span class="text-secondary text-xs">*</span></p>
                <div class="p-1 grid grid-cols-2 gap-3">
                    <button class="borde   px-3  py-2 text-secondary text-sm bg-secondaryAlt  rounded-md ">pre-production</button>
                    <button class="borde px-3 py-2   text-secondary text-sm bg-secondaryAlt  rounded-md ">post-production</button>
                    <button class="borde px-3 py-2 col-span-2   text-secondary text-sm bg-secondaryAlt  rounded-md ">production</button>
                </div>
            </div>
            <div class="space-y-2">
                <p class="text-textPrimary text-sm  flex justify-between" ><span>markting</span> <span class="text-secondary text-xs">*</span></p>
                <div class="p-1 grid grid-cols-2 gap-3">
                    <button class="borde   px-3  py-2 text-secondary text-sm bg-secondaryAlt  rounded-md ">Distribution</button>
                    <button class="borde px-3 py-2   text-secondary text-sm bg-secondaryAlt  rounded-md ">Promotions</button>
                    <button class="borde px-3 py-2   text-secondary text-sm bg-secondaryAlt  rounded-md ">Premiere</button>
                    <button class="borde px-3 py-2   text-secondary text-sm bg-secondaryAlt  rounded-md ">& Release</button>
                </div>
            </div>
            <div class="space-y-2">
                <p class="text-textPrimary text-sm  flex justify-between" ><span>short-film</span> <span class="text-secondary text-xs">*</span></p>
                <div class="p-1 grid grid-cols-2 gap-3 h-[35vh]">
                    <button class="borde row-span-3  flex justify-start items-end     px-3  py-2 text-secondary text-sm bg-secondaryAlt  rounded-md ">image</button>
                    <button class="borde row-span-1  px-3 py-2   text-secondary text-sm bg-secondaryAlt  rounded-md ">profile</button>
                    <button class="borde row-span-1  px-3 py-2   text-secondary text-sm bg-secondaryAlt  rounded-md ">what you what</button>
                    <button class="borde row-span-1  px-3 py-2   text-secondary text-sm bg-secondaryAlt  rounded-md ">what you what</button>
                </div>
            </div>
            <div class="space-y-2  ">
                <p class="text-textPrimary text-sm  flex justify-between" ><span>latest-updates</span> <span class="text-secondary text-xs">*</span></p>
                <div class="p-1 grid grid-cols-2 gap-3">
                    <button class="borde   col-span-2  px-3  py-2 text-secondary text-sm bg-secondaryAlt  rounded-md ">what you what</button>
                    <button class="borde px-3 py-2   text-secondary text-sm bg-secondaryAlt  rounded-md ">what you what</button>
                </div>
            </div>
            <div class="space-y-2  ">
                <p class="text-textPrimary text-sm  flex justify-between" ><span>equipments</span> <span class="text-secondary text-xs">*</span></p>
                <div class="p-1 grid grid-cols-3 gap-3 h-[28vh]">
                    <button class="borde flex justify-center items-end  row-span-2  px-3  py-2 text-secondary text-sm bg-secondaryAlt  rounded-md ">tripod</button>
                    <button class="borde   row-span-2  px-3  py-2 text-secondary text-sm bg-secondaryAlt  rounded-md ">camera</button>
                    <button class="borde   row-span-2  px-3  py-2 text-secondary text-sm bg-secondaryAlt  rounded-md ">gimble</button>
                    <button class="borde   row-span-2  px-3  py-2 text-secondary text-sm bg-secondaryAlt  rounded-md ">drone</button>
                    <button class="borde   row-span-2  px-3  py-2 text-secondary text-sm bg-secondaryAlt  rounded-md ">lens</button>
                    <button class="borde   row-span-2  px-3  py-2 text-secondary text-sm bg-secondaryAlt  rounded-md ">filters</button>
                 
                </div>
            </div>
        </section>
        <section class="box-2 borderr-4 borderr-red-400">box2</section>
        <aside class="borderr-4 borderr-red-400">aside</aside>
        <section class="box-3 borderr-4 borderr-red-400">box3</section>
        <footer class="borderr-4 borderr-red-400">footer</footer>
    </main>
</template>
<style>
main {
    display: grid;
    grid-template-rows: auto 0.8fr auto auto;
    gap: 10px;
}

@media (min-width: 768px) {
    main {
        display: grid;

        grid-template-areas:
            'navBar navBar'
            'hero aside'
            'box1 aside'
            'box2 box2'
            'box3 box3'
            'footer footer';

        gap: 10px;
        grid-template-columns: 5fr 1fr;

        /* grid-template-rows:auto; */
    }
    aside {
        grid-area: aside;
    }
    nav {
        grid-area: navBar;
    }
    footer {
        grid-area: footer;
    }
    .box-2 {
        grid-area: box2;
    }
    .box-3 {
        grid-area: box3;
    }
}
</style>
