<script setup>
import { ref } from "vue";

const cat = ref(true);

const deploy_cat = () => {
    cat.value = false;
};

const tac_yolped = () => {
    window.location.href = "/";
}
</script>

<template>
    <div class="😺">
        <img
            v-if="cat"
            src="../assets/images/icons/cat.webp"
            alt="just a 'normal' kitty"
            @click="deploy_cat"
        />
        <video v-else id="cat" autoplay @ended="tac_yolped">
            <source
                src="../assets/videos/deploying-cat.mp4"
                type="video/mp4"

            />
            😺😺😺😺😺😺
        </video>
    </div>
</template>
