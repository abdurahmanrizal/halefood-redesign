<template>
    <div>
        <div class="container mb-4">
            <div class="row">
                <div class="col-md-7">
                    <!-- <div style="margin-top: 5rem">
                        <h4
                            class="font-weight-bold text-center"
                            style="font-family:'Playfair Display', serif"
                        >
                            Makan sehat bersama keluarga
                        </h4>
                        <h4
                            class="font-weight-bold text-center"
                            style="font-family:'Playfair Display', serif"
                        >
                            lebih nikmat dengan
                            <span style="color: #329148">Hale</span
                            ><span style="color: #fcd746">food</span>
                        </h4>
                    </div> -->
                    <v-img
                        width="400"
                        height="auto"
                        :src="sourceLogo"
                        class="d-block mx-auto"
                        style="z-index:-1; margin-top: -3rem; opacity: .2; padding: 10px 0"
                    ></v-img>
                </div>
                <div class="col-md-5">
                    <v-img
                        width="500"
                        height="auto"
                        class="shadow"
                        :src="sourceImage"
                        style="border-radius: 20px; "
                    ></v-img>
                    <v-img
                        :src="sourceBg"
                        width="500"
                        style="border-radius: 20px; margin-top: -16rem; z-index:-1; margin-left: 5rem"
                    ></v-img>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            sourceImage: "/assets/bg-section-one.png",
            sourceBg: "/assets/section-two.png",
            sourceLogo: "/assets/favicon.png"
        };
    }
};
</script>
