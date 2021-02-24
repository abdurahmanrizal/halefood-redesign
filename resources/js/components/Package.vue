<template>
    <div>
        <div class="container py-2 my-5">
            <div class="row">
                <div class="col-md-4">
                    <v-img
                        :src="source"
                        width="100%"
                        class="my-4"
                        style="margin-left: -3rem"
                    >
                    </v-img>
                </div>
                <div class="col-md-8">
                    <h3
                        class="font-weight-bold my-2 mb-3 text-center"
                        style="color: #44823d; font-family:'Playfair Display', serif; font-size: 30px "
                    >
                        Program Sehat
                    </h3>
                    <div class="row">
                        <div
                            class="col-md-4"
                            v-for="(item, i) in packages"
                            :key="i"
                        >
                            <v-img
                                height="auto"
                                :src="item.source"
                                style="border-radius: 10px"
                                class="shadow"
                            ></v-img>

                            <v-card-title
                                class="font-weight-bold"
                                style="font-size: 15px; font-family:'Playfair Display', serif"
                                >{{ item.name }} <br />
                                Rp. {{ item.price }}</v-card-title
                            >
                            <v-divider class="mx-4"></v-divider>
                            <v-btn
                                style="background-color: #00695C"
                                class="text-light"
                            >
                                <v-icon class="mr-1">{{ svgPath }}</v-icon> Beli
                                Sekarang
                            </v-btn>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { mdiWhatsapp } from "@mdi/js";
export default {
    name: "package",
    data() {
        return {
            source: "/assets/exercise.png",
            packages: [
                {
                    name: "Sehat Seharian",
                    source: "/assets/package/program-seharian.jpg",
                    price: "39.000"
                },
                {
                    name: "Program Mingguan",
                    source: "/assets/package/program-mingguan.jpg",
                    price: "220.000"
                },
                {
                    name: "Program Sebulan",
                    source: "/assets/package/program-sebulan.jpg",
                    price: "864.000"
                }
            ],
            svgPath: mdiWhatsapp
        };
    }
};
</script>
