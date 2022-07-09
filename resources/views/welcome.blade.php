<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" href="https://cdn.statically.io/gh/ARSTCreations/domumcss/main/domum.min.css" />
        <script src="https://cdn.statically.io/gh/ARSTCreations/domumcss/main/domum.min.js"></script>
    </head>
    <style>
        table{
            border-collapse: collapse;
        }
        td, th {
            text-align: center;
            border: 1px solid #dddddd;
            padding: 8px;
        }
        .codeDiv{
            height: fit-content;
        }
    </style>
    <body>
        <div class="splashScreen">
            <h1 class="d0">IT'S WORKIIIIIIINGGGGGAAAAAAA!!!!!!!!</h1>
        </div> 
        <div class="alignCenter2">
            {{-- <h1 class="d0">Be prepared!</h1> --}}
            <div class="codeDiv alignCenter" style="margin-top: 4rem">
                <h2>What's next?</h2>
                <p>
                    idk, design the frontend, connect the backend, and then the database maybe?.
                </p>
                <h2>What?</h2>
                <p>
                    Yeah, I'm not sure....
                </p>
            </div>
            <h2>API Documentation</h2>
            <div style="margin-left:30vw; margin-right:30vw">
                <div>
                    {{-- LOGIN FIRST --}}
                    <p>
                        You'll need to login first to access the API. <br>
                        the token will be stored in the cookie, so you don't need to manually set the token. <br>
                        Is it safe? Totally! It's stored alongside the XSRF Token that is provided by Laravel. <br>
                        <div class="codeDiv alignCenter" style="margin-bottom: 3rem">
                            <b>Login</b> <br>
                            <br> <i class="redMarker">&nbsp;POST&nbsp;</i> https://simpeg-tubes.com/api/stable/auth/login?email=admin&amp;password=admin
                        </div>
                        Users available out-of-the-box: <br>
                    </p>
                        <code class="codeBlock">admin:admin and guest:guest</code>
                    <p>
                        if you want to make use of the API fully, <br>
                        then login as admin:admin as demonstrated. <br>
                        guest:guest user have no authorization <br>
                        to edit the data whatsoever
                    </p>

                    {{-- ACCESSING ALL DATAS --}}
                    <h3 style="margin-top: 4rem;">Showing all datas stored</h3>
                    <p>
                        All the datas are fetched from the Employees and Roles table which holds datas about the employees itself and the job titles corespondingly.
                        Make sure you are already logged in and have the token in the cookie before you access the API 
                        <div class="codeDiv alignCenter">
                            <b>Indexing</b> <br>
                            <br> <i class="limeMarker">&nbsp;GET&nbsp;</i> https://simpeg-tubes.com/api/stable/{employees|roles}/
                        </div>
                        <h4>Path and Endpoint</h4>
                        <table class="alignCenter">
                            <tr>
                                <th>api path endpoint</th>
                            </tr>
                            <tr>
                                <td>employees|roles</td>
                            </tr>
                        </table>
                    </p>

                    {{-- ACCESSING DATA BY ITS ID--}}
                    <h3 style="margin-top: 10rem;">Showing Data by ID</h3>
                    <p>
                        You can too, show a data by its specific ID.
                        <div class="codeDiv alignCenter">
                            <b>Indexing by ID</b> <br>
                            <br> <i class="redMarker">&nbsp;POST&nbsp;</i> https://simpeg-tubes.com/api/stable/{employees|roles}/{id}
                        </div>
                        <h4>Path and Endpoint</h4>
                        <table class="alignCenter">
                            <tr>
                                <th>api path endpoint</th>
                                <th>id (Employee ID)</th>
                            </tr>
                            <tr>
                                <td>employees|roles</td>
                                <td>Primary Key e.id (bigint)</td>
                            </tr>
                        </table>
                    </p>

                    {{-- STORING DATA--}}
                    <h3 style="margin-top: 10rem;">Store a fresh data via API</h3>
                    <p>
                        Create and store a row of data.
                        <div class="codeDiv alignCenter">
                            <b>Inserting Employee Into via API</b> <br>
                            <br> <i class="redMarker">&nbsp;POST&nbsp;</i> https://simpeg-tubes.com/api/stable/employees?role_id={role_id}&amp;first_name={firstname}&amp;last_name={lastname}}&amp;email={valid_email@mail.com}&amp;phone={0123456789}&amp;address={full_address}
                        </div>
                        <div class="codeDiv alignCenter" style="margin-top: 1rem">
                            <b>Inserting Role Into via API</b> <br>
                            <br> <i class="redMarker">&nbsp;POST&nbsp;</i> https://simpeg-tubes.com/api/stable/roles?role_title={role_title}&amp;role_decription={describe}
                        </div>
                        <h4>Employees: Key and Values</h4>
                        <table class="alignCenter">
                            <tr>
                                <th>role_id</th>
                                <th>first_name</th>
                                <th>last_name</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>address</th>
                            </tr>
                            <tr>
                                <td>foreign id (bigint)</td>
                                <td>255 varchar</td>
                                <td>255 varchar</td>
                                <td>255 varchar</td>
                                <td>255 varchar</td>
                                <td>255 varchar</td>
                            </tr>
                        </table>
                        <h4>Roles: Key and Values</h4>
                        <table class="alignCenter">
                            <tr>
                                <th>role_title</th>
                                <th>role_decription</th>
                            </tr>
                            <tr>
                                <td>255 varchar</td>
                                <td>255 varchar</td>
                            </tr>
                        </table>
                    </p>

                    {{-- UPDATING DATA--}}
                    <h3 style="margin-top: 10rem;">Updating a Row of Data by its ID</h3>
                    <p>
                        Updates and store a row of data.
                        <div class="codeDiv alignCenter">
                            <b>Updating an employee via API</b> <br>
                            <br> <i class="redMarker">&nbsp;POST&nbsp;</i> https://simpeg-tubes.com/api/stable/employees/{id}?role_id={role_id}&amp;first_name={firstname}&amp;last_name={lastname}}&amp;email={valid_email@mail.com}&amp;phone={0123456789}&amp;address={full_address}
                        </div>
                        <div class="codeDiv alignCenter" style="margin-top: 1rem">
                            <b>Updating a role via API</b> <br>
                            <br> <i class="redMarker">&nbsp;POST&nbsp;</i> https://simpeg-tubes.com/api/stable/roles?role_title={role_title}&amp;role_decription={describe}
                        </div>
                        <h4>Path and Endpoint</h4>
                        <table class="alignCenter">
                            <tr>
                                <th>api path endpoint</th>
                                <th>id (Employee ID)</th>
                            </tr>
                            <tr>
                                <td>employees|roles</td>
                                <td>Primary Key e.id (bigint)</td>
                            </tr>
                        </table>
                        <h4>Employees: Key and Values</h4>
                        <table class="alignCenter">
                            <tr>
                                <th>role_id</th>
                                <th>first_name</th>
                                <th>last_name</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>address</th>
                            </tr>
                            <tr>
                                <td>foreign id (bigint)</td>
                                <td>255 varchar</td>
                                <td>255 varchar</td>
                                <td>255 varchar</td>
                                <td>255 varchar</td>
                                <td>255 varchar</td>
                            </tr>
                        </table>
                        <h4>Roles: Key and Values</h4>
                        <table class="alignCenter">
                            <tr>
                                <th>role_title</th>
                                <th>role_decription</th>
                            </tr>
                            <tr>
                                <td>255 varchar</td>
                                <td>255 varchar</td>
                            </tr>
                        </table>
                    </p>

                    {{-- DELETING DATA--}}
                    <h3 style="margin-top: 10rem;">Deletes a Row of Data according to the ID</h3>
                    <p>
                        Deletes a row of data.
                        <div class="codeDiv alignCenter">
                            <b>Deleting via API</b> <br>
                            <br> <i class="pinkSMarker">&nbsp;DELETE&nbsp;</i> https://simpeg-tubes.com/api/stable/{employees|roles}/{id}
                        </div>
                        <h4>Path and Endpoint</h4>
                        <table class="alignCenter">
                            <tr>
                                <th>api path endpoint</th>
                                <th>id (Employee ID)</th>
                            </tr>
                            <tr>
                                <td>employees|roles</td>
                                <td>Primary Key e.id (bigint)</td>
                            </tr>
                        </table>
                    </p>

                    {{-- LOGOUT REGISTER AND ME --}}
                    <h3 style="margin-top: 10rem;">Logout, Register, and User Info</h3>
                    <p>
                        You need to logout, register, or check self profile for whatever reason?. <br>
                        here, let me help you with that!
                        <div class="codeDiv alignCenter" style="margin-bottom: 3rem">
                            <b>Logout (After Login Only!)</b> <br>
                            <br> <i class="redMarker">&nbsp;POST&nbsp;</i> https://simpeg-tubes.com/api/stable/auth/logout
                        </div>
                        <div class="codeDiv alignCenter" style="margin-bottom: 3rem">
                            <b>Me (After Login Only!)</b> <br>
                            <br> <i class="limeMarker">&nbsp;GET&nbsp;</i> https://simpeg-tubes.com/api/stable/auth/me
                        </div>
                        <div class="codeDiv alignCenter" style="margin-bottom: 3rem">
                            <b>Register</b> <br>
                            <br> <i class="redMarker">&nbsp;POST&nbsp;</i> https://simpeg-tubes.com/api/stable/auth/register?name={name}&amp;email={valid_email}&amp;password={password}
                        </div>
                    </p>
                </div>
            </div>
        </div>
        <div class="alignCenter2" style="margin-top: 45vh; margin-bottom:2rem">
            <p>
                Semangat ges!
                - Rizaldy
            </p>
        </div>
    </body>
</html>