import { createRouter, createWebHistory } from 'vue-router';
import AdminRoutes from "./routes/Admin.js"


const routes = [
    ...AdminRoutes
]
const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;