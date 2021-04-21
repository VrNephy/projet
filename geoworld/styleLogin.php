<style>
       body{
    margin: 0;
    padding: 0;
    background: url(images/pic3.png) no-repeat;
    background-size: cover;
    font-family: sans-serif;
}

.logo {
    width: 320px;
    height: 320px;
    margin: 0;
    padding: 70px 50px;
    position: absolute;
    top: 15%;
    left: 53.5%;
    box-sizing: border-box;
    transform: translate(-50%,-50%);
}

button {
    margin-left: 20px;
    padding: 9px 25px;
    background-color: rgba(251, 37, 37);
    border: none;
    border-radius: 50px;
    cursor : pointer ;
    transition: all 0.3s ease 0s;
}

button:hover {
    background-color: rgba(7, 238, 255);
    color: #000;
}


.loginbox{
    width: 320px;
    height: 350px;
    background: #292A2B ;
    /*opacity: 1;*/
    color: #fff;
    top: 45%;
    left: 50%;
    position: absolute;
    transform: translate(-30%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

.login-button {
    color: #fff;
    background: #55a1ff;
    border: 0;
    outline: 0;
    width: 100%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
}

.login-input {
    font-size: 15px;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 25px;
    height: 25px;
    width: calc(100% - 23px);
}

.avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p { 
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input {
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}

.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}

.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #07eeff;
    color: #000;
}

.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color:#fff;
}

.loginbox a:hover
{
    color: #07eeff;
}
.link {
    color: #fff;
    font-size: 15px;
    text-align: center;
    margin-bottom: 0px;
}

.link a {
    color: #fff;
}

h3 {
    font-weight: normal;
    text-align: center;
}

         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h2{
            text-align: center;
            color: #017572;
         }
      </style>