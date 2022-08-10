<template>
    <div class="wrapper">
        <div class="left">
            <div class="header">
                <span id="title"> •medico</span>
            </div>
            <div class="content">
                <h2>Welcome Back</h2>
                <h4>Please login to continue</h4>
                <div class="error">
                    <span id="error"> Login Failed for x and y reason </span>
                </div>
                <div class="loginmsg">
                    <span id="loginmsg"> Login Successful</span>
                </div>
                <div class="forms" @submit.prevent="handleLogin">
                    <form action="#">
                        <label for="email"><strong>Email:</strong></label
                        ><br /><br />
                        <input
                            class="inputs"
                            v-model="formData.email"
                            type="email"
                            name="email"
                            id="email"
                            placeholder="Enter your email"
                        /><br /><br />
                        <label for="password"><strong>Password:</strong></label
                        ><br /><br />
                        <input
                            class="inputs"
                            v-model="formData.password"
                            type="password"
                            name="password"
                            id="password"
                        /><br /><br />
                        <button type="submit">Sign In</button>
                    </form>
                </div>
                <div class="register">
                    <p>
                        New employee?
                        <span class="links"
                            ><Link href="/register">Register</Link></span
                        >
                    </p>
                </div>
            </div>
            <div class="footer"></div>
        </div>
        <div class="right"></div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import axios from "axios";
export default {
    name: "Login",
    data() {
        return {
            formData: {
                email: "",
                password: "",
            },
        };
    },
    components: {
        Link,
    },
    created() {},
    methods: {
        handleLogin() {
            var inputs = document.getElementsByClassName("inputs");
            var error = document.getElementsByClassName("error");
            var message = document.getElementsByClassName("loginmsg");
            axios.get("sanctum/csrf-cookie").then((response) => {
                axios
                    .post("/api/auth/login", this.formData)
                    .then((response) => {
                        if (response.status == 200) {
                            message.style.display = "flex !important";
                            inputs[0].classList.add("success");
                            inputs[1].classList.add("success");
                            setTimeout(function () {
                                console.log("heh");
                                window.location.href = "/dashboard";
                            }, 1000);
                        }
                    })
                    .catch((err) => {
                        if (err.response.status == 401) {
                            error[0].style.display = "flex";
                            inputs[0].classList.add("fail");
                            inputs[1].classList.add("fail");
                            document.getElementById("error").innerHTML =
                                err.response.data.message;
                        }
                    });
            });
        },
        logout() {
            axios.post("/api/auth/logout", {}, { withCredentials: true });
        },
    },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Cabin&display=swap");

.wrapper {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: row;
}
.footer,
.header,
.content {
    width: 100%;
}
.footer,
.header {
    height: 10vh;
}
.left {
    height: 100vh;
    width: 50vw;
}
.content {
    margin-left: 50%;
    transform: translateX(-50%);
    width: 500px;
    height: 70%;
    display: flex;
    flex-direction: column;
}
input {
    width: 70%;
    padding: 10px;
    border: 2x gray solid;
    border-radius: 6px;
    transition: ease-in 0.3s;
}
input::placeholder {
    font-size: 18px;
}
input:hover {
    outline: 2px orange solid;
}
.forms {
    margin-top: 50px;
}
button {
    margin-top: 20px;
    display: flex;
    width: 73%;
    background: blueviolet;
    padding: 20px;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
    color: white;
    transition: ease 0.3s;
    border: none;
}
button:hover {
    transform: scale(1.05);
    background-color: purple;
    cursor: pointer;
}
h2 {
    font-size: 2em;
    color: rgb(35, 35, 35);
}
h4 {
    margin-top: -20px;
    font-size: 1.1em;
    color: rgb(118, 118, 118);
}
.register {
    margin-top: 20px;
}

#title {
    font-family: "Cabin Sans Serif", serif;
    font-size: 1.5em;
}
.header {
    padding: 20px;
    padding-left: 40px;
}
.right {
    height: 100vh;
    width: 50vw;
    background-position: center;
    outline: green dotted 3px;
}
.success {
    border: 2px solid rgb(132, 242, 132);
}
.fail {
    border: 2px solid rgb(200, 33, 17);
}
.error,
.loginmsg {
    width: 70%;
    height: 10%;
    border-radius: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: black;
    display: none;
    transition: ease 0.4s;
}
.error {
    outline: rgba(215, 60, 60, 0.903) solid 4px;
    background-color: rgba(255, 38, 38, 0.469);
}
.loginmsg {
    outline: 24x solid rgb(1, 120, 1);
    background-color: rgba(71, 250, 27, 0.704);
}
</style>
