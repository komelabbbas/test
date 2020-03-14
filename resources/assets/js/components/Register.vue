<script>
import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'

export default {
    name: 'app',
    components: {
        vueDropzone: vue2Dropzone
    },
    data () {
        return {
            formData: {
                first_name: '',
                last_name: '',
                phone: '',
                email: '',
                password: '',
                password_confirmation: '',
            },
            image: null,
            dropzoneOptions: {
                url: '/#',
                thumbnailWidth: 150,
                autoProcessQueue : false,
                addRemoveLinks: true,
                uploadprogress: false,
                maxFiles: 1,
                maxFilesize: 2,
                headers: { "My-Awesome-Header": "header value" }
            },
            loading: false,
            errors: []
        }
    },
    methods: {
        getFile(file) {
            this.image = file
        },
        removedFile(file, error, xhr) {
            this.image = null
        },
        async onSubmit() {
            this.errors = null
            try {
                this.loading = true
                let data = new FormData();
                for(let key in this.formData){
                    data.append(key, this.formData[key])
                }
                data.append('profile', this.image);

                let res = await axios.post('/register', data)

                if(res.data.success) {
                    await new Noty({
                        text: 'Successfully register! Email verification link sent in your mail.',
                        type: 'success',
                        layout: 'topRight',
                        timeout: 3000,
                        animation: {
                            open: 'animated bounceInRight', 
                            close: 'animated bounceOutRight'
                        }
                    }).show()
                    location.reload()
                    this.formData = {
                        first_name: '',
                        last_name: '',
                        phone: '',
                        email: '',
                        password: '',
                        password_confirmation: '',
                    }
                    this.image = ''
                   
                }
            } catch (e) {
                this.errors = e.response.data
                new Noty({
                    text: 'Can\'t register user',
                    type: 'error',
                    layout: 'topRight',
                    timeout: 3000,
                    animation: {
                        open: 'animated bounceInRight', 
                        close: 'animated bounceOutRight'
                    }
                }).show()
            } finally {
                this.loading = false
            }
        }
    },
}
</script>
<style> 
.dz-progress {
    display: none;
}
.dropzone.dz-clickable, 
.dz-image {
    display: flex !important;
    justify-content: center !important;
}

</style>