export let goto = {
    agenda: () =>
        document
            .getElementById("agenda")
            .scrollIntoView({ behavior: "smooth" }),

    justification: () =>
        document
            .getElementById("justification")
            .scrollIntoView({ behavior: "smooth" }),

    skills: () => window.open("/competencias"),

    methodology: () =>
        document
            .getElementById("methodology")
            .scrollIntoView({ behavior: "smooth" }),

    instructor: () =>
        document
            .getElementById("instructor")
            .scrollIntoView({ behavior: "smooth" }),

    inscription: () => window.open("/inscripcion", "_self"),
};

export function printPage() {
    window.print();
}
