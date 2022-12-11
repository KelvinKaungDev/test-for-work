<template>

    <div class="row container-fluid mt-5">
        <div class="side-bar-width bg-primary text-center text-white">
            hi
        </div>

        <div class="col-md-12">
            <div class="row d-flex justify-content-end p-3">
                <div class="col-md-1 mt-2">
                    <font-awesome-icon icon="bell" />
                </div>

                <small class="col-md-1 mt-1">
                    Min Maung <br>
                    <small class="email-font d-flex justify-content-end">
                        minmaung@gmail.com
                    </small>
                </small >

                <span class="circle col-md-1">
                    E
                </span>
            </div>

            <div class="bg-light p-2">
                <div class="font-small">
                    <small class="text-primary">
                        Online Mediation Group
                    </small>
                    <small>
                        / သဲအင်းဂူ (၃၂) ဘာဿနာ့အောင်လံ Online Media Group
                    </small>
                </div>

                <div class="d-flex align-items-center bg-purple rounded box-shadow">
                    <img class="img-size" src="../../../public/img/hospital.jpg">

                    <div class="mt-4 ms-2">
                        <h6 class="mb-0">
                            သဲအင်းဂူ (၃၂) ဘာဿနာ့အောင်လံ Online Media Group
                        </h6>

                        <small class="font-small">
                            ID OMG01
                        </small>
                    </div>
                </div>

                <div class="mt-4 row">
                    <div class="card text-white card-bg mb-3" style="max-width: 23rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h5 class="card-title">Primary card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="card text-dark bg-light mb-3 ms-5" style="max-width: 23rem;">
                        <div class="card-header bg-light">Header</div>
                        <div class="card-body">
                          <h5 class="card-title">Light card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="card text-dark bg-light mb-3 ms-5" style="max-width: 23rem;">
                        <div class="card-header bg-light">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex bd-highlight mb-3 mt-2">
                    <div class="p-2 bd-highlight mt-2">
                        <h5 class="letter-space">
                            Class List
                        </h5>
                    </div>

                    <div class="ms-auto p-2 bd-highlight">
                        <button type="button" class="btn btn-outline-primary">
                            + New Class
                        </button>
                    </div>
                </div>

                <div class="d-flex mt-4 mb-0">
                    <div class="col-md-2">
                        <input class="form-control me-2" type="search" placeholder="Search by ID" aria-label="Search">
                    </div>

                    <div class="col-md-2 ms-3">
                        <input class="form-control" type="text" placeholder="Class Count" aria-label="default input example">
                    </div>

                    <div class="col-md-2 ms-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>All Class Type</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col-md-2 ms-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>All Yogi Type</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col-md-1 ms-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col-md-1 ms-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Filter</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div>
                        <button type="button" class="btn btn-outline-primary ms-3">
                            <font-awesome-icon icon="upload" class="mr-1" />
                        </button>
                    </div>
                </div>

                <div class="mt-3">
                    <small class="ms-1">
                        12 Classes
                    </small>

                    <table class="table mediation-table table-white mt-4">
                        <thead class="table-light table-head">
                            <tr>
                                <th>Class ID</th>
                                <th>TITLE</th>
                                <th class="font-table-small">CREATED DATE</th>
                                <th class="font-table-small">CLASS TYPE</th>
                                <th class="font-table-small">YOGI TYPE</th>
                                <th class="font-table-small">START DATE</th>
                                <th class="font-table-small">END DATE</th>
                                <th class="font-table-small">COUNT</th>
                                <th class="font-table-small">STATUS</th>
                                <th></th>
                              </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr>
                                <td scope="row">27NOV1B</td>
                                <td>(၁၄)ကြိမ်မြောက် (၂၄)ရက် အဓိၑဌာန် Zoom Online တရားစခန်း  (level 1B)  </td>
                                <td>2022-11-22</td>
                                <td>LEVEL1A</td>
                                <td>ALL</td>
                                <td>2022-11-22</td>
                                <td>2022-11-22</td>
                                <td>14</td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm">ONGOING</button>
                                </td>
                                <td>></td>
                            </tr>

                            <tr>
                                <td scope="row">27NOV1B</td>
                                <td>(၁၄)ကြိမ်မြောက် (၂၄)ရက် အဓိၑဌာန် Zoom Online တရားစခန်း  (level 1B)  </td>
                                <td>2022-11-22</td>
                                <td>LEVEL1A</td>
                                <td>ALL</td>
                                <td>2022-11-22</td>
                                <td>2022-11-22</td>
                                <td>14</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm">UPCOMING</button>
                                </td>
                                <td>></td>
                            </tr>

                            <tr>
                                <td scope="row">27NOV1B</td>
                                <td>(၁၄)ကြိမ်မြောက် (၂၄)ရက် အဓိၑဌာန် Zoom Online တရားစခန်း  (level 1B)  </td>
                                <td>2022-11-22</td>
                                <td>LEVEL1A</td>
                                <td>ALL</td>
                                <td>2022-11-22</td>
                                <td>2022-11-22</td>
                                <td>14</td>
                                <td>
                                    <button type="button" class="btn btn-secondary btn-sm">END</button>
                                </td>
                                <td>></td>
                            </tr>

                            <tr>
                                <td scope="row">27NOV1B</td>
                                <td>(၁၄)ကြိမ်မြောက် (၂၄)ရက် အဓိၑဌာန် Zoom Online တရားစခန်း  (level 1B)  </td>
                                <td>2022-11-22</td>
                                <td>LEVEL1A</td>
                                <td>ALL</td>
                                <td>2022-11-22</td>
                                <td>2022-11-22</td>
                                <td>14</td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm">ONGOING</button>
                                </td>
                                <td>></td>
                            </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

</template>

<script src="../../js/auth/donation/register.js"></script>

