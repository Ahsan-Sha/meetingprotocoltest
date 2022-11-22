<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import { Link } from "@inertiajs/inertia-vue3";
import { useForm } from "@inertiajs/inertia-vue3";

const props = defineProps({
    blogs: {
        type: Object,
        default: () => ({}),
    },
});


const form = useForm({
    name: '',
    make: '',
    model: '',
    size: '',
    color: '',
    price: '',
    make_date: ''
});

const submit = () => {
    form.post(route("bicycles.store"));
};
</script>

<template>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0">
    <div class="py-12" style="width:80%">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form @submit.prevent="submit">
                            <div class="mb-6">
                                <label
                                    for="Name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                >Name</label
                                >
                                <input
                                    type="text"
                                    v-model="form.name"
                                    name="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder=""
                                />
                                <div
                                    v-if="form.errors.name"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.name }}
                                </div>
                            </div>
                            <div class="mb-6">
                                <label
                                    for="Make"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                >Make</label
                                >
                                <input
                                    type="text"
                                    v-model="form.make"
                                    name="make"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder=""
                                />
                                <div
                                    v-if="form.errors.make"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.make }}
                                </div>
                            </div>
                            <div class="mb-6">
                                <label
                                    for="Model"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                >Model</label
                                >
                                <input
                                    type="text"
                                    v-model="form.model"
                                    name="model"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder=""
                                />
                                <div
                                    v-if="form.errors.model"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.model }}
                                </div>
                            </div>

                            <div class="mb-6">
                                <label
                                    for="Size"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                >Size</label
                                >
                                <input
                                    type="text"
                                    v-model="form.size"
                                    name="size"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder=""
                                />
                                <div
                                    v-if="form.errors.size"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.size }}
                                </div>
                            </div>

                            <div class="mb-6">
                                <label
                                    for="Color"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                >Color</label
                                >
                                <input
                                    type="text"
                                    v-model="form.color"
                                    name="color"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder=""
                                />
                                <div
                                    v-if="form.errors.color"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.color }}
                                </div>
                            </div>

                            <div class="mb-6">
                                <label
                                    for="Price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                >Price</label
                                >
                                <input
                                    type="text"
                                    v-model="form.price"
                                    name="price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder=""
                                />
                                <div
                                    v-if="form.errors.price"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.price }}
                                </div>
                            </div>

                            <div class="mb-6">
                                <label
                                    for="make_date"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                >Make Date</label
                                >
                                <input
                                    type="text"
                                    v-model="form.make_date"
                                    name="make_date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder=""
                                />
                                <div
                                    v-if="form.errors.make_date"
                                    class="text-sm text-red-600"
                                >
                                    {{ form.errors.make_date }}
                                </div>
                            </div>
                            <button
                                type="submit"
                                class="text-white bg-blue-700  focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 "
                                :disabled="form.processing"
                                :class="{ 'opacity-25': form.processing }"
                            >
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
