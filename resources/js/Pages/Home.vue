<script setup>
import MyTransitions from '@/Components/MyTransition.vue';
import imgUrl from './../../images/camera2.png';
</script>
<template>
    <MyTransitions>
        <main
            class="overflow-aut borde mx-auto h-svh max-w-7xl space-y-2 border-red-500 p-3"
        >
            <nav
                class="rounded-md border border-zinc-600 p-2 text-center text-textPrimary"
            >
                filmsocket.com
            </nav>
            <section class="flex h-[93%]">
                <!-- body-section -->
                <section class="w-[85%] space-y-3 overflow-y-auto px-3 pt-3">
                    <!-- box-1 -->
                    <div
                        class="borde relative h-1/2 rounded-md border-secondary bg-zinc-900"
                    >
                        <img
                            class="borde absolute right-2 top-0 h-full w-[25%] object-cover object-bottom"
                            :src="imgUrl"
                            alt="camera image"
                        />
                        <div class="absolute bottom-[10%] left-10 space-x-20">
                            <button
                                class="borde rounded-md bg-secondaryAlt px-3 py-2 font-mono text-secondary transition-all duration-300 hover:bg-textPrimary hover:text-secondaryAlt"
                            >
                                What you Have
                            </button>
                            <button
                                class="borde rounded-md bg-secondaryAlt px-3 py-2 font-mono text-secondary transition-all duration-300 hover:bg-textPrimary hover:text-secondaryAlt"
                            >
                                What you Want.
                            </button>
                        </div>
                        <p class="absolute left-40 top-20 text-2xl">
                            I am <span class="text-yellow-500">Director</span>
                        </p>
                    </div>
                    <!-- box-2 -->
                    <div class="p- grid h-[45%] grid-cols-3 gap-2">
                        <!-- a  -->
                        <div
                            class="col-span-2 flex items-center justify-center rounded-sm bg-yellow-400 text-black"
                        >
                            comming soon...
                        </div>
                        <!-- b  -->
                        <div class="bg-blue-40 space-y-5">
                            <div
                                class="mx-5 rounded-md bg-secondaryAlt py-5 text-center font-mono text-textPrimary transition-all duration-300 hover:bg-textPrimary hover:text-secondaryAlt"
                            >
                                Pre-Production
                            </div>
                            <div
                                class="borde mt- mx-3 rounded-md bg-secondaryAlt py-5 text-center font-mono text-textPrimary transition-all duration-300 hover:bg-textPrimary hover:text-secondaryAlt"
                            >
                                Post-Production
                            </div>
                            <div
                                class="borde mt- mx-3 cursor-pointer rounded-md bg-secondaryAlt py-5 text-center font-mono text-textPrimary transition-all duration-300 hover:bg-textPrimary hover:text-secondaryAlt"
                            >
                                Promations
                            </div>
                        </div>
                    </div>
                </section>

                <!-- aside -->
                <section class="flex-1">
                    <div class="borde flex h-full flex-col space-y-3 p-2">
                        <div
                            class="mx- mt- cursor-pointer rounded-sm border border-secondary bg-secondaryAlt py-1.5 text-center font-mono text-textPrimary transition-all duration-300 hover:bg-textPrimary hover:text-secondaryAlt"
                        >
                            $ Donate
                        </div>
                        <div
                            class="borde mx- mt- cursor-pointer rounded-sm bg-secondaryAlt py-1.5 text-center font-mono text-textPrimary transition-all duration-300 hover:bg-textPrimary hover:text-secondaryAlt"
                        >
                            stories
                        </div>
                        <div
                            class="borde mx- mt- cursor-pointer rounded-sm bg-secondaryAlt py-1.5 text-center font-mono text-textPrimary transition-all duration-300 hover:bg-textPrimary hover:text-secondaryAlt"
                        >
                            animations
                        </div>
                        <div
                            class="borde mx- mt- cursor-pointer rounded-sm bg-secondaryAlt py-1.5 text-center font-mono text-textPrimary transition-all duration-300 hover:bg-textPrimary hover:text-secondaryAlt"
                        >
                            scripts
                        </div>
                        <div
                            class="borde mx- mt- cursor-pointer rounded-sm bg-secondaryAlt py-1.5 text-center font-mono text-textPrimary transition-all duration-300 hover:bg-textPrimary hover:text-secondaryAlt"
                        >
                            artists
                        </div>
                        <div
                            class="borde mx- mt- cursor-pointer rounded-sm bg-secondaryAlt py-1.5 text-center font-mono text-textPrimary transition-all duration-300 hover:bg-textPrimary hover:text-secondaryAlt"
                        >
                            cgi
                        </div>
                        <div
                            class="borde grow cursor-pointer rounded-sm bg-secondaryAlt py-1.5 text-center font-mono text-textPrimary transition-all duration-300 hover:bg-textPrimary hover:text-secondaryAlt"
                        >
                            @ Sposnor
                        </div>
                    </div>
                </section>
            </section>
        </main>
    </MyTransitions>
</template>
<style>
/* Global unselectable text
* {
  user-select: none;
} */

/* ::selection {
  background-color: #3399ff;
  color: #ffffff;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
} */
</style>
