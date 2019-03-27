<template>
    <div>
        <form autocomplete="off"
              @keydown="submitted = false"
              @submit.prevent="contactForm">
            <div class="form-group">
                <input v-bind:class="[errors.name ? 'is-invalid' : '', 'form-control']"
                       type="text"
                       name="name"
                       placeholder="Type Your Name"
                       v-model="form.name"
                       @keydown="delete errors.name">
                <span class="invalid-feedback"
                      v-text="errors.name[0]"
                      v-if="errors.name"></span>
            </div>

            <div class="form-group">
                <input v-bind:class="[errors.email ? 'is-invalid' : '', 'form-control']"
                       type="text"
                       name="email"
                       placeholder="Type Your Email"
                       v-model="form.email"
                       @keydown="delete errors.email">
                <span class="invalid-feedback"
                      v-text="errors.email[0]"
                      v-if="errors.email"></span>
            </div>

            <div class="form-group">
                <textarea v-bind:class="[errors.question ? 'is-invalid' : '', 'form-control']"
                          v-model="form.question"
                          rows="5"
                          placeholder="Type your question here"
                          name="question"
                          v-on:keydown="delete errors.question">
                </textarea>
                <span class="invalid-feedback"
                      v-text="errors.question[0]"
                      v-if="errors.question"
                ></span>
            </div>

            <div class="form-group">
                <a href="#" class="btn btn-secondary" v-on:click.prevent="cancel">Cancel</a>
                <button type="button" class="btn btn-success" :disabled="submitted" v-on:click="contactForm()">Send</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    name: this.name,
                    email: this.email,
                    question: this.question,
                },
                submitted: false,
                errors: {},
            }
        },

        methods: {
            cancel() {
                this.resetForm();
            },

            contactForm() {
                this.submitted = true;

                axios.post('/form', this.form)
                    .then(() => {
                        this.cancel();
                    })
                    .catch(errors => {
                        this.errors = errors.response.data.errors;
                    });
            },

            resetForm() {
                this.form = {};
                this.errors = {};
                this.submitted = false;
            }
        }
    }
</script>
