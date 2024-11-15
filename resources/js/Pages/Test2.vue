<script setup>
import imgUrl from './../../images/camera2.png';
import PrimaryBtn from '@/Components/PrimaryBtn.vue';
import MyTransition from '@/Components/MyTransition.vue';
import { ref } from 'vue';
const quotation = ref('this is my quote');

function getRandomNumber() {
    const min = 1;
    const max = 100;
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function setQuotations() {
    quotation.value = getRandomNumber();
}
</script>
<template>
    <MyTransition>
        <main class="borderr min-h-svh p-2">
            <nav
                class="nav borderr borderr-red-400 sticky top-0 z-10 bg-background p-2.5"
            >
                filmsocket.com
            </nav>

            <section class="borderr-4 borderr-red-400">
                <div
                    class="borderr-2 relative max-h-[25vh] min-h-[25vh] overflow-hidden rounded-md bg-zinc-900"
                >
                    <img
                        class="hidde borderr-green-400 borderr absolute -right-4 bottom-0 h-[30vh] opacity-25"
                        :src="imgUrl"
                        alt=""
                    />
                    <button
                        class="borderr text- bg-secondaryAl absolute left-0 top-10 rounded-md px-2 py-1 text-sm"
                    >
                        <!-- “If you just love movies enough, you can make a good
                        one.” -->
                        {{ quotation }}
                    </button>
                    <button @click="setQuotations"
                        class="borderr absolute bottom-[1vh] right-[10vh] text-nowrap rounded-md bg-secondaryAlt px-5 py-1 text-sm text-textPrimary"
                    >
                        inspire me
                    </button>
                </div>
            </section>

            <section class="borderr-4 box-1 borderr-red-400 space-y-4">
                <div class="space-y-2">
                    <p class="flex justify-between text-sm text-textPrimary">
                        <span>connect...</span>
                    </p>
                    <div class="grid grid-cols-2 gap-3 p-1">
                        <PrimaryBtn lable="what you want ?" />
                        <PrimaryBtn lable="what you have @" />
                    </div>
                </div>
                <div class="space-y-2">
                    <p class="flex justify-between text-sm text-textPrimary">
                        <span>film-making</span>
                    </p>
                    <div class="grid grid-cols-2 gap-3 p-1">
                        <PrimaryBtn
                            :href="route('preproduction')"
                            lable="pre-production"
                        />
                        <PrimaryBtn lable="post-production" />
                        <PrimaryBtn class="col-span-2" lable="production" />
                    </div>
                </div>
                <div class="space-y-2">
                    <p class="flex justify-between text-sm text-textPrimary">
                        <span>markting</span>
                    </p>
                    <div class="grid grid-cols-2 gap-3 p-1">
                        <PrimaryBtn lable="Distribution" />
                        <PrimaryBtn lable="Promotions" />
                        <PrimaryBtn lable="Premiere" />
                        <PrimaryBtn lable="& Release" />
                    </div>
                </div>
                <div class="space-y-2">
                    <p class="flex justify-between text-sm text-textPrimary">
                        <span>short-film</span>
                    </p>
                    <div class="grid h-[35vh] grid-cols-2 gap-3 p-1">
                        <button
                            class="borde row-span-3 flex items-end justify-start rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            image
                        </button>
                        <button
                            class="borde row-span-1 rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            profile
                        </button>
                        <button
                            class="borde row-span-1 rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            what you what
                        </button>
                        <button
                            class="borde row-span-1 rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            what you what
                        </button>
                    </div>
                </div>
                <div class="space-y-2">
                    <p class="flex justify-between text-sm text-textPrimary">
                        <span>latest-updates</span>
                    </p>
                    <div class="grid grid-cols-2 gap-3 p-1">
                        <button
                            class="borde col-span-2 rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            what you what
                        </button>
                        <button
                            class="borde rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            what you what
                        </button>
                    </div>
                </div>
                <div class="space-y-2">
                    <p class="flex justify-between text-sm text-textPrimary">
                        <span>equipments</span>
                    </p>
                    <div class="grid h-[28vh] grid-cols-3 gap-3 p-1">
                        <button
                            class="borde row-span-2 flex items-end justify-center rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            tripod
                        </button>
                        <button
                            class="borde row-span-2 rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            camera
                        </button>
                        <button
                            class="borde row-span-2 rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            gimble
                        </button>
                        <button
                            class="borde row-span-2 rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            drone
                        </button>
                        <button
                            class="borde row-span-2 rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            lens
                        </button>
                        <button
                            class="borde row-span-2 rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            filters
                        </button>
                    </div>
                </div>
                <div class="space-y-2">
                    <p class="flex justify-between text-sm text-textPrimary">
                        <span>card-theory</span>
                    </p>
                    <div class="grid h-[28vh] grid-cols-3 gap-3 p-1">
                        <button
                            class="borde borderr row-span-3 rounded-sm bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            card-1
                        </button>
                        <button
                            class="borde row-span-3 rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            card-2
                        </button>
                        <button
                            class="borde row-span-3 rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            card-3
                        </button>
                        <button
                            class="borde col-span-3 rounded-md bg-secondaryAlt text-sm text-secondary"
                        >
                            read more...
                        </button>
                    </div>
                </div>

                <div class="space-y-2">
                    <p class="flex justify-between text-sm text-textPrimary">
                        <span>what you want</span>
                    </p>
                    <div class="grid h-[40vh] grid-cols-4 gap-3 p-1">
                        <input
                            class="borde col-span-4 rounded-md bg-secondaryAlt px-3 py-2 text-start text-sm text-textPrimary"
                            placeholder="search"
                        />
                        <button
                            class="borde col-span-2 row-span-4 rounded-md bg-secondaryAlt text-sm text-secondary"
                        >
                            <img
                                class="borde h-[20vh] w-full object-contain"
                                :src="imgUrl"
                                alt=""
                            />
                        </button>
                        <button
                            class="borde col-span-1 rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            buy
                        </button>
                        <button
                            class="borde col-span-1 rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            rent
                        </button>
                    </div>
                </div>
            </section>

            <section class="box-2 borderr-4 borderr-red-400">box2</section>

            <aside class="borderr-4 borderr-red-400">
                <div class="h-[40vh]">
                    <div class="grid grid-cols-2 gap-2 p-1">
                        <button
                            class="borde col-span-2 rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            $sponsor
                        </button>
                        <button
                            class="borde col-span-2 rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            Ads
                        </button>
                        <button
                            class="borde col-span-2 rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            latests
                        </button>
                        <button
                            class="borde col-span-2 rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            resources
                        </button>
                        <button
                            class="borde rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            like
                        </button>
                        <button
                            class="borde rounded-md bg-secondaryAlt px-3 py-2 text-sm text-secondary"
                        >
                            support
                        </button>
                    </div>
                </div>
            </aside>

            <section class="box-3 borderr-4 borderr-red-400">box3</section>
            <footer class="borderr-4 borderr-red-400">footer</footer>
        </main>
    </MyTransition>
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
            'box1 box1'
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
    .box-1 {
        grid-area: box1;
    }
}
</style>
