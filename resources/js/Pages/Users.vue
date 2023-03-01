<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Pagination from "@/Components/Pagination.vue"
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    users: Object,
});
</script>

<template>
    <Head title="Users" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Users
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-gray-900 text-lg">
                        <!-- Table -->
                        <div
                            class="relative overflow-x-auto shadow-md sm:rounded-lg"
                        >
                            <table
                                class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
                            >
                                <tbody>
                                    <tr
                                        class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
                                        v-for="user in users.data"
                                        :key="user.id"
                                    >
                                        <td class="px-6 py-4">
                                            {{ user.name }}
                                        </td>
                                        <td class="flex justify-end px-6 py-4">
                                            <Link
                                                href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                                >Edit</Link
                                            >
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Table -->
                    </div>
                </div>

                <!-- paginator -->
                <Pagination :links="users.links" class="mt-6 flex justify-center"/>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
