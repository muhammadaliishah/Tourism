<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Booking Details</title>
        <script type="text/javascript">
        function openNav() {
            document.getElementById("mySidenav").style.width = "150px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }


    </script>
    </head>
    <style>
    @charset "utf-8";
* {
    margin: 0;
    padding: 0;
}

body {
    background: #f9f9f9;
    font-family: "Lato", sans-serif;
}

#header {
    width: 100%;
    height: 50px;
    background: #00a2d1;
    color: #f9f9f9;
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    font-size: 35px;
    text-align: center;
}

#header a {
    color: #fff;
    text-decoration: blink;
}

#body {
    margin-top: 50px;
}

table {
    width: 80%;
    font-family: Tahoma, Geneva, sans-serif;
    font-weight: bolder;
    color: #999;
    margin-bottom: 80px;
}

table a {
    text-decoration: none;
    color: #00a2d1;
}

table,
td,
th {
    border-collapse: collapse;
    border: solid #d0d0d0 1px;
    padding: 20px;
}

table td input {
    width: 97%;
    height: 35px;
    border: dashed #00a2d1 1px;
    padding-left: 15px;
    font-family: Verdana, Geneva, sans-serif;
    box-shadow: 0px 0px 0px rgba(1, 0, 0, 0.2);
    outline: none;
}

table td input:focus {
    box-shadow: inset 1px 1px 1px rgba(1, 0, 0, 0.2);
    outline: none;
}

table td button {
    border: solid #f9f9f9 0px;
    box-shadow: 1px 1px 1px rgba(1, 0, 0, 0.2);
    outline: none;
    background: #00a2d1;
    padding: 9px 15px 9px 15px;
    color: #f9f9f9;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder;
    border-radius: 3px;
    width: 49.5%;
}

table td button:active {
    position: relative;
    top: 1px;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;

}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;

}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
    .sidenav {
        padding-top: 15px;
    }
    .sidenav a {
        font-size: 18px;
    }
}

</style>

    <body>
        <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/admin/queries">Queries</a>
        <a href="/admin">UserInfo</a>
        <a href="/admin/hotelinfo">Hotelinfo</a>
        <a href="/admin/addHotels">Addhotel</a>

    </div>
       
    

    <div id="header">
                <div id="content">
                    <label>Booking Details</label>
                    <a href="/logout" style="position: relative; left: 420px; color: black; top:5px;"><img src="{{url('images/Logout.png ')}}" style="height:35px; width:35px"></a>
                    <span style="font-size:30px;cursor:pointer;position:relative;right:900px " onclick="openNav() " >&#9776;</span>
                    
                </div>
            </div>
    
        <center>
            <form method="get">
                <div id="body">
                    <div id="content">
                        <table align="center">
                            <tr>
                            <th>Booking ID</th>
                            <th>Hotel ID</th>
                            <th>Hotel Name</th>
                            <th>Booked under user</th>
                            <th>Booked under name</th>
                            <th>Contact no</th>
                            <th>Number of booked rooms</th>
                            <th colspan="3">Operations</th>
                            </tr>
                            
        @foreach($bookinglist as $bookings)

                                <tr>
                                    <td align="center">
                                        {{$bookings->b_id}}
                                    </td>
                                    <td align="center">
                                        {{$bookings->h_id}}
                                    </td>
                                    <td align="center">
                                        {{$bookings->HotelName}}
                                    </td>
                                    <td align="center">
                                        {{$bookings->Booker}}
                                    </td>
                                    <td align="center">
                                        {{$bookings->Name}}
                                    </td>
                                    <td align="center">
                                        {{$bookings->ContactNo}}
                                    </td>
                                    <td align="center">
                                        {{$bookings->no_rooms}}
                                    </td>
                                    <td align="center">
                                        {{$bookings->Status}}
                                    </td>
                                     
                                    <td>
                                        <a href ="/admin/{{$bookings->b_id}}/bookingaccept">Accept</a>
                                    </td>   
                                    <td>
                                        <a href ="/admin/{{$bookings->b_id}}/bookingdelete">Delete</a>
                                    </td>


                                </tr>
        @endforeach
                        </table>
                
                    </div>
                </div>
        </center>
    </body>
    </form>

    </html>
