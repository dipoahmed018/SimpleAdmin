import { createRouter, createWebHistory } from 'vue-router';
import AdminRoutes from "./routes/Admin.js"
import HomeRoutes from "./routes/Home.js"

const routes = [
    ...AdminRoutes,
    ...HomeRoutes
]
const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;