import {defineStore} from "pinia";
import axios from "axios";

export const useAuthUserStore = defineStore('authUserStore', {
    state: () => ({
        authUser: null,
        authErrors: [],
        authStatus: null,
    }),
    getters: {
        user: (state) => state.authUser,
        errors: (state) => state.authErrors,
        status: (state) => state.authStatus
    },
    actions: {
        async getToken() {
            await axios.get("/sanctum/csrf-cookie");
        },
        async getUser() {
            await this.getToken();
            const data = await axios.get("/api/user");
            this.authUser = data.data;
        },

        async setUser(data) {
            this.authErrors = [];
            await this.getToken();
            try {
                await axios.post("/login", {
                    email: data.email,
                    password: data.password,
                });
                localStorage.setItem('user', JSON.stringify(data));
                await this.router.push("/");
            } catch (error) {
                if(error){
                    this.authErrors = error.response.data.errors;
                }
            }
        },

        async handleLogin(data) {
            await this.setUser(data);
        },
        async handleLogout(){
            await axios.post("/logout");
            this.authUser = null;
            localStorage.removeItem('user');
            await this.router.push("/login");
        },
        async handleForgotPassword(email){
            this.authErrors = [];
            await this.getToken();
            try {
                const response = await axios.post("/forgot-password", {
                    email: email,
                });
                this.authStatus = response.data.status
            } catch (error){
                if(error) {
                    this.authErrors = error.response.data.errors;
                }
            }
        },
        async handleResetPassword(resetData){
            this.authErrors = [];
            try {
                const response = await axios.post("/reset-password", resetData);
                this.authStatus = response.data.status;
            } catch (error) {
                if(error){
                    this.authErrors = error.response.data.errors;
                }
            }
        }
    }

})
