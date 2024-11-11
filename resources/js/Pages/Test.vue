<script setup>
import imgUrl from './../../images/camera2.png';
</script>
<template>
    <main class="mx-auto mt-2 h-svh max-w-7xl border p-2">
        <nav class="topbar border-4 border-red-400 p-1">header</nav>
        <div class="content item-3 border-4 border-yellow-400 p-1">
            <div class="hero relative min-h-[50%] overflow-hidden border">
                <span class="p absolute left-[30%] top-20 border"
                    >i am director</span
                >
                <button class="absolute bottom-10 left-72 border p-3">
                    what you want
                </button>
                <button class="absolute bottom-10 left-40 border p-3">
                    what you want
                </button>
                <img
                    class="absolute bottom-0 right-0 h-[140%] w-full border object-contain object-right"
                    :src="imgUrl"
                    alt="no image"
                />
            </div>
        </div>
        <aside class="sidebar item-2 border-4 border-green-400 p-1">
            aside
        </aside>
        <footer class="footer item-4 border-4 border-pink-400 p-1">
            footor
        </footer>
    </main>
</template>
<style>
main {
    display: grid;
    grid-template-areas:
        'topbar topbar'
        'content sidbar'
        'footer footer';

    grid-template-columns: 5fr 1fr;
    grid-template-rows: auto 1fr auto;
    gap: 10px;
}
.topbar {
    grid-area: topbar;
}
.sidebar {
    grid-area: sidbar;
}
.content {
    grid-area: content;
}
.footer {
    grid-area: footer;
}

@media (max-width: 1024px) {
    main{
        display: grid;
    grid-template-areas:
        'topbar'
        'content' 
        'sidbar'
        'footer';
}

}
</style>
