<script>
import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'

export default {
    name: 'app',
    props: {
        user: {
            type: Object,
            default: null
        }
    },
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
            },
            image: null,
            imagePreview: null,
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
    created() {
        if(this.user) {
            this.formData.first_name = this.user.first_name
            this.formData.last_name = this.user.last_name
            this.formData.phone = this.user.phone
            this.formData.email = this.user.email
            this.imagePreview = this.user.image
        }
    },
    methods: {

        getFile(file) {
            this.image = file
        },

        removedFile(file, error, xhr) {
            this.image = null
        },

        async removeImage() {
             try {
                this.loading = true

                let res = await axios.get('/user/profile/image/remove')

                if(res.data.success) {
                    await new Noty({
                        text: 'Successfully removed image',
                        type: 'success',
                        layout: 'topRight',
                        timeout: 3000,
                        animation: {
                            open: 'animated bounceInRight', 
                            close: 'animated bounceOutRight'
                        }
                    }).show()
                    
                    this.imagePreview = null
                }
            } catch (e) {
                this.errors = e.response.data
                new Noty({
                    text: 'Can\'t remove your profile image',
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
        },

        async onSubmit() {
            this.errors = null
            try {
                this.loading = true
                let data = new FormData();
                for(let key in this.formData){
                    data.append(key, this.formData[key])
                }

                if(this.image){
                    data.append('profile', this.image);
                }

                let res = await axios.post('/users', data)

                if(res.data.success) {
                    await new Noty({
                        text: 'Successfully update your profile',
                        type: 'success',
                        layout: 'topRight',
                        timeout: 3000,
                        animation: {
                            open: 'animated bounceInRight', 
                            close: 'animated bounceOutRight'
                        }
                    }).show()
                    location.href = '/users/'+ res.data.user.id +'/edit'
                }
            } catch (e) {
                this.errors = e.response.data
                new Noty({
                    text: 'Can\'t udpate your profile',
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
        },

        async onUpdate() {
            this.errors = null
            try {
                this.loading = true
                let data = new FormData();
                for(let key in this.formData){
                    data.append(key, this.formData[key])
                }

                if(this.image){
                    data.append('profile', this.image);
                }

                data.append('_method', 'PUT');

                let res = await axios.post('/users/' + this.user.id, data)

                if(res.data.success) {
                    await new Noty({
                        text: 'Successfully update user',
                        type: 'success',
                        layout: 'topRight',
                        timeout: 3000,
                        animation: {
                            open: 'animated bounceInRight', 
                            close: 'animated bounceOutRight'
                        }
                    }).show()
                }
            } catch (e) {
                this.errors = e.response.data

                new Noty({
                    text: 'Can\'t create user',
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