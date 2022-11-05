<template>

    <div class="row container-fluid mt-5">
        <div class="col-md-6 mt-5">
            <img :src="LoginImg" class="login-img">
        </div>

        <div class="col-md-5 mt-5 m-5">

            <h2 class="mb-5">
                Login <span class="text-underline"> To Donate </span>
            </h2>

            <div class="alert alert-danger" role="alert" v-show="errorStatus">
                This Email and Password do not match
            </div>

            <form @submit.prevent="login">

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>

                    <input
                        required
                        id="email"
                        type="email"
                        class="form-control"
                        v-model="userData.email"
                    >
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>

                    <input
                        required
                        id="password"
                        type="password"
                        class="form-control"
                        v-model="userData.password"
                    >
                </div>

                <router-link to="/login-hospital" class="underline-none">
                    <span class="text-danger text-underline">
                        Login as a hospital
                    </span>
                </router-link>

                <div class="d-flex justify-content-center mt-5">
                    <button
                        type="submit"
                        class="btn btn-outline-fg-primary w-75 p-3 hero-btn active"
                    >
                        Login
                    </button>
                </div>

            </form>
        </div>
    </div>

</template>

<script src="../../js/auth/login.js"></script>
