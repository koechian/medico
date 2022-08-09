<script>
export default {
    name: "newPatient",
    methods: {
        close() {
            this.$emit("close");
        },
    },
};
</script>

<template>
    <transition name="modal-fade">
        <div class="modal-backdrop">
            <div
                class="modal"
                role="dialog"
                aria-labelledby="modalTitle"
                aria-describedby="modalDescription"
            >
                <header class="modal-header" id="modalTitle">
                    <slot name="header"> Add a new Patient</slot>
                    <button
                        type="button"
                        class="btn-close"
                        @click="close"
                        aria-label="Close modal"
                    >
                        close
                    </button>
                </header>

                <section class="modal-body" id="modalDescription">
                    <slot name="body">
                        <div class="body-header">
                            <h3>Please provide the customer details</h3>
                        </div>
                        <div class="body-form">
                            <input placeholder="Firstname" type="text" />
                            <input placeholder="Lastname" type="text" />
                            <select name="dept" id="dept">
                                <option value="3">Radiology</option>
                                <option value="4">Optical</option>
                                <option value="5">General Treatment</option>
                                <option value="6">Labs</option>
                            </select>
                        </div>
                    </slot>
                </section>

                <footer class="modal-footer">
                    <button
                        type="button"
                        class="btn-sub"
                        @click="close"
                        aria-label="Close modal"
                    >
                        Checkin patient
                    </button>
                </footer>
            </div>
        </div>
    </transition>
</template>

<style>
.modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    margin-left: 50%;
    transform: translateX(-50%);
    border-radius: 50px;
    margin-top: 100px;
    background-color: rgba(0, 0, 0, 0.133);
    backdrop-filter: blur(3px);
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal {
    border-radius: 15px;
    width: 40vw;
    height: 70vh;
    background: #ffffff;
    box-shadow: 2px 2px 20px 1px;
    overflow-x: auto;
    display: flex;
    flex-direction: column;
}

.modal-header,
.modal-footer {
    padding: 15px;
    display: flex;
}

.modal-header {
    position: relative;
    display: flex;
    height: 10%;
    justify-content: center;
    align-items: center;
    border-bottom: 1px solid blueviolet;
    color: white;
    font-size: 1.1em;
}

.modal-footer {
    border-top: 1px solid #eeeeee;
    flex-direction: column;
}

.modal-body {
    position: relative;
    padding: 20px 10px;
}

.btn-close {
    position: absolute;
    top: 0;
    right: 0;
    border: none;
    font-size: 0.9em;
    padding: 10px;
    cursor: pointer;
    font-weight: bold;
    color: #373737;
    background: transparent;
    text-decoration: underline;
}

.modal-fade-enter,
.modal-fade-leave-to {
    opacity: 0;
}

.modal-fade-enter-active,
.modal-fade-leave-active {
    transition: opacity 0.5s ease;
}
.body-header {
    margin-left: 10%;
}
.body-form {
    margin-top: 10px;
    display: flex;
    flex-direction: column;
    margin-left: 255px;
}
.body-form input,
select {
    width: 50%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 7px;
    text-align: center;
}
select {
    border-bottom: #616161 2px solid;
}
.btn-sub {
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
    margin-left: 12%;
    transform: translateX(-50%);
}
.btn-sub {
    transform: scale(1.05);
    background-color: purple;
    cursor: pointer;
}
</style>
