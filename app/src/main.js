import { createApp } from 'vue'
import router from "./router/index"
import App from './App.vue'
import axios from 'axios'
import 'tailwindcss/tailwind.css'

axios.defaults.baseURL = 'http://localhost:8000/api'

const app = createApp(App)

app.use(router).mount('#app')
