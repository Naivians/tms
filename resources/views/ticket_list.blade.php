<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ITSM - DASHBOARD</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    </head>
    <body>
        <div class="container">
            <div class="panel" id="filter">
                <form action="" method="get">
                    <table>
                        <tr>
                            <td class="filter-label"><label for="status">Status:</label></td>
                            <td>
                                <select id="status">
                                    <option>Open</option>
                                    <option>In Progress</option>
                                    <option>Completed</option>
                                    <option>Resolved</option>
                                    <option>On Hold</option>
                                </select>
                            </td>
                            <td class="filter-label"><label for="assigned-to">Assigned To:</label></td>
                            <td>
                                <select id="assigned-to">
                                    <option>None</option>
                                </select>
                            </td>
                            <td class="filter-label"><label for="type">Ticket Type:</label></td>
                            <td>
                                <select id="type">
                                    <option>All</option>
                                    <option>Incident</option>
                                    <option>Request</option>
                                    <option>Change</option>
                                </select>
                            </td>
                            <td class="filter-label"><label for="category">Category:</label></td>
                            <td>
                                <select id="category">
                                    <option>All</option>
                                    <option>Hardware</option>
                                    <option>Software</option>
                                    <option>Network</option>
                                    <option>Access</option>
                                    <option>Miscellaneous</option>
                                </select>
                            </td>
                            <td class="filter-label"><input class="button" type="submit" id="go" value="Go"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="panel">
                <table class="full-width" id="support-tickets-table">
                    <thead>
                        <tr>
                            <th>SLA</th>
                            <th>Ticket Number</th>
                            <th>Date Opened</th>
                            <th>Opened By</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Assigned To</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- <script src="scripts/ticketlist-controller.js"></script> -->
    </body>
</html>
