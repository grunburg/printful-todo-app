import { createRouter, createWebHistory } from 'vue-router'
import Tasks from '/src/views/Tasks.vue'
import Task from '/src/views/Task.vue'

const routes = [
    {
        path: '/',
        name: 'Tasks',
        component: Tasks,
    },
    {
        path: '/task/:id',
        name: 'Task',
        component: Task,
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router