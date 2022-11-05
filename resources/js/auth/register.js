import axios from 'axios'
import RegisterImg from '../../../public/img/register.jpg'

export default {
    name : 'Register',
    data () {
        return {
            RegisterImg: RegisterImg,
            errorStatus: false,
            userData   : {
                name       : '',
                email      : '',
                password   : ''
            }
        }
    },
    methods: {
        async register () {
            await axios.post('register', this.userData);
            this.$router.push('/login')
        }
    }
}
