import { createStore } from 'vuex'

const state = {
    user : {
        name : localStorage.getItem('name')
    }
}

export default createStore({
    state,
    mutations: {
        setUser(state, data) {
            localStorage.setItem('token', data.result.token)
            localStorage.setItem('name', data.result.user.name)
            state.name = data.result.user.name
        },
        removeUser(state) {
            localStorage.removeItem('token');
            localStorage.removeItem('name');
            state.user.name = null
        }
    },
    actions: {

    },
    getters: {
        user : state => state.user.name,
    }
})
