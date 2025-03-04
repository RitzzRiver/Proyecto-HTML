<script setup>
import { goto } from "@/assets/js/buttons";
</script>

<template>
    <div class="gov">
        <img
            id="gov-logo"
            src="../../assets/images/icons/gov-logo.svg"
            alt="gov logo"
        />
    </div>
    <div id="banner-sena">
        <img
            id="zajuna-logo"
            src="../../assets/images/icons/zajuna-logo.svg"
            alt="zajuna-logo"
        />
        <img
            id="sena-logo"
            src="../../assets/images/icons/sena-logo.svg"
            alt="sena-logo"
        />
    </div>

    <div class="header-info">
        <p class="title">DESARROLLO DE VIDEOJUEGOS Y ENTORNOS INTERACTIVOS</p>
        <div class="subtitle">
            <p>Nivel de formación: Tecnólogo</p>
        </div>
    </div>

    <nav class="navbar">
        <div class="nav-links">
            <ul>
                <li>
                    <a href="/"> Inicio </a>
                </li>
                <hr />
                <li>
                    <button type="button" v-on:click="goto.agenda">
                        temario
                    </button>
                </li>
                <hr />
                <li>
                    <button type="button" v-on:click="goto.skills">
                        Competencias a desarrollar
                    </button>
                </li>
                <hr />
                <li>
                    <button type="button" v-on:click="goto.instructor">Acerca del instructor</button>
                </li>
            </ul>
        </div>
    </nav>
</template>
