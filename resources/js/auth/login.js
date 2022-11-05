import axios from 'axios'
import LoginImg from '../../../public/img/login.jpg'

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
            localStorage.setItem('token', response.data.token);
            this.$router.push('/')
        }
    }
}
