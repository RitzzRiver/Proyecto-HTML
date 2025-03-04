<script setup>
import headerComponent from "@/components/header/headerComponent.vue";
import { skillsData } from "@/assets/js/info";

import footerComponent from "@/components/footer/footerComponent.vue";
</script>
<template>
    <main>
        <div class="skills">
            <div class="topic">
                <h1>Competencias</h1>
            </div>
            <blockquote v-for="skill in skillsData" :key="skill">
                <h3>{{ skill.code }}</h3>
                <p>{{ skill.content }}</p>
            </blockquote>
        </div>
    </main>
    <footer>
        <footerComponent />
    </footer>
</template>

<style scoped></style>
