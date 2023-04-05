import {defineStore} from "pinia";

export const useAuthUserStore = defineStore('authUserStore', {
    state: () => {
       return {
            firstName: '',
            lastName: '',
            userId:12
       }
    },
    getters: {
        fullName: (state) => `${state.firstName} ${state.lastName}`,
        loggedIn: (state) => state.userId !== null,
    },
    /*actions: {
        // no context as first argument, use `this` instead
        async loadUser (id) {
            if (this.userId !== null) throw new Error('Already logged in')
            const res = await api.user.load(id)
            this.updateUser(res)
        },
        // mutations can now become actions, instead of `state` as first argument use `this`
        updateUser (payload) {
            this.firstName = payload.firstName
            this.lastName = payload.lastName
            this.userId = payload.userId
        },
        // easily reset state using `$reset`
        clearUser () {
            this.$reset()
        }
    }*/
})
