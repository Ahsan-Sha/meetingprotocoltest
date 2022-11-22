<template>
    <div v-for="(errorArray, idx) in notifmsg" :key="idx">
        <div v-for="(allErrors, idx) in errorArray" :key="idx">
            <span class="text-danger">{{ allErrors}} </span>
        </div>
    </div>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0">
        <div class="row" style="width:80%">
            <div class="">
                <inertia-link
                    :href="route('bicycles.create')"
                ><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add </button>
                </inertia-link>

            </div>
            <div>
                <EasyDataTable
                    :headers="headers"
                    :items="items"
                />
            </div>
        </div>

    </div>
</template>

<script lang="ts">
import type { Header, Item } from "vue3-easy-data-table";
import {defineComponent} from "vue";

export default defineComponent({
    props: {
        bicycles: Array
    },
    setup(props) {

        const headers: Header[] = [
            { text: "NAME", value: "name" },
            { text: "MAKE", value: "make"},
            { text: "MODEL", value: "model"},
            { text: "SIZE", value: "size"},
            { text: "COLOR", value: "color"},
            { text: "PRICE", value: "price", sortable: true},
            { text: "MANUFACTURING DATE", value: "make_date", width: 200}
        ];
        const items: Item[] = props.bicycles;
        console.log(items);
        return {
            headers,
            items
        };
    },
});
</script>
