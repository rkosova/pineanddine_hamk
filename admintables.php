<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/admin.css">
    <title>Admin - Tables</title>
</head>
<body>
    <?php include("./header_footer/header_black.php")?>

    <?php include("addTable.php")?>

    <div class="bdy", id="bdy">

        <table class="tables"> 
            <tr>
                <th>Table ID</th>
                <th># of Chairs</th>
                <th>Reserved</th>
            <tr>

            <?php include("./readTable.php")?>    
        </table>

        <div class="controls", id="controls"> 
            <button onClick="DBADD_Fun(this)" class="btdwn" id="add">Add a Table</button>
            <button onClick="DBRM_Fun(this)" class="btdwn" id="rm">Remove a Table</button>
            <button onClick="RVCL_Fun(this)" class="btdwn" id="cr">Cancel Reservation</button>
        </div>
        
    </div>

    <?php include("./header_footer/footer.php")?>

    <script type="text/javascript">
        let count = 0;
        let r_count = 0;
        let c_count = 0;

        // Create a break line
        let br = document.createElement("br");

        function DBADD_Fun(currentElement) {
            count++;
            if(count == 1) {

                // dynamic form
                let form = document.createElement("form");
                form.setAttribute("method", "post");
                form.setAttribute("action", "addTable.php");
                form.setAttribute("id", "dynFormA");
                form.setAttribute("style", "margin-top: 5%;margin-bottom:3%;text-align: center;");


                // input element for table chairs 
                let CHAIRS = document.createElement("input");
                CHAIRS.setAttribute("type", "number");
                CHAIRS.setAttribute("name", "chairs");
                CHAIRS.setAttribute("placeholder", "# of Chairs");


                // submit button
                let s = document.createElement("input");
                s.setAttribute("type", "submit");
                s.setAttribute("value", "Submit");
                s.setAttribute("style", "font-family: 'Playfair Display', serif;font-size: 1vw;letter-spacing: 0.05em;background-color: #353246;color:  white;margin-top: 5%;padding:  1%;width:  6vw;");


                // append elements to form 
                form.appendChild(CHAIRS);
                form.appendChild(br.cloneNode());
                form.appendChild(s);

                document.getElementById("controls").insertBefore(form, currentElement.nextSibling);
            }     
        }      

        function DBRM_Fun(currentElement) {
            r_count++;
            if(r_count == 1) {

                // dynamic form
                let form = document.createElement("form");
                form.setAttribute("method", "post");
                form.setAttribute("action", "removeTable.php");
                form.setAttribute("id", "dynFormC");
                form.setAttribute("style", "margin-top: 5%;text-align: center;");

                // input element for table chairs 
                let ID = document.createElement("input");
                ID.setAttribute("type", "number");
                ID.setAttribute("name", "chairs");
                ID.setAttribute("placeholder", "Table ID");


                // submit button
                let s = document.createElement("input");
                s.setAttribute("type", "submit");
                s.setAttribute("value", "Remove");
                s.setAttribute("style", "font-family: 'Playfair Display', serif;font-size: 1vw;letter-spacing: 0.05em;background-color: #353246;color:  white;margin-top: 5%;padding:  1%;width:  6vw;");


                // append elements to form 
                form.appendChild(ID);
                form.appendChild(br.cloneNode());
                form.appendChild(s);

                document.getElementById("controls").insertBefore(form, currentElement.nextSibling);
            } 
         }

        function RVCL_Fun(currentElement) {
            c_count++;
            if(c_count == 1) {

                // dynamic form
                let form = document.createElement("form");
                form.setAttribute("method", "post");
                form.setAttribute("action", "cancelReservation.php");
                form.setAttribute("id", "dynFormR");
                form.setAttribute("style", "margin-top: 5%;text-align: center;");

                // input element for table chairs 
                let ID = document.createElement("input");
                ID.setAttribute("type", "number");
                ID.setAttribute("name", "chairs");
                ID.setAttribute("placeholder", "Table ID");


                // submit button
                let s = document.createElement("input");
                s.setAttribute("type", "submit");
                s.setAttribute("value", "Remove");
                s.setAttribute("style", "font-family: 'Playfair Display', serif;font-size: 1vw;letter-spacing: 0.05em;background-color: #353246;color:  white;margin-top: 5%;padding:  1%;width:  6vw;");


                // append elements to form 
                form.appendChild(ID);
                form.appendChild(br.cloneNode());
                form.appendChild(s);

                document.getElementById("controls").insertBefore(form, currentElement.nextSibling);
            }
        }

    </script>
</body>
</html>