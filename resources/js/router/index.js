import { createRouter, createWebHistory } from 'vue-router'
import Home from '../../component/Home.vue'
import Login from '../../component/auth/Login.vue'
import Register from '../../component/auth/Register.vue'
import RegisterDonation from '../../component/donation/Register.vue'
import LoginHospital from '../../component/auth/hospital/LoginHospital.vue'
import RegisterHospital from '../../component/auth/hospital/RegisterHospital.vue'

const routes = [
    {
        path     : '/',
        name     : 'home',
        component: Home
    },
    {
        path     : '/login',
        name     : 'login',
        component: Login
    },
    {
        path     : '/register',
        name     : 'register',
        component: Register
    },
    {
        path     : '/login-hospital',
        name     : 'login-hospital',
        component: LoginHospital
    },
    {
        path     : '/register-hospital',
        name     : 'register-hospital',
        component: RegisterHospital
    },
    {
        path     : '/register-donation',
        name     : 'register-donation',
        component: RegisterDonation,
    },
    // {
    //     path     : '/user-dashboard',
    //     name     : 'user-dashboard',
    //     component: UserDashboard,
    // }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
