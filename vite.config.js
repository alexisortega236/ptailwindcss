import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["asset/css/app.css", "asset/js/app.js"],
            refresh: true,
        }),
    ],
});
