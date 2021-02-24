<template>
    <div>
        <v-app-bar class="mt-2">
            <v-toolbar-title class="font-weight-bold ml-5">
                <v-img :src="logo" width="50"></v-img>
            </v-toolbar-title>

            <v-spacer></v-spacer>

            <span
                v-for="(item, i) in navbarMenus"
                :key="i"
                class="ml-3"
                style="font-size: 15px;"
            >
                {{ item.name }}
            </span>
        </v-app-bar>
    </div>
</template>

<script>
export default {
    name: "App",
    data() {
        return {
            logo: "/assets/favicon.png",
            navbarMenus: [
                { name: "Beranda" },
                { name: "Paket" },
                { name: "Menu" },
                { name: "Galeri" }
            ]
        };
    }
};
</script>
<style>
.v-sheet.v-toolbar:not(.v-sheet--outlined) {
    box-shadow: none !important;
}
.theme--light.v-app-bar.v-toolbar.v-sheet {
    background-color: #f8fafc !important;
}
</style>
