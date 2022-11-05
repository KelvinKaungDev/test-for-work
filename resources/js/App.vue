<template>

    <div>
        <nav
            class="navbar navbar-expand-lg navbar-light bg-danger p-4"
        >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <h4 class="text-white">
                        Blood Donation.com
                    </h4>
                </a>

                <div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item me-4">
                            <router-link to="/" class="text-white nav-link" :class="$route.name == 'home' ? 'nav-underline' : ''">
                                <font-awesome-icon icon="home" class="me-2"/>
                                Home
                            </router-link>
                        </li>

                        <li class="nav-item me-4">
                            <router-link to="/register-donation" class="text-white nav-link" :class="$route.name == 'register-donation' ? 'nav-underline' : ''">
                                <font-awesome-icon icon="location-pin"  class="mr-1" />
                                Donation
                            </router-link>
                        </li>

                        <!-- <li class="nav-item dropdown me-4">
                            <a class="nav-link text-white dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <font-awesome-icon icon="chart-line" class="mr-1" />
                                Dashboard
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li>
                                    <router-link
                                        to="/user-dashboard"
                                        class="text-danger nav-link dropdown-item"
                                    >
                                        User Dashboard
                                    </router-link>
                                </li>


                                <li>
                                    <router-link
                                        to="/history-dashboard"
                                        class="text-danger nav-link dropdown-item"
                                    >
                                        Hospital Dashboard
                                    </router-link>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <router-link
                                        to="/admin-dashboard"
                                        class="text-danger nav-link dropdown-item"
                                    >
                                        Admin Dashboard
                                    </router-link>
                                </li>
                            </ul>
                        </li> -->

                        <template class="d-flex" v-if="name">
                            <li class="nav-item me-4 text-white nav-link">
                                <font-awesome-icon icon="user" class="mr-1" />
                                {{ name }}
                            </li>

                            <li class="nav-item me-4" @click="logout()">
                                <router-link to="/" class="text-white nav-link" :class="$route.name == 'login' || $route.name == 'login-hospital' ? 'nav-underline' : ''">
                                    <font-awesome-icon icon="right-to-bracket" class="mr-1" />
                                    Logout
                                </router-link>
                            </li>
                        </template>

                        <template class="d-flex" v-else>
                            <li class="nav-item me-4">
                                <router-link to="/login" class="text-white nav-link" :class="$route.name == 'login' || $route.name == 'login-hospital' ? 'nav-underline' : ''">
                                    <font-awesome-icon icon="right-to-bracket" class="mr-1" />
                                    Login
                                </router-link>
                            </li>

                            <li class="nav-item me-4">
                                <router-link to="/register" class="text-white nav-link" :class="$route.name == 'register' || $route.name == 'register-hospital' ? 'nav-underline' : ''">
                                    <font-awesome-icon icon="address-card" class="mr-1" />
                                    Register
                                </router-link>
                            </li>
                        </template>

                    </ul>
                </div>
            </div>
        </nav>

        <router-view></router-view>
    </div>

</template>

<script>
    import axios from 'axios';

    export default {
        name : 'App',
        data () {
            return {
                name: null,

            }
        },
        methods: {
            async logout () {
                await axios.post('logout', localStorage.getItem('token'));
                this.name = null
                localStorage.removeItem('token')
                this.$router.push('/login')
            }
        },
        async created () {
            const response = await axios.get('user');
            this.name = response.data.name
        },
    }
</script>
