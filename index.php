<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css"
        integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">



    <title>ATL HR</title>
</head>

<body class="bg-body-tertiary">

    <section>

        <div class="container mb-3">
            <hr>
            <h3>Reporting</h3>
            <h5 class="text-info fw-bold">Dashboard <span class="text-secondary fw-bold">/ Reporting</span></h5>
        </div>

    </section>

    <section>

        <div class="container">
            <ul class="nav nav-tabs bg-white">
                <li class="border-bottom border-info nav-item">
                    <a class="nav-link text-secondary fw-bold active" data-bs-toggle="tab" href="#tab1">Payroll
                        Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary fw-normal" data-bs-toggle="tab" href="#tab2">Tax
                        Reports</a>
                </li>
                <li class="nav-item">
                    <a class="anchor3 nav-link text-secondary fw-normal" data-bs-toggle="tab3" href="#tab3">Leave
                        Reports</a>
                </li>
                <li class="nav-item">
                    <a class="anchor4 nav-link text-secondary fw-normal" data-bs-toggle="tab" href="#tab4">PF
                        Reports</a>
                </li>
                <li class="nav-item">
                    <a class="anchor5 nav-link text-secondary fw-normal" data-bs-toggle="tab" href="#tab5">GF
                        Reports</a>
                </li>
                <li class="nav-item">
                    <a class="anchor6 nav-link text-secondary fw-normal" data-bs-toggle="tab" href="#tab6">Loan &
                        Advanced Reports</a>
                </li>
                <li class="nav-item">
                    <a class="anchor7 nav-link text-secondary fw-normal" data-bs-toggle="tab" href="#tab7">Variance
                        Reports</a>
                </li>
                <li class="nav-item">
                    <a class="anchor8 nav-link text-secondary fw-normal" data-bs-toggle="tab" href="#tab8">Leave
                        Encashment Report</a>
                </li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active mt-5" id="tab1">

                    <h4>Payroll Reports</h4>
                    <hr>
                    <h6>Get a clear picture of your monthly payroll. Use this information to understand your
                        workforce
                        better.</h6>
                    <ul class="nav nav-tabs">

                        <div class="row">
                            <div class="col-4">
                                <li class="nav-item">
                                    <a id="monthlyReport" class="nav-link active bg-info-subtle text-black"
                                        data-bs-toggle="tab" href="#tab1a">

                                        <ul id="monthlyReportBG" class="nav nav-tabs bg-info-subtle p-3">
                                            <h4 class="fw-bold"><i
                                                    class="fa-solid fa-square-poll-vertical me-2"></i>Monthly
                                                Payroll
                                                Report
                                            </h4>
                                            <div>
                                                <hr>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo,
                                                dolore.
                                                <button class="d-block mt-3 btn btn-info text-white fw-bold p-2"
                                                    type="button" aria-expanded="false">
                                                    View
                                                    Report
                                                </button>

                                            </div>

                                        </ul>
                                    </a>


                                </li>
                            </div>

                            <div class="col-4">
                                <li class="nav-item">
                                    <a id="PeriodicReport" class="nav-link bg-info-white text-black"
                                        data-bs-toggle="tab" href="#tab1b">

                                        <ul id="PeriodicReportBG" class="nav nav-tabs bg-info-white p-3">
                                            <h4 class="fw-bold"><i
                                                    class="fa-sharp fa-regular fa-dollar-sign me-2"></i>Periodic
                                                Payroll
                                                Report</h4>
                                            <div>
                                                <hr>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo,
                                                dolore.

                                                <button class="d-block mt-3 btn btn-info text-white fw-bold p-2"
                                                    type="button" aria-expanded="false">
                                                    View
                                                    Report
                                                </button>
                                            </div>
                                        </ul>
                                    </a>
                                </li>
                            </div>

                            <div class="col-4">
                                <li class="nav-item">
                                    <a class="nav-link bg-info-white text-black" data-bs-toggle="tab" href="#">

                                        <ul class="nav nav-tabs bg-white p-3">
                                            <h4 class="fw-bold"><i
                                                    class="fa-sharp fa-solid fa-bangladeshi-taka-sign me-2"></i>Comprehensive
                                                Payroll</h4>
                                            <div>
                                                <hr>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo,
                                                dolore.

                                                <button class="d-block mt-3 btn btn-info text-white fw-bold p-2"
                                                    type="button" aria-expanded="false">
                                                    View
                                                    Report
                                                </button>
                                            </div>
                                        </ul>
                                    </a>
                                </li>
                            </div>

                        </div>


                    </ul>


                    <div class="tab-content">
                        <div class="tab-pane fade show active row mt-5" id="tab1a">
                            <div>
                                <label class="fs-6 fw-bold me-3">Select Fiscal Year</label>
                                <select class="bg-white p-2">
                                    <option>2021-2022</option>
                                    <option>2022-2023</option>
                                    <option>2023-2024</option>
                                    <option>2024-2025</option>
                                    <option>2025-2026</option>
                                    <option>2026-2027</option>
                                    <option>2027-2028</option>
                                    <option>2028-2029</option>
                                    <option>2029-2030</option>
                                </select>

                            </div>

                            <div>

                                <div class="row mt-4">
                                    <div class="col-2">

                                        <div class="d-inline dropdown">
                                            <button class="btn btn-info text-white fw-bold p-2 dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                select Additional Fields
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-8">

                                    </div>

                                    <div class="col-2">

                                        <button class="d-block mt-3 btn btn-info text-white fw-bold p-2" type="button"
                                            aria-expanded="false">
                                            <i class="fa-sharp fa-solid fa-gear me-2"></i>Settings
                                            (beta)
                                        </button>


                                    </div>
                                </div>

                            </div>


                            <div>
                                <table class="table table-striped  table-hover text-center mt-5">
                                    <thead class="table-info">
                                        <tr>
                                            <th>Month-Year</th>
                                            <th>Fiscal Year</th>
                                            <th>Payrun Status</th>
                                            <th>Preview Report</th>
                                            <th>Download Excel</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>June-2022</td>
                                            <td>2021-2022</td>
                                            <td>Draft</td>
                                            <td><i class="fa-solid fa-list me-2"></i><span
                                                    class="text-info fw-bold">Preview
                                                    Report</span>
                                            </td>
                                            <td><i class="fa-solid fa-download me-2"></i><span
                                                    class="text-info fw-bold">Download
                                                    Report
                                                    (Excel)</span></td>
                                        </tr>
                                        <tr>
                                            <td>June-2022</td>
                                            <td>2021-2022</td>
                                            <td>Draft</td>
                                            <td><i class="fa-solid fa-list me-2"></i><span
                                                    class="text-info fw-bold">Preview
                                                    Report</span></td>
                                            <td><i class="fa-solid fa-download me-2"></i><span
                                                    class="text-info fw-bold">Download
                                                    Report
                                                    (Excel)</span></td>
                                        </tr>
                                        <tr>
                                            <td>June-2022</td>
                                            <td>2021-2022</td>
                                            <td>Draft</td>
                                            <td><i class="fa-solid fa-list me-2"></i><span
                                                    class="text-info fw-bold">Preview
                                                    Report</span></td>
                                            <td><i class="fa-solid fa-download me-2"></i><span
                                                    class="text-info fw-bold">Download
                                                    Report
                                                    (Excel)</span></td>
                                        </tr>
                                        <tr>
                                            <td>June-2022</td>
                                            <td>2021-2022</td>
                                            <td>Draft</td>
                                            <td><i class="fa-solid fa-list me-2"></i><span
                                                    class="text-info fw-bold">Preview
                                                    Report</span></td>
                                            <td><i class="fa-solid fa-download me-2"></i><span
                                                    class="text-info fw-bold">Download
                                                    Report
                                                    (Excel)</span></td>
                                        </tr>
                                        <tr>
                                            <td>June-2022</td>
                                            <td>2021-2022</td>
                                            <td>Draft</td>
                                            <td><i class="fa-solid fa-list me-2"></i><span
                                                    class="text-info fw-bold">Preview
                                                    Report</span></td>
                                            <td><i class="fa-solid fa-download me-2"></i><span
                                                    class="text-info fw-bold">Download
                                                    Report
                                                    (Excel)</span></td>
                                        </tr>
                                        <tr>
                                            <td>June-2022</td>
                                            <td>2021-2022</td>
                                            <td>Draft</td>
                                            <td><i class="fa-solid fa-list me-2"></i><span
                                                    class="text-info fw-bold">Preview
                                                    Report</span></td>
                                            <td><i class="fa-solid fa-download me-2"></i><span
                                                    class="text-info fw-bold">Download
                                                    Report
                                                    (Excel)</span></td>
                                        </tr>
                                        <tr>
                                            <td>June-2022</td>
                                            <td>2021-2022</td>
                                            <td>Draft</td>
                                            <td><i class="fa-solid fa-list me-2"></i><span
                                                    class="text-info fw-bold">Preview
                                                    Report</span></td>
                                            <td><i class="fa-solid fa-download me-2"></i><span
                                                    class="text-info fw-bold">Download
                                                    Report
                                                    (Excel)</span></td>
                                        </tr>
                                        <tr>
                                            <td>June-2022</td>
                                            <td>2021-2022</td>
                                            <td>Draft</td>
                                            <td><i class="fa-solid fa-list me-2"></i><span
                                                    class="text-info fw-bold">Preview
                                                    Report</span></td>
                                            <td><i class="fa-solid fa-download me-2"></i><span
                                                    class="text-info fw-bold">Download
                                                    Report
                                                    (Excel)</span></td>
                                        </tr>

                                        <tr>
                                            <td>June-2022</td>
                                            <td>2021-2022</td>
                                            <td>Draft</td>
                                            <td><i class="fa-solid fa-list me-2"></i><span
                                                    class="text-info fw-bold">Preview
                                                    Report</span></td>
                                            <td><i class="fa-solid fa-download me-2"></i><span
                                                    class="text-info fw-bold">Download
                                                    Report
                                                    (Excel)</span></td>
                                        </tr>
                                        <tr>
                                            <td>June-2022</td>
                                            <td>2021-2022</td>
                                            <td>Draft</td>
                                            <td><i class="fa-solid fa-list me-2"></i><span
                                                    class="text-info fw-bold">Preview
                                                    Report</span></td>
                                            <td><i class="fa-solid fa-download me-2"></i><span
                                                    class="text-info fw-bold">Download
                                                    Report
                                                    (Excel)</span></td>
                                        </tr>
                                        <tr>
                                            <td>June-2022</td>
                                            <td>2021-2022</td>
                                            <td>Draft</td>
                                            <td><i class="fa-solid fa-list me-2"></i><span
                                                    class="text-info fw-bold">Preview
                                                    Report</span></td>
                                            <td><i class="fa-solid fa-download me-2"></i><span
                                                    class="text-info fw-bold">Download
                                                    Report
                                                    (Excel)</span></td>
                                        </tr>
                                        <tr>
                                            <td>June-2022</td>
                                            <td>2021-2022</td>
                                            <td>Draft</td>
                                            <td><i class="fa-solid fa-list me-2"></i><span
                                                    class="text-info fw-bold">Preview
                                                    Report</span></td>
                                            <td><i class="fa-solid fa-download me-2"></i><span
                                                    class="text-info fw-bold">Download
                                                    Report
                                                    (Excel)</span></td>
                                        </tr>
                                        <tr>
                                            <td>June-2022</td>
                                            <td>2021-2022</td>
                                            <td>Draft</td>
                                            <td><i class="fa-solid fa-list me-2"></i><span
                                                    class="text-info fw-bold">Preview
                                                    Report</span></td>
                                            <td><i class="fa-solid fa-download me-2"></i><span
                                                    class="text-info fw-bold">Download
                                                    Report
                                                    (Excel)</span></td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab1b">
                        <div>
                            <div class="row mt-5">

                                <div class="col-lg-2">

                                </div>
                                <div class="col-lg-5">

                                    <div>
                                        <label class="fs-6 fw-bold me-3">From : Month</label>
                                        <select id="my-input1" class="bg-white p-2">
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>


                                    <div class="mt-3 ms-4">
                                        <label class="fs-6 fw-bold me-3">To : Month</label>
                                        <select id="my-input2" class="bg-white p-2">
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-5">
                                    <div>
                                        <label class="fs-6 fw-bold me-3">Year</label>
                                        <select id="my-input3" class="bg-white p-2">
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                        </select>
                                    </div>


                                    <div class="mt-3">
                                        <label class="fs-6 fw-bold me-3">Year</label>
                                        <select id="my-input4" class="bg-white p-2">
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                        </select>


                                        <button id="open-popup" class="ms-2 btn btn-info text-white fw-bold p-2"
                                            type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                                            aria-controls="offcanvasTop">Preview Report</button>

                                        <div class="offcanvas offcanvas-top m-5 rounded-3" tabindex="-1"
                                            id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                            <div class="offcanvas-header">

                                                <h4 class="offcanvas-title" id="offcanvasTopLabel">Periodic
                                                    Payroll Report</h4>

                                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body">

                                                <hr>

                                                <div class="row">
                                                    <div class="col-4">
                                                        <h5 id="results" class="fw-bold"></h5>
                                                    </div>

                                                    <div class="col-4">

                                                    </div>

                                                    <div class="col-4">
                                                        <div class="input-group">

                                                            <span class="input-group-append">
                                                                <button class="btn btn-outline-success bg-white"
                                                                    type="button">
                                                                    <i class="fa fa-search"></i>
                                                                </button>
                                                            </span>

                                                            <input class="form-control border-end-0 border"
                                                                type="search" value="search" id="example-search-input">
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>
                                                <div class="row">
                                                    <div class="col-12">

                                                        <div class="d-flex justify-content-center">
                                                            No Result Found!
                                                            <br><br><br>
                                                        </div>
                                                        <div class="d-flex justify-content-center">


                                                            <img class="spinner-border text-white rounded"
                                                                src="images/spinner.png" alt="">

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <button class="ms-2 btn btn-info text-white fw-bold p-2" type="button"
                                            aria-expanded="false">
                                            Download
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade mt-5" id="tab2">

                <div>

                    <div class="row mb-5">
                        <div class="col-7">

                            <button class="btn btn-info text-white fw-bold p-2" type="button" aria-expanded="false">
                                <i class="fa-solid fa-reply me-2"></i> Back to List
                            </button>

                            <div class="d-inline dropdown">
                                <button class="btn btn-info text-white fw-bold p-2 dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Upload Variable Input
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>

                            <div class="d-inline dropdown">
                                <button class="btn btn-info text-white fw-bold p-2 dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Downloads
                                </button>
                                <ul class="dropdown-menu">
                                    <span class="text-secondary fw-bold ms-3">Payroll</span>
                                    <br>

                                    <li><a class="dropdown-item text-black" href="#"><i
                                                class="fa-solid fa-download me-2"></i> Draft Payroll Report</a>
                                    </li>
                                    <li><a class="dropdown-item text-black" href="#"><i
                                                class="fa-solid fa-download me-2"></i> Bank File</a></li>

                                    <hr>

                                    <span class="text-secondary fw-bold ms-3">Payslips</span>

                                    <li><a class="dropdown-item text-black" href="#"><i
                                                class="fa-solid fa-download me-2"></i> Download Selected</a>
                                    </li>
                                    <li><a class="dropdown-item text-black" href="#"><i
                                                class="fa-solid fa-download me-2"></i> Download All</a></li>


                                    <li><a class="dropdown-item text-black" href="#"><i
                                                class="fa-solid fa-download me-2"></i> Download All(by schedule)</a>
                                    </li>

                                    <hr>


                                    <span class="text-secondary fw-bold ms-3 mb-2">Taxcards</span>

                                    <li><a class="dropdown-item text-black" href="#"><i
                                                class="fa-solid fa-download me-2"></i> Download Selected</a>
                                    </li>
                                    <li><a class="dropdown-item text-black" href="#"><i
                                                class="fa-solid fa-download me-2"></i> Download All</a></li>


                                    <li><a class="dropdown-item text-black" href="#"><i
                                                class="fa-solid fa-download me-2"></i> Download All(by schedule)</a>
                                    </li>

                                </ul>

                            </div>

                            <div class="d-inline dropdown">
                                <button class="btn btn-info text-white fw-bold p-2 dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Payroll Run Settings
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-2">

                        </div>

                        <div class="col-3">

                            <button class="btn btn-info text-white fw-bold p-2" type="button" aria-expanded="false">
                                <i class="fa-solid fa-pen-to-square me-1"></i>Approve Payrun
                            </button>

                            <button class="btn btn-info text-white fw-bold p-2" type="button" aria-expanded="false">
                                Create Payslip
                            </button>


                        </div>
                    </div>

                    <div class="row">

                        <div class="col-6">
                            <div class="input-group">

                                <span class="input-group-append">
                                    <button class="btn btn-outline-success bg-white" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>

                                <input class="form-control border-end-0 border" type="search"
                                    value="Search by employee / position / code / branch / email / phone"
                                    id="example-search-input">
                            </div>
                        </div>

                        <div class="col-4">

                        </div>

                        <div class="col-2">


                            <button class="btn btn-secondary text-white fw-bold p-2 dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Fields
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li class="ps-3 pe-1">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch1">
                                        <label class="form-check-label" for="switch1">Email</label>
                                    </div>
                                </li>
                                <li class="ps-3 pe-1">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch2">
                                        <label class="form-check-label" for="switch2">Phone</label>
                                    </div>
                                </li>
                                <li class="ps-3 pe-1">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch3">
                                        <label class="form-check-label" for="switch3">Nationality</label>
                                    </div>
                                </li>

                                <li class="ps-3 pe-1">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch1">
                                        <label class="form-check-label" for="switch1">NID</label>
                                    </div>
                                </li>
                                <li class="ps-3 pe-1">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch2">
                                        <label class="form-check-label" for="switch2">Passport</label>
                                    </div>
                                </li>
                                <li class="ps-3 pe-1">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch3">
                                        <label class="form-check-label" for="switch3">e-TIN</label>
                                    </div>
                                </li>


                                <li class="ps-3 pe-1">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch1">
                                        <label class="form-check-label" for="switch1">Residency</label>
                                    </div>
                                </li>
                                <li class="ps-3 pe-1">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch2">
                                        <label class="form-check-label" for="switch2">Gender</label>
                                    </div>
                                </li>
                                <li class="ps-3 pe-1">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch3">
                                        <label class="form-check-label" for="switch3">Marital Status</label>
                                    </div>
                                </li>


                                <li class="ps-3 pe-1">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch1">
                                        <label class="form-check-label" for="switch1">Department</label>
                                    </div>
                                </li>
                                <li class="ps-3 pe-1">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch2">
                                        <label class="form-check-label" for="switch2">Job position</label>
                                    </div>
                                </li>
                                <li class="ps-3 pe-1">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch3">
                                        <label class="form-check-label" for="switch3">Work Location</label>
                                    </div>
                                </li>


                                <li class="ps-3 pe-1">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch1">
                                        <label class="form-check-label" for="switch1">Status</label>
                                    </div>
                                </li>
                                <li class="ps-3 pe-1">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch2">
                                        <label class="form-check-label" for="switch2">Employee Code</label>
                                    </div>
                                </li>
                                <li class="ps-3 pe-1">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch3">
                                        <label class="form-check-label" for="switch3">Date Of Joining</label>
                                    </div>
                                </li>


                                <li class="ps-3 pe-1">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch1">
                                        <label class="form-check-label" for="switch1">Leave Date</label>
                                    </div>
                                </li>
                                <li class="ps-3 pe-1">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="switch2">
                                        <label class="form-check-label" for="switch2">Prefered Color</label>
                                    </div>
                                </li>

                            </ul>


                            <button class="btn btn-secondary text-white fw-bold p-2 dropdown-toggle" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                aria-controls="offcanvasRight">Filter</button>

                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                    <h5 class="offcanvas-title fw-bold" id="offcanvasRightLabel">Filter</h5>

                                </div>
                                <div class="offcanvas-body">
                                    <div class="input-group">

                                        <span class="input-group-append">
                                            <button class="btn btn-outline-success bg-white" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>

                                        <input class="form-control border-end-0 border" type="search" value="Name"
                                            id="example-search-input">
                                    </div>


                                    <div class="mt-4">
                                        <button type="button" class="btn btn-outline-secondary ps-5 pe-5">Set
                                            Filter</button>

                                        <button type="button" class="btn btn-outline-secondary ps-5 pe-5">Clear
                                            Filter</button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <br><br><br>
                    <div>
                        <table id="example" class="table table-striped table-hover text-center mt-5">
                            <thead class="table-info">
                                <tr>
                                    <th>Name</th>
                                    <th>Gross Salary</th>
                                    <th>Other Benefits & Allowances</th>
                                    <th>Total Earnings</th>
                                    <th>Income Tax</th>
                                    <th>Other Deductions</th>
                                    <th>Net Pay</th>
                                    <th class="page-link">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Anik Khan
                                            </div>
                                        </div>

                                    </td>
                                    <td>150,000</td>
                                    <td>6,000</td>
                                    <td>156,000</td>
                                    <td>4,073</td>
                                    <td>5,000</td>
                                    <td>146,000</td>
                                    <td>

                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>

                                    </td>
                                </tr>

                                <tr>
                                    <td>

                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Bappy Khan
                                            </div>
                                        </div>

                                    </td>
                                    <td>153,000</td>
                                    <td>6,500</td>
                                    <td>120,000</td>
                                    <td>3,073</td>
                                    <td>4,000</td>
                                    <td>46,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Karim Khan
                                            </div>
                                        </div>


                                    </td>
                                    <td>180,000</td>
                                    <td>220,000</td>
                                    <td>52,000</td>
                                    <td>4,473</td>
                                    <td>5,423</td>
                                    <td>149,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Ratul Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>350,000</td>
                                    <td>1,000</td>
                                    <td>136,000</td>
                                    <td>4,331</td>
                                    <td>12,000</td>
                                    <td>126,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Zahid Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>110,000</td>
                                    <td>6,0230</td>
                                    <td>156,230</td>
                                    <td>12,003</td>
                                    <td>5,000</td>
                                    <td>126,012</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Inzammamul Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>50,000</td>
                                    <td>64,000</td>
                                    <td>1516,000</td>
                                    <td>4,0273</td>
                                    <td>51,000</td>
                                    <td>186,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Ratan Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>240,000</td>
                                    <td>60,000</td>
                                    <td>116,000</td>
                                    <td>4,073</td>
                                    <td>5,022</td>
                                    <td>148,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Kanzilal Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>150,000</td>
                                    <td>12,000</td>
                                    <td>1226,000</td>
                                    <td>6,073</td>
                                    <td>5,000</td>
                                    <td>136,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Pranai Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>150,000</td>
                                    <td>63,000</td>
                                    <td>16,000</td>
                                    <td>4,073</td>
                                    <td>512,000</td>
                                    <td>136,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Nitai Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>30,000</td>
                                    <td>613,000</td>
                                    <td>136,000</td>
                                    <td>41,073</td>
                                    <td>5,000</td>
                                    <td>1346,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Asish Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>1120,000</td>
                                    <td>69,000</td>
                                    <td>56,000</td>
                                    <td>3,373</td>
                                    <td>3,000</td>
                                    <td>46,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Roma Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>350,000</td>
                                    <td>7,000</td>
                                    <td>556,000</td>
                                    <td>45,073</td>
                                    <td>55,000</td>
                                    <td>1746,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Lami Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>50,000</td>
                                    <td>67,000</td>
                                    <td>806,000</td>
                                    <td>46,073</td>
                                    <td>56,000</td>
                                    <td>186,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Nayem Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>160,000</td>
                                    <td>68,000</td>
                                    <td>1886,000</td>
                                    <td>486,073</td>
                                    <td>66,000</td>
                                    <td>176,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Harur Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>9,000</td>
                                    <td>66,000</td>
                                    <td>166,000</td>
                                    <td>47,073</td>
                                    <td>57,000</td>
                                    <td>166,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Joma Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>160,000</td>
                                    <td>67,000</td>
                                    <td>1576,000</td>
                                    <td>4,677</td>
                                    <td>5,076</td>
                                    <td>149,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>



                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Vaijan Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>576,000</td>
                                    <td>67,000</td>
                                    <td>1566,000</td>
                                    <td>4,673</td>
                                    <td>5,0670</td>
                                    <td>1776,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>



                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Nitesh Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>125,000</td>
                                    <td>63,000</td>
                                    <td>146,000</td>
                                    <td>434,73</td>
                                    <td>43,000</td>
                                    <td>146,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Raju Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>150,000</td>
                                    <td>64,000</td>
                                    <td>143,000</td>
                                    <td>43,073</td>
                                    <td>54,000</td>
                                    <td>1446,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Farhan Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>143,000</td>
                                    <td>61,000</td>
                                    <td>61,021</td>
                                    <td>4,100</td>
                                    <td>5,120</td>
                                    <td>142,122</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Silencer Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>1567,000</td>
                                    <td>69,000</td>
                                    <td>996,000</td>
                                    <td>4,073</td>
                                    <td>5,000</td>
                                    <td>176,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Maruf Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>130,000</td>
                                    <td>6,432</td>
                                    <td>156,420</td>
                                    <td>4,073</td>
                                    <td>6,120</td>
                                    <td>146,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Tutul Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>220,000</td>
                                    <td>134,000</td>
                                    <td>221,000</td>
                                    <td>89,073</td>
                                    <td>51,000</td>
                                    <td>142,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Shyamol Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>152,000</td>
                                    <td>543,000</td>
                                    <td>126,000</td>
                                    <td>42,073</td>
                                    <td>53,000</td>
                                    <td>6,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Pakhi Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>150,000</td>
                                    <td>6,000</td>
                                    <td>156,000</td>
                                    <td>4,073</td>
                                    <td>5,000</td>
                                    <td>146,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Meherul Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>150,000</td>
                                    <td>6,000</td>
                                    <td>156,000</td>
                                    <td>4,073</td>
                                    <td>5,000</td>
                                    <td>146,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                nitai Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>150,000</td>
                                    <td>6,000</td>
                                    <td>156,000</td>
                                    <td>4,073</td>
                                    <td>5,000</td>
                                    <td>146,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Anikaa Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>150,000</td>
                                    <td>6,000</td>
                                    <td>156,000</td>
                                    <td>4,073</td>
                                    <td>5,000</td>
                                    <td>146,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>



                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Anu Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>150,000</td>
                                    <td>6,000</td>
                                    <td>156,000</td>
                                    <td>4,073</td>
                                    <td>5,000</td>
                                    <td>146,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Anurag Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>150,000</td>
                                    <td>6,000</td>
                                    <td>156,000</td>
                                    <td>4,073</td>
                                    <td>5,000</td>
                                    <td>146,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Jolom Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>150,034</td>
                                    <td>6,043</td>
                                    <td>159,000</td>
                                    <td>42,333</td>
                                    <td>544,000</td>
                                    <td>134,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Molom Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>1150,000</td>
                                    <td>63,000</td>
                                    <td>1456,000</td>
                                    <td>464,573</td>
                                    <td>56,000</td>
                                    <td>146,400</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Nimik Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>111,000</td>
                                    <td>63,000</td>
                                    <td>136,000</td>
                                    <td>333,073</td>
                                    <td>12,000</td>
                                    <td>13,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Rastogi Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>135,000</td>
                                    <td>2,000</td>
                                    <td>156,000</td>
                                    <td>4,073</td>
                                    <td>3,000</td>
                                    <td>126,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                            </div>
                                            <div class="col-1">
                                                <i class="fa-solid fa-person"></i>
                                            </div>
                                            <div class="col-8">
                                                Kamrul Khan
                                            </div>
                                        </div>
                                    </td>
                                    <td>1510,000</td>
                                    <td>63,000</td>
                                    <td>1536,000</td>
                                    <td>43,073</td>
                                    <td>51,000</td>
                                    <td>223,000</td>
                                    <td>
                                        <div class="d-inline dropdown">
                                            <button class="btn" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-pen-to-square me-1"></i>Review</a></li>
                                                <li><a class="dropdown-item fw-bold p-2" href="#"><i
                                                            class="fa-solid fa-eye me-1"></i>Preview Taxcard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                        </table>

                    </div>


                    <!-- <div class="row">
                        <div class="col-4">
                            <span class="me-2 fw-bold">View</span>
                            <select class="text-black fw-bold p-2">
                                <option>20</option>
                            </select>
                            <span class="ms-2 fw-bold">per page. Total 11 records found.</span>
                        </div>

                        <div class="col-6">

                        </div>

                        <div class="col-2">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link text-secondary fw-bold"
                                            href="#">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link bg-info text-white fw-bold" href="#">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link text-secondary fw-bold" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>


    <script>
    // $(document).ready(function() {
    //     $('#example').DataTable();
    // });

        $(document).ready(function() {
        $('#example').DataTable({
            "columnDefs": [
                { "orderable": false, "targets": 7 }
            ]
        });
    });


    </script>
    <script>
    document.getElementById('monthlyReportBG').addEventListener('click', function() {
        addClass1('monthlyReportBG', 'PeriodicReportBG', 'monthlyReport', 'PeriodicReport');
    });

    document.getElementById('PeriodicReport').addEventListener('click', function() {
        addClass2('PeriodicReportBG', 'monthlyReportBG', 'PeriodicReport', 'monthlyReport');
    });

    function addClass1(id, id1, id2, id3) {

        document.getElementById(id).classList.remove('bg-white');
        document.getElementById(id).classList.add('bg-info-subtle');

        document.getElementById(id1).classList.remove('bg-info-subtle');
        document.getElementById(id1).classList.add('bg-white');

        document.getElementById(id2).classList.remove('bg-white');
        document.getElementById(id2).classList.add('bg-info-subtle');

        document.getElementById(id3).classList.remove('bg-info-subtle');
        document.getElementById(id3).classList.add('bg-white');


    }

    function addClass2(id, id1, id2, id3) {

        document.getElementById(id).classList.remove('bg-white');
        document.getElementById(id).classList.add('bg-info-subtle');

        document.getElementById(id1).classList.remove('bg-info-subtle');
        document.getElementById(id1).classList.add('bg-white');

        document.getElementById(id2).classList.remove('bg-white');
        document.getElementById(id2).classList.add('bg-info-subtle');

        document.getElementById(id3).classList.remove('bg-info-subtle');
        document.getElementById(id3).classList.add('bg-white');
    }


    var openPopupBtn = document.getElementById("open-popup");
    var popup = document.getElementById("popup");

    openPopupBtn.addEventListener("click", function() {

        var myInput1 = document.getElementById("my-input1").value;
        var myInput2 = document.getElementById("my-input2").value;
        var myInput3 = document.getElementById("my-input3").value;
        var myInput4 = document.getElementById("my-input4").value;


        var input = myInput1 + ' - ' + myInput3 + ' to ' + myInput2 + ' - ' + myInput4;

        document.getElementById("results").innerHTML = input;
        popup.style.display = "block";
    });

    // closePopupBtn.addEventListener("click", function() {
    //     popup.style.display = "none";
    // });
    </script>


    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://kit.fontawesome.com/4b66e2d851.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>