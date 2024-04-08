<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT TICKETING SERVICE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
</head>
<body>
    <div class="container">
        <h1 id="ticket-type-title" style="text-align: center;">OPEN A REQUEST</h1>
        <div class="box-border">
            <form action="" method="post">
                <table>
                    <tr>
                        <td colspan="2">USER INFORMATION</td>
                    </tr>
                    <tr>
                        <td class="input-label">Date</td>
                        <td class="input-data"><p id="date"></p></td>
                    </tr>
                    <tr>
                        <td class="input-label"><span>*</span><span id="requestor-label" class="dynamic-span">Requestor</span></td>
                        <td class="input-data">
                            <input type="radio" name="affected" id="myself" checked>
                            <label for="myself" class="radiobutton-label">Myself</label>
                            <input type="radio" name="affected" id="other">
                            <label for="other" class="radiobutton-label">Other</label>
                        </td>
                    </tr>
                    <tr class="hidden" id="affected-user-textbox">
                        <td class="input-label"><span>*</span><span id="affected-user-label" class="dynamic-span">Requestor Name</span></td>
                        <td class="input-data"><input class="textbox" type="text" name="affected-user-name" id="affected-user-name" placeholder="Requestor Name"></td>
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
                        <td class="input-label"><label for="company">Company</td>
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
                        <td colspan="2" id="ticket-info"><br/>REQUEST INFORMATION</td>
                    </tr>
                    <tr>
                        <td class="input-label"><label for="category"><span>*</span>Category</td>
                        <td class="input-data">
                            <select id="category">
                                <option>-</option>
                                <option>Hardware</option>
                                <option>Software</option>
                                <option>Network</option>
                                <option>Access</option>
                                <option>Other</option>
                            </select>
                        </td>
                    </tr>
                    <tr id="sub-cat">
                        <td class="input-label"><label for="sub-category"><span>*</span>Sub-Category</td>
                        <td class="input-data">
                            <select id="sub-category">
                                <option>-</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="input-label"><label for="description"><span>*</span>Description</td>
                        <td class="input-data"><textarea class="textbox" id="description" maxlength="300" oninput="updateChars()"></textarea></td>
                    </tr>
                    <tr>
                        <td class="input-label"></td>
                        <td class="input-data"><span id="chars">300 characters remaining.</span></td>
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
    <script src="scripts/ticket-controller.js"></script>
</body>
</html>
