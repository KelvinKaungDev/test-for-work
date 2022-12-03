<template>
    <div class="text-center mt-5">
        <h2>Online Yogi Registration</h2>
    </div>

    <div class="d-flex justify-content-center pb-5">
        <form @submit.prevent="register">
            <div class="row mt-2 col-md-12 mt-5 m-5">
                <div class="col-md-3 border-end">
                    <small>
                        Basic Information
                    </small>
                </div>

                <div class="col-md-8 ms-4">
                    <div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>

                            <input
                                required
                                id="name"
                                type="text"
                                class="form-control"
                                placeholder="Enter yogi name"
                            >
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Father Name</label>

                            <input
                                required
                                id="name"
                                type="text"
                                class="form-control"
                                placeholder="Enter yogi's father name"
                            >
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>

                            <input
                                required
                                id="email"
                                type="email"
                                class="form-control"
                                placeholder="Enter yogi email"
                            >
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Contact Number</label>

                            <input
                                required
                                id="email"
                                type="email"
                                class="form-control"
                                placeholder="Enter yogi's phone number"
                            >
                        </div>

                        <div class="row col-md-12 mb-3">
                            <label for="form-lable" class="mb-2">
                                Date of Birth
                            </label>

                            <div class="col-md-4">
                                <select class="form-control" id="selectGender">
                                    <option>Day</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <select class="form-control" id="selectGender">
                                    <option>Month</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <select class="form-control" id="selectGender">
                                    <option>Year</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                                </div>
                        </div>

                        <div class="mb-3">
                            <label for="selectGender" class="mb-2">Gender</label>

                            <select class="form-control" id="selectGender">
                                <option>Other</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2 col-md-12 mt-5 m-5">
                <div class="col-md-3 border-end">
                    <small>
                        Deatil Information
                    </small>
                </div>

                <div class="col-md-8 ms-4">
                    <div>
                        <div class="row col-md-12 mb-3">
                            <label for="form-lable" class="mb-2">
                                NRC
                            </label>

                            <div class="col-md-4">
                                <select class="form-control" id="selectGender">
                                    <option>Sate Code</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <select class="form-control" id="selectGender">
                                    <option>City Code</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <select class="form-control" id="selectGender">
                                    <option>Year</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                                </div>
                        </div>

                        <div class="mb-3">
                            <input
                                required
                                id="name"
                                type="text"
                                class="form-control"
                                placeholder="Number"
                            >
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Yogi ID</label>

                            <input
                                required
                                id="email"
                                type="email"
                                class="form-control"
                                placeholder="Enter yogi's ID"
                            >
                        </div>

                        <div class="row col-md-12 mb-3">
                            <label for="form-lable" class="mb-2">
                                Address
                            </label>

                            <div class="col-md-6">
                                <select class="form-control" id="selectGender">
                                    <option>State/Region</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <select class="form-control" id="selectGender">
                                    <option>Township</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2 col-md-12 mt-5 m-5">
                <div class="col-md-3 border-end">
                    <small>
                        Password
                    </small>
                </div>

                <div class="col-md-8 ms-4">
                    <div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>

                            <input
                                required
                                id="password"
                                type="password"
                                class="form-control"
                                placeholder="Password"
                            >
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Confirm Password</label>

                            <input
                                required
                                id="password"
                                type="password"
                                class="form-control"
                                placeholder="Confirm Password"
                            >
                        </div>

                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mb-2 col-md-7">
                    Register
                </button>
            </div>
        </form>
    </div>
</template>

<script src="../../js/auth/register.js"></script>

