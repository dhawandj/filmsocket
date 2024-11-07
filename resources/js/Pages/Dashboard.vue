<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl space-y-3 sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        You're logged in!
                    </div>
                </div>
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800"
                >
                    <div
                        class="p-6 font-bold capitalize text-gray-900 dark:text-gray-100"
                    >
                        <span class="text-red-500"> filmsocket </span>
                        <span class="text-yellow-400">
                            connect all the filmmakers reddy
                        </span>
                        <p>Comming soon...</p>
                        <p>filmtrading alo comming soon</p>
                        <p>hey i change yml file</p>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
