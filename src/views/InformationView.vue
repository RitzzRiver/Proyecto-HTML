<script setup>
import { printPage } from "@/assets/js/buttons";
import { ref, onMounted } from "vue";

import headerComponent from "@/components/header/headerComponent.vue";

import footerComponent from "@/components/footer/footerComponent.vue";

const data = ref([]);

onMounted(async () => {
    const backend =
        "http://localhost/projects/proyecto-SENA-v2/src/database/API/getData.php";
    try {
        const response = await fetch(backend);
        if (!response.ok) throw new Error("Error al obtener los datos");
        setTimeout(async () => {
            data.value = await response.json();
            console.log("DATA:");
            console.log(data);
        }, 3000);

    } catch (error) {
        console.error("Error", error);
    }
});
</script>

<template>
    <header>
        <headerComponent />
        <h1>Página de información de registros</h1>
    </header>

    <main>
        <div id="reg-table-container">
            <table id="register-table-info">
                <thead>
                    <th>Fecha de inscripción</th>
                    <th>Nombres</th>
                    <th>Correo electrónico</th>
                    <th>Número telefónico</th>
                    <th>Fecha de nacimiento</th>
                    <th>Genero</th>
                    <th>Curso</th>
                    <th>Comentario</th>
                    
                </thead>
                <tbody>
                    <tr v-for="item in data" :key="item.id">
                        <td>{{ item.time }}</td>
                        <td>{{ item.name }}</td>
                        <td>{{ item.email }}</td>
                        <td>{{ item.phoneNumber }}</td>
                        <td>{{ item.birthday }}</td>
                        <td>{{ item.gender }}</td>
                        <td>{{ item.formation }}</td>
                        <td>{{ item.comment }}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <img src="../assets/images/loading-thinking.gif" alt="" />
            </div>
        </div>
        <div id="buttons-container">
            <button v-on:click="printPage">exportar como PDF</button>
        </div>
    </main>

    <footer>
        <footerComponent />
    </footer>
</template>
