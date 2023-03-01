<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    links: Array,
});
</script>

<template>
    <div>
        <template v-for="link in links">
            <Link
                v-if="link.url"
                :href="link.url"
                v-html="link.label"
                class="px-2 mx-1"
                :class="{
                    'border border-gray-500 rounded-sm': Number(link.label),
                    'bg-gray-300': link.active,
                }"
            />
            <span v-else v-html="link.label" class="px-2 text-gray-500" />
        </template>
    </div>
</template>
