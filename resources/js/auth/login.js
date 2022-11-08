import axios from 'axios'
import LoginImg from '../../../public/img/login.jpg'
import store from '../store';

export default {
    name : 'Login',
    data () {
        return {
            LoginImg   : LoginImg,
            errorStatus: false,
            userData   : {
                email   : '',
                password: ''
            }
        }
    },
    methods: {
        async login () {
            const response = await axios.post('login', this.userData);
            store.commit('setUser', response.data)

            this.$router.push('/')
            window.location.reload();
        }
    }
}
