<script setup>
import headerComponent from "@/components/header/headerComponent.vue";

import formComponent from "@/components/main/formComponent.vue";

import footerComponent from "@/components/footer/footerComponent.vue";
</script>

<template>
    <header>
        <headerComponent />
    </header>

    <main>

        <div id="inscription">
            <div id="form">
                <formComponent />
            </div>
        </div>

    </main>

    <footer>
        <footerComponent />
    </footer>
</template>
