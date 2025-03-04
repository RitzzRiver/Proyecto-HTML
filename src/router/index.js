import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [

        // root
        {
            path: "/",
            component: HomeView,
            meta: { title: "Oferta de formación" },
        },

        // competencias con sus codigos
        {
            path: "/competencias",
            component: () => import("@/views/SkillsView.vue"),
            meta: { title: "Competencias" },
        },

        // the panel to see the people signed in the course
        {
            path: "/development/information",
            component: () => import("@/views/InformationView.vue"),
            meta: { title: "Registros" },
        },

        // the sign in form
        {
            path: "/inscripcion",
            component: () => import("@/views/InscriptionView.vue"),
            meta: { title: "Inscripcion al curso" },
        },
        
        // cat
        {
            path: "/the-forbiden",
            component: () => import("@/views/TheForbiden.vue"),
            meta: { title: "😺" },
        },

        // 404 (actually a redirect to root)
        {
            path: "/:pathMatch(.*)*",
            redirect: "/",
        },
    ],
});

export default router;
