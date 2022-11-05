import { createStore } from 'vuex'

export default createStore({
    state: {
        token : localStorage.getItem('userToken'),
        user : {
            name : localStorage.getItem('userName'),
            email: localStorage.getItem('userEmail')
        }
    },
    mutations: {
        setUserToken (state, token) {
            state.token = token
            localStorage.setItem('userToken', token)
        },
        setAuthUser (state, user) {
            state.user.name  = user.name,
            state.user.email = user.email

            localStorage.setItem('userName', user.name)
            localStorage.setItem('userEmail', user.email)
        },
    },
    actions: {
        deleteUserToken : (state) => state.token = localStorage.removeItem('userToken')
    },
    getters: {
        loginUser: (state) => state.token,
        authName : (state) => state.user.name
    }
})
