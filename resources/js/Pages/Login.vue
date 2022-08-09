<template>
    <div class="left">
        <div class="header">
            <span> Medico Dashboard</span>
        </div>
        <div class="content">
            <h2>Welcome Back</h2>
            <h4>Please login to continue</h4>
            <div class="forms">
                <label for="email">Email:</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Enter your email"
                /><br /><br />
                <label for="password">Password:</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                /><br /><br />
                <button>Sign In</button>
            </div>
            <div>
                <p>
                    New Employee<router-link to="/register"
                        >Sign Up.</router-link
                    >
                </p>
            </div>
        </div>
        <div class="footer">
            <span>2022 Ian</span>
        </div>
    </div>
</template>

<script>
export default {
    name: "Login",
    data() {
        return {
            //
        };
    },
    created() {},
    methods: {},
};
</script>

<style scoped>
.footer,
.header,
.content {
    width: 100%;
}
.footer,
.header {
    height: 10vh;
    outline: green dotted 2px;
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
    outline: red dotted 2px;
    display: flex;
    flex-direction: column;
}
input {
    padding: 10px;
    border: none;
    border-bottom: 2px solid rgb(144, 144, 144);
}
input::placeholder {
    font-size: 18px;
}
</style>
