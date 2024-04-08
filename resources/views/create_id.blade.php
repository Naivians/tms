<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ID CREATION FORM</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    </head>
    <body>
        <div class="container">
            <h1>ID CREATION FORM</h1>
            <div class="box-border">
                <form action="" method="post">
                    <table>
                        <tr>
                            <td colspan="2">EMPLOYEE INFORMATION</td>
                        </tr>
                        <tr>
                            <td class="input-label">Date:</td>
                            <td class="input-data"><p id="date"></p></td>
                        </tr>
                        <tr>
                            <td class="input-label"><span>*</span><label for="employee-number">Employee Number</label></td>
                            <td class="input-data"><input class="textbox" type="text" name="employee-number" id="employee-number" placeholder="Employee Number"></td>
                        </tr>
                        <tr>
                            <td class="input-label"><span>*</span><label for="employee-name">Employee Name</label></td>
                            <td class="input-data"><input class="textbox" type="text" name="employee-name" id="employee-name" placeholder="Employee Name"></td>
                        </tr>
                        <tr>
                            <td class="input-label"><label for="site-location"><span>*</span>Office Location</td>
                            <td class="input-data">
                                <select id="site-location">
                                    <option>-</option>
                                    <option>Bonifacio Global City</option>
                                    <option>Ortigas</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="input-label"><label for="company"><span>*</span>Company</td>
                            <td class="input-data">
                                <select id="company">
                                    <option>-</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="input-label"><label for="department">Department</td>
                            <td class="input-data">
                                <select id="department">
                                    <option>-</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="input-label"><label for="position">Position</td>
                            <td class="input-data"><input class="textbox" type="text" name="position" id="position" placeholder="Position"></td>
                        </tr>
                        <tr>
                            <td colspan="2">EMERGENCY CONTACT INFORMATION</td>
                        </tr>
                        <tr>
                            <td class="input-label"><span>*</span><label for="emergency-contact-name">Contact Name</label></td>
                            <td class="input-data"><input class="textbox" type="text" name="emergency-contact-name" id="emergency-contact-name" placeholder="Emergancy Contact Name"></td>
                        </tr>
                        <tr>
                            <td class="input-label"><label for="emergency-contact-number"><span>*</span>Contact Number</td>
                            <td class="input-data"><input class="textbox" type="text" name="emergency-contact-number" id="emergency-contact-number" placeholder="Contact Number"></td>
                        </tr>
                        <tr>
                            <td class="input-label"><label for="accesscard">Access Card</td>
                            <td class="input-data">
                                <input type="radio" name="accesscard" id="yes" checked>
                                <label for="yes" class="radiobutton-label">Yes</label>
                                <input type="radio" name="accesscard" id="no" checked>
                                <label for="no" class="radiobutton-label">No</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="input-label"><label for="employee-picture">Employee Picture</td>
                            <td class="input-data"><input type="file" id="employee-picture" accept="image/jpeg, image/png, image/gif"></td>
                        </tr>
                        <tr>
                            <td class="input-label"><label for="employee-signature">Employee Signature</td>
                            <td class="input-data"><input type="file" id="employee-signature" accept="image/jpeg, image/png, image/gif"></td>
                        </tr>
                        <tr>
                            <td class="input-label"></td>
                            <td class="input-data">
                                <span>*Required Fields</span><br/>
                                <input class="button" id="cancel" type="button" value="CANCEL" onclick="cancelAction()">
                                <input class="button" type="submit" name="submit" id="submit" value="OPEN TICKET">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <script src="scripts/date.js"></script>
        <!-- <script src="scripts/sitelocation-company-department.js"></script>
        <script src="scripts/cancel-open-ticket.js"></script> -->
    </body>
</html>
