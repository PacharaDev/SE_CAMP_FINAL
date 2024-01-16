<html>
    <head>
        <meta charset= "utf-8">
    </head>
    <body>
        <div class= "box">
        <div>
            <h1>กรอกแม่สูตรคูณที่ต้องการ
                <center>
                    <form method = "post" action="/my=rount">
                        @csrf
                        <input type="text" name="myinput">
                        <button type="submit">Submit</button>
                    </form>

                </center>
            </h1>
        </div>
    </body>
</html>
