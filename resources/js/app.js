import "./bootstrap";
import Alpine from "alpinejs";

window.Alpine = Alpine;

document.addEventListener("alpine:init", () => {
    Alpine.store("modal", {
        open: false,
    });
});

Alpine.start();
