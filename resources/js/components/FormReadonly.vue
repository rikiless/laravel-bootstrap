<template>
    <div class="card mb-4 shadow-sm">
        <h5 class="card-header">
            Readonly Plain Text
            <a href="#" v-if="! editing" @click.prevent="editing = true" class="float-right">
                <svg class="bi bi-pencil-square" width="1.125em" height="1.125em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
            </a>
            <a href="#" v-if="! editing" @click.prevent="editing = true" class="float-right pr-3">
                <svg class="bi bi-trash" width="1.125em" height="1.125em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg>
            </a>
        </h5>
        <div class="card-body">
            <form autocomplete="off">
                <div class="row mb-3">
                    <label for="inputName2" class="col-sm-3 col-form-label text-right">Name</label>
                    <div class="col-sm">
                        <input v-bind:class="[errors.name ? 'is-invalid' : '', editing ? 'form-control' : 'form-control-plaintext']"
                               v-bind:readonly="! editing"
                               type="text"
                               name="name"
                               id="inputName2"
                               placeholder="Type Your Name"
                               v-model="form.name">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail2" class="col-sm-3 col-form-label text-right">Email</label>
                    <div class="col-sm">
                        <input v-bind:class="[errors.name ? 'is-invalid' : '', editing ? 'form-control' : 'form-control-plaintext']"
                               v-bind:readonly="! editing"
                               type="text"
                               name="email"
                               id="inputEmail2"
                               placeholder="Type Your Email"
                               v-model="form.email">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputQuestion2" class="col-sm-3 col-form-label text-right">Question</label>
                    <div class="col-sm">
                            <textarea v-bind:class="[errors.name ? 'is-invalid' : '', editing ? 'form-control' : 'form-control-plaintext']"
                                      v-bind:readonly="! editing"
                                      v-bind:rows="editing ? 5 : 1"
                                      v-model="form.question"
                                      placeholder="Type your question here"
                                      name="question"
                                      id="inputQuestion2"></textarea>
                    </div>
                </div>

                <div class="row mb-0" v-if="editing">
                    <div class="offset-sm-3 col-sm">
                        <button type="button" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    name: 'John Doe',
                    email: 'john@doe.com',
                    question: 'I don\' have a question.',
                },
                editing: false,
                errors: {},
            }
        },

        methods: {
        }
    }
</script>
