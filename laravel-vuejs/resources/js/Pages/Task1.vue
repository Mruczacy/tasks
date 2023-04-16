<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    client: Array,
});
let client = props.client;
</script>

<template>
    <Head title="Task 1" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Task 1</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                    <div class="px-8 py-4 text-red-400">Klient: {{ client.name }} {{ client.surname }}</div>
                    <div class="px-10 py-4 text-red-600">Pracownik odpowiedzialny: {{ client.worker.name }} {{ client.worker.surname }}</div>
                    <div class="px-12 py-4 text-red-800">Ostatnie zamówienia:</div>
                    <div class="px-14 py-4 text-red-800" v-for="order in client.orders">{{ order.id }}. {{ order.name }} Cena: {{ order.price }}</div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
