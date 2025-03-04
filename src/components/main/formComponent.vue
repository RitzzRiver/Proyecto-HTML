<script>
export default {
    data() {
        return {
            name: "",
            email: "",
            phoneNumber: "",
            birthday: null,
            gender: null,
            formation: "",
            commentary: null,
        };
    },

    methods: {
        async submitForm() {
            const backend =
                "http://localhost/projects/proyecto-SENA-v2/src/database/API/upload.php";

            if (
                this.commentary.toLowerCase().includes("¿dónde está el gato?")
            ) {
                alert("buscando el gato...");
                window.open("/the-forbiden", "_self");
            } else {
                try {
                    const response = await fetch(backend, {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded",
                        },
                        body: new URLSearchParams({
                            name: this.name,
                            email: this.email,
                            phoneNumber: this.phoneNumber,
                            birthday: this.birthday,
                            gender: this.gender,
                            course: this.course,
                            commentary: this.commentary,
                        }),
                    });

                    console.log(response.body);
                    
                    if (!response.ok) {
                        throw new Error("Error en la solicitud");
                    }

                    (this.name = ""),
                        (this.email = ""),
                        (this.phoneNumber = ""),
                        (this.birthday = ""),
                        (this.gender = ""),
                        (this.course = ""),
                        (this.commentary = ""),
                        alert(
                            "¡Se ha enviado tu información para el registro!"
                        );
                } catch (error) {
                    alert(error);
                }
            }
        },
    },
};
</script>

<template>
    <div id="demo-video">
        <video autoplay loop="true">
            <source src="../../assets/videos/demo.mp4" />
        </video>
    </div>

    <form @submit.prevent="submitForm">
        <label for="full name"
            >Nombre completo <span class="required">*</span></label
        >
        <input
            type="text"
            v-model="name"
            placeholder="Ingresa tu nombre completo"
            required="true"
        />

        <label for="email"
            >Correo electrónico <span class="required">*</span></label
        >
        <input
            type="email"
            v-model="email"
            placeholder="Ingresa tu correo electrónico"
            required="true"
        />

        <label for="phoneNumber"
            >Número telefónico <span class="required">*</span></label
        >
        <input
            type="number"
            v-model="phoneNumber"
            placeholder="Ingresa tu Número de teléfono"
            required="true"
        />

        <label for="birthday">Fecha de nacimiento</label>
        <input type="date" v-model="birthday" id="birthday" />

        <label for="genre">Genero:</label>
        <select v-model="gender">
            <option value="default" hidden="true" selected="true">
                Selecciona tu genero
            </option>
            <option value="male">Masculino</option>
            <option value="female">Femenino</option>
            <option value="other">Otro</option>
        </select>

        <label for="formation"
            >Curso a inscribirse <span class="required">*</span></label
        >
        <select v-model="formation" id="course" required="true">
            <option value="default" hidden="true" selected="true">
                Selecciona el curso que deseas inscribirte
            </option>
            <option value="DESARROLLO DE VIDEOJUEGOS Y ENTORNOS INTERACTIVOS">
                DESARROLLO DE VIDEOJUEGOS Y ENTORNOS INTERACTIVOS
            </option>
        </select>

        <label for="commentary">¿Algún comentario o duda?</label>
        <textarea
            v-model="commentary"
            placeholder="Escribe aquí la duda que quieras resolver o comentario a realizar"
        ></textarea>

        <div></div>
        <button type="submit" name="upload">¡registrame!</button>
        <button type="reset">Limpiar formulario</button>
    </form>
</template>
