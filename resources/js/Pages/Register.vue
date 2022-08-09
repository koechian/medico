<script setup>
import imagePath from "@/resources/images/login.png";
</script>

<template>
    <div class="wrapper">
        <div class="left">
            <div class="header">
                <span id="title"> •medico</span>
            </div>
            <div class="content">
                <h2>Account Creation</h2>
                <h4>Create an Account to use the platform</h4>
                <div class="forms">
                    <label for="name"><strong>Name:</strong></label
                    ><br /><br />
                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Enter your full name"
                    /><br /><br />

                    <select name="dept" id="dept">
                        <option value="1">Reception</option>
                        <option value="2">Nursing</option>
                        <option value="3">Treatment</option>
                        <option value="4">Labs</option>
                        <option value="5">Optical</option>
                        <option value="6">Radiology</option>
                    </select>
                    <br /><br />
                    <label for="email"><strong>Email:</strong></label
                    ><br /><br />
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Enter your email"
                    /><br /><br />
                    <label for="password"><strong>Password:</strong></label
                    ><br /><br />
                    <input
                        type="password"
                        name="password"
                        id="password"
                    /><br /><br />
                    <label for="confirm-password"
                        ><strong>Confim Password:</strong></label
                    ><br /><br />
                    <input
                        type="password"
                        name="confirm-password"
                        id="confirm-password"
                    /><br /><br />
                    <button>Register Account</button>
                </div>
                <div class="register">
                    <p>
                        Already have an Account?
                        <span class="links"
                            ><Link href="/login">Login</Link></span
                        >
                    </p>
                </div>
            </div>
            <div class="footer"></div>
        </div>
        <div
            :style="{ backgroundImage: 'url(${imagePath})' }"
            class="right"
        ></div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    name: "Login",
    data() {
        return {};
    },
    components: {
        Link,
    },
    created() {},
    methods: {},
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
select {
    width: 73%;
    padding: 10px;
    border: none;
    background-color: transparent;
    border-bottom: solid rgb(62, 62, 62) 2px;
}
</style>
