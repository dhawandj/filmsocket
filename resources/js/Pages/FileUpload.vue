<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    name: null,
    avatars: [], // This will hold multiple files
});

function submit() {
    form.post('/upload', {
        onSuccess: () => {
            form.reset();
            // Reset the file input
            const fileInput = document.querySelector('input[type="file"]');
            if (fileInput) fileInput.value = '';  // Clears the file input
        },
    });
}
</script>

<template>
    <div class="grid h-svh place-content-center">
        <form @submit.prevent="submit">
            <input type="text" v-model="form.name" placeholder="Enter Name" />

            <!-- Input to allow multiple file selection -->
            <input 
                type="file" 
                @change="form.avatars = Array.from($event.target.files)" 
                multiple 
            />

            <!-- Progress bar for file upload -->
            <progress 
                v-if="form.progress" 
                :value="form.progress.percentage" 
                max="100"
            >
                {{ form.progress.percentage }}%
            </progress>

            <button type="submit">Submit</button>
        </form>
    </div>
</template>
