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
            <h1 style="text-align: center;">OPEN A TICKET</h1>
            <div class="box-border hoverable">
                <a href="ticket.html?type=incident"> <!-- Pass incident as a query parameter -->
                    <div class="ticket-type-div">
                        <p class="ticket-type">INCIDENT</p>
                        <p>Select this if you are encountering an issue or if something is not working.</p>
                    </div>
                </a>
            </div>
            <div class="box-border hoverable">
                <a href="ticket.html?type=request"> <!-- Pass request as a query parameter -->
                    <div class="ticket-type-div">
                        <p class="ticket-type">SERVICE REQUEST</p>
                        <p>Select this if you need assistance with: Software Installation, License Activation, Printer Installation, or any other service requests.</p>
                        <p>For Desktop/Laptop or any other asset requests, please file the request via DingTalk.</p>
                    </div>
                </a>
            </div>
            <div class="box-border hoverable hidden" id="idcreationform">
                <a href="idcreationform.html">
                    <div class="ticket-type-div">
                        <p class="ticket-type">ID CREATION FORM</p>
                        <p>For HR Only. Select this to fill up the ID Creation Form.</p>
                    </div>
                </a>
            </div>
            <div class="box-border hoverable hidden" id="changemanagement">
                <a href="">
                    <div class="ticket-type-div">
                        <p class="ticket-type">CHANGE TICKET</p>
                        <p>For IT Only. Select this to create a Change Ticket.</p>
                    </div>
                </a>
            </div>
            <div class="reminder">
                <p class="ticket-type">REMINDER</p>
                <p>Please avoid spamming with repetitive or unnecessary messages. Spamming will lead to delay in response times. Your cooperation ensures assistance for all.</p>
            </div>
        </div>
        <script src="scripts/openticket-controller.js"></script>
    </body>
</html>
