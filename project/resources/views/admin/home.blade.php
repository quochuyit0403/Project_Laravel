@extends('admin.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <style>
            :root {
                --main-color: #55DEF3;
                --color-dark: #1D2231;
                --text-grey: #8390A2;
            }

            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                list-style-type: none;
                text-decoration: none;
                font-family: 'Poppins', sans-serif;
            }

            .search-wrapper {
                border: 1px solid #ccc;
                border-radius: 30px;
                height: 50px;
                display: flex;
                align-items: center;
                overflow-x: hidden;
            }

            .search-wrapper span {
                display: inline-block;
                padding: 0rem 1rem;
            }

            .search-wrapper input {
                height: 100%;
                padding: 0.5rem;
                border: none;
                outline: none;
            }

            .user-wrapper {
                display: flex;
                align-items: center;
            }

            .user-wrapper img{
                border-radius: 50%;
                margin-right: 1rem;
            }

            .user-wrapper small {
                display: inline-block;
                color: var(--text-grey);
            }
            main {
                margin-top: 85px;
                padding: 2rem 1.5rem;
                background: #f1f5f9;
                min-height: calc(100vh - 90px);
            }

            .cards {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                grid-gap: 2rem;
            }

            .card-single {
                display: flex;
                justify-content: space-between;
                background: #fff;
                padding: 2rem;
                border-radius: 2px;
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            }

            .card-single div:last-child span{
                font-size: 3rem;
                color: var(--main-color);
            }
            .card-single div:first-child span {
                color: var(--text-grey);
            }
            .card-single:last-child {
                background: var(--main-color);
            }

            .card-single:last-child h1,
            .card-single:last-child div:first-child span,
            .card-single:last-child div:last-child span{
                color: #fff;
            }

            .recent-grid {
                margin-top: 3.5rem;
                display: grid;
                grid-gap: 2rem;
                grid-template-columns: 65% auto;
            }

            .card {
                background: #fff;
                border-radius: 5px;
                position: relative;
                padding: 1rem;
            }

            .card-header {
                display: flex;
                align-items: center;
                justify-content: space-evenly;
            }

            .card-header button {
                background: #0AA2E9;
                border-radius: 10px;
                color: #fff;
                font-size: 0.8rem;
                padding: 0.5rem 1rem;
                border: 1px solid #0AA2E9;
                transition: 0.4s;
            }
            .card-header button:hover {
                opacity: 0.8;
            }

            table {
                border-collapse: collapse;
            }

            thead tr {
                border-top: 1px solid #f0f0f0;
                border-bottom: 2px solid #f0f0f0;
            }

            thead td {
                font-weight: 700;
            }

            td {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
                color: #222;
            }

            td .status {
                display: inline-block;
                height: 20px;
                width: 20px;
                border-radius: 50%;
                margin-right: 1rem;
            }

            tr td:last-child {
                display: flex;
                align-items: center;
            }

            .status.purple {
                background: rebeccapurple;
            }

            .status.pink {
                background: deeppink;
            }

            .status.orange {
                background: orangered;
            }

            .table-responsive {
                width: 100%;
                overflow-x: auto;
            }

            .customer {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0.5rem 1rem;
            }

            .info {
                display: flex;
                align-items: center;
            }

            .info img {
                border-radius: 50%;
                margin-right: 1rem;
            }

            .info h4 {
                font-size: 1rem;
                font-weight: 700;
                color: #222;
            }

            .info small {
                font-weight: 600;
                color: var(--text-grey);
            }

            .contact span {
                font-size: 1.2rem;
                display: inline-block;
                margin-left: 0.5rem;
                color: var(--main-color);
            }

            /* Responsive */
            @media only screen and (max-width: 960px) {
                .cards {
                    grid-template-columns: repeat(3, 1fr);
                }

                .recent-grid {
                    grid-template-columns: 60% 40%;
                }
            }

            @media only screen and (max-width: 768px) {
                .cards {
                    grid-template-columns: repeat(2, 1fr);
                }

                .recent-grid {
                    grid-template-columns: 100%;
                }

                .search-wrapper {
                    display: none;
                }
                .main-content {
                    width: 100%;
                    left: 0;
                }
            }

            @media only screen and (max-width: 560px) {
                .cards {
                    grid-template-columns: 100%;
                }
            }
        </style>

    </head>
    <body>
        <div class="main-content">
            <main>
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <h1>54</h1>
                            <span>Customers</span>
                        </div>
                        <div>
                            <span class="las la-users"></span>
                        </div>
                    </div>

                    <div class="card-single">
                        <div>
                            <h1>79</h1>
                            <span>Projects</span>
                        </div>
                        <div>
                            <span class="las la-clipboard-list"></span>
                        </div>
                    </div>

                    <div class="card-single">
                        <div>
                            <h1>124</h1>
                            <span>Orders</span>
                        </div>
                        <div>
                            <span class="las la-shopping-bag"></span>
                        </div>
                    </div>

                    <div class="card-single">
                        <div>
                            <h1>$6k</h1>
                            <span>Income</span>
                        </div>
                        <div>
                            <span class="las la-google-wallet"></span>
                        </div>
                    </div>
                </div>

                <div class="recent-grid">
                    <div class="projects">
                        <div class="card">
                            <div class="card-header">
                                <h3>Recent Projects</h3>
                                <button>See all <span class="las la-arrow-right">

                                </span></button>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table width='100%'>
                                        <thead>
                                            <tr>
                                                <td>Project Title</td>
                                                <td>Department</td>
                                                <td>Status</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>UI/UX Design</td>
                                                <td>UI Team</td>
                                                <td>
                                                    <span class="status purple"></span>
                                                        Review
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Web development</td>
                                                <td>Frontend</td>
                                                <td>
                                                    <span class="status pink"></span>
                                                        in progress
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ushop app</td>
                                                <td>Mobile Team</td>
                                                <td>
                                                    <span class="status orange"></span>
                                                        pending
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>UI/UX Design</td>
                                                <td>UI Team</td>
                                                <td>
                                                    <span class="status purple"></span>
                                                        Review
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Web development</td>
                                                <td>Frontend</td>
                                                <td>
                                                    <span class="status pink"></span>
                                                        in progress
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ushop app</td>
                                                <td>Mobile Team</td>
                                                <td>
                                                    <span class="status orange"></span>
                                                        pending
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>UI/UX Design</td>
                                                <td>UI Team</td>
                                                <td>
                                                    <span class="status purple"></span>
                                                        Review
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Web development</td>
                                                <td>Frontend</td>
                                                <td>
                                                    <span class="status pink"></span>
                                                        in progress
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ushop app</td>
                                                <td>Mobile Team</td>
                                                <td>
                                                    <span class="status orange"></span>
                                                        pending
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="customers">
                        <div class="card">
                            <div class="card-header">
                                <h3>New customer</h3>
                                <button>See all <span class="las la-arrow-right">
                                </span></button>
                            </div>

                            <div class="card-body">
                                <div class="customer">
                                    <div class="info">
                                        <img src="/template/admin/dist/img/Admin.jpg" width="40px" height="40px">
                                        <div>
                                            <h4>Le Van Quoc Huy</h4>
                                            <small>CEO Expert</small>
                                        </div>
                                    </div>
                                    <div class="contact"> 
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>

                                <div class="customer">
                                    <div class="info">
                                        <img src="/template/admin/dist/img/Admin.jpg" width="40px" height="40px">
                                        <div>
                                            <h4>Le Van Quoc Huy</h4>
                                            <small>CEO Expert</small>
                                        </div>
                                    </div>
                                    <div class="contact"> 
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>

                                <div class="customer">
                                    <div class="info">
                                        <img src="/template/admin/dist/img/Admin.jpg" width="40px" height="40px">
                                        <div>
                                            <h4>Le Van Quoc Huy</h4>
                                            <small>CEO Expert</small>
                                        </div>
                                    </div>
                                    <div class="contact"> 
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>

                                <div class="customer">
                                    <div class="info">
                                        <img src="/template/admin/dist/img/Admin.jpg" width="40px" height="40px">
                                        <div>
                                            <h4>Le Van Quoc Huy</h4>
                                            <small>CEO Expert</small>
                                        </div>
                                    </div>
                                    <div class="contact"> 
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>

                                <div class="customer">
                                    <div class="info">
                                        <img src="/template/admin/dist/img/Admin.jpg" width="40px" height="40px">
                                        <div>
                                            <h4>Le Van Quoc Huy</h4>
                                            <small>CEO Expert</small>
                                        </div>
                                    </div>
                                    <div class="contact"> 
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
    </html>
@endsection