<script setup>
import headerComponent from "../components/header/headerComponent.vue";

import bannerComponent from "@/components/main/bannerComponent.vue";
import tableComponent from "@/components/main/tableComponent.vue";
import detailsComponent from "@/components/main/detailsComponent.vue";

import footerComponent from "@/components/footer/footerComponent.vue";

import { goto } from "@/assets/js/buttons";

import { formationInfoData, agendaData } from "@/assets/js/info";
</script>

<template>
    <header>
        <headerComponent />
    </header>

    <main>
        <bannerComponent />

        <div class="info">
            <div class="video">
                <iframe
                    width="700"
                    height="400"
                    src="https://www.youtube.com/embed/5lPd98N0lOg"
                    title="Información del programa: Tecnología Desarrollo de Videojuegos y Entornos Interactivos"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                ></iframe>
            </div>

            <tableComponent :data="formationInfoData" />
        </div>

        <section id="agenda">
            <div class="topic">
                <h1>Temario de la formación</h1>
            </div>
            <detailsComponent :data="agendaData" />
        </section>

        <section id="instructor">
            <div class="topic">
                <h1>Acerca del instructor</h1>
            </div>
            <div class="info">
                <div class="photo">
                    <img src="../assets/images/alvamajo.jpg" alt="instructor" />
                </div>
                <div>
                    <h3>Alva Majo</h3>
                    <p>
                        Hola, soy <span>Alva Majo</span> desarrollador de
                        videojuegos indie y videocreador español.
                    </p>
                    <p>
                        Desarrollo y dirijo videojuegos en mi estudio
                        Majorariatto, que cofundé. También tengo un canal de
                        YouTube y hago streams semanales en Twitch. Nací en
                        España y vivo en Mallorca. Mi pasión por los videojuegos
                        empezó cuando jugué a Super Mario Bros. a los 5 años. En
                        mi adolescencia usé RPG Maker y aprendí programación con
                        Visual Basic en el instituto. Aunque empecé la carrera
                        de Informática, la dejé y opté por títulos técnicos en
                        audiovisuales y programación.
                    </p>
                    <p>
                        Junto a un amigo, inicié el desarrollo de un videojuego
                        ambicioso llamado Nosgoroth bajo el nombre de
                        Majorariatto. Después trabajé un tiempo probando páginas
                        web y automatizando pruebas, pero renuncié para
                        dedicarme por completo a los videojuegos. En 2015 creé
                        Majotori casi en solitario, lo que me permitió seguir
                        desarrollando juegos. En 2018, lancé mi canal de YouTube
                        para promocionar Pureya y Golfing Over It con Alva Majo,
                        y el canal creció bastante, convirtiéndome en una figura
                        conocida en el mundo de los videojuegos.
                    </p>
                    <p>
                        Disfruto con mi trabajo creativo y busco hacer
                        videojuegos que tengan un impacto. Un dato curioso:
                        desarrollé aracnofobia jugando al videojuego
                        Arachnophobia.
                    </p>
                </div>
            </div>
        </section>

        <div class="buttons">
            <button type="button" v-on:click="goto.inscription">
                ¡Inscribete aqui!
            </button>
        </div>
    </main>

    <footer>
        <footerComponent />
    </footer>
</template>
