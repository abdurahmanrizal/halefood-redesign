<template>
    <div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-5">
                    <h1
                        class="font-weight-bold mt-5"
                        style="font-family: 'Playfair Display', serif;font-size: 90px; color: #44823d"
                    >
                        Halefood
                    </h1>
                    <h4 class="mb-3 font-weight-bold" style="color: #fcd746">
                        <i>Better Food for better life</i>
                    </h4>
                    <v-btn style="background-color: #44823d" class="text-light">
                        Yuk mulai makan sehat
                    </v-btn>
                    <span class="ml-2" style="font-size: 17px"
                        >IDR {{ price }} / hari</span
                    >
                    <v-img
                        :src="sourceImg"
                        width="100%"
                        height="auto"
                        style="margin-top: -7.9rem; margin-left: -13em"
                    >
                    </v-img>
                </div>
                <div class="col-md-7">
                    <v-img
                        :src="sourceImgMenu"
                        width="100%"
                        height="auto"
                        class="mb-3"
                    >
                    </v-img>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "content",
    data() {
        return {
            price: "37.000",
            sourceImg: "/assets/section-one.png",
            sourceImgMenu: "/assets/menu-bar.png"
        };
    }
};
</script>
