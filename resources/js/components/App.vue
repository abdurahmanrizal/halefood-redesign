<template>
    <div>
        <Navbar />
        <Content />
        <Package />
        <Tagline />
        <Menu />
        <Footer />
    </div>
</template>

<script>
import Navbar from "./Navbar";
import Content from "./Content";
import Tagline from "./Tagline";
import Package from "./Package";
import Menu from "./Menu";
import Footer from "./Footer";
export default {
    name: "App",
    components: {
        Navbar,
        Content,
        Tagline,
        Package,
        Menu,
        Footer
    }
};
</script>
