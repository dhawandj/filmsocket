<script setup>
import imgUrl from './../../images/camera2.png';
</script>
<template>
    <main class="min-h-svh borderr p-2">
        <nav class="nav borderr borderr-red-400">filmsocket.com</nav>
        <section class="borderr-4 borderr-red-400">
            <div class="borderr-2 min-h-[30vh] max-h-[30vh] bg-zinc-900 rounded-md   relative overflow-hidden ">
                <img class="h-[40vh]  -right-4  bottom-0   absolute    borderr-green-400 borderr"  :src="imgUrl" alt="">
                <!-- <button class="borderr px-2 py-1 text-sm   absolute bottom-[2vh] left-[2vh] rounded-md ">what you what</button> -->
                <!-- <button class="borderr px-2 py-1 text-sm  absolute bottom-[2vh] left-[30vh] rounded-md ">what you what</button> -->
            </div>
        </section>
        <section class="borderr-4 borderr-red-400 space-y-3">
            <p class="text-textPrimary">Connect..</p>
            <div class="p-1 flex justify-around gap-x-3">
                <button class="borde   px-3 flex-1  py-2 text-secondary text-sm bg-secondaryAlt  rounded-md ">what you what</button>
                <button class="borde px-3 py-2 flex-1  text-secondary text-sm bg-secondaryAlt  rounded-md ">what you what</button>
            </div>
            <p class="text-textPrimary">filmMaking</p>
            <div class="p-1 flex justify-around gap-x-3">
                <button class="borde px-3 flex-1  py-2 text-secondary text-sm bg-secondaryAlt  rounded-md ">pre-production</button>
                <button class="borde px-3 py-2 flex-1  text-secondary text-sm bg-secondaryAlt  rounded-md ">post-production</button>
            </div>
            <p class="text-textPrimary">Markting</p>
            <div class="p-1 grid  grid-cols-3 gap-2   ">
                <button class="borde px-3 flex-1  py-2 text-secondary text-sm bg-secondaryAlt  rounded-md ">Promations</button>
                <button class="borde px-3 py-2 flex-1  text-secondary text-sm bg-secondaryAlt  rounded-md ">Sposnors</button>
                <button class="borde px-3 py-2 flex-1  text-secondary text-sm bg-secondaryAlt  rounded-md ">Money</button>
                <button class="borde px-3 py-2 flex-1  text-secondary text-sm bg-secondaryAlt  rounded-md ">Honey</button>
                <button class="borde px-3 py-2 flex-1 col-span-2  text-secondary text-sm bg-secondaryAlt  rounded-md ">Honey</button>
                <button class="borde px-3 py-2 flex-1 col-span-2  text-secondary text-sm bg-secondaryAlt  rounded-md ">Honey</button>
            </div>
            <p class="text-textPrimary">Connect..</p>
                <div class="p-1 grid grid-cols-2 h-[40vh] gap-2">
                    <button class="border border-secondary  px-3 row-span-4   py-2 text-secondary text-sm bg-secondaryAlt rounded-md">what you want</button>
                    <button class="border border-secondary  px-3 row-span-4  py-2 text-secondary text-sm bg-secondaryAlt rounded-md">what you have</button>
                </div>

            <p class="text-textPrimary">Connect..</p>
            <div class="p-1 flex justify-around gap-x-3">
                <button class="borde px-3 flex-1  py-2 text-secondary text-sm bg-secondaryAlt  rounded-md ">what you what</button>
                <button class="borde px-3 py-2 flex-1  text-secondary text-sm bg-secondaryAlt  rounded-md ">what you what</button>
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
