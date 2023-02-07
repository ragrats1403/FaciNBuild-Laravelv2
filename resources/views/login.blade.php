<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/loginform.css') }}" > 
        <script type="text/javascript">
            function validation()  
                {  
                    var id=document.f1.user.value;  
                    var ps=document.f1.pass.value;  
                    if(id.length=="" && ps.length=="") {  
                        alert("User Name and Password fields are empty");  
                        return false;  
                    }  
                    else  
                    {  
                        if(id.length=="") {  
                            alert("User Name is empty");  
                            return false;  
                        }   
                        if (ps.length=="") {  
                        alert("Password field is empty");  
                        return false;  
                        }  
                    }                             
                } 
        </script>
    </head>
    <body>
        <div class="formContainer">
            <form name="f1" action="{{route('login.authenticated')}}" onsubmit="return validation()" method="POST">
                @csrf <!-- {{ csrf_field() }} -->
                <img class="imagecontainer" src='../images/Brown_logo_faci.png' />
                <hr />
                <div className="uiForm">
                    <div className="formField">
                        <label id="label">Username</label>
                        <input type="text" id="user" placeholder="Username" name="user" />
                    </div>
                    <div className="formField">
                        <label id="label">Password</label>
                        <input type="password" id="pass" placeholder="Password" name="pass" />
                    </div>
                    <button className="submitBtn">Login</button>
                </div>
            </form>
        </div>
    </body>
</html>



