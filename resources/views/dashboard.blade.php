<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ITSM - DASHBOARD</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
    </head>
    <body>
        <div class="container">
            <div class="box-border">
                <div class="navigation">
                    <div class="name-div">
                        <h4 id="user-name"></h4>
                        <button class="control button-hover hidden" id="join-autoassign" onclick="">OPT-IN</button>
                        <button class="control button-hover" id="logout" onclick="logout()">LOGOUT</button>
                    </div>
                    <div class="items-div">
                        <ul>
                            <li class="hidden" id="dashboard">DASHBOARD
                                <ul>
                                    <li class="hover-text" id="overview">OVERVIEW</li>
                                    <li class="hover-text" id="generate-report">GENERATE REPORT</li>
                                </ul>
                            </li>
                            <li class="hidden" id="support-tickets">SUPPORT TICKETS
                                <ul>
                                    <li class="hover-text" id="open-tickets">OPEN TICKETS</li>
                                    <li class="hover-text" id="assigned-to-me">ASSIGNED TO ME</li>
                                    <li>
                                        <ul>
                                            <li class="hover-text" id="incidents-assigned-to-me">INCIDENTS</li>
                                            <li class="hover-text" id="requests-assigned-to-me">REQUESTS</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li id="my-tickets">MY TICKETS
                                <ul>
                                    <li class="hover-text" id="my-all">ALL TICKETS</li>
                                    <li class="hover-text" id="my-incidents">MY INCIDENTS</li>
                                    <li class="hover-text" id="my-requests">MY REQUESTS</li>
                                </ul>
                            </li>
                            <li id="open-ticket">OPEN A TICKET
                                <ul>
                                    <li class="hover-text" id="open-new">OPEN NEW</li>
                                    <li class="hover-text" id="new-incident">NEW INCIDENT</li>
                                    <li class="hover-text" id="new-request">NEW REQUEST</li>
                                    <li class="hidden hover-text" id="new-change">NEW CHANGE</li>
                                    <li class="hidden hover-text" id="new-id">NEW ID CREATION</li>
                                </ul>
                            </li>
                            <li class="hidden" id="admin">ADMIN
                                <ul>
                                    <li class="hover-text" id="edit-user">USERS</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="i-frame-div">
                    <iframe class="iframe-control" src="" id="iframe-content"></iframe>
                </div>
            </div>
        </div>
        <script src="scripts/dashboard-controller.js"></script>
    </body>
</html>
