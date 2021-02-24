<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h3
                        class="font-weight-bold my-2 mb-4"
                        style="color: #44823d; font-family:'Playfair Display', serif; font-size: 30px "
                    >
                        Menu
                    </h3>

                    <div
                        v-for="(category, i) in categories"
                        :key="i"
                        style="cursor: pointer"
                        class="ml-2"
                        @click="chooseMenu(category.name)"
                        :class="{ active: category.name == active }"
                    >
                        <div v-if="!Loading">
                            <v-skeleton-loader
                                class="mb-2"
                                width="50"
                                height="50"
                                type="image"
                            ></v-skeleton-loader>
                        </div>
                        <div v-else>
                            <v-img
                                :src="category.source"
                                width="50"
                                class="my-2"
                            >
                            </v-img>
                            <p
                                class="font-weight-bold mt-3 ml-2"
                                style="font-size: 11px"
                            >
                                {{ category.name }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-10" style="margin-top: 3rem">
                    <div class="row" v-if="!loading">
                        <div class="col-md-4" v-for="(item, i) in 6" :key="i">
                            <v-skeleton-loader
                                class="mx-auto"
                                width="300"
                                type="card"
                            ></v-skeleton-loader>
                        </div>
                    </div>
                    <div v-else>
                        <div class="row" v-if="menus.length > 0">
                            <div
                                class="col-md-4"
                                v-for="(item, i) in menus"
                                :key="i"
                            >
                                <div
                                    class="card ml-2 shadow"
                                    style="width: auto; border-radius: 10px"
                                >
                                    <v-img
                                        :src="item.source"
                                        width="auto"
                                        height="225"
                                        style="border-radius: 15px"
                                        class="shadow"
                                    >
                                        <template v-slot:placeholder>
                                            <div class="row d-block mx-auto">
                                                <v-progress-circular
                                                    indeterminate
                                                    style="color: #FDD835"
                                                ></v-progress-circular>
                                            </div> </template
                                    ></v-img>

                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">
                                            {{ item.name }}
                                        </h5>
                                        <h6>IDR {{ item.price }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" v-else>
                            <div class="col-md-12">
                                <v-img
                                    :src="emptyImage"
                                    class="my-4 d-block mx-auto"
                                    width="250"
                                >
                                    <template v-slot:placeholder>
                                        <v-row
                                            class="fill-height ma-0"
                                            align="center"
                                            justify="center"
                                        >
                                            <v-progress-circular
                                                indeterminate
                                                color="grey lighten-5"
                                            ></v-progress-circular>
                                        </v-row>
                                    </template>
                                </v-img>
                                <br />
                                <h4
                                    class="font-weight-bold text-center"
                                    style="font-family:'Playfair Display', serif"
                                >
                                    Oopss... Menu belum tersedia
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            sourceCategory: "/assets/category-menu/chicken.png",
            categories: [
                { name: "AYAM", source: "/assets/category-menu/chicken.png" },
                { name: "IKAN", source: "/assets/category-menu/fish.png" },
                { name: "ROTI", source: "/assets/category-menu/bread.png" },
                { name: "SNACK", source: "/assets/category-menu/snack.png" },
                {
                    name: "MINUMAN",
                    source: "/assets/category-menu/beverage.png"
                },
                {
                    name: "SEMUA",
                    source: "/assets/category-menu/all-item.png"
                }
            ],
            menus: {},
            loading: false,
            active: "",
            emptyImage: "/assets/plate-empty.png"
        };
    },
    computed: {
        Loading: function() {
            if (navigator.onLine == true) {
                return true;
            } else {
                return false;
            }
        }
    },
    mounted() {
        this.getMenus();
    },
    methods: {
        getMenus() {
            if (navigator.onLine) {
                axios
                    .get("/api/data/menus")
                    .then(response => {
                        this.menus = response.data.menus;
                        setTimeout((this.loading = true), 3000);
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error);
                    });
            }
        },
        chooseMenu(value) {
            if (navigator.onLine) {
                if (value != this.active) {
                    window.csrfToken = document.querySelector(
                        'meta[name="csrf-token"]'
                    ).content;
                    axios
                        .post("/api/data/menus", {
                            name: value,
                            _token: csrfToken
                        })
                        .then(response => {
                            // handle success
                            this.menus = response.data.menus;
                            this.active = value;
                            setTimeout((this.loading = true), 3000);
                        })
                        .catch(function(error) {
                            // handle error
                            console.log(error);
                        });
                    setTimeout((this.loading = false), 3000);
                } else {
                    return false;
                }
            }
        }
    }
};
</script>
<style>
.card {
    border: none !important;
    box-shadow: none !important;
    background-color: transparent !important;
}
.v-image__placeholder {
    width: 40px !important;
    margin-left: 9em !important;
}
.v-progress-circular {
    position: inherit !important;
}
</style>
