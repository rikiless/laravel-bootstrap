<template>
    <div>
        <form autocomplete="off"
              @keydown="submitted = false"
              @submit.prevent="contactForm">
            <div class="row mb-3">
                <label for="inputName" class="col-sm-3 col-form-label text-sm-right">Name</label>
                <div class="col-sm">
                    <input v-bind:class="[errors.name ? 'is-invalid' : '', 'form-control']"
                           type="text"
                           name="name"
                           id="inputName"
                           placeholder="Type Your Name"
                           v-model="form.name"
                           @keydown="delete errors.name">
                    <div class="invalid-feedback"
                          v-text="errors.name[0]"
                          v-if="errors.name"></div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-3 col-form-label text-sm-right">Email</label>
                <div class="col-sm">
                    <input v-bind:class="[errors.email ? 'is-invalid' : '', 'form-control']"
                           type="text"
                           name="email"
                           id="inputEmail"
                           placeholder="Type Your Email"
                           v-model="form.email"
                           @keydown="delete errors.email">
                    <div class="invalid-feedback"
                          v-text="errors.email[0]"
                          v-if="errors.email"></div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputQuestion" class="col-sm-3 col-form-label text-sm-right">Question</label>
                <div class="col-sm">
                    <textarea v-bind:class="[errors.question ? 'is-invalid' : '', 'form-control']"
                              v-model="form.question"
                              rows="5"
                              placeholder="Type your question here"
                              name="question"
                              id="inputQuestion"
                              v-on:keydown="delete errors.question"></textarea>
                    <div class="invalid-feedback"
                          v-text="errors.question[0]"
                          v-if="errors.question"
                    ></div>
                </div>
            </div>

            <div class="row mb-0">
                <div class="offset-sm-3 col-sm">
                    <a href="#" class="btn btn-secondary" v-on:click.prevent="cancel">Cancel</a>
                    <button type="button" class="btn btn-success" :disabled="submitted" v-on:click="contactForm()">Send</button>
                </div>
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
