import {defineStore} from "pinia";

export const useNgoStore = defineStore('ngoStore', {
    state: () => {
        return {
            ngos: [],
        }
    },
    getters: {

    },
    actions: {
        setNgos(ngos) {
            this.ngos = ngos;
        }
    }
})
