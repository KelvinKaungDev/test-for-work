import axios from 'axios'
import donationImg from '../../../../public/img/donation.jpg'

export default {
    name : 'Register',
    data () {
        return {
            donationImg : donationImg,
            errorStatus: false,
            userData   : {
                name      : '',
                age       : '',
                email     : '',
                blood_type: '',
            },
        }
    },
    methods: {
        registerToDonate () {
            axios.post('http://127.0.0.1:8000/api/donation-register', this.userData)
            .then(response => {
                if(response.data.result == false)
                {
                    this.errorStatus = true
                } else {
                    this.$router.push('donation-history');
                }
            })
            .catch(error => {
                this.errorStatus = true
            })
        }
    }
}
